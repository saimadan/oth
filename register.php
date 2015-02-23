<?php 

session_start();
include_once('connection.php');

$teamname=$_POST['teamname'];
$teamsize=$_POST['teamsize'];
$password=$_POST['password'];

$contestantname1=$_POST['name_contestant1'];
$contestantphone1=$_POST['phone_contestant1'];
$contestantemail1=$_POST['email_contestant1'];
$contestantcollege1=$_POST['email_contestant1'];

if($teamsize == 2){
	$contestantname2=$_POST['name_contestant2'];
        $contestantphone2=$_POST['phone_contestant2'];
	$contestantemail2=$_POST['email_contestant2'];
	$contestantcollege2=$_POST['email_contestant2'];
}
else{
	$contestantname2="";
	$contestantphone2="";
	$contestantemail2="";
	$contestantcollege2="";	
}

$str = "SELECT * FROM teamprofile WHERE teamname='$teamname'";
$result = mysqli_query($con,$str);

if( mysqli_num_rows($result) > 0) {
  echo "Teamname ALready exist";
  mysqli_close($con);
  exit();
} 

$sql = "INSERT INTO `teamprofile`(`TeamName`, `TeamSize`, `Contestant1Name`, `Contestant1Email`, `Contestant1Phone`, `Contestant1College`, `Contestant2Name`, `Contestant2Email`, `Contestant2Phone`, `Contestant2College`, `TeamPassword`) VALUES ('$teamname','$teamsize','$contestantname1','$contestantemail1','$contestantphone1','$contestantcollege1','$contestantname2','$contestantemail2','$contestantphone2','$contestantcollege2','$password') ";
if (!mysqli_query($con,$sql)) {
 	 die('Error: ' . mysqli_error($con));
}

$zero=0;
$QuestionPattern=generaterandomstring();
$ChangeQn=1;
$Skip=3;
$Recharge=0;
$sql="INSERT INTO `solved`(`TeamName`, `Solved`, `QuestionPattern`, `ChangeQn`, `Skip`, `Recharge`) VALUES ('$teamname','$zero','$QuestionPattern','$ChangeQn','$Skip','$Recharge')";

if (!mysqli_query($con,$sql)) {
 	 die('Error: ' . mysqli_error($con));
}

echo "Registered Sucessfully";

function getrand($start,$end){
	$arr=array();
	$i=5;
	$numbers = range($start, $end);
        $size=count($numbers);
	while($i>0)
	{
		shuffle($numbers);
		$num=rand(1,$size);
		array_push($arr,$numbers[$num-1]);
                $numbers = array_diff($numbers, array($numbers[$num-1]));
		$i--;
		$size--;
	}
	return $arr;
}
function getString()
{
	$str="";
	for($i=0;$i<20;$i++)
		$str=$str.'0';
	return $str;
}
function generaterandomstring(){
	$randomstring="";
	$start=1; $end=20;
	$str=getString();
	for($i=0;$i<5;$i++){
		$arr=getrand($start,$end);
		sort($arr);
		$randomstring =$randomstring.$str;
		for($j=0;$j<count($arr);$j++)
		{
                        $val=$arr[$j]-1;
                        $randomstring[$val]='1';
		}
		$start+=20;
		$end+=20;
	}
        echo $randomstring;
	return $randomstring;
}
//echo "1 and salt = ".$salt." and pass = ".$pass ." and sp = ".$salt.$pass1
mysqli_close($con);

?>