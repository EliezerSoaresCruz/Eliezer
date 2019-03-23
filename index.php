<!DOCTYPE html>
<html>
<head><meta charset="utf-8">
	<title> Crud </title>
	<style type="text/css">
		h1{

			font-family: verdana;
			text-align: center;

		}
	</style>
</head>
<body>
	<h1> Tabela cadastro cliente </h1>
	<center>
	<form name="dados cliente" action="conexao.php" method="POST">
		<table border="1"> 
			<tr>
				<td>Nome: </td>
				<td><input type="text" name="nome" value=""></td>	
			</tr>
			<tr>
				<td>E-mail: </td>
				<td><input type="text" name="email" value=""></td>
			</tr>
			<tr>
				<td>Endereço: </td>
				<td><input type="text" name="endereco" value=""></td>
			</tr>
			<tr>
				<td>Data de nascimento: </td>
				<td><input type="date" name="data" value=""></td>
			</tr>
			<tr>
				<td><input type="hidden" name="acao" value="inserir"></td>
				<td><input type="submit" name="entra" value="Entra"></td>
			</tr>
		</table>
	</form>	

	</center>
</body>
</html>
