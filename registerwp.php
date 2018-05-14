<?php
$x = mysqli_connect("localhost", "root","", "webp");
if($x == FALSE)
    die("couldn't connect to database" .mysqli_connect_error());
$q = "insert into register values ('$_POST[username]','$_POST[DOB]','$_POST[blood]','$_POST[gender]',$_POST[weight],'$_POST[mail]','$_POST[password]','$_POST[number]')";
if(mysqli_query($x, $q)) {
    echo "records added <br>";
    }
$y = "select * from register";
if(mysqli_query($x, $y)) {
    echo " username : " .$_POST["username"]. " <br> date of birth : " .$_POST["birthdate"]. " <br> blood group : " .$_POST["bloodgp"]. " <br> weights : " .$_POST["weights"]. "<br> email :" .$_POST["email"]. " <br> password : " .$_POST["password"]. " <br> mobile number: " .$_POST["mobile"]. " ";
}
mysqli_close($x);
?>

