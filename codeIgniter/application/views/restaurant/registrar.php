<body>
<form class="form-horizontal" action="guardar/" method="POST">
    <div class="form-group">
        <label class="control-label col-xs-3">Nombre:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Apellido:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" placeholder="Apellido" name="apellido" id="apellido" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Password:</label>
        <div class="col-xs-9">
            <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Confirmar Password:</label>
        <div class="col-xs-9">
            <input type="password" class="form-control" placeholder="Confirmar Password" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Puesto:</label>
        <div class="col-xs-2">
            <label class="radio-inline">
                <input type="radio" name="puesto" <?php if (isset($puesto) && $puesto=="Mesero") 
                echo "checked" ?> value="Mesero" id="Mesero" required> Mesero
            </label>
        </div>
        <div class="col-xs-2">
            <label class="radio-inline">
                <input type="radio" name="puesto" <?php if (isset($puesto) && $puesto=="cocinero") 
                echo "checked" ?> value="Cocinero" id="Cocinero"> Cocinero
            </label>
        </div>
        <div class="col-xs-2">
            <label class="radio-inline">
                <input type="radio" name="puesto" <?php if (isset($puesto) && $puesto=="Recepcionista") 
                echo "checked" ?> value="Recepcionista" id="Recepcionista"> Recepcionista
            </label>
        </div>
    </div>
    <br>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</form>
</body>
</html>