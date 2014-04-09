<?php
	    include ('../../libs/adodb5/adodb-pager.inc.php');
	    include ('../../libs/adodb5/adodb.inc.php');
	    include ('../../models/Conexion.php');
	    include ('../../models/Modelo.php');
	    include ('../../models/Caracol.php');
	    include ('../layouts/header.php');
?>
<pre>
<?php
	echo "Aqui va el codigo del caracol";
	$caracol = new Caracol();
	if (isset($_POST["profundidad"])) {
		$caracol->set_profundidad($_POST["profundidad"]);
		$caracol->set_sube($_POST["sube"]);
		$caracol->set_baja($_POST["baja"]);
		$caracol->set_dias($_POST["dias"]);
		$caracol->inserta($caracol->get_atributos());
	}
	$rs = $caracol->consulta_datos();
	$caracol->show_grid('*', ' ','10');
	//print_r($rs->GetArray());
?>	


<table class="table"> 
<?php
	$array_rs = $rs->GetArray();
	foreach ($array_rs as $value) {
?>	
	<tr>
		<td><?php echo $value['0']; ?></td>
		<td><?php echo $value['1']; ?></td>
		<td><?php echo $value['2']; ?></td>
		<td><?php echo $value['3']; ?></td>
		<td><?php echo $value['4']; ?></td>
	</tr>

<?php
	}
?>
</table>

<form action="" method="POST">
	<label for="profundidad"></label>
		<input type="text" name="profundidad" id="profundidad">
	<label for="sube"></label>
		<input type="text" name="sube" id="sube">
	<label for="baja"></label>
		<input type="text" name="baja" id="baja">
	<label for="dias"></label>
		<input type="text" name="dias" id="dias">

	<input type="submit" value="insertar" >
</form>



<?php
  include ('../layouts/footer.php');
?>
