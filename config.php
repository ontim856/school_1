<?php
$docroot = $_SERVER['DOCUMENT_ROOT'].'/';
$webroot = "http://school_1.akash/";
$css = $webroot."public/css/";
$js = $webroot."public/js/";
$img = $webroot."public/img/";
// echo $docroot." ".$webroot; die();


// DB Connection
 $dsn = "mysql:host=localhost;dbname=school_1"; // Change this to your DSN
 $username = "root";        // Change this to your MySQL username
 $password = "";            // Change this to your MySQL password

 try {
    $pdo = new PDO($dsn, $username, $password);
    // Set the PDO error mode to exception
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     // echo "Connected successfully";
} catch (PDOException $e) {
     echo "Connection failed: " . $e->getMessage();
}

//      // SQL query to select all data from the slides table
$sql = "SELECT * FROM slides";
     
//      // Prepare and execute the query
     $stmt = $pdo->prepare($sql);
     $stmt->execute();
     
//      // Fetch all results
     $slides = $stmt->fetchAll(PDO::FETCH_ASSOC);


// Environment or Globar variables
// $docroot = $_SERVER['DOCUMENT_ROOT']."/school_1.akash";
// $webroot = "http://localhost/school_1.akash";
// $frontend = $docroot . "/Frontend";
// //$backend = $docroot . "/backend";
// $fpartials = $frontend . "/partials";
// //$bpartials = $backend . "/partials";
// $public = $webroot . "/public";
// $ima = $webroot . "/public/ima";


     ?>