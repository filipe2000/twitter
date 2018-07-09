<!DOCTYPE html>
<html>
<head>
<title>Twitter</title>
<meta charset="utf-8" />		
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
<script type="text/javascript" src="../assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">

<div class="panel panel-default">
	<div class="panel-heading"> <h2 class="panel-title">Cadastro Usuário</h2></div>
		<form method="POST">
		<div class="panel-body">			
			<table class="table">	
				<tr>
					<td>Nome:</td>
					<td><input type="text" name="nome" size="50" required="required" autofocus="true"></input></td>
				</tr>			
				<tr>
					<td>E-mail:</td>
					<td><input type="email" name="email" size="50" required="required"></input></td>
				</tr>
				<tr>
					<td>Senha:</td>
					<td><input type="password" name="senha" size="30" required="required" maxlength="25"></input></td>
				</tr>	
				<tr>
					<td colspan="2" style="text-align: center;">	
					<input type="submit" class="btn btn-success" value="Cadastrar"></input>					
					</td>	
				</tr>				
			</table>			
		</div>
		</form>	
</div>

</div>
</body>
</html>


