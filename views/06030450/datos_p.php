<?php
	include ('../../libs/adodb5/adodb-pager.inc.php');
	include ('../../libs/adodb5/adodb.inc.php');
	include ('../../models/Conexion.php');
	include ('../../models/Modelo.php');
	include ('../../models/Caracol.php');
	include ('../layouts/header.php');
?>


<div>
<h2>Datod personales</h2>


<form role="form">
  <div class="form-group">
	<label>Nombre</label>
	<input type="text" id="nombe" class="form-control">
  </div>
</form>

</div>



<?php
  include ('../layouts/footer.php');
?>
