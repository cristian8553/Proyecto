<?php if (! defined ('BASEPATH')) exit("No direct scrip access allowed");
class bookmarksModel extends  CI_Model{
	function __construct(){
		parent:: __construct();
	}


	function guardarcocinero($data){
		$this->db->insert('cocinero',$data);
	}

	function guardarmesero($data){
		$this->db->insert('mesero',$data);
	}

	function guardarrecep($data){
		$this->db->insert('recepcionista',$data);
	}

	function ingresar($id,$pass){
		session_start();
		$this->db->where('id',$id);
		$this->db->where('contraseña',$pass);
		$query = $this->db->get('administrador');
		if($query->num_rows()>0){
			$_SESSION['id']  = $id;
			$_SESSION['pass'] = $pass;
			return true;
		}else{
			return false;
		}
	}

	function ingresarpuesto($id,$pass,$tabla){
		$this->db->where('id',$id);
		$this->db->where('contraseña',$pass);
		$query = $this->db->get($tabla);
		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
	}

}