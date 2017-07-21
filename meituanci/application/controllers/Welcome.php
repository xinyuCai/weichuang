<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
        $this -> load -> model("comment_img_model");
    }
	public function index()
	{
        /*$results=$this->product_model->get_product();
        //根据product_id累计订单中各商品的数量
        //使用循环会多次连接数据库，耗资源
        //可以传入id数组，返回数组（并使其与product关联.........）
        id:[1,2,3]; -> like -> num:[5,0,3];
        foreach($results as $product)
        {
            $num=$this->order_model->get_count_by_product_id($product->product_id);
            $product->num= $num->num==null ? 0:$num->num;
        }*/
        $results=$this->product_model->get_product();
		$this->load->view('index',array('results'=>$results));
	}

    public function detail($product_id)
    {
        $results=$this->comment_model->get_comment($product_id);
        $avg=$this->comment_model->get_avg_score($product_id);

        foreach ($results as $res){
            $imgs = $this->comment_img_model->get_img($res->id);
            $res->imgs = $imgs;
        }

        $row = $this->product_model->get_product_by_id($product_id);
        $userinfo = $this->session->userdata('userinfo');
        if(empty($userinfo))
        {
            $row->collected="收藏";
        }
        else
        {
            $user_id = $userinfo -> user_id;
            $collect = $this->product_model->get_collect($user_id,$product_id);
            if($collect != null)
            {
                $row->collected="取消";
            }
            else $row->collected="收藏";
        }
        $this -> load -> view('detail',array('row'=>$row,'results'=>$results,'avg'=>$avg));
    }
}
