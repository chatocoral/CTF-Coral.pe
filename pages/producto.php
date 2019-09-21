<?php

require '../elements/header.php';

$id=$p[2];

$productData = [
	'1'=>[],
	'2'=>[
		'titulo'		=> 	'Zapatos',
		'descripcion' 	=> 	'Estos son unos buenos zapatos.',
		'img'			=>	'/img/zapatos.jpg',
		'precio'		=>	'18.00'
	],
	'3'=>[
		'titulo'		=>	'Tornillos',
		'descripcion' 	=> 	'Estos son unos buenos tornillos.',
		'img'			=>	'/img/tornillos.jpg',
		'precio'		=>	'99.00'
	]
]

?> 

<div class="panel producto">
	<div class="panel-heading">
		<h3>
			<?php 
				if ($id=='1') {
					echo "Bien hecho!";
				}elseif($id=='2' || $id=='3'){
					echo $productData[$id]['titulo']; 
				}else{
					echo "Nunca tanta suerte.";
				}
			?>
		</h3>
	</div>
	<div class="panel-body">
		<?php if ($id=='1'): ?>
			<p>
				Siempre ten cuidado con los paramtros de tu URL, recuerda que el usuario puede poner lo que el quiera en el URL. Prepara tu sistema para estos casos.
			</p>
			<strong>
				{KEY-08:NadaDeInyeccionSQL}
			</strong>
		<?php elseif($id=='2'|| $id=='3'): ?>
			<img src="<?php echo $productData[$id]['img']; ?>" alt="">
			<p>
				<?php echo $productData[$id]['descripcion']; ?>
			</p>
			<label>Precio:</label>
			<strong>
				$
				<?php echo $productData[$id]['precio']; ?>
			</strong>
		<?php else: ?>
			<p>
				Sigue buscando en otros lugares.
			</p>
		<?php endif ?>
		<br>
		<br>
		<a href="/tienda"> Volver </a>
	</div>
</div>

<?php require '../elements/footer.php' ?>