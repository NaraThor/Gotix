<?php

class model_auth extends CI_Model{

    // public function cek_login()
    // {
    //     $username = set_value('username');
    //     $password = set_value('password');

    //     $result = $this->db->where('username', $username)
    //                         ->where('password', $password)
    //                         ->limit(1)
    //                         ->get('register');
    //     if($result->num_rows() > 0){
    //         return $result->row();
    //     }else{
    //         return array();
    //     }
    // }

    public function cek_login2($username, $password)
    {
        $result = $this->db->where('username', $username)
                            ->where('password', $password)
                            ->limit(1)
                            ->get('register');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }
    }


    public function update($username, $data){
        $this->db->where("username", $username);
        $this->db->update("register",$data);
    }

    public function save($data)
    {
        $this->db->insert("register",$data);
    }
}