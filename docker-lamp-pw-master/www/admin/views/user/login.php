<!DOCTYPE html>
<html>

<head>
	<title>Exemplo Login</title>
	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4 p-5">
				<h1>Login no sistema</h1>
				<form action="?controller=user&action=validateLogin" method=POST name="formulario" id="formulario">
					<div class="mb-3 mt-3">
						<label class="form-label">Login</label>
						<input type="text" class="form-control" name="userName" placeholder="Digite o usuário">
					</div>
					<div class="mb-3 mt-3">
						<label class="form-label">Senha</label>
						<input type="password" class="form-control" name="password" placeholder="Digite sua senha">
					</div>
					<input class="btn btn-primary" type="submit" name="Enviar" value="Fazer Login">
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</body>

</html>