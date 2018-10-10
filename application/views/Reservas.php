<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php include 'shared/Layout_Top.php'; ?>
<link rel="stylesheet" href="<?php echo base_url() ?>Content/Scripts/fullcalendar/fullcalendar.min.css" />


<div class="container-general col-sm-10 row justify-content-md-center">
	<div class="container-subgeneral col-sm-9">
		<div class="title-general text-center">
			RESERVAS
		</div>
		<div class="subtitle-general text-center">
			Aquí puedes reservar los espacios de nuestra unidad (Salon Social, Bbq, Otros).
		</div>

		<div class="container-info container-pqrs col-sm-12">
			<div class="title-container">
				<span>Información del Propietario</span>
			</div>
			<div class="">
				<form>
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
							<select id="tipo" name="tipo" class="form-control form-control-sm input-form" required>
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
							<label for="HoraInicial">Hora inicial del Evento</label>
							<input id="horainicial" name="horainical" type="time" class="form-control  form-control-sm input-form">
						</div>
						<div class="col">
							<label for="horafinal">Hora Final del Evento</label>
							<input id="horafinal" name="horafinal" type="time" class="form-control  form-control-sm input-form">
						</div>
					</div>

					<div class="row form-container">
						<div class="col">
							<label for="mensaje">Observación</label>
								<textarea class="form-control input-form" id="mensaje" name="mensaje" rows="5" placeholder="Describa el evento a realizar"></textarea>
						</div>
					</div>

					<div class="row form-container">
						<div class="col text-right">
					<input type="submit" name="reservar" class="btn-enviar" value="Reservar">
						</div>
					</div>

				</form>
			</div>

		</div>

	</div>
</div>

<div class="col-md-6">

<h1>Calendario</h1>
<div id="calendar">
</div>


</div>
<script type="text/javascript">
$(document).ready(function() {
	$('#calendar').fullCalendar({
    eventSources: [
         {
             events: function(start, end, timezone, callback) {
                 $.ajax({
                 url: '<?php echo base_url() ?>index.php/Reservas/get_events',
                 dataType: 'json',
                 data: {
                 // our hypothetical feed requires UNIX timestamps
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
     ]
	});
});
</script>

<script src="<?php echo base_url() ?>Content/Scripts/fullcalendar/moment.min.js"></script>
<script src="<?php echo base_url() ?>Content/Scripts/fullcalendar/fullcalendar.min.js"></script>
<script src="<?php echo base_url() ?>Content/Scripts/fullcalendar/gcal.js"></script>

<?php include 'shared/Layout_Bottom.php'; ?>
