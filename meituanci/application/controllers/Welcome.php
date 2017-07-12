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
	public function index()
	{
		$this->load->view('index');
	}

    public function detail()
    {
        $this -> load -> view('detail');
    }

    public function login_page(){
        $this -> load -> view('login');
    }

    public function register_page(){
        $this -> load -> view('register');
    }

    public function login()
    {
        $username = $this -> input -> post("username");
        $password = $this -> input -> post("password");
        $this -> load -> model("user_model");
        $row = $this -> user_model -> get_by_username_password($username, $password);
        if($row){
            echo "登录成功";
        } else {
            redirect("welcome/login_page");
        }
    }
}
