<?php

require '../elements/header.php';
require '../controllers/Visits.php';
$visitas = Visits::get();
?> 
<div class="panel">
	<div class="panel-heading">
		<h3>
			Eres nuestro visitante número: <?php echo $visitas ?>
		</h3>
	</div>
	<div class="panel-body">
		<p>
			Cada 1000 visitantes recibe un premio especial !
		</p>
		<?php if($visitas%1000===0): ?>
			<strong>{KEY-03:OjalaNoLoHayasHechoAMano}</strong>
		<?php endif ?>
	</div>
</div>

<?php 
require '../elements/footer.php' ;
Visits::increase();
?>