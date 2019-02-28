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
        $this->load->library('googlemaps');
         
  
	}
	public function index()
	{
		$config = array();
$config['center'] = 'auto';
$config['zoom'] = '20';
$config['onboundschanged'] = 'if (!centreGot) {
	var mapCentre = map.getCenter();
	marker_0.setOptions({
		position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng()) 
	});
	var user="'.$this->session->userdata('usname').'";
	var client="0704774870";
	$.ajax({
                        type: "POST",
                        url: "Strip/save",
                        data: {lon: mapCentre.lng(),lat:mapCentre.lat(),user:user,client:client},
                        success: function (data) {
                            // return success
                           location.reload(true);
                           },error:function(){
                           	alert("Error occured ");
                           }
                    });
}
centreGot = true;';
$this->googlemaps->initialize($config);
   
// set up the marker ready for positioning 
// once we know the users location
$marker = array();
$this->googlemaps->add_marker($marker);
$data['map'] = $this->googlemaps->create_map();
		$this->load->view('default/body',$data);
	}
	public function home()
	{
	
$config = array();
$config['center'] = 'auto';
$config['zoom'] = '20';
$config['onboundschanged'] = 'if (!centreGot) {
	var mapCentre = map.getCenter();
	marker_0.setOptions({
		position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng()) 
	});
	var user="'.$this->session->userdata('usname').'";
	var client="0704774870";
	$.ajax({
                        type: "POST",
                        url: "Strip/save",
                        data: {lon: mapCentre.lng(),lat:mapCentre.lat(),user:user,client:client},
                        success: function (data) {
                            // return success
                           location.reload(true);
                           },error:function(){
                           	alert("Error occured ");
                           }
                    });
}
centreGot = true;';
$this->googlemaps->initialize($config);
   
// set up the marker ready for positioning 
// once we know the users location
$marker = array();
$this->googlemaps->add_marker($marker);
$data['map'] = $this->googlemaps->create_map();

		$this->load->view('home',$data);
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
		$client = $this->input->post('client');
		$this->load->library('googlemaps');

$config = array();
$config['center'] = 'auto';
$config['onboundschanged'] = 'if (!centreGot) {
	var mapCentre = map.getCenter();
	marker_0.setOptions({
		position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng()) 
	});
	var user="'.$this->session->userdata('usname').'";
	var client="'.$client.'";
	$.ajax({
                        type: "POST",
                        url: "Strip/save",
                        data: {lon: mapCentre.lng(),lat:mapCentre.lat(),user:user,client:client},
                        success: function (data) {
                            // return success
                           location.reload(true);
                           },error:function(){
                           	alert("Error occured ");
                           }
                    });
}
centreGot = true;';
$this->googlemaps->initialize($config);
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

	public function lout(){
		$this->session->set_userdata('usname');
		echo "Enter details to login";
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
