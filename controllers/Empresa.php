<?php 
class Empresa extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('model_empresa');
    }

	public function index()
	{
		$result = $this->model_empresa->listar();
		echo "<pre>".print_r($result,true)."</pre>";
	}

	public function buscarEmpresas(){

		$buscar = $this->input->post('buscar');

		$result = $this->model_empresa->buscarEmpresas($buscar);

		echo json_encode($result);
	}


	public function listar(){

		$result = $this->model_empresa->listar();

		echo json_encode($result);
	}
}