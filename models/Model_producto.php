<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_producto extends CI_Model {
	public function __construct()
    {
       parent::__construct();

    }

	public function buscarProductos($buscar){

		$report = array();     
    	$report['values'] = array();


		$query = " SELECT * ";
		$query .= " FROM producto ";
		$query .= " WHERE nombre LIKE '%".$buscar."%' ";
		$RSet = $this->db->query( $query );
		$report['success'] = ($this->db->affected_rows() > 0) ? 1 : 0;
		if ( $report['success'] == 1 ){ 
			$report['values'] = $RSet->result();			
			$report['message'] = "Datos correctamente";
		}else{			
    		$report['message'] = "Error: no se devolvieron datos";
    	}
    	return $report;		
	}

	public function listar(){

		$report = array();     
    	$report['values'] = array();

		$query  = " SELECT * ";
		$query .= " FROM producto ";		
		$RSet = $this->db->query( $query );
		$report['success'] = ($this->db->affected_rows() > 0) ? 1 : 0;
		if ( $report['success'] == 1){ 
			$report['values'] = $RSet->result();			
			$report['message'] = "Datos correctamente";
		}else{			
    		$report['message'] = "Error: no se devolvieron datos";
    	}
    	return $report;
	}

}