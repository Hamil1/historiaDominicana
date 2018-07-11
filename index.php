<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor......
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Historia Dominicana</title>
        <!--Css-->
        <link rel="stylesheet" type="text/css" href="css/Style.css">
        <link rel="stylesheet" type="text/css" href="css/modalLogin.css">
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/reset.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
        <link rel="stylesheet" href="css/modalLogin/modalLogin.css">
    </head>
    <body>
            <div>
                <div class="contenedorAcceder">
                    <span data-toggle="modal"><button id="articulo" class="btn acceder cd-signin" data-toggle="tooltip" title="Agregar Articulo" data-placement="left"> <i class="fa fa-plus"></i></button></span>
                </div>
            </div>
            <header>
                <div id="mostrarNav"></div>
                <nav id="menu">
                    <ul class="menu">
                        <li class="active"><a href="#">Inicio</a></li>
                        <li><a href="#">Independencia Efímera</a></li>
                        <li><a href="#">Invasión y ocupación haitiana</a></li>
                        <li><a href="#">Independencia Dominicana</a></li>
                        <li><a href="#">Haití intenta dominar R. Dominicana</a></li>
                    </ul>
                </nav>
            </header>

<div class="cd-user-modal" id="modalLog"> <!-- this is the entire modal form, including the background -->
		<div class="cd-user-modal-container"> <!-- this is the container wrapper -->
			<ul class="cd-switcher">
				<li><a href="#0">Iniciar sesión</a></li>
				<li><a href="#0">Crear cuenta</a></li>
			</ul>

			<div id="cd-login"> <!-- log in form -->
				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-email" for="signin-email">Correo electrónico</label>
						<input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="Correo electrónico">
						<span class="cd-error-message">Campo vacío</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signin-password">Contraseña</label>
						<input class="full-width has-padding has-border" id="signin-password" type="password"  placeholder="Contraseña">
						<a href="#0" class="hide-password">Mostrar</a>
						<span class="cd-error-message">Campo vacío</span>
					</p>

					<p class="fieldset">
						<input type="checkbox" id="remember-me" checked>
						<label for="remember-me">Recordar</label>
					</p>

					<p class="fieldset">
						<input class="full-width" type="submit" value="Iniciar sesión">
					</p>
				</form>
				
				<p class="cd-form-bottom-message"><a href="#0">¿Olvidaste tu contraseña?</a></p>
				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-login -->

			<div id="cd-signup"> <!-- sign up form -->
				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-username" for="signup-username">Nombre de usuario</label>
						<input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Nombre">
						<span class="cd-error-message">Campo vacío</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-email" for="signup-email">Correo electrónico</label>
						<input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="Correo electrónico">
						<span class="cd-error-message">Campo vacío</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signup-password">Contraseña</label>
						<input class="full-width has-padding has-border" id="signup-password" type="password"  placeholder="Contraseña">
						<a href="#0" class="hide-password">Mostrar</a>
						<span class="cd-error-message">Campo vacío</span>
					</p>

					<p class="fieldset">
						<input type="checkbox" id="accept-terms">
						<label for="accept-terms">Acepto los <a href="#0">términos</a></label>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Crear Cuenta">
					</p>
				</form>

				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-signup -->

			<div id="cd-reset-password"> <!-- reset password form -->
				<p class="cd-form-message">¿Perdiste tú contraseña? Introduce tú correo electrónico. Recibiras un correo para crear una contraseña nueva.</p>

				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-email" for="reset-email">Correo</label>
						<input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="Correo">
						<span class="cd-error-message">Campo vacío</span>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Restablecer contraseña">
					</p>
				</form>

				<p class="cd-form-bottom-message"><a href="#0">Volver a iniciar sesión</a></p>
			</div> <!-- cd-reset-password -->
			<a href="#0" class="cd-close-form">Cerrar</a>
		</div> <!-- cd-user-modal-container -->
	</div> <!-- cd-user-modal -->
        
<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title">Iniciar sesión</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form action="/examples/actions/confirmation.php" method="post">
					<div class="form-group">
						<i class="fa fa-user"></i>
						<input type="text" class="form-control" placeholder="Nombre de usuario" required="required">
					</div>
					<div class="form-group">
						<i class="fa fa-lock"></i>
						<input type="password" class="form-control" placeholder="Contraseña" required="required">					
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary btn-block btn-lg" value="Acceder">
					</div>
				</form>				
				
			</div>
			<div class="modal-footer">
				<a href="#">¿Olvidaste tu contraseña?</a>
			</div>
		</div>
	</div>
