<?php

 $servername = "localhost";
 $username = "root";
 $password = "";

 $database = "delivery_web";

 $conn = mysqli_connect($servername,$username,$password,$database);


 if($conn) {
    echo "";
 }
 else {
    die("Eroor". mysqli_connect_error());
   
 }

 ?>