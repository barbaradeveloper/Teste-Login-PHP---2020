<?php
    require "dbConexao.php";
	
	$sql = 'select responsavel,animal,especiel,raca,data,servico from agenservicos order by responsavel,animal,especiel,raca,data,servico';
	$exec= mysqli_query($conexao, $sql);
	
?>