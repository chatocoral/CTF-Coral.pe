<nav>
	<div class="container">
		<ul>
			<li><a class="<?php if($_SERVER['REQUEST_URI'] == "/"): ?>active<?php endif ?>" href="/">Inicio</a></li>
			<li><a class="<?php if($_SERVER['REQUEST_URI'] == "/vueltas"): ?>active<?php endif ?>" href="/vueltas">Vueltas</a></li>
			<li><a class="<?php if($_SERVER['REQUEST_URI'] == "/formulario"): ?>active<?php endif ?>" href="/formulario">Formulario</a></li>
			<li><a href="/">Nuevo</a></li>
		</ul>
	</div>
</nav>