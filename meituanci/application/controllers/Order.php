<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function __construct()
    {
        parent::__construct();
        $this -> load -> model("product_model");
        $this -> load -> model("order_model");
        $this -> load -> model("comment_model");
    }

    public function order_detail($product_id){
        $userinfo = $this->session->userdata('userinfo');
        $user_id=$userinfo->user_id;
        $row=$this->product_model->get_product_by_id2($product_id);
        $row2=$this->order_model->get_order_by_user_id_and_product_id($user_id,$product_id);
        $order_id=$row2->order_id;
        $row3=$this->comment_model->get_comment_by_order_id($order_id);
        $this->load->view("order_detail",array('row'=>$row,'row2'=>$row2,'row3'=>$row3));
    }
    public function order_detail2($order_id){
        $row2=$this->order_model->get_order_by_order_id($order_id);
        $row=$this->product_model->get_product_by_id2($row2->product_id);
        $row3=$this->comment_model->get_comment_by_order_id($order_id);
        $this->load->view("order_detail",array('row'=>$row,'row2'=>$row2,'row3'=>$row3));
    }
}
