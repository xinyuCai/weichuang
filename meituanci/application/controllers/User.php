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
    public function register()
    {
        $username = $this -> input -> post("username");
        $password = $this -> input -> post("password");
        $this -> load -> model("user_model");
        $row = $this -> user_model -> insert_user($username,$password);
        if($row > 0)
        {
            redirect("welcome/login_page");
        }
    }
    public function check_username(){
        $username = $this -> input -> post("username");
        $this -> load -> model("user_model");
        $row = $this -> user_model -> check_username($username);
        if($row) echo "no";
        else echo "yes";
    }
}