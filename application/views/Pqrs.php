<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php include 'shared/Layout_Top.php'; ?>
			<!-- PQRS -->
			<div class="container-general col-sm-10 row justify-content-md-center">
				<div class="container-subgeneral col-sm-9">
					<div class="title-general text-center">
						PQRS
					</div>
					<div class="subtitle-general text-center">
						Aquí puedes realizar peticiones, quejas, reclamos y sugerencias a la administración.
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
							      <input id="nombre" name="nombre" type="text" class="form-control form-control-sm input-form">
							    </div>
							    <div class="col">
										<label for="direccion">Dirección / Apto</label>
							      <input type="text" id="direccion" name="direccion" class="form-control form-control-sm input-form">
							    </div>
							  </div>

								<div class="row form-container">
									<div class="col">
										<label for="celular">Celular</label>
										<input id="celular" name="celular" type="text" class="form-control  form-control-sm input-form">
									</div>
									<div class="col">
										<label for="telefono">Teléfono Fijo</label>
										<input type="text" id="telefono" name="telefono" class="form-control form-control-sm input-form">
									</div>
								</div>

								<div class="row form-container">
									<div class="col">
										<label for="correo">Correo Eletrónico</label>
										<input id="correo" name="correo" type="text" class="form-control form-control-sm input-form">
									</div>
								</div>

								<div class="title-container">
									<span>Información de la Petición</span>
								</div>

								<div class="row form-container">
									<div class="col">
										<label for="Tipo">Tipo de Solicitud</label>
										<select id="tipo" name="tipo" class="form-control form-control-sm input-form">
											<option selected>Selecione...</option>
											<option value="Peticion">Petición</option>
											<option value="Queja">Queja</option>
											<option value="Reclamo">Reclamo</option>
											<option value="Sugerencia">Sugerencia</option>
										</select>
									</div>
									<div class="col">
										<label for="Fecha">Fecha</label>
										<input id="aecha" name="fecha" type="text" class="form-control  form-control-sm input-form" readonly="1" value="<?php
											$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
										 echo date("d")." de ".$meses[date('n')-1]." ".date("Y")
										 ?>">
									</div>
								</div>

								<div class="row form-container">
									<div class="col">
										<label for="mensaje">Mensaje</label>
											<textarea class="form-control input-form" id="mensaje" name="mensaje" rows="5" placeholder="Describa brevemente su solitud"></textarea>
									</div>
								</div>

								<div class="row form-container">
									<div class="col text-right">
								<input type="submit" name="enviar" class="btn-enviar" value="Enviar">
									</div>
								</div>

							</form>
						</div>

					</div>

				</div>
			</div>

<?php include 'shared/Layout_Bottom.php'; ?>
