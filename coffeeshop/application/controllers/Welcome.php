<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct() {
parent:: __construct();
 $this->load->model('contact');
 $this->load->model('banner_model');
  $this->load->model('package_model');
 $this->load->model('service_model');
  $this->load->model('gallery_model');
}


	public function index()
	{
			$data['gallery_row']=$this->gallery_model->viewgallery();
			$data['gallerycat_row']=$this->gallery_model->viewcat();
			$this->load->view('gallery',$data);	
	}

		public function gallery()
		{
			$data['gallery_row']=$this->gallery_model->viewgallery();
			$data['gallerycat_row']=$this->gallery_model->viewcat();
			$this->load->view('gallery',$data);
		}

		public function view($id)
		{
			// $data['gallerycat_row']=$this->gallery_model->viewcat();
			// print_r($data);  die;
			$query=$this->db->where('id', $id)->get("gallery");
			$data['arrData']=$query->result_array();
			//print_r($data['arrData']);  die;
			 
			$data['shopdata'] = $this->db->where('id', $data['arrData'][0]['cat_id'])->get("gallery_cat")->result_array();
			//print_r($data['shopdata']);  die;
			$data['cat_id'] = $id;
			$data['comment']=$this->db->where('status', 2)->where('cat_id', $id)->get("comment")->result_array();
			$this->load->view('view_shop',$data);
		}
		public function about()
		{
			$this->load->view('about');
		}
		public function servicedetail()
		{
			$id=$_REQUEST['id'];
			$query=$this->db->query("select * from service where id='$id'");
			$data['fetch']=$query->result_array();
			
			$this->load->view('sigleservice',$data);
		}
		public function singlepackage()
		{
			$id=$_REQUEST['id'];
			$query=$this->db->query("select * from package where id='$id'");
			$data['fetch1']=$query->result_array();
			
			$this->load->view('singlepackage',$data);
		}
		public function packagecat()
		{
			 $id=$_REQUEST['id'];
			 $data['fetch']=$this->package_model->packcat($id);
			 $this->load->view('singlepackagecat',$data);
		}




		public function addcomment()
		{

		    $comment = $this->input->post('comment');
	        $cat_id  = $this->input->post('cat_id');

			$data=$this->gallery_model->addComment($cat_id,$comment);
			if($data)
			{
			echo "<script>alert('Data Inserted Successfully');</script>";
			}
			return redirect(base_url('/'));
			 
		}
}
