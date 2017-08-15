<?php
error_reporting(E_ALL);
ini_set("display_errors",1);


$exercise=$_REQUEST['exercise'];
$reps=$_REQUEST['reps'];

$con = mysqli_connect('localhost','root','','mogWod');

$result=$con->query("INSERT INTO exercise (`name`, `reps`) VALUES ('$exercise','$reps')");

if($result)
{
echo "Success";

}
else
{
echo "Error";

}

?>