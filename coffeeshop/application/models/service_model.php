<?php
class Service_model extends CI_Model{
function __construct() {
parent::__construct();
}


public function insertservice($cat,$content,$userfile){
	$query=$this->db->query("insert into service (heading,content,image) values('$cat','$content','$userfile')");
	return true;
}
public function viewservice()
{
	$query=$this->db->get("service");
	$data=$query->result_array();
	return $data;
}
public function delservice($id){
	$query=$this->db
		   ->select('*')
			->where('id',$id)
			->from('service')
			->get();
			$data=$query->result_array();
			if($data)
			{
				foreach ($data as $key => $data) {
					
				}
				$location= "./upload/";
				
				$del=$this->db->query("delete from service where id='$id'");
				if($del)
				{
					unlink($location.$data['image']);
					return true;
				}
			}
}
public function editservice($id)
{
	$query=$this->db
		   ->select('*')
			->where('id',$id)
			->from('service')
			->get();
			$data=$query->result_array();
			
		return $data;
}
		public function updateservice($id,$cat,$content,$file){
			$sel=$this->db
		   ->select('*')
			->where('id',$id)
			->from('service')
			->get();
			$data=$sel->result_array();
			foreach ($data as $data) {
				
			}
			$location="./upload/";
		$query=$this->db->query("update service set heading='$cat',content='$content',image='$file' where id='$id'");
		if($query)
		{
			unlink($location.$data['image']);
		}
		return true;
	}
	public function updateservice1($id,$cat,$content){
		$query=$this->db->query("update service set heading='$cat',content='$content' where id='$id'");
		return $query;
	}
}
?>