<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tour_c extends CI_Controller {
	
	 function __construct() {
parent:: __construct();
$this->load->model('tour_m');
}


	
	//--dashboard--//	
public function dashboard(){

	if(!$this->session->userdata('username1')){
		return redirect('admin_c/index');
	}
		
	$this->load->view('admin_login/dashboard');
	}
	
	
	
//---packages start here---//	

 public function package(){
	
	 $this->load->view('admin_login/package');
 }
	

//--fetch data--//
public function package_select(){
	$data['ser_select']=$this->home_m->package_select();
	$this->load->view('admin_login/edit_package',$data);
}




//--insert--//
public function package_insert(){
	$config['upload_path']='./uploads/';
	$config['allowed_types']='gif|jpg|png';
	$config['max_size']=100;
	$config['max_width']=1024;
	$config['max_height']=768;
	
	$this->load->library('package',$config);
	
	if(!$this->upload->package_insert('file')){
		$error=array('error'=>$this->tour_c->dispaly_errors());
		$this->load->view('admin_login/package',$error);
	}
	else{
		$data=array('');
	
	
	
	$ser=array(
	'heading'=>$this->input->post('heading'),
	'content'=>$this->input->post('content')
); 
	 $this->tour_m->package_insert($ser);
	$this->load->view('admin_login/package');
}

}


//--update--//
public function package_update(){
	
	$ser_u=array(
			'heading'=>$heading,
			'content'=>$content,
			's_id'=>$id
	
	
	);
	
	$this->tour_m->package_update($id,$ser_u);
	$this->load->view('admin_login/package');
}


//--delete--//
public function package_delete(){
	
	
}
}
?>