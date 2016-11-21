<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            @if (session('status'))
                <div class="alert alert-danger">
                    {{ session('status') }}
                </div>
            @endif
            {!! Form::open(['url' => 'login']) !!}
                <h1>Admin</h1>
                <div>
                  <input name="username" type="text" class="form-control" placeholder="Nombre de Usuario" required="" />
                </div>
                <div>
                  <input name="password" type="password" class="form-control" placeholder="Password" required="" />
                </div>
                <div>
                  <button type="submit" class="btn btn-default" name="button">Ingreso</button>
                  <a class="reset_pass" href="#">Cambio Clave</a>
                </div>

                <div class="clearfix"></div>

                <div class="separator">
                  <div>
                    <h1><img src="img/logo.png" alt="" /></h1>

                  </div>
                </div>
            {!! Form::close() !!}



          </section>
        </div>
      </div>
    </div>
  </body>
</html>
