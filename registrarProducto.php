<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</head>
<body background="imagenes/fondoempleado2.jpg">

<?php
	include "encabezado.php";
?>


<nav class="nav">
  <a class="nav-link" href="indexProducto.php">Pagina principal</a>
</nav>

<form action="manejadormosProducto.php" method="post" enctype="multipart/form-data">


<center>

<br><br>
	<font face="Verdana" size="7" color="B3B73C">
 Registro de productos.
  </font>
<br><br><br>

	<font face="Arial" size="8" color="black"></font>
	<table border="0"></table>
<tr>
		<td><font face="Verdana" size="5" color="black">
Nombre del producto:
	</font></td>
	<td><input type="text" name="nom"></td>
</tr>
<br><br>
	<td><font face="Verdana" size="5" color="black">
Marca del producto:
	</font></td>
	<td><input type="text" name="mar"></td>
</tr>
<br><br>
	<td><font face="Verdana" size="5" color="black">
Precio del producto:
	</font></td>
	<td><input type="number" name="pre"></td>
</tr>
<br><br>
<tr>
	<td><font face="Verdana" size="5" color="black">
Imagen del producto:
	</font></td>
	<td><input type="file" id="foto" name="foto"></td>
</tr>
<br><br>

<br><br>
<input type="submit" name="ing" value="REGISTRAR" class="btn btn-primary btn-lg">

</center>

</form>
</body>
</html>

