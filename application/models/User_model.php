<?php

class User_model extends CI_Model
{
    private $_table = "users";

    public function doLogin(){
		$post = $this->input->post();

        // cari user berdasarkan email dan username
        $this->db->where('email', $post["email"]);
        
        $user = $this->db->get($this->_table)->row();

        // jika user terdaftar
        if($user){
            // periksa password-nya
            $isPasswordTrue = password_verify($post["password"], $user->password);

            // jika password benar
            if($isPasswordTrue){ 

                // login sukses yay!
                $this->session->set_userdata(['user_logged' => $user]);

                $this->_updateLastLogin($user->user_id);
                return true;
            }
        }
        
        // login gagal
		return false;
    }

    public function isNotLogin(){
        return $this->session->userdata('user_logged') === null;
    }

    private function _updateLastLogin($user_id){
        $sql = "UPDATE {$this->_table} SET last_login=now() WHERE user_id={$user_id}";
        $this->db->query($sql);
    }

    public function findByUserId($id) {
       return $this->db->get_where($this->_table, ["user_id" => $id])->row();
    }

}