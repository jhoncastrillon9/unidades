<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include 'shared/Layout_Admin_Top.php';

if (isset($css_files)) {
	# si la variables css files existes cargamos estilos que trae
	foreach ($css_files as $rutacss) {
		# por cada archivo css
	 ?>
	 <link rel="stylesheet" type="text/css" href="<?php echo $rutacss ?>">
	 <?php
	}
}
 ?>

<!--Tabla Muestra-->
<div class="chit-chat-layer1">
	<div class="col-auto chit-chat-layer1-left">
			<div class="work-progres">
							<div class="chit-chat-heading">
								Peticiones, Quejas, Reclamos y Sugerencias
							</div>
							<?php
									 if (isset($tabla)) {
										 echo $tabla;
									 }
								?>
			</div>
	</div>
	<div class="clearfix"> </div>
</div>



<!--Temrina Tabla Muestra-->


<?php
if (isset($js_files)) {
	# si la variables css files existes cargamos estilos que trae
	foreach ($js_files as $rutajs) {
		# por cada archivo css
	 ?>
	 <script type="text/javascript" src="<?php echo $rutajs ?>"></script>
	 <?php
	}
}
 ?>

<?php include 'shared/Layout_Admin_Bottom.php'; ?>
