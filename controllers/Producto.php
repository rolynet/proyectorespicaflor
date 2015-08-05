<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->model('model_producto');

	}

	public function index(){

		$result = $this->model_producto->listar();

		echo json_encode($result);

	}

	public function listar(){

		$result = $this->model_producto->listar();

		echo json_encode($result);

	}

}