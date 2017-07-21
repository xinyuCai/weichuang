<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: cxy
 * Date: 2017/7/13
 * Time: 12:57
 */
class Order_model extends CI_Model
{
    public function get_order_by_user_id($user_id){
        $sql = "select order_id,product_name,price,num,order_price, num*order_price as total from t_order, t_product where t_order.product_id=t_product.product_id and t_order.user_id=".$user_id;
        return $this->db->query($sql)->result();
    }

    public function get_order_by_user_id_and_product_id($user_id,$product_id){
        $this->db->select('order.*,user.*,(num*order_price) total');
        $this->db->from('t_order order');
        $this->db->join('t_user user', 'order.user_id = user.user_id');
        $this->db->where('order.product_id',$product_id);
        $this->db->where('user.user_id',$user_id);
        $this->db->where('order.status',1);
        $query = $this->db->get();
        return $query->row();
    }

    public function get_order_by_order_id($order_id){
        $this->db->select('order.*,user.*,(num*order_price) total');
        $this->db->from('t_order order');
        $this->db->join('t_user user', 'order.user_id = user.user_id');
        $this->db->where('order.order_id',$order_id);
        $query = $this->db->get();
        return $query->row();
    }

    public function get_count_by_product_id($product_id)
    {
        /*$sql="select sum(num) num from t_order where product_id=$product_id";
        $query=$this->db->query($sql);
        return $query->row();*/
    }

    public function add_order($user_id,$product_id,$price,$num){
        $data = array(
            'user_id' => $user_id,
            'product_id' => $product_id,
            'order_price' => $price,
            'num'=> $num
        );
        $this->db->insert('t_order', $data);
        return $this->db->affected_rows();
    }

    public function update_order_by_id($order_id){
        $this->db->set('status', 0);
        $this->db->where('order_id', $order_id);
        $this->db->update('t_order');
    }
}