
<html>
<body>

<?php
session_start();

$dbname = 'idp';
$dbuser = 'root';  
$dbpass = ''; 
$dbhost = 'localhost'; 

$connect = @mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$connect){
	echo "Error: " . mysqli_connect_error();
	exit();
}

echo "Connection Success!".'<br>';

$file = fopen("read.txt", "r") or die("Unable to open file!");

$content=fgets($file);
$carray = explode(",",$content);
list($No,$Rank,$Name,$Unit,$Total_fired,$Firing_officer,$nill)=$carray;

fclose($file);
// if(isset($_POST['register'])){
// 	$No=$_POST['No'];  
// 	$Rank=$_POST['Rank']; 
// 	$Name=$_POST['Name'];
// 	$Unit=$_POST['Unit'];
// 	$Total_fired=$_POST['Total_fired'];
// 	$Firing_officer=$_POST['Firing_officer'];
// }

// $No=$_SESSION['No'];
// $Rank=$_SESSION['Rank'];
// $Name=$_SESSION['Name'];
// $Unit=$_SESSION['Unit'];
// $Total_fired=$_SESSION['Total_fired'];
// $Firing_officer=$_SESSION['Firing_officer'];


// echo $_SESSION['No'].'<br>';
// echo $_SESSION['Rank'].'<br>';
// echo $_SESSION['Name'].'<br>';
// echo $_SESSION['Unit'].'<br>';
// echo $_SESSION['Total_fired'].'<br>';
// echo $_SESSION['Firing_officer'].'<br>';

$Total_hit= $_GET['Total_hit'];


if(!empty($Total_hit)){
$query = "INSERT INTO `hitcount` (`Date`,`No`, `Rank`, `Name`,`Unit`, `Total_fired`, `Total_hit`,`Firing_officer`) VALUES (current_timestamp(),'$No','$Rank','$Name','$Unit','$Total_fired','$Total_hit','$Firing_officer')";
$result = mysqli_query($connect,$query);

echo "Insertion Success!";
}else{
	echo "Hit not received";
}

?>
</body>
</html>