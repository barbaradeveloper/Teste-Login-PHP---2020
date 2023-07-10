<?php
//cadastrarAnimal.php

     require "dbConexao.php";
	 
	 $codigo = $_POST['codigo'];
     $raca = $_POST['raca'];
	 $pelagem = $_POST['pelagem'];
     $cor = $_POST['cor'];
	 $porte = $_POST['porte'];
     $sexo = $_POST['sexo'];
	 $apelido = $_POST['apelido'];
     $nome = $_POST['nome'];
	 $pai = $_POST['pai'];
     $mae = $_POST['mae'];
	 $opiniao = $_POST['opiniao'];
     
	 
	 $query ="insert into cadastropets (codigo,raca,pelagem,cor,porte,sexo,apelido,nome,pai,mae,opiniao) values ('".$codigo."','".$raca."','".$pelagem."','".$cor."','".$porte."','".$sexo."','".$apelido."','".$nome."','".$pai."','".$mae."','".$opiniao."')";
	 
	 $exec =mysqli_query($conexao,$query);
	 
	 if($exec){
		 header("location:usuario.php");
	 }
     else {
		 header("location:DadosAnimal.php");
	 }
?>