<?php
class banner_model extends CI_Model{
function __construct() {
parent::__construct();
}


public function insertbanner($cat,$content,$userfile){
	$query=$this->db->query("insert into banner (heading,content,image) values('$cat','$content','$userfile')");
	return true;
}
public function viewbanner()
{
	$query=$this->db->get("banner");
	$data=$query->result_array();
	return $data;
}
public function delbanner($id){
	$query=$this->db
		   ->select('*')
			->where('id',$id)
			->from('banner')
			->get();
			$data=$query->result_array();
			if($data)
			{
				foreach ($data as $key => $data) {
					
				}
				$location= "./upload/";
				
				$del=$this->db->query("delete from banner where id='$id'");
				if($del)
				{
					unlink($location.$data['image']);
					return true;
				}
			}
}
public function editbanner($id)
{
	$query=$this->db
		   ->select('*')
			->where('id',$id)
			->from('banner')
			->get();
			$data=$query->result_array();
		return $data;
}
		public function updatebanner($id,$cat,$content,$file){
			$sel=$this->db
		   ->select('*')
			->where('id',$id)
			->from('banner')
			->get();
			$data=$sel->result_array();
			foreach ($data as $data) {
				
			}
			$location="./upload/";
		$query=$this->db->query("update banner set heading='$cat',content='$content',image='$file' where id='$id'");
		if($query)
		{
			unlink($location.$data['image']);
		}
		return true;
	}
	public function updatebanner1($id,$cat,$content){
		$query=$this->db->query("update banner set heading='$cat',content='$content' where id='$id'");
		return $query;
	}
}
?>