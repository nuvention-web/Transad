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

  
   
$first = $_GET["h"];
$email1= $_GET["d"];

   $sql1 =<<<EOF
      INSERT INTO formatcollapse_data (first_name,email)
      VALUES ('$first','$email1');
EOF;


  $sql2 =<<<EOF
       
       
EOF;
   
   $ret1 = pg_query($db, $sql2);
   if(!$ret1){
      echo pg_last_error($db);
   } else {
      echo "Records created successfully_2\n";
   }
   pg_close($db); 
   
   
?>
