<?php
// DB Connection
$host = "localhost";
 $dsn = "school_1"; // Change this to your DSN
 $username = "root";        // Change this to your MySQL username
 $password = "";  
 
 // Change this to your MySQL password

 $conn = mysqli_connect($host,$username,$password,$dsn);

// if($conn) {echo "Connected";}

//      // SQL query to select all data from the slides table
$akash = "SELECT * FROM slides";
   

$slides = mysqli_query($conn,$akash);