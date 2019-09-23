<nav>
	<div class="container">
		<ul>
			<li>
				<a 
					class="<?php if($p[1] == ""): ?>active<?php endif ?>" 
					href="/"
				>
					Inicio
				</a>
			</li>
			<li>
				<a 
					class="<?php if($p[1] == "vueltas"): ?>active<?php endif ?>" 
					href="/vueltas"
				>
					Vueltas
				</a>
			</li>
			<li>
				<a 
					class="<?php if($p[1] == "formulario"): ?>active<?php endif ?>" 
					href="/formulario"
				>
					Formulario
				</a>
			</li>
			<li>
				<a 
					class="<?php if($p[1] == "tienda"): ?>active<?php endif ?>" 
					href="/tienda"
				>
					Tienda
				</a>
			</li>
			<li>
				<a 
					class="<?php if($p[1] == "admin"): ?>active<?php endif ?>" 
					href="/admin"
				>
					Admin
				</a>
			</li>
			<?php if($p[1] != "pagina-escondida"){ echo "<!--";} ?>
			<li>
				<a 
					class="<?php if($p[1] == "pagina-escondida"): ?>active<?php endif ?>" 
					href="/pagina-escondida"
				>
					Sorpresa
				</a>
			</li>
			<?php if($p[1] != "pagina-escondida"){ echo "-->";} ?>
			
		</ul>
	</div>
</nav>