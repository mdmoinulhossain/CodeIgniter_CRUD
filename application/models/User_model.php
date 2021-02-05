<?php 

class User_model extends CI_model{

    function create($formArray){
       $this->db->insert('users', $formArray);      //insert into users(name, email) values(?,?);
    }

    function all(){
        return $users = $this->db->get('users')->result_array();        // show all record.
    }

}

?>