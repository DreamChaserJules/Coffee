'<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
 function __construct() {
parent:: __construct();
 $this->load->model('admin_m');
 $this->load->model('package_model');
 $this->load->model('service_model');
 $this->load->model('gallery_model');
 $this->load->model('banner_model');
}


public function index(){
	
	$this->load->view('admin_login/login');
	}
	

	
//--login logic--//	
	
public function login(){
	
	$this->load->library('form_validation');
	 $this->form_validation->set_rules('username','User Name','required');
	 $this->form_validation->set_rules('password','Password','required');

	$username= $this->input->post('username');
	$password= $this->input->post('password');

	
		$login=$this->admin_m->login($username,$password);
		if($login){
			 redirect('admin/dashboard');
		}
		
		else{
			echo "wrong crediential";
			
		}

}


//--logout--//
public function logout(){
	   $this->session->sess_destroy();
        redirect('admin');
	
	
}
public function dashboard()
{
	$this->load->view('admin_login/dashboard');
}
public function packagecat()
{
	 if(isset($_POST['submit']))
	 {
	 $data = array(
        'name'=>$this->input->post('cat')
		);
	$this->load->model('package_model');
	$data['msg']=$this->package_model->cat($data);
	if($data)
	{
	echo "<script>alert('Data Inserted Successfully');window.location.href='packagecat';</script>";
	}
	 }
	 else
	 {
		 $this->load->view('admin_login/packagecat');
	 }
}
public function viewpackagecat()
{
	$this->load->model('package_model');
	$data['msg']=$this->package_model->viewcat();
	if($data){
		$this->load->view('admin_login/viewpackagecat',$data);
	}
}
public function delcat()
{
	 $id=$_REQUEST['id'];
	 $data=$this->package_model->delcat($id);
     if($data)
	 {
		echo "<script>alert('Data Deleted Successfully');window.location.href='viewpackagecat';</script>"; 
	 }
}
public function editcat()
{
	 if(isset($_POST['submit']))
{
	extract($_POST);
	$data=$this->package_model->editcat_m($cat,$id);
	if($data)
	{
		echo "<script>alert('Data Updated Successfully');window.location.href='viewpackagecat';</script>";
	}
}
else
{
	  $id=$_REQUEST['id'];
	 $data['fetch']=$this->package_model->editcat($id);
     if($data)
	 {
		 $this->load->view('admin_login/editcat',$data);
	 }
}
}
public function package(){
	if (isset($_POST['submit'])) {
	    $config =  array(
                  'upload_path'     => "./upload/",
                  'file_name'     => rand(1,999).$_FILES['userfile']['name'],
                  'allowed_types'   => "gif|jpg|png|jpeg|pdf",
                  'overwrite'       => TRUE,
                  'max_size'        => "2048000",  // Can be set to particular file size
                                 );    
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if($this->upload->do_upload())
				{
					extract($_POST);
				$data=$this->package_model->insertpackage($cat,$heading,$content,$price,$config['file_name']);
					if($data)
					{	
						$data = array('upload_data' => $this->upload->data());
					echo "<script>alert('Data Inserted Successfully');window.location.href='package';</script>";
					}
				}
				else
				{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('admin_login/package', $error);
				}
			
	
	}
	else
	{
	$data['fetch']=$this->package_model->viewcat();
	$this->load->view('admin_login/package',$data);
}
}
public function viewpackage(){
	$data['fetch']=$this->package_model->viewpackage();
	if($data)
	{
		$this->load->view('admin_login/viewpackage',$data);
	}
}
public function delpackage()
{
	$id=$_REQUEST['id'];
	$data=$this->package_model->delpackage($id);
	if($data)
	{
		echo "<script>alert('Data Deleted Successfully');window.location.href='viewpackage';</script>";
	}
}
public function editpackage()
{
	if(isset($_POST['submit']))
	{
			$config =  array(
                  'upload_path'     => "./upload/",
                  'file_name'     => rand(1,999).$_FILES['userfile']['name'],
                  'allowed_types'   => "gif|jpg|png|jpeg|pdf",
                  'overwrite'       => TRUE,
                  'max_size'        => "2048000",  // Can be set to particular file size
                                 );    
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if($this->upload->do_upload())
				{
					extract($_POST);
				$data=$this->package_model->updatepackage($id,$cat,$heading,$content,$price,$config['file_name']);
					if($data)
					{	
						$data = array('upload_data' => $this->upload->data());
					echo "<script>alert('Data Updated Successfully');window.location.href='viewpackage';</script>";
					}
				}
				else
				{
					 extract($_POST);

				$data=$this->package_model->updatepackage1($id,$heading,$cat,$content,$price);
					if($data)
					{	
						
					echo "<script>alert('Data Updated Successfully');window.location.href='viewpackage';</script>";
					}
				}
	}
	else
	{
	$id=$_REQUEST['id'];
	$data['fetch']=$this->package_model->editpackage($id);
	if($data)
	{
		$this->load->view('admin_login/editpackage',$data);
	}
 }
}

