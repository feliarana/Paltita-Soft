<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet" media="screen">

    	<title>Crear subasta</title>
	</head>

	<body>

		<p align="center">
			<a href="<?= base_url(index_page().'/index') ?>">
				<img src="<?= base_url('images/logo.png') ?>">
			</a>
		</p>

		<!-- form_open_multipart es para la carga de archivos -->
		<?= form_open_multipart('crearSubasta/recibirDatos',"onSubmit='return validar();'"); ?>
		<?php

			$nombreSubasta = array(
				'name' => 'nombreSubasta',
				'class' => 'form-control',
	 			'placeholder' => 'Inserte nombre del producto',
	 			'required' => 'required',
	 			'pattern' => '.{3,64}$',
	 			'title' => 'Por favor, ingrese un mínimo de 3 caractéres. Maximo 64.'
				);

			$descripcion = array(
				'name' => 'descripcion',
				'class' => 'form-control',
	 			'placeholder' => 'Inserte descripcion',
	 			'required' => 'required',
	 			'pattern' => '.{5,250}$',
	 			'title' => 'Por favor, ingrese un mínimo de 5 caractéres. Maximo 250.'
				);

			$idCategoria = array(
				'name' => 'idCategoria'
				);

			$fechaFin = array(
				'name' => 'fechaFin'
				);			

		?>
		
		<div class="row">
			<div class="col-md-4">
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<p align="center">
						<?= form_label('Nombre del producto','nombreSubasta') ?>
					</p>
				<?= form_input($nombreSubasta) ?>
				</div>
			</div>
			<div class="col-md-4">
			</div>
		</div>

		<div class="row">
			<div class="col-md-4">
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<p align="center">
						<?= form_label('Descripción','descripcion') ?>
					</p>
				<?= form_input($descripcion) ?>
				</div>
			</div>
			<div class="col-md-4">
			</div>
		</div>

		<br>
		<div class="row">
			<div class="col-md-4">
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<p align="center">
						<?= form_label('Seleccione una imagen','') ?>
					</p>
					<input type="file" name="userfile" size="20" id="upload"/>
				</div>
			</div>
			<div class="col-md-4">
			</div>
		</div>

		<!-- Contenido del dropdown de categorias -->
		<?php $categoria = array(
                1 => 'Vehículos',
                2 => 'Electrodomésticos',
                3 => 'Computación',
                4 => 'Teléfonos',
                5 => 'Ropa, Moda y Belleza',
                6 => 'Deportes',
                7 => 'Libros',
                8 => 'Entretenimiento',
                9 => 'Inmuebles',
                10 => 'Animales',
                11 => 'Servicios',
                12 => 'Hogar'
                ); ?>

        <br>
        <div class="row">
			<div class="col-md-4">
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<p align="center">
						<?= form_label('Categoría ','') ?>
					</p>
					<p align="center">
						<?= form_dropdown('categoria',$categoria); ?>
					</p>
				</div>
			</div>
			<div class="col-md-4">
			</div>
		</div>
		
		<!-- Contenido del dropdown de la cantidad de días de la subasta -->
		<?php $cantDias = array(
	            '15' => 15,
	            '16' => 16,
	            '17' => 17,
	            '18' => 18,
	            '19' => 19,
	            '20' => 20,
	            '21' => 21,
                '22' => 22,
                '23' => 23,
                '24' => 24,
                '25' => 25,
                '26' => 26,
                '27' => 27,
                '28' => 28,
                '29' => 29,
                '30' => 30
                ); ?>
        <br>
        <div class="row">
			<div class="col-md-4">
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<p align="center">
						<?= form_label('Cantidad de días que se encontrará publicada la subasta','') ?>
					</p>
					<p align="center">
						<?= form_dropdown('cantDias',$cantDias); ?>
					</p>
				</div>
			</div>
			<div class="col-md-4">
			</div>
		</div>

		<div class="row">
			<div class="col-md-4">
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<p align="center">
						<!-- Boton submit -->
						<?= form_submit('','Publicar subasta', "class='btn btn-darkest'") ?>
					</p>
				</div>
			</div>
			<div class="col-md-4">
			</div>
		</div>

	</form>
	</body>
	<script type="text/javascript">
		function validar(){
			var archivo= document.getElementById('upload').value;
			if(archivo==null || archivo==""){
				alert('No ha elegido ningun archivo para la subasta');
				return false;
			}
			else
			{
				alert('Su subasta ha sido publicada con éxito');
				return true;
			}
		}
	</script>
</html>