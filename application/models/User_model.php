<?php 

class User_model extends CI_model{

    function create($formArray){
       $this->db->insert('users', $formArray);      //insert into users(name, email) values(?,?);
    }


}

?>