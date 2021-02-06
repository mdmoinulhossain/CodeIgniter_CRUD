<?php 

class User_model extends CI_model{

    function create($formArray){
       $this->db->insert('users', $formArray);      //insert into users(name, email) values(?,?);
    }

    function all(){
        return $users = $this->db->get('users')->result_array();        // show all record.
    }

    function getUser($UserId){
        $this->db->where('user_id', $UserId);
        return $user = $this->db->get('users')->row_array();        // select * from users table where user_id = ?
    }

    function updateUser($UserId, $formArray){
        $this->db->where('user_id', $UserId);
        $this->db->update('users', $formArray);        // select * from users table where user_id = ? for update
    }

}

?>