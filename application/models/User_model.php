<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

Class User_model extends CI_Model{

    public function checkLogin(){
        $username=$this->input->post('username',true);
        $password=$this->input->post('password',true);
        return $this->db->where('username',$username)->where('password',$password)
            ->get('tbl_user')->row();

    }
}