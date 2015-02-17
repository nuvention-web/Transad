<!DOCTYPE html>
<html>
<body>

<h1>JavaScript Can Change Images</h1>

<div id="image">
	<img id="myImage" onclick="changeImage()" src="ad2.jpg" width="100" height="180">
</div>

<p>Click the light bulb to turn on/off the light.</p>

<script>
function changeImage() {
	var parent = document.getElementById('image');
    var child = document.getElementById('myImage');
    parent.removeChild(child);
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
   
   $sql =<<<EOF
      SELECT (first_name,last_name,email) into ('$first' , '$last' , '$email1') FROM test_table where email ='aakash1299@gmail.com';
     
EOF;
   $sql1 =<<<EOF
      INSERT INTO click_data (first_name,last_name,email)
      VALUES ('$first' , '$last' , '$email1');
EOF;
   
   $ret = pg_query($db, $sql);
   if(!$ret){
      echo pg_last_error($db);
   } else {
      echo "Records created successfully_1\n";
   }
   $ret1 = pg_query($db, $sql1);
   if(!$ret1){
      echo pg_last_error($db);
   } else {
      echo "Records created successfully_2\n";
   }
   pg_close($db); 
   
   
?>

}

</script>

</body>
</html>