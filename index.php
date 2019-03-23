<!DOCTYPE html>
<html>
<head> <meta charset="utf-8">
	<title>Crude</title>
	<style type="text/css">
		h1{
			text-align-last: center;
			font-family: verdana;
		}
	</style>
</head>


<body>

	<h1> Cadastro de cliente </h1>
	<center><form name="Dados Cliente" action="conexao.php" method="POST">
		<table border="1">
			<tr>
				<td>Nome:</td>
				<td><input type="text" name="nome" value=""></td>
			</tr>
			<tr>
				<td>Nascimento:</td>
				<td><input type="date" name="datanas" value=""></td>
			</tr>
			<tr>
				<td>Telefone:</td>
				<td><input type="text" name="tel" value=""></ td>
			</tr>
			<tr>
				<td>Endereço:</td>
				<td><input type="text" name="end" value=""></td>
			</tr>
			<tr>
				<td><input type="hidden" name="acao" value="inserir"></td>
				<td><input type="submit" name="Enviar" value="Enviar"></td>
			</tr>
		</table>
	</form></td></center>
</body>
</html>