<?php
class Contact extends CI_Model{
function __construct() {
parent::__construct();
}
	public function insertcontact($data){
		$this->db->insert('contact',$data);
		return true;
	}
	public function viewcontact()
	{
		$query=$this->db->get("contact");
		$data=$query->result_array();
		return $data;
	}
}
?>