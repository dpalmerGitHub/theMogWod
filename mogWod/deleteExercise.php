<?php
error_reporting(E_ALL);
ini_set("display_errors",1);


$exercise=$_REQUEST['exercise'];


$con = mysqli_connect('localhost','root','','mogWod');

$result=$con->query("DELETE FROM exercise WHERE `name` LIKE '$exercise%'");

if($result)
{
echo "Success";

}
else
{
echo "Error";

}

?>