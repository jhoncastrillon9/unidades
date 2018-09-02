<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminDocumentos extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		// if (!$this->session->userdata("idusuario")) {
		// 	redirect('login');
		// }

			$this->load->library('grocery_CRUD');
	}

	public function index()
	{

		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('flexigrid');
			$crud->set_table('documentos');
			$crud->set_subject('Documento');

			$crud->display_as('UrlDocumento','Archivo a Descargar');
			$crud->set_field_upload('UrlDocumento','assets/uploads/files_documentos');
			$crud->unset_clone();
			//geenrar el render
			$tabla = $crud->render();

			// Se envia informacion a la vista
			$vector['tabla']=$tabla->output;
			$vector['css_files']=$tabla->css_files;
			$vector['js_files']=$tabla->js_files;

			$this->load->view('AdminDocumentos', $vector);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}

	}
}

?>
