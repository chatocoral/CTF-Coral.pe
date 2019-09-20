<nav>
	<div class="container">
		<ul>
			<li>
				<a 
					class="<?php if($_SERVER['REQUEST_URI'] == "/"): ?>active<?php endif ?>" 
					href="/"
				>
					Inicio
				</a>
			</li>
			<li>
				<a 
					class="<?php if($_SERVER['REQUEST_URI'] == "/vueltas"): ?>active<?php endif ?>" 
					href="/vueltas"
				>
					Vueltas
				</a>
			</li>
			<li>
				<a 
					class="<?php if($_SERVER['REQUEST_URI'] == "/formulario"): ?>active<?php endif ?>" 
					href="/formulario"
				>
					Formulario
				</a>
			</li>
			<li>
				<a 
					class="<?php if($_SERVER['REQUEST_URI'] == "/tienda"): ?>active<?php endif ?>" 
					href="/tienda"
				>
					Tienda
				</a>
			</li>
			<li>
				<a 
					class="<?php if($_SERVER['REQUEST_URI'] == "/admin"): ?>active<?php endif ?>" 
					href="/admin"
				>
					Admin
				</a>
			</li>
			<?php if($_SERVER['REQUEST_URI'] != "/pagina-escondida"){ echo "<!--";} ?>
			<li>
				<a 
					class="<?php if($_SERVER['REQUEST_URI'] == "/pagina-escondida"): ?>active<?php endif ?>" 
					href="/pagina-escondida"
				>
					Sorpresa
				</a>
			</li>
			<?php if($_SERVER['REQUEST_URI'] != "/pagina-escondida"){ echo "-->";} ?>
			
		</ul>
	</div>
</nav>