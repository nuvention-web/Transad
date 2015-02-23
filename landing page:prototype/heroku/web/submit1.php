<?php
   $host        = "host=ec2-54-204-35-132.compute-1.amazonaws.com";
   $port        = "port=5432";
   $dbname      = "dbname=dso8qo1cosfh9";
   $credentials = "user=nhfjfwpxeglesv password=y9-vJ3hN0Po-Vl9r7e3EyT4D8A";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db){
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
   
$first = $_POST['first_name'];
$last = $_POST['last_name'];
$email1 = $_POST['email'];

   
   $sql =<<<EOF
      INSERT INTO test_table (id,first_name,last_name,email)
      VALUES (1, '$first' , '$last' , '$email1');
EOF;

   $ret = pg_query($db, $sql);
   if(!$ret){
      echo pg_last_error($db);
   } else {
      echo "Records created successfully\n";
   }
   pg_close($db); 
   
   
?>
<!DOCTYPE html>
<!-- saved from url=(0050)http://getbootstrap.com/examples/jumbotron-narrow/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TransAd</title>

<link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
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
            <li role="presentation" class="active"><a href="index.php">Home</a></li>
            <li role="presentation"><a href="about.php">About</a></li>
            <li role="presentation"><a href="register.php">Sign Up</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">TransAd</h3>
      </div>
      
      <h1>Thank you</h1>

<script src="boostrap-3.3.2-dist/js/ie10-viewport-bug-workaround.js"></script>
  

</body></html>


