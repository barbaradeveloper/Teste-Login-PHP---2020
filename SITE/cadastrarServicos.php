<?php
//cadastrarServicos.php

     require "dbConexao.php";
	 
     $responsavel = $_POST['responsavel'];
     $animal = $_POST['animal'];
     $especiel = $_POST['especiel'];
     $raca = $_POST['raca'];
     $data = $_POST['data'];
     $servico = $_POST['servico'];
     
	 
	 $query ="insert into agenservicos (responsavel,animal,especiel,raca,data,servico) values ('".$responsavel."','".$animal."','".$especiel."','".$raca."','".$data."','".$servico."')";
	 
	 $exec =mysqli_query($conexao,$query);
	 
	 if($exec){
		 header("location:usuarioS.php");
	 }
     else {
		 header("location:servicosOferecidos.php");
	 }
?>