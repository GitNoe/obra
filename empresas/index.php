<?php
require 'conexion.php';

$where = "";

if (!empty($_POST)) {
	$valor = $_POST['campo'];
	if (!empty($valor)) {
		$where = "WHERE nome LIKE '%$valor'";
	}
}
$sql = "SELECT * FROM empresas $where";
$resultado = $mysqli->query($sql);

?>

<html lang="gl">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="../css/index.css">
	<script src="../js/jquery-3.6.0.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</head>

<body>

	<!-- MENU SUPERIOR -->

	<header class='main-body-menu-bar' id="top">

		<div class='menu-bar-button'>
			<button class='menu-bar-close-button'><i class="far fa-user"></i></button>


		</div>

		<div class='menu-bar-navigation-links'>
			<a class='menu-bar-navigation-link link-1' href='#'>Inicio </a>
			<a class='menu-bar-navigation-link link-2' href='#'>Citas </a>
			<a class='menu-bar-navigation-link link-3' href='../persoas/index.php'>Persoas </a>
			<a class='menu-bar-navigation-link link-4' href='index.php'>Empresas </a>
			<a class='menu-bar-navigation-link link-5' href='#'>Saír </a>

		</div>

		<div class='menu-bar-input'>
			<!-- <input class='menu-bar-search-field' placeholder='Buscar'> -->
			<input type="text" placeholder="Buscar..." name="search">
			<i class="fas fa-search"></i>

		</div>

	</header>
	<!-- MAIN -->
	<div class="container">
		<div class="row1">
			<h2 style="text-align:center">Empresas</h2>
		</div>

		<div class="row2">
			<a href="nueva.php" class="btn btn-primary">Nova Empresa</a>

			<div class="busca-persoas">
				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
					<b>Nome: </b><input type="text" id="campo" name="campo" />
					<input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
				</form>
			</div>
		</div>

		<br>

		<div class="row table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nome</th>
						<th>Poboación</th>
						<th>Actividade</th>
						<th>Data de alta</th>
						<th>Ofertas de Emprego</th>
						<th>Ofertas de Formación</th>
					</tr>
				</thead>

				<tbody>
					<?php while ($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
						<tr>
							<td><?php echo $row['id']; ?></td>
							<td><?php echo $row['nome']; ?></td>
							<td><?php echo $row['poboacion']; ?></td>
							<td><?php echo $row['actividade']; ?></td>
							<td><?php echo $row['data_alta']; ?></td>
							<td><?php echo $row['ofertas_emprego']; ?></td>
							<td><?php echo $row['ofertas_formacion']; ?></td>
							<td><a href="modificar.php?id=<?php echo $row['id']; ?>"><i class="fas fa-pencil-alt"></i></a></td>
							<td><a href="eliminar.php?id=<?php echo $row['id']; ?>" data-toggle="modal" data-target="#confirm-delete"><i class="fas fa-trash-alt"></i></a></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
				</div>

				<div class="modal-body">
					¿Desea eliminar este registro?
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<a class="btn btn-danger btn-ok">Delete</a>
				</div>
			</div>
		</div>
	</div>

	<!-- <button id="myBtn"><a href="#top" style="color: white; text-decoration: none";><i class="fas fa-chevron-up"></i></a></button> -->
	<div id="myBtn"><a href="#top" ;><i class="fas fa-chevron-up"></i></a></div> 
	<!-- FOOTER -->

	<div class="footer">
		<p>© Servicio de Orientación laboral</p>
		<a href="https://sede.vigo.org/portal-empregado/#/gestionLogin"><img class="portal" src="../img/portal.png"></a>
		<a href="https://correo.vigo.org/zimbra/"><img class="zimbra" src="../img/zimbra.png"></a>
		<a href="https://hoxe.vigo.org/"><img class="conce" src="../img/conceemprego2.png"></a>
	</div>

	<script>
		$('#confirm-delete').on('show.bs.modal', function(e) {
			$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

			$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
		});
	</script>

</body>

</html>