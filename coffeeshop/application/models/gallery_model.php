<?php
class Gallery_model extends CI_Model{
function __construct() {
parent::__construct();
}



public function cat($data)
{
	$data=$this->db->insert('gallery_cat',$data);
	return true;
}

public function viewcat($id=1)
{	
	if($id == 1){
		$query=$this->db->get("gallery_cat");
	}else{
		$query=$this->db->where('owner_id', $id)->get("gallery_cat");
	}
	$data=$query->result_array();
	return $data;
}
public function delcat($id)
{
	$query=$this->db->query("delete from gallery_cat where id='$id'");
	return true;
}
public function editcat($id)
{
	$query=$this->db->query("select * from gallery_cat where id='$id'");
	$data=$query->result_array();
	return $data;
}
public function editcat_m($cat,$id, $reviewer)
{
	// echo $id;
	// die();
	$query=$this->db->query("update gallery_cat set name='$cat', reviewer='$reviewer' where id='$id'");
	return true;
}
public function insertgallery($cat,$content,$userfile){
	$query=$this->db->query("insert into gallery (cat_id,content,image) values('$cat','$content','$userfile')");
	return true;
}

public function viewgallery($id=1)
{
	if($id == 1){

		$query=$this->db->query("select gallery.* , gallery_cat.name from gallery inner join gallery_cat  on gallery.cat_id = gallery_cat.id ");
	}else{
		$query=$this->db->query("select gallery.* , gallery_cat.name from gallery inner join gallery_cat  on gallery.cat_id = gallery_cat.id where gallery_cat.owner_id= $id");
	}

	$data=$query->result_array();
	return $data;
}
public function delgallery($id){
	$query=$this->db
		   ->select('*')
			->where('id',$id)
			->from('gallery')
			->get();
			$data=$query->result_array();
			if($data)
			{
				foreach ($data as $key => $data) {
					
				}
				$location= "./upload/";
				
				$del=$this->db->query("delete from gallery where id='$id'");
				if($del)
				{
					unlink($location.$data['image']);
					return true;
				}
			}
}
public function editgallery($id)
{
	$query=$this->db
		   ->select('*')
			->where('id',$id)
			->from('gallery')
			->get();
			$data=$query->result_array();
		return $data;
}
		public function updategallery($id,$cat,$content,$file){
			$sel=$this->db
		   ->select('*')
			->where('id',$id)
			->from('gallery')
			->get();
			$data=$sel->result_array();
			foreach ($data as $data) {
				
			}
			$location="./upload/";
		$query=$this->db->query("update gallery set cat_id='$cat',content='$content',image='$file' where id='$id'");
		if($query)
		{
			unlink($location.$data['image']);
		}
		return true;
	}
	public function updategallery1($id,$cat,$content){
		$query=$this->db->query("update gallery set cat_id='$cat',content='$content' where id='$id'");
		return $query;
	}


	public function addComment($cat_id,$comment){
	$query=$this->db->query("insert into  comment(cat_id,comment,status) values('$cat_id','$comment','1')");
	return true;
}
}
?>