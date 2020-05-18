<?php
class Tour_m extends CI_Model{
	

	
	
	
public function __construct() {
parent::__construct();
}

//--(-_-)-packages-(-_-)--//
public function package_select(){

$query=$this->db
			->select('*')
			->from('package')
			->limit(5)
			->get();

return $query;
}


public function package_select_id(){

$query=$this->db
			->select('*')
			->where('p_id',$id)
			->from('package')
			->limit(5)
			->get();

return $query;
}

public function package_insert($ser){
	
	
	$query=$this->db->insert('package',$ser);
	return $query;
}

public function package_update($id,$ser_u){
	
	
	$this->db->where('p_id',$id);
	$this->db->update('package',$ser_u);
}

public function package_delete(){
	
}

}
?>