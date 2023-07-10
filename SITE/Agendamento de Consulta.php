<html>

<head>




<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\estilos1.css">


<title>Agendamento </title>


<body>




<!--agendamento de consulta do animal-->



</p>
</div>

<img class="imagens" src="novologo6.png">

<style type="text/css">
body{
background-image:url(fundoverde.png);
background-repeat:repeat-x;
background-color:white;
}
.tabela1{
border-radius: 30px; 
margin-left:200px;

}
.tabela2{
border-radius: 30px; 
margin-left:200px;

}
.tabela4{
border-radius: 30px; 
margin-left:200px;

}

.imagens{
border:1px solid #fffff;
cursor:hand;
}
.imagens:hover{
border:1px solid #ffffff;
zoom:120%;

}


.campo{
	margin-left:950;
	width: 200vw;
    height: 3vw;
	
}
.campo1{
	

 float:right;
    
   
    position: absolute;
    top:48vw;
       right:5vw;
	
}



</style>
<div id="cx1"></div>
<font face="times new roman" size="3" color="#00FA9A">

<font color="black"></font>
<table class="tabela1" cellspacing="5">
<tr >
<td width="800" class="tabela2">

<p>RESPONSÁVEL:  <input type="text" name="Responsável" size="60" maxlenght="50"><br><br><br>

ENDEREÇO DE CONSULTA:  <input type="text" name="Endereço" size="45" maxlenght="60"><br><br><br>

TELEFONE:  <input type="text" name="Telefone" size="35" placeholder="Telefone para contato"><br><br><br>

SALDO DEVEDOR:  <input type="text" name="Saldo Devedor" size="40"><br><br><br>
</p>
</td>

<td >
<p >  ANIMAL:  <input type="text" name="Animal" size="40"><br><br><br></p>

<p >  ESPÉCIE:  <input type="text" name="Espécie" size="40"><br><br><br></p>

<p >  RAÇA:  <input type="text" name="Raça" size="40"><br><br><br></p>
</td>
<tr>

</table>


<table cellspacing="10">
<tr>
<td>
NUM CONSULTA: <input type="text" name="num consulta" size="20"><br>
</td>
<td>
VETERINÁRIO: <input type="text" name="VETERINÁRIO" size="20" placeholder="Nome do veterinário"><br>

</td>

</td>

<td>
HORA:
<select name="HORA">
<option>08:00  
<option>10:00  
<option>12:30  
<option>15:00  
<option>16:40  
</select>
</td>

<td>
<label for="data">DATA:</label>
<input type="date" id="data" name="data">
<input type="submit" value="enviar"></td>
<td>
<label for="data">DATA RETORNO:</label>
<input type="date" id="data" name="data retorno">
<input type="submit" value="enviar"></td>
</td>
</table>

<table class="tabela1" cellspacing="0">
<tr>
<td width="100" class="tabela4">
<p> DIAGNÓSTICO:  </p>
 <div class="campo">
<p >RECEITA VETERINÁRIA:</p>
</div>

<br>

<textarea name="diagnostico" rows="15" cols="80"  ></textarea>
 <div class="campo1">
<textarea name="Receita Veterinária" rows="15" cols="30"></textarea>
</div>
<br><br><br>

<input type=submit value="Enviar">
<input type=reset value="Limpar">
</td>

</table>
</font>




</form>
</body>

</head>

</html>