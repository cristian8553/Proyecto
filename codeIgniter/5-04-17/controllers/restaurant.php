<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Restaurant extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('bookmarksModel');
	}

	public function index()
	{
		$this->load->view('restaurant/header/header');
		$this->load->view('restaurant/header/headerboot');
		$this->load->view('restaurant/main');
	}

	public function logout(){
		session_start();
		session_destroy();

		$this->load->view('restaurant/header/header');
		$this->load->view('restaurant/header/headerboot');
		$this->load->view('restaurant/main');
	}

	function validar($id, $pass, $tabla){
			$obtenerEnlace=$this->bookmarksModel->ingresarpuesto($id,$pass,$tabla);
			if($obtenerEnlace != false){
			foreach ($obtenerEnlace->result() as $row) {
				$usuario = $row->nombre;
				$id= $row->id;
			}
			$_SESSION['id']=$id;
			$_SESSION['usuario']=$usuario;
			$_SESSION['pass']=$pass;
			$_SESSION['tabla']=$tabla;
			
			$this->load->view('restaurant/header/header');
			$this->load->view('restaurant/header/headerboot');
			$this->load->view('restaurant/empleado');
			}else{
			$this->load->view('restaurant/header/header');
			$this->load->view('restaurant/header/headerboot');
			$this->load->view('restaurant/main');
			}
	}

	public function ingresar(){
		$id=$this->input->post('id',TRUE);
		$pass=$this->input->post('password',TRUE);
		if($this->bookmarksModel->ingresar($id,$pass)){
			if($_SESSION['id']!=null){
			$this->load->view('restaurant/header/adminHead');
			$this->load->view('restaurant/gerente');
			return;
			}
		}
		$id = strtolower($id);
		if(strpos($id, 'm')!==false){
			list($let,$val)=explode('m', $id);
			$this->validar($val,$pass,"mesero");
			return;
		}
		if(strpos($id, 'c')!==false){
			list($let,$val)=explode('c', $id);
			$this->validar($val,$pass,"cocinero");
			return;
		}
		if(strpos($id, 'r')!==false){
			list($let,$val)=explode('r', $id);
			$this->validar($val,$pass,"recepcionista");
			return;
		}
			$this->load->view('restaurant/header/header');
			$this->load->view('restaurant/header/headerboot');
			$this->load->view('restaurant/main');
	}

	public function registrar(){
		if($_SESSION['id']!=null){
			$this->load->view('restaurant/header/adminHead');
			$this->load->view('restaurant/registrar');
		}
	}

	public function guardar(){
		$validar=$this->input->post('puesto',TRUE);
		$data=array('nombre'=>$this->input->post('nombre',TRUE),
		'apellido'=>$this->input->post('apellido',TRUE),
		'contraseña'=>$this->input->post('password',TRUE),
		);
		if($validar=="Mesero"){
			$this->bookmarksModel->guardarmesero($data);
			header('Location: /codeIgniter/index.php/restaurant/registrar');
		}
		if($validar=="Cocinero"){
			$this->bookmarksModel->guardarcocinero($data);
			header('Location: /codeIgniter/index.php/restaurant/registrar');
		}
		if($validar=="Recepcionista"){
			$this->bookmarksModel->guardarrecep($data);
			header('Location: /codeIgniter/index.php/restaurant/registrar');
		}
		header('Location: /codeIgniter/index.php/restaurant');
		//redireccionar a ventana de inicio
	}
}
