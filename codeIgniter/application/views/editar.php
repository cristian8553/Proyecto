<?=$this->load->view('headers/menu')?>;
<br></br>


<p><b>Editar enlaces</b></p>
<form id="form" name="form" action="/codeIgniter/index.php/main/editarEnlace/<?=$id?>" method="POST">

	<label for ="titulo">Titulo</label>
	<input type="text" size ="20" name="titulo" id="titulo" value="<?=$titulo?>" />
	<br />
	<label for="url">URL</label>
	<input type="text" size ="30" name="url" id="url" value="<?=$url?>" />
	<p><input type="submit" name="guardar" id="guardar" value="Editar Enlace" /></p>
</form>
