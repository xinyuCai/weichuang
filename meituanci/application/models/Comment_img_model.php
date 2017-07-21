<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment_img_model extends CI_Model
{
    public function get_img($comment_id){
        $sql = "select * from t_comment_img where comment_id = $comment_id";
        return $this->db->query($sql)->result();
    }
}