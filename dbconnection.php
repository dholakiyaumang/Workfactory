<?php 
$server = "localhost";
$user = "root";
$password = "";
$db ="work_factory";
$con= mysqli_connect($server,$user,$password,$db);

if(!$con)
{
  ?>
    <script>
     alert("Database Conection Error");
    </script>
  <?php
}

?>

