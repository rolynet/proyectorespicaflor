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

	/**
	 *
	 *
	 * By Jose
	 */
	public function listar(){
		$idempresa = $this->input->post('idempresa');
		
		$result = $this->model_producto->listar($idempresa);

		echo json_encode($result);

	}

	/**
	 *
	 *
	 * By Alex
	 */
	public function buscarProductos(){
		$buscar = $this->input->post('buscar');
		$idempresa = $this->input->post('idempresa');

		$result = $this->model_producto->buscarProductosBarcode($idempresa, $buscar);

		echo json_encode($result);

	}

}