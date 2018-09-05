<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Urb. Villa Real</title>
	<link rel="stylesheet" type="text/css" href="../Content/CSS/Main.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
	<body>
		<div class="container-login"  >
			<div class="container-form" style="background-image: url('<?php echo base_url() ?>Content/Images/Login_Imagen.jpg'); width: 100%; height: 100vh; background-repeat: no-repeat; background-size: cover;" >

  <?php echo form_open("login/acceso/");?>
				<div class="col-sm-4 offset-sm-4 container-login-p">
					<div class="login-html">
					<div class="login-form">
						<div class="sign-in">
						Administra tu WEB
						</div>
						<div class="sign-in-htm">
							<div class="group">
								<label for="user" class="label">Usuario</label>
								<input id="user" name="user" type="text" class="input">
							</div>
							<div class="group">
								<label for="pass" class="label">Contraseña</label>
								<input id="pass" name="pass" type="password" class="input" data-type="password">
							</div>
							<div class="group">
								<input id="check" type="checkbox" class="check" checked>
								<label for="check" style="color:white;">Mantener Sessión Iniciada</label>
							</div>
							<div class="group">
								  <button type="submit" class="button">Ingresar</button>

							</div>
							<?php
							if (($this->session->flashdata('mensaje')) != null) {
								// code...
								$mensaje = $this->session->flashdata('mensaje');
								 echo '<div class="" style="color:red; font-weight: 600; text-align: center;">'.$mensaje.'</div>';
							};

								?>
							<div class="hr"></div>

							<div class="foot-lnk">
								<a href="#forgot">Recordar Contraseña?</a>
							</div>
						</div>
					</div>
				</div>
				</div>
	</form>


			</div>
		</div>
	</body>
</html>



<?php include 'shared/FooterLogin.php'; ?>
