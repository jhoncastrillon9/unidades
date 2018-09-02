<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include 'shared/Layout_Admin_Top.php';
?>



<!--Tabla Muestra-->
<div class="chit-chat-layer1">
	<div class="col-auto chit-chat-layer1-left">
			<div class="work-progres">
							<div class="chit-chat-heading">
								Peticiones, Quejas, Reclamos y Sugerencias
							</div>
							<div class="table-responsive">
								<table class="table table-hover">
								<thead>
									<tr>
									<th>N°</th>
									<th>Nombre</th>
									<th>Resumen</th>
									<th>Tipo</th>
									<th>Estado</th>
									<th>Fecha</th>
									<th>Opciones</th>
								</tr>
							</thead>
							<tbody>
								<tr>
								<td>1</td>
								<td>Face book</td>
								<td>Malorum</td>
								<td><span class="label label-danger">Queja</span></td>
								<td><span class="badge badge-info">Leído</span></td>
								<td>12 OCtubre 2018</td>
								<td>Ver - Eliminar</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Twitter</td>
								<td>Evan</td>
								<td><span class="label label-success">Peticion</span></td>
								<td><span class="badge badge-success">Leído</span></td>
								<td>12 OCtubre 2018</td>
								<td>Ver - Eliminar</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Google</td>
								<td>John</td>
								<td><span class="label label-warning">Reclamo</span></td>
								<td><span class="badge badge-warning">No Leído</span></td>
								<td>12 OCtubre 2018</td>
								<td>Ver - Eliminar</td>
							</tr>
							<tr>
								<td>4</td>
								<td>LinkedIn</td>
								<td>Danial</td>
								<td><span class="label label-info">Sugerencia</span></td>
								<td><span class="badge badge-info">Leído</span></td>
								<td>12 OCtubre 2018</td>
								<td>Ver - Eliminar</td>
							</tr>
							<tr>
								<td>5</td>
								<td>Tumblr</td>
								<td>David</td>
								<td><span class="label label-warning">Reclamo</span></td>
								<td><span class="badge badge-danger">Leído</span></td>
								<td>12 OCtubre 2018</td>
								<td>Ver - Eliminar</td>
							</tr>
							<tr>
								<td>6</td>
								<td>Tesla</td>
								<td>Mickey</td>
								<td><span class="label label-info">Sugerencia</span></td>
								<td><span class="badge badge-success">No Leído</span></td>
								<td>12 OCtubre 2018</td>
								<td>Ver - Eliminar</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
	</div>
	<div class="clearfix"> </div>
</div>

<!--Temrina Tabla Muestra-->

<?php include 'shared/Layout_Admin_Bottom.php'; ?>
