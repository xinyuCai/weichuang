<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/12
 * Time: 11:00
 */
class User extends CI_Controller
{
    /*构造函数*/
    public function __construct()
    {
        parent::__construct();
        $this -> load -> model("user_model");
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
        $row = $this -> user_model -> get_by_username_password($username, $password);
        if($row){
            echo "登录成功";
        }
        else
        {
            /*redirect("user/login_page");*/
            $data['error'] = "用户名或密码错误，请重新登陆！";
            $this -> load -> view('login',$data);
        }
    }
    public function register()
    {
        $username = $this -> input -> post("username");
        $password = $this -> input -> post("password");
        $row = $this -> user_model -> insert_user($username,$password);
        if($row > 0)
        {
            redirect("user/login_page");
        }
    }
    public function check_username(){
        $username = $this -> input -> post("username");
        $row = $this -> user_model -> check_username($username);
        if($row) echo "no";
        else echo "yes";
    }
}