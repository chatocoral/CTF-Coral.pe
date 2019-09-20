<?php

require '../elements/header.php';

setcookie('role','user');

?> 

<div class="panel">
	<div class="panel-heading">
		<h3>
			Zona Administrativa
		</h3>
	</div>
	<?php if(@$_COOKIE['role']=='admin'): ?>
		<div class="panel-body">
			<strong class="green-text">Acceso Permitido!</strong>
			<p>
				Nunca muestres información privada solo protegida por un valor en las cookies, recuerda que cualquier browser puede editar las cookies
			</p>
			<strong>
				{KEY-05:GuardaConLasCookies}
			</strong>
			<p>
				Este es el archivo secreto señor administrador:
				<a href="superSecreto.zip">Descargar</a>
				La clave para abrirlo es ese numero que siempre usamos.
			</p>
		</div>
	<?php else: ?>
		<div class="panel-body">
			<strong class="red-text">Acceso Denegado!</strong>
			<p>
				Esta área es para solo los usuarios admin.
			</p>
		</div>
	<?php endif ?>
</div>
 

<?php require '../elements/footer.php' ?>