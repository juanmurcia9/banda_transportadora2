<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8">
    <link rel="stylesheet"  href="diseño.css">  
		
	<title> Banda Transportadora </title>




</head>
<div id = "fondo"> 
<body>
<div id="fus">

<img src="fus.png" alt="" width="50%" >
</div>
<div id = "caja">
   <h1 id="titulo">BANDA TRANSPORTADORA</h1>
</div>


<?php

$conexion = mysqli_connect("sql10.freemysqlhosting.net", "sql10413816", "hFAimKGqCr");
$consulta= "SELECT*FROM banda";


mysqli_select_db ($conexion,"sql10413816");
$datos= mysqli_query ($conexion,$consulta);
?>	

 <table id ="tabla">
      <tr> 
        
        <th>ID</th> 
        <th>VERDES</th>
        <th>ROSAS</th>      
		<th>RECHAZADAS</th>
		<th>TOTALES</th>
		
      </tr>
 

<?php
while ($fila =mysqli_fetch_array($datos)){

?>

<tr> 
                <td> <?php echo $fila["ID"] ?></td> 
                <td> <?php echo $fila ["verdes"] ?> </td>
				<td> <?php echo $fila ["rosas"] ?> </td>
				<td> <?php echo $fila ["rechazadas"] ?> </td>
				<td> <?php echo $fila ["totales"] ?> </td> 
				


<?php
}
?>

</table>
</div>
</body>
</html>

	</body>
</html>