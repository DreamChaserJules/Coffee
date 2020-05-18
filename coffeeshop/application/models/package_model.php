<?php
class Package_model extends CI_Model{
function __construct() {
parent::__construct();
}



public function cat($data)
{
	$data=$this->db->insert('package_cat',$data);
	return $data;
}
public function viewcat()
{
	$query=$this->db->get("package_cat");
	$data=$query->result_array();
	return $data;
}
public function delcat($id)
{
	$query=$this->db->query("delete from package_cat where id='$id'");
	return true;
}
public function editcat($id)
{
	$query=$this->db->query("select * from package_cat where id='$id'");
	$data=$query->result_array();
	return $data;
}
public function editcat_m($cat,$id)
{
	// echo $id;
	// die();
	$query=$this->db->query("update package_cat set name='$cat' where id='$id'");
	return true;
}
public function insertpackage($cat,$heading,$content,$price,$userfile){
	$query=$this->db->query("insert into package (cat_id,heading,content,price,image) values('$cat','$heading','$content','$price','$userfile')");
	return true;
}
public function viewpackage()
{
	$query=$this->db->get("package");
	$data=$query->result_array();
	return $data;
}
public function delpackage($id){
	$query=$this->db
		   ->select('*')
			->where('id',$id)
			->from('package')
			->get();
			$data=$query->result_array();
			if($data)
			{
				foreach ($data as $key => $data) {
					
				}
				$location= "./upload/";
				
				$del=$this->db->query("delete from package where id='$id'");
				if($del)
				{
					unlink($location.$data['image']);
					return true;
				}
			}
}
public function editpackage($id)
{
	$query=$this->db
		   ->select('*')
			->where('id',$id)
			->from('package')
			->get();
			$data=$query->result_array();
		return $data;
}
		public function updatepackage($id,$cat,$heading,$content,$price,$file){
			$sel=$this->db
		   ->select('*')
			->where('id',$id)
			->from('package')
			->get();
			$data=$sel->result_array();
			foreach ($data as $data) {
				
			}
			$location="./upload/";
		$query=$this->db->query("update package set cat_id='$cat',heading='$heading',content='$content',price='$price',image='$file' where id='$id'");
		if($query)
		{
			unlink($location.$data['image']);
		}
		return true;
	}
	public function updatepackage1($id,$heading,$cat,$content,$price){
		$query=$this->db->query("update package set cat_id='$cat',heading='$heading',content='$content',price='$price' where id='$id'");
		return $query;
	}
	public function packcat($id)
	{
		$query=$this->db->query("select * from package where cat_id='$id'");
		$data=$query->result_array();
		return $data;
	}
}
?>