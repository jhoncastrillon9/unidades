<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include 'shared/Layout_Admin_Top.php';
?>


<!--market updates updates-->
	 <div class="market-updates">
			<div class="col-md-4 market-update-gd">
				<a href="<?php echo site_url() ?>/AdminPublicaciones">
					<div class="market-update-block clr-block-1">
						<div class="col-md-8 market-update-left">
							<h3>83</h3>
							<h4>Publicaciones</h4>
							<p>En la Web</p>
						</div>
						<div class="col-md-4 market-update-right">
							<i class="fa fa-file-text-o"> </i>
						</div>
					  <div class="clearfix"> </div>
					</div>
				</a>
			</div>

			<div class="col-md-4 market-update-gd">
				<a href="<?php echo site_url() ?>/AdminReservas">
				<div class="market-update-block clr-block-2">
				 <div class="col-md-8 market-update-left">
					<h3>135</h3>
					<h4>Reservas</h4>
					<p>Totas Reservas Solicitadas</p>
				  </div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-eye"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
				</a>
			</div>
			<div class="col-md-4 market-update-gd">
				<a href="<?php echo site_url() ?>/AdminPqrs">
					<div class="market-update-block clr-block-3">
						<div class="col-md-8 market-update-left">
							<h3>23</h3>
							<h4>PQRS</h4>
							<p>Solicitadas en la web</p>
						</div>
						<div class="col-md-4 market-update-right">
							<i class="fa fa-envelope-o"> </i>
						</div>
					  <div class="clearfix"> </div>
					</div>
				</a>
			</div>
		   <div class="clearfix"> </div>
		</div>
	<!--Selecione una opcion-->
  	<div class="chit-chat-layer1 layout-footer ">
  		<div class="col-md-6 chit-chat-layer1-left">
  				<div class="work-progres">
  								<div class="chit-chat-heading text-nouppercase">
  									Selecione una opción del lado izquierdo.
  								</div>
  				</div>
  		</div>
  		<div class="clearfix"> </div>
  	</div>

<!--Temrina Tabla Muestra-->

<?php include 'shared/Layout_Admin_Bottom.php'; ?>
