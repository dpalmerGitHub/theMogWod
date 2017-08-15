<?php
error_reporting(E_ALL);
ini_set("display_errors",1);


$con = mysqli_connect('localhost','root','','mogWod');

$result=$con->query("SELECT * FROM exercise");

//while($extract=mysqli_fetch_array($result)){}
//$extract=mysqli_fetch_array($result);
$arr=array();
$number = mysqli_num_rows($result);
$i=0;

while($extract=mysqli_fetch_assoc($result)){
    $arr[$i] = $extract;
    $i++;
  }

    echo json_encode($arr);

    


 




?>