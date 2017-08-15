<?php
error_reporting(E_ALL);
ini_set("display_errors",1);


$name=$_REQUEST['username'];
$password=$_REQUEST['password'];

$con = mysqli_connect('localhost','root','','mogWod');

$result=$con->query("SELECT * FROM login  WHERE username = '$name' AND password = '$password'");


while($extract=mysqli_fetch_array($result)){
    echo "Success";
}



?>