<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">NOVA EMPRESA</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">

				<div class="form-group">
					<label for="nome" class="col-sm-2 control-label">Nome:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nome" placeholder="Nome" required>
					</div>
				</div>

				<div class="form-group">
					<label for="poboacion" class="col-sm-2 control-label">Poboación:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="poboacion" name="poboacion" placeholder="Poboacion" required>
					</div>
				</div>

				<div class="form-group">
					<label for="actividade" class="col-sm-2 control-label">Actividade:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="actividade" name="actividade" placeholder="Actividade" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="data_alta" class="col-sm-2 control-label">Data de alta:</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="email" name="data_alta" placeholder="dd-mm-aa" required>
					</div>
				</div>

				<div class="form-group">
					<label for="ofertas_emprego" class="col-sm-2 control-label">Ofertas de Emprego:</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="email" name="ofertas_emprego" placeholder="Ofertas emprego" required>
					</div>
				</div>

                <div class="form-group">
					<label for="ofertas_formacion" class="col-sm-2 control-label">Ofertas de Formación:</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="email" name="ofertas_formacion" placeholder="Ofertas formacion" required>
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