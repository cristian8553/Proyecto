<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('bookmarksModel');
	}
	public function index(){
		$this->load->view('headers/librerias');
		$this->load->view('principal');
		$this->load->view('footer');
	}
	public function agregar(){
		if ($this->tank_auth->is_logged_in()) {
		$this->load->view('headers/librerias');
		$this->load->view('agregar');
		$this->load->view('footer');
	}else{
		echo "No tienes permisos para entrar";
	}
	}
	public function guardar(){
		$data=array('titulo'=>$this->input->post('titulo',TRUE),
		'url'=>$this->input->post('url',TRUE),
		'creacion'=>date('Y/m/d:m')
		);
		$this->bookmarksModel->guardar($data);
		//redirect('/codeIgniter');
		header('Location: /codeIgniter/index.php/main/agregar');
	}
	
	
	public function ver(){
		$data = array('enlaces' => $this -> bookmarksModel->verTodo(),
		'dump' => 0);
		$this->load->view('headers/librerias');
		$this->load->view('ver',$data);
		$this->load->view('footer');
	}
	
	public function editar(){
		$id=$this->uri->segment(3);
		$obtenerEnlace = $this->bookmarksModel->obtenerEnlace($id);
		if($obtenerEnlace != false){
			foreach ($obtenerEnlace->result() as $row) {
				$titulo = $row->titulo;
				$url= $row->url;
			}
			$data=array(
				'id' => $id,
				'titulo' => $titulo,
				'url' => $url);
		}else{
			$data='';
			return false;
		
		}
		$this->load->view('headers/librerias');
		$this->load->view('editar',$data);
		$this->load->view('footer');
	}

	public function editarEnlace(){
		$id=$this->uri->segment(3);
		$data=array(
			'titulo' => $this->input->post('titulo',true),
			'url'=>$this->input->post('url',true)
		 );
		$this->bookmarksModel->editarEnlace($id,$data);
		header('Location: /codeIgniter/index.php/main/ver');
	}
	
	public function eliminar (){
	  $id=$this->uri->segment(3);
	  $this->bookmarksModel->eliminar($id);
	}

	public function buscar(){
	$data = array('result' => '');
	$query=$this->input->get('query',true);
	if($query){
		$result=$this->bookmarksModel->buscar(trim($query));
		if($result != false){
			$data = array('result' => $result);
		}else{
			$data = array('result' => '');
		}
	}

		$this->load->view('headers/librerias');
		$this->load->view('buscar', $data);
		$this->load->view('footer');
	}

	public function validaciones(){
		$this->load->view('headers/librerias');
		$this->load->view('validaciones');
		$this->load->view('footer');
	}	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
//http://localhost/phpmyadmin/index.php?lang=es&collation_connection=utf8mb4_unicode_ci&token=48eb7f9efd37488778ea3025a37053c8