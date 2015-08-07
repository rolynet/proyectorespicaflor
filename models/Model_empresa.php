<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_empresa extends CI_Model {

	public function __construct(){
       parent::__construct();
    }


    	/**
	 *
	 *
	 * By RolyNet
	 */
	public function buscarEmpresas($buscar){

		$report = array();     
    	$report['values'] = array();


		$query = " SELECT *";
		$query .= " FROM empresa ";
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

	/**
	 *
	 * By Jaime
	 */
	public function listar(){

		$report = array();     
    	$report['values'] = array();

		$query  = " SELECT * ";
		$query .= " FROM empresa ";		
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