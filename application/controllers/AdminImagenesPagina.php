<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminImagenesPagina extends CI_Controller {

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
			$crud->set_table('imagenespagina');
			$crud->set_subject('Imagen');
			$crud->required_fields('Titulo','Descripcion','URLImagen','IdPagina', 'Activa');
			$crud->columns('Titulo','Descripcion','URLImagen','IdPagina', 'Activa');
			$crud->display_as('URLImagen','Imagen');
			$crud->display_as('Descripcion','Descripción');
			$crud->display_as('IdPagina','Pagina');
			$crud->set_field_upload('URLImagen','assets/uploads/files_infopagina');
			$crud->field_type('Activa', 'true_false', array('NO', 'SI'));
			// Generamos relaciones
			$crud->set_relation('IdPagina','InfoPagina','Nombre');
			// Campos que no quiero mostrar en READ
			$crud->unset_read_fields('FechaRegistro','FechaActualizacion');
			$crud->unset_add_fields('FechaRegistro','FechaActualizacion');
			$crud->unset_edit_fields('FechaRegistro','FechaActualizacion');
			$crud->unset_clone();
			
			//geenrar el render
			$tabla = $crud->render();

			// Se envia informacion a la vista
			$vector['tabla']=$tabla->output;
			$vector['css_files']=$tabla->css_files;
			$vector['js_files']=$tabla->js_files;

			$this->load->view('AdminImagenesPagina', $vector);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}

	}
}

?>
