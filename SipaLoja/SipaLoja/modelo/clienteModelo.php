<?php

	function adicionarCliente($nome, $email, $senha, $cpf, $sexo, $nascimento)
		$sql = "INSERT INTO cliente (nome, email, senha, cpf, sexo, nascimento) VALUES('$nome', '$senha', '$email', '$cpf', '$sexo', '$nascimento')"{
		$resultado = mysql_query($cnx = conn(), $sql);
		if(!$resultado) { die('erro ao cadastrar cliente' .mysql_error($cnx));}
		return 'Cadastro realizado com sucesso!';
	}























?>


/* TABELAS */

create table cliente(
		idCliente integer NOT NULL auto_increment,
		nome varchar(50) NOT NULL,
		email varchar(50) NOT NULL,
		senha varchar(15) NOT NULL,
		cpf varchar(11) NOT NULL,
		nascimento date NOT NULL,
		sexo varchar(1) NOT NULL,
		primary key (idCliente)
	);
