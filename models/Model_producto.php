<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_producto extends CI_Model {

	public function __construct(){
       parent::__construct();

    }

	/**
	 *
	 * By Jose
	 */
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
	
	/**
     *
     * By Alex
     */
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


	/**
	 *
	 * by Alex
	 */
	public function buscarProductosBarcode($idempresa, $buscar){

		$report = array();     
    	$report['values'] = array();

		$query = " SELECT prod.*, dep.stock ";
		$query .= " FROM producto prod, detallesempresaproducto dep ";
		$query .= " WHERE ( (prod.barcode LIKE '%".$buscar."%' ) OR (prod.nombre LIKE '%".$buscar."%' ) ) ";
		$query .= " AND (dep.idempresa=".$idempresa.") AND (dep.idproducto=prod.id) ";
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

}