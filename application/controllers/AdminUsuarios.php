<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminUsuarios extends CI_Controller {

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
			$crud->set_table('usuarios');
			$crud->set_subject('Usuario');

			$crud->display_as('IdPerfil','Perfil');
			// $crud->display_as('Pass','Contraseña');
			$crud->display_as('UrlImagen','Imagen de Perfil');
			$crud->set_field_upload('UrlImagen','assets/uploads/files_imagenes_usuario');
			$crud->required_fields('Nombre','UrlImagen');
			$crud->set_relation('IdPerfil','perfilesusuario','Nombre');
			$crud->set_relation('IdPagina','InfoPagina','Nombre');
			$crud->unset_add();

			// Campos que no quiero mostrar en READ
			$crud->unset_read_fields('FechaRegistro','FechaActualizacion');
			$crud->unset_edit_fields('FechaRegistro','FechaActualizacion', 'IdPerfil','IdPagina','Pass','Activo');

			//geenrar el render
			$tabla = $crud->render();

			// Se envia informacion a la vista
			$vector['tabla']=$tabla->output;
			$vector['css_files']=$tabla->css_files;
			$vector['js_files']=$tabla->js_files;

			$this->load->view('AdminUsuarios', $vector);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}

	}
}

?>
