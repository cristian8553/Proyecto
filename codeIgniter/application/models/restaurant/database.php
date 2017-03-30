<?php if (! defined ('BASEPATH')) exit("No direct scrip access allowed");
class database extends  CI_Model{
	function __construct(){
		parent:: __construct();
	}

	function guardarcocinero($data){
		this->db->insert('cocinero',$data);
	}

	function guardarmesero($data){
		this->db->insert('mesero',$data);
	}

	function guardarrecep($data){
		this->db->insert('recepcionista',$data);
	}

}