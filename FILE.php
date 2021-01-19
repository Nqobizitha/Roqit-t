<?php 
 
 session_start(); 

// Database connection

 $db = mysqli_connect('localhost', 'root', '', 'roqitt');



    // Database connection
    
    //intializing varibles 
$desc     = "";
$salary   = "";
$location = "";
$url      = "";
$company  = "";
$keywords = "";

$errors = array();    


if(isset($_POST["submit"])) {
  $company = mysqli_real_escape_string($db, $_POST['company']);
  $keywords = mysqli_real_escape_string($db, $_POST['keywords']);
  $location = mysqli_real_escape_string($db, $_POST['location']);
  $salary = mysqli_real_escape_string($db, $_POST['salary']);
  $url = mysqli_real_escape_string($db, $_POST['url']);
  $desc = mysqli_real_escape_string($db, $_POST['desc']);



  $sql = "INSERT INTO jobs (description, salary, location, url, company, keywords) 
              VALUES('$description', '$salary', '$location', '$url', '$company', '$keywords')";
    mysqli_query($db, $query);
    $_SESSION['success'] = "Thank You For Posting A Job";
    header('location: index.php');
  }



   







?>