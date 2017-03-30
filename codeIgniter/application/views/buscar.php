
<div id="container">
 <div class="col-md-8">
 	<h1>Bienvenido</h1>
 </div>
 
 <div class="col-md-8">
 <div class="container">
  	<div id="body">
		<?=$this->load->view('headers/menu')?>
		<form id="busacr" action="/codeIgniter/index.php/main/buscar" method="GET">
		<label for="url">Buscar: </label>
		<input type="text" size ="20" name="query" id="query" value="" />
		<p><input type="submit" id="buscar" value="Buscar" /></p>
		<br></br>
		<?php
		if($result){
			foreach ($result->result() as $row) {
				echo "<a href='".$row->url."' target='_blank'>".$row->titulo."</a><br />";
			}
		}
		?>
	</form>
	</div>
</div>
</div>