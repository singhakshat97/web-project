<?php
session_start();
extract($_POST);
$conn = mysqli_connect("localhost","root","","webp");
$q = "select * from register where username = '$username' and password = '$password'";
$result = mysqli_query($conn, $q);
$count = mysqli_num_rows($result);
  if($count >= 1) {
  	// echo "Welcome $username";
    // session_start(); //start the PHP_session function 

if(isset($_SESSION['page_count']))
{
     $_SESSION['page_count'] += 1;
}
else
{
     $_SESSION['page_count'] = 1;
}
//echo 'You are '. $_POST['username'];
  $_SESSION['username']=$username;
    print ("Welcome " . $_SESSION['username']."<br>"); 
    
   
  print('You are visitor number ' . $_SESSION['page_count']);


   
  // session_destroy();
       
}
 else {
     header("location: fail.html");
 }
?>