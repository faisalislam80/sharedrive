<?php

class User extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function getUserDetails($id)
    {
        $query = $this->db->get_where('users',array('id'=>$id),1);
        return $userDetails = array(
            'id'        => $query->row()->id,
            'username'  => $query->row()->username,
            'email'     => $query->row()->email,
        );
    }

}