<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminPqrs extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		if (!$this->session->userdata("idusuario")) {
			redirect('login');
		}

			$this->load->library('grocery_CRUD');
	}

	public function index()
	{

		try{
			$crud = new grocery_CRUD();
			$crud->set_theme('flexigrid');
			$crud->set_table('pqrs');

			// Titulo para la Tabla
			// $crud->set_subject('Peticiones, Quejas, Reclamos, y Sugerencias');
			// Campos requeridos OBLIGATORIOS en el formaulario
			$crud->required_fields('NombreUsuario','DireccionUsuario','CelularUsuario', 'TelefonoUsuario', 'EmailUsuario', 'TipoPqrsId', 'Mensaje');
			// Campos visibles en la lista general
			$crud->columns('NombreUsuario','Mensaje','TipoPqrsId', 'UrlArchivo', 'Estado', 'FechaRegistro');
			// Campos visibles en el formulario ADD
			// $crud->fields('NombreUsuario','DireccionUsuario','CelularUsuario');
			//definir que texto queremso mostrar en el comapos
			$crud->display_as('NombreUsuario','Nombre');
			$crud->display_as('DireccionUsuario','Direccion / Apto');
			$crud->display_as('CelularUsuario','Celular');
			$crud->display_as('TelefonoUsuario','Telefono');
			$crud->display_as('EmailUsuario','Email');
			$crud->display_as('TipoPqrsId','Tipo');
			$crud->display_as('Mensaje','Mensaje');
			$crud->display_as('UrlArchivo','Archivo');
			// Quitar Acciones
			// $crud->unset_edit();
			$crud->unset_add();
			// Campo para cargar archivo
			$crud->set_field_upload('UrlArchivo','assets/uploads/files_pqrs');
			// ordenar la tabla por
			$crud->order_by('FechaRegistro','desc');

			// Colocamos los campos que queremos sean text area con estilos
			$crud->change_field_type('Descripcion', 'text');

			// Generamos relaciones
			$crud->set_relation('TipoPqrsId','tipopqrs','Nombre');

			// Cambiar Nombre de true activo false inactivo
			$crud->field_type('Estado', 'true_false', array('No Leido', 'Leido'));

			// Campos que no quiero mostrar en READ
			$crud->unset_read_fields('FechaRegistro','FechaActualizacion');
			$crud->unset_edit_fields('FechaRegistro','FechaActualizacion');

			$crud->unset_clone();
			//geenrar el render
			$tabla = $crud->render();


			$vector['tabla']=$tabla->output;
			$vector['css_files']=$tabla->css_files;
			$vector['js_files']=$tabla->js_files;

			$this->load->view('AdminPqrs', $vector);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}

	}
}

?>