public function service(){
	if (isset($_POST['submit'])) {
	    $config =  array(
                  'upload_path'     => "./upload/",
                  'file_name'     => rand(1,999).$_FILES['userfile']['name'],
                  'allowed_types'   => "gif|jpg|png|jpeg|pdf",
                  'overwrite'       => TRUE,
                  'max_size'        => "2048000",  // Can be set to particular file size
                                 );    
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if($this->upload->do_upload())
				{
					extract($_POST);
				$data=$this->service_model->insertservice($heading,$content,$config['file_name']);
					if($data)
					{	
						$data = array('upload_data' => $this->upload->data());
					echo "<script>alert('Data Inserted Successfully');window.location.href='service';</script>";
					}
				}
				else
				{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('admin_login/service', $error);
				}
			
	
	}
	else
	{
	$data['fetch']=$this->package_model->viewcat();
	$this->load->view('admin_login/service',$data);
}
}
public function viewservice(){
	$data['fetch']=$this->service_model->viewservice();
	if($data)
	{
		$this->load->view('admin_login/viewservice',$data);
	}
}
public function delservice()
{
	$id=$_REQUEST['id'];
	$data=$this->service_model->delservice($id);
	if($data)
	{
		echo "<script>alert('Data Deleted Successfully');window.location.href='viewservice';</script>";
	}
}


public function editservice()
{
	if(isset($_POST['submit']))
	{
			$config =  array(
                  'upload_path'     => "./upload/",
                  'file_name'     => rand(1,999).$_FILES['userfile']['name'],
                  'allowed_types'   => "gif|jpg|png|jpeg|pdf",
                  'overwrite'       => TRUE,
                  'max_size'        => "2048000",  // Can be set to particular file size
                                 );    
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if($this->upload->do_upload())
				{
					extract($_POST);
				$data=$this->service_model->updateservice($id,$heading,$content,$config['file_name']);
					if($data)
					{	
						$data = array('upload_data' => $this->upload->data());
					echo "<script>alert('Data Updated Successfully');window.location.href='viewservice';</script>";
					}
				}
				else
				{
					 extract($_POST);

				$data=$this->service_model->updateservice1($id,$heading,$content);
					if($data)
					{	
						
					echo "<script>alert('Data Updated Successfully');window.location.href='viewservice';</script>";
					}
				}
	}
	else
	{
	$id=$_REQUEST['id'];
	$data['fetch']=$this->service_model->editservice($id);
	if($data)
	{
		$this->load->view('admin_login/editservice',$data);
	}
 }
}

