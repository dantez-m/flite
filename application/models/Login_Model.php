<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Login_Model extends CI_Model
{
    

    public function __construct()
    {
        parent::__construct();
    }

    function login($username, $password) { 
	  $this->db->where('phone', $username);
	  $this->db->where('password', md5($password));	  
	  $query = $this->db->get('driver');
	   if ($query->num_rows()>0) {
	   	
	  	return true;
	  } else {
		return false; 
	  }
	}

    public function reg($fname, $phone,$email,$pass){ 

	  $data = array('phone' =>$phone ,'email'=>$email ,'driver_name'=>$fname,'password'=>md5($pass));  
	  $this->db->insert('driver',$data);
	   if ($this->db->affected_rows()>0) {
	  	return true;
	  } else {
		return false; 
	  }
	}

}