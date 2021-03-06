<!DOCTYPE html>
<html lang="es" class="no-js">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="author" content="Gabriela Ita-ii Mijangos Zamudio">
		<meta name="description" content="Tienda Maquillaje, Make Up">
		<meta name="keywords" content="Tienda Maquillaje, Make Up">
		<title>Ita-POP Make Up</title>
		<link rel="stylesheet" href="css/normalize.css" media="all">
		<link rel="stylesheet" href="css/style.css" media="all">
		<script src="js/modernizr.js"></script>
		<script src="js/prefixfree.js"></script>
	</head>
	<body>
		<header>
			<a href="index.html"><img src="img/logoheader1.png" alt="Logo"></a>
			<a href="index.html"><h1>Ita-POP</h1></a>
			<div id="headerEmpujarImgIzq">
				<a href="datosComprador.html"><img src="img/usericon.png" alt="User Icon PNG"></a><img src="img/bag.jpg" alt="">
			</div>
		</header>
		<nav>
			<ul>
				<li><a href="rostro.html">Rostro</a></li>
				<li><a href="ojos.html">Ojos</a></li>
				<li><a href="cejas.html">Cejas</a></li>
				<li><a href="labios.html">Labios</a></li>
				<li><a href="accesorios.html">Accesorios</a></li>
			</ul>
		</nav>
		<main>
			<section class="seccionProductos">
				<p>Hola <h3><?php echo $_POST["nombres","apellidoPaterno","apellidoMaterno"]; ?></h3></p>
				<p>Enviaremos a tu Em@il <h3><?php echo $_POST["email"]; ?> los datos de para comprobar tu direccion</h3></p>
				<p>Se enviara un mensaje SMS de comprobacion a tu telefono <h3><?php echo $_POST["movil"]; ?></h3>
				</p>
				<p>Ya puedes realizar tus compras.</p>
				<p>Muchas gracias por formar parte de Ita-POP <h3><?php echo $_POST["nombres","apellidoPaterno","apellidoMaterno"]; ?></h3> </p>
			</section>
		</main>
		<footer>
			<p>Derechos Reservados &nbsp;<strong>&copy;Gabriela Ita-ii Mijangos Zamudio</strong></p><img src="img/Ita-ii-iPhone.png" alt="Ita-ii Memoji">
		</footer>
	</body>
</html>