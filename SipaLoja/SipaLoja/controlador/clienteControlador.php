<?php

require_once "modelo/clienteModelo.php";



function adicionar(){
	
	if (ehPOST()) {

	//validação do email

		$input['Email'] = filter_input(INPUT_POST, 'Email', FILTER_VALIDATE_EMAIL);
 	if ($input['Email'] == FALSE) {
 		echo 'Informe um email valido. <br><BR>';
	}
		$email = $_POST["Email"];

 	//validação da senha

	if (strlen(trim($_POST['senha'])) == 0) {
 		echo "Você deve inserir uma senha válida.<br><BR>";
	}
		$senha = $_POST["senha"];
		

	//validação do nome
		
		$input['nome'] = filter_input(INPUT_POST, 'nome', FILTER_VALIDATE_EMAIL);
 	if ($input['nome'] == FALSE) {
 		echo 'Informe um nome valido. <br><BR>';
	}
		$nome = $_POST["nome"];


	//validação do cpf
		
		$input['cpf'] = filter_input(INPUT_POST, 'cpf', FILTER_VALIDATE_EMAIL);
 	if ($input['cpf'] == FALSE) {
 		echo 'Informe um cpf valido. <br><BR>';
	}
		$cpf = $_POST["cpf"];

		$msg = adicionarCliente($nome, $email, $senha);
		echo $msg;


	} else {
		exibir("produto/formulario");
	}
	
	
} 









?>