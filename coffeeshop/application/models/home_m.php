<?php
class Home_m extends CI_Model{
function __construct() {
parent::__construct();
}
function service(){

$query=$this->db
			->select('*')
			->from('service')
			->limit(5)
			->get();

return $query;
}
function gallery(){
	
	$query=$this->db
				->select('*')
				->from('gallery')
				->get();
	return $query;
			
} 

function team(){
	
	$query=$this->db
				->select('*')
				->from('team')
				->limit(4)
				->get();
	return $query;
			
} 



















































// function sub_category(){
	
	// $query=$this->db->query("SELECT * from sub_category");
	// return $query;
// }

// function new_arrival(){
	// $query=$this->db->select('*')
	// ->where('m_id',4)
	// ->order_by('p_id','desc')
	// ->from('product');
	
	

	// return $query;
// }
}
?>