<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php include 'shared/Layout_Top.php'; ?>
<link rel="stylesheet" href="<?php echo base_url() ?>Content/Scripts/fullcalendar/fullcalendar.min.css" />

<link href="<?php echo base_url() ?>Content/Librerias/datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="<?php echo base_url() ?>Content/Librerias/datetimepicker/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url() ?>Content/Librerias/datetimepicker/js/locales/bootstrap-datetimepicker.es.js" charset="UTF-8"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

<div class="container-general col-sm-10 row justify-content-md-center">
	<div class="container-subgeneral col-sm-9">
		<div class="title-general text-center">
			RESERVAS
		</div>
		<div class="subtitle-general text-center">
			Aquí puedes reservar los espacios de nuestra unidad (Salon Social, Bbq, Otros).
		</div>
	</div>
</div>

<div class="col-md-6">

	<h1>Calendario de Eventos</h1>
	<div id="calendar">
	</div>

</div>


<div class="modal fade bd-example-modal-lg" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <h4 class="modal-title" id="myModalLabel">Crear Reserva</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <?php echo form_open(site_url("Reservas/add_event"), array("class" => "form-horizontal")) ?>

              <div class="container-general col-sm-12 row justify-content-md-center">
                <div class="container-subgeneral col-sm-12">
                  <div class="container-info container-pqrs col-sm-12">
                    <div class="title-container">
                      <span>Información del Propietario</span>
                    </div>
                    <div class="">
                 
                        <div class="row form-container">
                          <div class="col">
                            <label for="nombre">Nombre</label>
                            <input id="nombre" name="nombre" type="text" class="form-control form-control-sm input-form" required>
                          </div>
                          <div class="col">
                            <label for="direccion">Dirección / Apto</label>
                            <input type="text" id="direccion" name="direccion" class="form-control form-control-sm input-form" required>
                          </div>
                        </div>

                        <div class="row form-container">
                          <div class="col">
                            <label for="celular">Celular</label>
                            <input id="celular" name="celular" type="number" class="form-control  form-control-sm input-form" required>
                          </div>
                          <div class="col">
                            <label for="telefono">Teléfono Fijo</label>
                            <input type="number" id="telefono" name="telefono" class="form-control form-control-sm input-form">
                          </div>
                        </div>

                        <div class="row form-container">
                          <div class="col">
                            <label for="correo">Correo Eletrónico</label>
                            <input id="correo" name="correo" type="email" class="form-control form-control-sm input-form" required>
                          </div>
                        </div>

                        <div class="title-container">
                          <span>Información de la reserva</span>
                        </div>

                        <div class="row form-container">
                          <div class="col">
                            <label for="Tipo">Espacio a Reservar</label>
                            <select id="name" name="name" class="form-control form-control-sm input-form" required>
                              <option selected>Selecione...</option>
                              <option value="1">Salon Social Principal</option>
                              <option value="2">Salon Social Secundario</option>
                              <option value="3">Bbq</option>
                            </select>
                          </div>
                          <div class="col">
                            <label for="Fecha">Fecha</label>
                            <input id="fecha" name="fecha" type="date" class="form-control  form-control-sm input-form"/>
                          </div>
                        </div>

                        <div class="row form-container">
                          <div class="col">
                            <label for="HoraInicial">Fecha y hora de inicio</label>
                            <input type="text" class="form-control  form-control-sm input-form" name="start_date" id="start_date" data-date-format="yyyy/m/d H:i" autocomplete="off" readonly="1" placeholder="Seleciona la fecha y hora de inicio">              
                          </div>
                          <div class="col">
                            <label for="horafinal">Fecha y hora final</label>
                            <input type="text" class="form-control form-control-sm input-form" name="end_date" id="end_date" data-date-format="yyyy/m/d H:i" autocomplete="off" readonly="1" placeholder="Seleciona la fecha y hora de final">
                          </div>
                        </div>
                        <div class="row form-container">
                          <div class="col">
                            <label for="mensaje">Observación</label>
                              <textarea class="form-control input-form" id="description" name="description" rows="5" placeholder="Describa el evento a realizar"></textarea>
                          </div>
                        </div>

                        <div class="row form-container">
                          <div class="col text-right">
                        <input type="submit" name="reservar" class="btn-enviar" value="Reservar">
                          </div>
                        </div>

                     
                    </div>

                  </div>

                </div>
                
              </div>
       <?php echo form_close() ?>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">


      $('#start_date').datetimepicker({
      language:  'es',
      weekStart: 1,
      todayBtn:  1,
      autoclose: 1,
      todayHighlight: 1,
      startView: 2,
      forceParse: 0,
      showMeridian: 1,
      locale: 'es'
    });

      $('#end_date').datetimepicker({
        language:  'es',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });

</script>


<!--Listar Calendario-->
<script type="text/javascript">


  

$(document).ready(function() {
  var date_last_clicked = null;

$('#calendar').fullCalendar({    
    eventSources: [
    {
        events: function(start, end, timezone, callback) {
            $.ajax({
                url: '<?php echo base_url() ?>index.php/Reservas/get_events',
                dataType: 'json',
                data: {                
                    start: start.unix(),
                    end: end.unix()
                },
                success: function(msg) {
                    var events = msg.events;
                    callback(events);
                }
            });
       }
    },
    ],
    dayClick: function(date, jsEvent, view) {
        date_last_clicked = $(this);
        $(this).css('background-color', '#bed7f3');
        $('#addModal').modal();
    },
});
});
</script>

<!--Añadir Evento al Calendario-->
<script type="text/javascript">

</script>

<script src="<?php echo base_url() ?>Content/Scripts/fullcalendar/moment.min.js"></script>
<script src="<?php echo base_url() ?>Content/Scripts/fullcalendar/fullcalendar.min.js"></script>
<script src="<?php echo base_url() ?>Content/Scripts/fullcalendar/gcal.js"></script>
<script src="<?php echo base_url() ?>Content/Scripts/fullcalendar/locale/es.js"></script>

<?php include 'shared/Layout_Bottom.php'; ?>
