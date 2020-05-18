<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_c extends CI_Controller {
 function __construct() {
parent:: __construct();
 $this->load->model('home_m');
}


function index(){
	//$this->load->view("header");
	//$data['service1']=$this->home_m->service();
	//$data['gallery']=$this->home_m->gallery();
	//$data['team']=$this->home_m->team();
	$this->load->view('home');
	
	//$this->load->view("footer");
	
	}
	
	function course(){
		
		$this->load->view("course");
		
	}
	function gallery(){}
	function about(){}
	function contact(){}

}
?>