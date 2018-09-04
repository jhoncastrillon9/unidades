<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminPublicaciones extends CI_Controller {

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
			$crud->set_table('publicaciones');
			// Titulo para la Tabla
			$crud->set_subject('Publicación');
			// Campos requeridos en el formaulario
			$crud->required_fields('Titulo','Descripcion','Foto');
			// Campos visibles en la lista general
			$crud->columns('Titulo','Descripcion','Foto');
			// Campos visibles en el formulario
			$crud->fields('Titulo','Descripcion','Foto');
			//definir que texto queremso mostrar en el comapos
			$crud->display_as('Descripcion','Descripción');
			$crud->display_as('Foto','Imagen');
			// Quitar Acciones
			// $crud->unset_edit();
			// Campo para cargar archivo
			$crud->set_field_upload('Foto','assets/uploads/files_post');
			// ordenar la tabla por
			$crud->order_by('FechaRegistro','desc');
			// Campo que puede ingresar texto con formato
			$crud->change_field_type('Descripcion', 'text');
			// Campos que no quiero mostrar en READ
			$crud->unset_read_fields('FechaRegistro','FechaActualizacion','UsuarioId');
			$crud->unset_clone();

			//geenrar el render
			$tabla = $crud->render();


			$vector['tabla']=$tabla->output;
			$vector['css_files']=$tabla->css_files;
			$vector['js_files']=$tabla->js_files;

			$this->load->view('AdminPublicaciones', $vector);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}

	}
}

?>
