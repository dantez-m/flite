<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
         
  
	}
	public function index()
	{
		
		$this->load->view('default/body');
	}
	public function home()
	{
		
		$this->load->view('home');
	}
	public function request()
	{
		
		$this->load->view('request');
	}
	public function tripdet()
	{
		
		$this->load->view('tripdet');
	}
	public function startride()
	{
		
		
		$this->load->view('startride');
	}

	public function login(){
		$username = $this->input->post('user');
		$password = $this->input->post('pass');
		$result = $this->Login_Model->login($username, $password);	

		if($result) {	
		$this->session->set_userdata('usname',$username);		 
			  echo true;
		    } else {
				echo false;
			}
	}

	public function reg(){
		$fname = $this->input->post('fname');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$pass = $this->input->post('pass');
		$result = $this->Login_Model->reg($fname, $phone,$email,$pass);	

		if($result) {
			  			 
			  echo true;
		    } else {
				echo false;
			}
	}
}
