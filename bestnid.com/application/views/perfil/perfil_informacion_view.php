<!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    	<!-- Se cargan los estilos de bootstrap -->
    	<link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet" media="screen">
    	<!-- Se cargan los estilos de la libreria dataTables -->
    	<link href="<?= base_url('css/jquery.dataTables.min.css') ?>" rel="stylesheet" type="text/css">
    	<!-- Se cargan los estilos con bootstrap de la libreria dataTables -->
    	<link href="<?= base_url('css/dataTables.bootstrap.css') ?>" rel="stylesheet" type="text/css">
    	<!-- Se cargan los estilos del Responsive Menu ==> http://cssmenumaker.com/blog/free-css-sidebar-menu-navigations -->
    	<link href="<?= base_url('css/elegantAccordionMenu.css') ?>" rel="stylesheet" type="text/css">

	</head>
<div class="bs-example">
			<?php foreach($query->result() as $row){}?>
			<h2>Información del usuario</h2>
		    <dl class="dl-horizontal">
		        <dt>DNI</dt>
		        <dd> <? echo $row->DNI; ?> </dd>
		        <dt>Nombre</dt>
		        <dd> <? echo $row->nombre; ?>  </dd>
		        <dt>Apellido</dt>
		        <dd> <? echo $row->apellido; ?>  </dd>
		        <dt>Email</dt>
		        <dd> <? echo $row->email; ?>  </dd>
		        <dt>Direccion</dt>
		        <dd> <? echo $row->direccion; ?>  </dd>
		        <dt>Teléfono</dt>
		        <dd> <? echo $row->telefono; ?>  </dd>
</html>