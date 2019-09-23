<?php

require '../elements/header.php';

if (isset($query)) {
	if (isset($query['nombre'])) {
		$nombre = $query['nombre'];
		$position = 0;
		$hashOut = $nombre;
		if (isset($query['hash'])) {
			$hash=$query['hash'];
			
			while ($hashOut != $hash && $position < 512) {
				$hashOut = md5($hashOut);
				$position++;
			}
		}
		$hashOut = md5($hashOut);
		//echo $hashOut,"=>",$position;
	}
}

?> 

<div class="panel">
	<div class="panel-heading">
		<h3>
			Formulario
		</h3>
	</div>
	<div class="panel-body">
		<form action="" method="GET">
			<label for="nombre">
				Ingresa tu nombre: <br>
				<input 
					type="text" 
					name="nombre" 
					id="nombre" 
					value="<?php echo (isset($nombre) ? $nombre : '' );?>"
					autocomplete="off"
				>
			</label>
			<br><br>
			<?php if (isset($nombre)): ?>
				<label for="">
					Copia este código: <br>
					<input 
						type="text" 
						id="hash2" 
						class="long"
						disabled 
						value="<?php echo (isset($hashOut) ? $hashOut : '') ?>"
						autocomplete="off"
					>
				</label>
				<br><br>
				<label for="hash">
					Aquí: <br>
					<input 
						type="text" 
						name="hash" 
						id="hash"
						class="long"
						autocomplete="off" 
					>
				</label>
				<br><br>
				<em>(<?php echo $position+1; ?>/512)</em> <br><br>
				
			<?php endif ?>
			<button>Enviar</button>
			<?php if (isset($position) && $position==511): ?>
				<p>Ojala hayas llegado aqui usando algun script.</p>
				<p>Recuerda que tu web puede ser manipulada tambien por código.</p>
				<strong>
					{KEY-04:WebNoSoloParaHumanos}
				</strong>
			<?php endif ?>
		</form>
	</div>
</div>
<?php require '../elements/footer.php' ?>