public function gallerycat()
{
	
	$userData = $_SESSION['admin'] ?? '';
	 if(isset($_POST['submit']))
	 {

	 $data = array(
        'name'=>$this->input->post('cat'),
        'owner_id' => $userData['id'] ?? 1
		);
	
	$data=$this->gallery_model->cat($data);
	if($data)
	{
	echo "<script>alert('Data Inserted Successfully');window.location.href='gallerycat';</script>";
	}
	 }
	 else
	 {
		 $this->load->view('admin_login/gallerycat');
	 }
}
public function viewgallerycat()
{
	$this->load->model('gallery_model');
	$userData = $_SESSION['admin'];
	$data['msg']=$this->gallery_model->viewcat($userData['id']);
	//print_r($data);  die;
	if($data){
		$this->load->view('admin_login/viewgallerycat',$data);
	}
}

	public function delgalcat()
{
	 $id=$_REQUEST['id'];
	 $data=$this->gallery_model->delcat($id);
     if($data)
	 {
		echo "<script>alert('Data Deleted Successfully');window.location.href='viewgallerycat';</script>"; 
	 }
}
public function editgalcat()
{
	 if(isset($_POST['submit']))
{
	extract($_POST);
	$data=$this->gallery_model->editcat_m($cat,$id,$reviewer);
	if($data)
	{
		echo "<script>alert('Data Updated Successfully');window.location.href='viewgallerycat';</script>";
	}
}
else
{
	  $id=$_REQUEST['id'];
	 $data['fetch']=$this->gallery_model->editcat($id);
     if($data)
	 {
		 $this->load->view('admin_login/editgalcat',$data);
	 }
}
}


public function gallery(){
	if (isset($_POST['submit'])) {
	    $config =  array(
                  'upload_path'     => "./upload/",
                  'file_name'     => rand(1,999).$_FILES['userfile']['name'],
                  'allowed_types'   => "gif|jpg|png|jpeg|pdf",
                  'overwrite'       => TRUE,
                  'max_size'        => "2048000",  // Can be set to particular file size
                                 );    
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if($this->upload->do_upload())
				{
					extract($_POST);
				$data=$this->gallery_model->insertgallery($cat,$content,$config['file_name']);
					if($data)
					{	
						$data = array('upload_data' => $this->upload->data());
					echo "<script>alert('Data Inserted Successfully');window.location.href='gallery';</script>";
					}
				}
				else
				{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('admin_login/gallery', $error);
				}
			
	
	}
	else
	{
	$userData = $_SESSION['admin'];
	$data['fetch']=$this->gallery_model->viewcat($userData['id']);
	$this->load->view('admin_login/gallery',$data);
}
}
	
public function viewgallery(){

	$userData = $_SESSION['admin'];
	$userId = $userData['id'];
	$data['fetch']=$this->gallery_model->viewgallery($userId);
	//print_r($data); die;

	if($data)
	{
		$this->load->view('admin_login/viewgallery',$data);
	}
}
	public function delgallery()
{
	$id=$_REQUEST['id'];
	$data=$this->gallery_model->delgallery($id);
	if($data)
	{
		echo "<script>alert('Data Deleted Successfully');window.location.href='viewgallery';</script>";
	}
}
	

public function editgallery()
{
	if(isset($_POST['submit']))
	{
			$config =  array(
                  'upload_path'     => "./upload/",
                  'file_name'     => rand(1,999).$_FILES['userfile']['name'],
                  'allowed_types'   => "gif|jpg|png|jpeg|pdf",
                  'overwrite'       => TRUE,
                  'max_size'        => "2048000",  // Can be set to particular file size
                                 );    
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if($this->upload->do_upload())
				{
					extract($_POST);
				$data=$this->gallery_model->updategallery($id,$cat,$content,$config['file_name']);
					if($data)
					{	
						$data = array('upload_data' => $this->upload->data());
					echo "<script>alert('Data Updated Successfully');window.location.href='viewgallery';</script>";
					}
				}
				else
				{
					 extract($_POST);

				$data=$this->gallery_model->updategallery1($id,$cat,$content);
					if($data)
					{	
						
					echo "<script>alert('Data Updated Successfully');window.location.href='viewgallery';</script>";
					}
				}
	}
	else
	{
	$id=$_REQUEST['id'];
	$data['fetch']=$this->gallery_model->editgallery($id);
	if($data)
	{
		$this->load->view('admin_login/editgallery',$data);
	}
 }
}
	
