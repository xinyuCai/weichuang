<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment_model extends CI_Model
{
    public function get_comment($product_id){
        //avg(tc.score) avg_score,
        $this->db->select('tc.*,tu.username username');
        $this->db->from('t_comment tc');
        $this->db->join('t_user tu', 'tu.user_id = tc.user_id');
        $this->db->where('tc.product_id',$product_id);
        $query = $this->db->get();
        return $query->result();
    }
    public function get_avg_score($product_id){
        $sql="select avg(score) avg_score,count(product_id) num from t_comment where product_id = $product_id";
        return $this->db->query($sql)->row();
    }

    public function add_comment($product_id,$order_id,$score,$content,$user_id){
        $data = array(
            'user_id' => $user_id,
            'product_id' => $product_id,
            'order_id' => $order_id,
            'score' => $score,
            'content'=> $content
        );
        $this->db->insert('t_comment', $data);
        return $this->db->affected_rows();
    }

    public function get_comment_by_order_id($order_id){
        return $this->db->get_where('t_comment', array('order_id' => $order_id)) -> row();
    }
}