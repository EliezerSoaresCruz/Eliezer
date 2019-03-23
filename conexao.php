<?php
if ($_POST['acao']=='inserir') {
	$data = date('d-m-Y',strtotime($_POST['data']));
	print('<b>Seu nome é: '.$_POST['nome'].'<br>');
	print('Seu e-mail é: '.$_POST['email'].'<br>');
	print('Seu endereço é: '.$_POST['endereco'].'<br>');
	print('Nasceu em: '.$data.'</b>');
}
?>
