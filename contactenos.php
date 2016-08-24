<!DOCTYPE html>
<html>
<head>
	<title>Gestion de usuarios</title>
	<?php include_once('links.php'); ?>
</head>

<body>
	<?php include_once('menu.php'); ?>
	<script type="text/javascript">
		
		$(document).ready(function() {
		    $('select').material_select();
		  });
	</script>


	<div class="container">
 	<div class="collection">
    	<h5 class="center-align">Envienos su peteción, queja, reclamo, sugerencia.</h5>
  	</div>
  <br>
</div>
<div class="container">
<div class="row"> 
	<form class="col l12">
		<div class="row">		
			<div class="input-field col s12 l6 m12">
	          <i class="material-icons prefix">account_circle</i>
	          <input id="icon_prefix" type="text" class="validate">
	          <label for="icon_prefix">Nombres</label>
	        </div>

	        <div class="input-field col s12 l6 m12">
	          <i class="material-icons prefix">account_circle</i>
	          <input id="icon_prefix" type="text" class="validate">
	          <label for="icon_prefix">Apellidos</label>
	        </div>

	        <div class="input-field col s12 l6 m12">
	          <i class="material-icons prefix">phone</i>
	          <input id="icon_telephone" type="tel" class="validate">
	          <label for="icon_telephone">Teléfono</label>
	        </div>

	        <div class="input-field col s12 l6 m12">
	        <i class="material-icons prefix">swap_vert</i>
			    <select class="icons">
			      <option value="" disabled selected>Seleccione una opción</option>
			      <option value="" data-icon="images/sample-1.jpg" class="circle">Petición</option>
			      <option value="" data-icon="images/office.jpg" class="circle">Queja</option>
			      <option value="" data-icon="images/yuna.jpg" class="circle">Reclamo</option>
			      <option value="" data-icon="images/yuna.jpg" class="circle">Sugerencia</option>
			    </select>
			    <label>Tipo de PQRD</label>
			  </div>
	    </div>      
	    <div class="row">
	    	<div class="input-field col s12">
	    	  <i class="material-icons prefix">comment</i>
	          <textarea id="textarea1" class="materialize-textarea"></textarea>
	          <label for="textarea1">Escriba su PQRD</label>
	        </div>

	    </div>	

	    <div class="row">
			<div class="input-field col s12">
		    	 <button class="btn waves-effect waves-light" type="submit" name="action">Submit
				    <i class="material-icons right">send</i>
				  </button>
			</div>
	    </div>

	</form>
</div>
</div>


	<?php include_once('footer.php'); ?>
</body>
</html>