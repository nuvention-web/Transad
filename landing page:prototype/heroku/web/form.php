

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TransAd: Sign Up</title>
   <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.3.2-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/jumbotron-narrow/jumbotron-narrow.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style type="text/css"></style></head>

  <body>

    <div class="container">
      <div class="header">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation"><a href="index.php">Home</a></li>
            <li role="presentation"><a href="about.php">About</a></li>
            <li role="presentation" class="active"><a href="register.php">Sign Up</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">TransAd</h3>
      </div>

      <div class="jumbotron">
        <h1>Sign up today</h1>
        <p class="lead">Get the latest updates on TransAd and be the first to know when it's released.</p>
        <form role="form" action = "submit1.php" method= "post">
          <div class="well">
            <div class="input-group input-group-lg">
              <input type="text" class="form-control" placeholder="First Name" aria-describedby="sizing-addon1" name = "first_name">
              <input type="text" class="form-control" placeholder="Last Name" aria-describedby="sizing-addon1" name = "last_name">
              <input type="text" class="form-control" placeholder="Email" aria-describedby="sizing-addon1" name = "email">
            </div>
          </div>
          <button type="submit" class="btn btn-lg btn-success" role="button">Sign up</button>
        </form>
      </div>

      <footer class="footer">
        <p>TransAd 2015</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="boostrap-3.3.2-dist/js/ie10-viewport-bug-workaround.js"></script>
  

</body></html>

