<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Strip extends CI_Controller {

function __construct(){

		parent::__construct();
		$this->load->database();
		$this->load->library('encrypt');
		 $this->load->helper('url'); 
		 $this->load->helper('cookie');
         $this->load->library('session');
         $this->load->library('encrypt');
         $this->load->library('session');
        $this->load->model('Login_Model');
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('googlemaps');
         
  
	}
	public function save()
	{
		$lat=$this->input->post('lat');
			$lon=$this->input->post('lon');
			$user=$this->input->post('user');
			$client=$this->input->post('client');

			$this->db->where('driver',$user);
			$this->db->where('client',$client);
			$r=$this->db->get('started_trips')->row();
			if(!isset($r)){
				$data = array('sla' => $lat,'slo' => $lon,'driver' => $user,'client' =>$client  );
			}		
	}

}