public function banner(){
	if (isset($_POST['submit'])) {
	    $config =  array(
                  'upload_path'     => "./upload/",
                  'file_name'     => rand(1,999).$_FILES['userfile']['name'],
                  'allowed_types'   => "gif|jpg|png|jpeg|pdf",
                  'overwrite'       => TRUE,
                  'max_size'        => "2048000",  // Can be set to particular file size
                                 );    
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if($this->upload->do_upload())
				{
					extract($_POST);
				$data=$this->banner_model->insertbanner($heading,$content,$config['file_name']);
					if($data)
					{	
						$data = array('upload_data' => $this->upload->data());
					echo "<script>alert('Data Inserted Successfully');window.location.href='banner';</script>";
					}
				}
				else
				{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('admin_login/banner', $error);
				}
			
	
	}
	else
	{
	$data['fetch']=$this->package_model->viewcat();
	$this->load->view('admin_login/banner',$data);
}
}
	
public function viewbanner(){
	$data['fetch']=$this->banner_model->viewbanner();
	if($data)
	{
		$this->load->view('admin_login/viewbanner',$data);
	}
}
	public function delbanner()
{
	$id=$_REQUEST['id'];
	$data=$this->banner_model->delbanner($id);
	if($data)
	{
		echo "<script>alert('Data Deleted Successfully');window.location.href='viewbanner';</script>";
	}
}
		


public function editbanner()
{
	if(isset($_POST['submit']))
	{
			$config =  array(
                  'upload_path'     => "./upload/",
                  'file_name'     => rand(1,999).$_FILES['userfile']['name'],
                  'allowed_types'   => "gif|jpg|png|jpeg|pdf",
                  'overwrite'       => TRUE,
                  'max_size'        => "2048000",  // Can be set to particular file size
                                 );    
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if($this->upload->do_upload())
				{
					extract($_POST);
				$data=$this->banner_model->updatebanner($id,$heading,$content,$config['file_name']);
					if($data)
					{	
						$data = array('upload_data' => $this->upload->data());
					echo "<script>alert('Data Updated Successfully');window.location.href='viewbanner';</script>";
					}
				}
				else
				{
					 extract($_POST);

				$data=$this->banner_model->updatebanner1($id,$heading,$content);
					if($data)
					{	
						
					echo "<script>alert('Data Updated Successfully');window.location.href='viewbanner';</script>";
					}
				}
	}
	else
	{
	$id=$_REQUEST['id'];
	$data['fetch']=$this->banner_model->editbanner($id);
	if($data)
	{
		$this->load->view('admin_login/editbanner',$data);
	}
 }
}
	public function contact(){
			$this->load->model('contact');
			$data['fetch']=$this->contact->viewcontact();

		$this->load->view('admin_login/viewcontact',$data);
	}
	public function delcontact()
	{
		 $id=$_REQUEST['id'];
		$this->db->query("delete from contact where id='$id'");
		echo "<script>alert('Data Deleted Successfully');window.location.href='contact';</script>";
	}


	public function approvedComment()
	{
		 $id=$_REQUEST['id'];
		$this->db->query("update comment set status=2 where id='$id'");
		echo "<script>alert('Comment updated Successfully');window.location.href='comment';</script>";
	}




public function comment()
{

	$userData = $_SESSION['admin'];
	$owner_id = $userData['id'];
	if($userData['id'] == 1){
		$data['comment'] = $this->db->query("select  comment.*, gallery_cat.name from  comment  inner join  gallery_cat on comment.cat_id = gallery_cat.id ")->result_array();
	}else{
		$data['comment']= $this->db->query("select  comment.*, gallery_cat.name from  comment  inner join  gallery_cat on comment.cat_id = gallery_cat.id where  gallery_cat.owner_id = '$owner_id'")->result_array();

	}

	
	$this->load->view('admin_login/comment',$data);

}

}
?>