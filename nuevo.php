<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">NOVO REXISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off" enctype="multipart/form-data">
				<div class="form-group">
					<label for="nome" class="col-sm-2 control-label">Nome:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nome" placeholder="Nome" required>
					</div>
				</div>

				<div class="form-group">
					<label for="primeiro_apelido" class="col-sm-2 control-label">Primeiro Apelido:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="primeiro_apelido" placeholder="Primeiro Apelido" required>
					</div>
				</div>

				<div class="form-group">
					<label for="segundo_apelido" class="col-sm-2 control-label">Segundo Apelido:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="segundo_apelido" placeholder="Segundo Apelido" required>
					</div>
				</div>

				<div class="form-group">
					<label for="nif" class="col-sm-2 control-label">DNI / NIF:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="telefono" name="nif" placeholder="Número do DNI">
					</div>
				</div>
				
				<div class="form-group">
					<label for="data_nacemento" class="col-sm-2 control-label">Data de nacemento:</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="email" name="data_nacemento" placeholder="dd-mm-aa" required>
					</div>
				</div>

				<div class="form-group">
					<label for="sexo" class="col-sm-2 control-label">Sexo:</label>
					<div class="col-sm-10">
						<select class="form-control" id="estado_civil" name="sexo">
							<option value="HOME">HOME</option>
							<option value="MULLER">MULLER</option>
							<option value="OUTRO">NON DEFINIDO</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="codigo_postal" class="col-sm-2 control-label">Código postal:</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="email" name="codigo_postal" placeholder="Código postal" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Teléfono</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Teléfono">
					</div>
				</div>

				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Correo electrónico:</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="telefono" name="email" placeholder="Correo electrónico">
					</div>
				</div>

				<div class="lopd">
				<label for="lopd" class="col-sm-2 control-label">Subir o archivo da LOPD:</label>
					<div class="col-sm-10">
						<input type="file" class="form-control" id="lopd" name="lopd" accept="application/pdf">
					</div>

				</div>
				
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-default">Voltar</a>
						<button type="submit" class="btn btn-primary">Gardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>