<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminInfoPagina extends CI_Controller {

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
			$crud->set_table('infopagina');
			$crud->set_subject('Pagina Web');
			$crud->required_fields('Nombre','Telefonos','Email', 'UrlLogo');
			$crud->columns('Nombre','Telefonos','Email', 'UrlLogo');
			$crud->display_as('UrlLogo','Imagen Logo');
			$crud->set_field_upload('UrlLogo','assets/uploads/files_infopagina');
			$crud->change_field_type('Nombre', 'text');
			$crud->unset_add();
			$crud->order_by('FechaRegistro','desc');
			$crud->unset_clone();
			// Campos que no quiero mostrar en READ y EDIT
			$crud->unset_read_fields('FechaRegistro','FechaActualizacion');
			$crud->unset_edit_fields('FechaRegistro','FechaActualizacion');

			//geenrar el render
			$tabla = $crud->render();

			// Se envia informacion a la vista
			$vector['tabla']=$tabla->output;
			$vector['css_files']=$tabla->css_files;
			$vector['js_files']=$tabla->js_files;

			$this->load->view('AdminInfoPagina', $vector);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}

	}
}

?>
