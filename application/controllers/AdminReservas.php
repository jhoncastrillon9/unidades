<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminReservas extends CI_Controller {

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
			$crud->set_table('reservas');
			$crud->set_subject('Reserva');
			// Campos visibles en la lista general
			$crud->columns('NombreUsuario','EspacioReservarId','FechaReserva','HoraInicioReserva', 'HoraFinalReserva','Observacion');
			//definir que texto queremso mostrar en el comapos
			$crud->display_as('NombreUsuario','Nombre')->display_as('EspacioReservarId','Espacio Reservado')->display_as('FechaReserva','Fecha Reservada');
			$crud->display_as('DireccionUsuario','Dirección')->display_as('CelularUsuario','Celular')->display_as('TelefonoUsuario','Teléfono');
			$crud->display_as('HoraInicioReserva','Hora de Inicio')->display_as('HoraFinalReserva','Hora Final')->display_as('Observacion','Observación')->display_as('EmailUsuario','Email');
			// Campos OBLIGATORIOS PARA ADD y EDIT en el formaulario
			$crud->required_fields('NombreUsuario','EspacioReservarId','FechaReserva','HoraInicioReserva'.'HoraFinalReserva');
			// Campos que no quiero mostrar
			$crud->unset_read_fields('FechaRegistro','FechaActualizacion');
			$crud->unset_edit_fields('FechaRegistro','FechaActualizacion');
			$crud->unset_add_fields('FechaRegistro','FechaActualizacion');
			// Generamos relaciones
			$crud->set_relation('EspacioReservarId','espacioreserva','Nombre');
			// Campo que puede ingresar texto con formato
			$crud->change_field_type('Observacion', 'text');
			// trabajos con la tabla WHERE ORDER GROUP
			$crud->order_by('FechaRegistro','desc');
			//geenrar el render
			$tabla = $crud->render();

			// Se envia informacion a la vista
			$vector['tabla']=$tabla->output;
			$vector['css_files']=$tabla->css_files;
			$vector['js_files']=$tabla->js_files;

			$this->load->view('AdminReservas', $vector);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}

	}
}

?>
