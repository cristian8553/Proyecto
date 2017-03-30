<?=$this->load->view('headers/menu')?>;
<br></br>

<div class="clearfix">&nbsp;</div>

<div class="container">
	<div class="col-md-8">
		<h2>Ver todos los enlaces</h2>
	</div>
</div>

<div class="container">
	<div class="col-md-12">
		<table class="table table-striped table-bordered">
			<thead>
			  <tr>
			  	<th>Titulo</th>
			  	<th>URL</th>
			  	<th>Acciones</th>
			  </tr>
			</thead>
			<tbody>
				<?php
				if($enlaces !=false){
					foreach ($enlaces ->result() as $row){
							echo "	<tr>
									<td >".$row->titulo."</td>
									<td >".$row->url."</td>
									<td><a href='editar/".$row->id."' > Editar</a> |
									<a href='eliminar/".$row->id."' > Eliminar</a></td>
									</tr>";
					}
				}else{
					echo "no hay enlaces";
				}
				?>
			</tbody>
		</table>
	</div>
</div>
