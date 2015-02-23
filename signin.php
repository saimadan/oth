<?php 

$teamname = $_POST['teamname'];
$pass = $_POST['password'];

include_once('connection.php');

$stmt = $con->prepare("SELECT TeamPassword FROM teamprofile WHERE teamname = ?");
$stmt->bind_param('s', $teamname);

$stmt->execute();

$stmt->bind_result($realpass);

$stmt->fetch();

//echo $pass." ".$realpass;
if(strcmp($realpass,$pass)==0)
{
	    $_SESSION['user']=$teamname;
}	
else
	echo "1";

$stmt -> close();

$con -> close();

?>