</div>


        <div class="letras">
            <article class="marginCenter maxWidth letras first">
                <h2 class="center bold ">Historia de la Republica Dominicana</h2>
                        <div class="magic"></div>
                    <div class="desarrolloArticulo " style="overflow: hidden !important">
                        <p class="center letras">La República Dominicana se fundó en el año 1844 después de muchos años de opresión bajo los Haitianos.
                        Durante los 22 años que precedieron a la independencia, toda la isla de La Española estuvo bajo el dominio de Haití.
                        Después de los esfuerzos hechos por patriotas dominicanos para independizar el país del dominio haitiano, varias acciones
                        militares ocurridas entre 1844 y 1856 terminaron por consolidar a la república como un nuevo estado. Los haitianos intentaron
                        varias veces volver a dominar la recién creada república con resultados fallidos hasta que en 1867 Haití reconoció la
                        independencia dominicana.</p>
                        <div>
                            <img src="./imagenes/padresDeLaPatria.jpeg" alt="Padres de la patria" class="padresdelapatria">
                        </div>
                        <p>
                            La palabra Dominicana proviene del latín Dominicus, que significa Domingo. Sin embargo, la isla tiene este nombre por
                            Santo Domingo de Guzmán, fundador de la Orden de los Dominicos.
                        </p>
                        <p>
                            Esta es una introducción a todo lo que usted será capaz de ver en esta página web, para seguir viendo más puede darle
                            al menú de la parte superior izquierda y elegir un evento que usted desee (estos eventos están ordenados de forma cronologica).
                        </p>
                    </div>
            </article>
        </div>
        <div class="letras">
            <article class="marginCenter maxWidth letras">
                    <h2 class="center bold">Historia de la Republica Dominicana</h2>
                        <div class="magic"></div>
                    <div class="desarrolloArticulo" style="overflow: hidden !important">
                        <p class="center letras">La República Dominicana se fundó en el año 1844 después de muchos años de opresión bajo los Haitianos.
                                Durante los 22 años que precedieron a la independencia, toda la isla de La Española estuvo bajo el dominio de Haití.
                        Después de los esfuerzos hechos por patriotas dominicanos para independizar el país del dominio haitiano, varias acciones
                        militares ocurridas entre 1844 y 1856 terminaron por consolidar a la república como un nuevo estado. Los haitianos intentaron
                        varias veces volver a dominar la recién creada república con resultados fallidos hasta que en 1867 Haití reconoció la
                        independencia dominicana.</p>
                        <div>
                            <img src="./imagenes/padresDeLaPatria.jpeg" alt="Padres de la patria" class="padresdelapatria">
                        </div>
                        <p>
                            La palabra Dominicana proviene del latín Dominicus, que significa Domingo. Sin embargo, la isla tiene este nombre por
                            Santo Domingo de Guzmán, fundador de la Orden de los Dominicos.
                        </p>
                        <p>
                            Esta es una introducción a todo lo que usted será capaz de ver en esta página web, para seguir viendo más puede darle
                            al menú de la parte superior izquierda y elegir un evento que usted desee (estos eventos están ordenados de forma cronologica).
                        </p>
                    </div>
            </article>
        </div>
        <div class="letras">
            <article class="marginCenter maxWidth letras">
                    <h2 class="center bold">Historia de la Republica Dominicana</h2>
                        <div class="magic"></div>
                    <div class="desarrolloArticulo" style="overflow: hidden !important">
                        <p class="center letras">La República Dominicana se fundó en el año 1844 después de muchos años de opresión bajo los Haitianos.
                                Durante los 22 años que precedieron a la independencia, toda la isla de La Española estuvo bajo el dominio de Haití.
                        Después de los esfuerzos hechos por patriotas dominicanos para independizar el país del dominio haitiano, varias acciones
                        militares ocurridas entre 1844 y 1856 terminaron por consolidar a la república como un nuevo estado. Los haitianos intentaron
                        varias veces volver a dominar la recién creada república con resultados fallidos hasta que en 1867 Haití reconoció la
                        independencia dominicana.</p>
                        <div>
                            <img src="./imagenes/padresDeLaPatria.jpeg" alt="Padres de la patria" class="padresdelapatria">
                        </div>
                        <p>
                            La palabra Dominicana proviene del latín Dominicus, que significa Domingo. Sin embargo, la isla tiene este nombre por
                            Santo Domingo de Guzmán, fundador de la Orden de los Dominicos.
                        </p>
                        <p>
                            Esta es una introducción a todo lo que usted será capaz de ver en esta página web, para seguir viendo más puede darle
                            al menú de la parte superior izquierda y elegir un evento que usted desee (estos eventos están ordenados de forma cronologica).
                        </p>
                    </div>
            </article>
        </div>
        <br>

        <?php
        // put your code here
        ?>
        <!--Todos los documentos JavaScript-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.0/TweenMax.min.js"></script>
        <script src="./js/Scrollmagic/ScrollMagic.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/jquery.ScrollMagic.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
        <script src="./js/velocity.min.js" type="text/javascript"></script>
        <script src="./js/Scrollmagic/plugins/animation.velocity.js" type="text/javascript"></script>
        <script src="./js/Script.js" type="text/javascript"></script>
        <script  src="js/modalLogin/modalLogin.js"></script>
    </body>
</html>
