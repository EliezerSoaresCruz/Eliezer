<?php
if ($_POST['acao']=='inserir') {
	$data = date('d-m-Y',strtotime($_POST['data']));
	echo('<b>Seu nome é: '.$_POST['nome'].'<br>');
	echo('Seu e-mail é: '.$_POST['email'].'<br>');
	echo('Seu endereço é: '.$_POST['endereco'].'<br>');
	echo('Nasceu em: '.$data.'</b>');
}
?>
