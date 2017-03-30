  <body>

    <div class="container">

      <form class="form-signin" action="/codeIgniter/index.php/restaurant/ingresar/" method="POST">
        <h2 class="form-signin-heading">Ingresar a sistema</h2>
        <input type="text" name="id" id="id" class="form-control" placeholder="Usuario" required autofocus>
        <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>