<?=$this->load->view('headers/menu')?>;
<br></br>

<div class="container">
	<div class="row">
		<div class="col-md-8">
		<h3>Agregar Enlaces</h3>
			<form class="form-horizontal" role="form" id="form" name="form" action="guardar/" method="POST">
			<div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Titulo</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingresa un titulo">
			    </div>
		    </div>
		    <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">URL</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="url"  name="url" placeholder="Ingresa una URL">
			    </div>
		    </div>
		    <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-primary">Guardar</button>
			    </div>
		    </div>
			</form>
		</div>
	</div>
</div>


