	<!-- ============================================= --> 
	<nav class="navbar navbar-default navbar-mobile navbar-fixed white no-background bootsnav">
		<div class="container"> 
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="fa fa-bars"></i> </button>
				<a class="navbar-brand" href="index"> <img src="img/logo.png" width="80" class="logo logo-display" alt=""> <img src="img/logo.png" width="80" class="logo logo-scrolled" alt=""> </a> 
			</div>
			<div class="collapse navbar-collapse" id="navbar-menu">
				<ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">
					<li class="dropdown active"> <a href="index">INICIO</a> </li>

					<li class="dropdown active"> <a href="reglamentos">REGLAMENTOS</a> </li>

					<li class="dropdown active"> <a href="condiciones">CONDICIONES</a> </li>

					<li class="dropdown active"> <a href="contacto">CONTACTO</a> </li>

				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="br-right"><a class="btn-signup red-btn border-button" href="" data-toggle="modal" data-target="#signin"><i class="login-icon ti-user"></i>Login</a></li>
					<li class="sign-up"><a class="btn-signup red-btn border-button" href="" data-toggle="modal" data-target="#signin2"><span class="ti-briefcase"></span>Registro</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- ============================================= --> 




	<!-- ============================================= --> 
	<div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content" id="myModalLabel1">
				<div class="modal-body">
					<center><img src="img/logo.png" width="100"></center>
					<div class="tab-content"> 
						<div class="tab-pane fade in show active" id="employer" role="tabpanel">
							<form method="POST">
								<div class="form-group">
									<input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario">
								</div>
								<div class="form-group">
									<input type="password" id="clave" name="clave" class="form-control" placeholder="Contraseña">
								</div>
								<div class="form-group"> 
									<span class="custom-checkbox">
										<input type="checkbox" id="4">
										<label for="4"></label>
										Recuerdame en este PC
									</span> 
									<a href="restablecer" class="fl-right">¿Olvidaste la Contraseña?</a> 
								</div>
								<div class="form-group text-center">
									<button type="button" id="login" class="btn theme-btn full-width btn-m">Ingresar</button>
								</div>
							</form>
							<center>¿Aún no tienes cuenta?</center>
							<br>
							<div class="row">
								<div class="col-md-12"> <a href="" data-toggle="modal" data-target="#signin2" class="fb-log-btn log-btn"> Registrate</a> </div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- ============================================= --> 




	<!-- ============================================= --> 
	<div class="modal fade" id="signin2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content" id="myModalLabel1">
				<div class="modal-body">
					<center><h2>Registrate y comienza a GANAR!</h2></center>
					<div class="tab-content"> 
						<div class="tab-pane fade in show active" id="employer" role="tabpanel">
							<form method="POST">
								<div class="form-group">
									<input type="text" id="nombre_apellido" name="nombre_apellido" class="form-control" placeholder="Nombre y Apellido">
								</div>
								<div class="form-group">
									<input type="email" id="email" name="email" class="form-control" placeholder="Email">
								</div>
								<div class="form-group">
									<input type="text" id="user" name="user" class="form-control" placeholder="Usuario">
								</div>
								<div class="form-group">
									<input type="password" id="pass" name="pass" class="form-control" placeholder="Contraseña">
									<center><div style="margin-top: -20px;"><small>Al menos 1 mayuscula, 1 minuscula, 1 número y 1 caracter $%*@#?=_+-</small></div></center>
								</div>
								<div class="form-group text-center">
									<button type="button" id="sign_up" class="btn theme-btn full-width btn-m">Enviar</button>

									<script type="text/javascript">
										var boton = document.getElementById('sign_up');
										boton.addEventListener("click", bloquea, false); 

										function bloquea(){
											if(boton.disabled == false){
												boton.disabled = true;

												setTimeout(function(){
													boton.disabled = false;
												}, 50000)
											}
										}
									</script>
								</div>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- ============================================= --> 
