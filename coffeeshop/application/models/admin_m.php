<?php
class Admin_m extends CI_Model{
function __construct() {
parent::__construct();
}



function login($username,$password){
	
	$query=$this->db->query("select * from login where username='$username' AND pwd='$password'");
	if($query->result_array())
        {
            // If there is a user, then create session data
            $row = $query->row();
			
            $data = array(
            		'id' => $row->id,
                    'username' => $row->username,
                    'password' => $row->pwd,
                    'validated' => true
                    );

            $this->session->set_userdata('admin',$data);

            return true;
        }
        else{
	return FALSE;
}
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
	
}
?>