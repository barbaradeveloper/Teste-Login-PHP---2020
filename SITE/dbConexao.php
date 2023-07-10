<?php
//conexao.php
       $conexao = mysqli_connect("localhost","root","");
	   $base = mysqli_select_db($conexao,"pet_shop");
?>