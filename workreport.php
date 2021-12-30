<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename ="work_details";

$conn =mysqli_connect($servername,$username,$password,$databasename);
// checking the connectin 
if (!$conn) {
	die("connectin failed" . mysqli_connect_error());
}
if (isset($_POST['Submit'])) {

	$ministry = $_POST['ministry'];
	$month = $_POST['month'];
	$income = $_POST['income'];
	$expensives = $_POST['expensives'];
	$summary = $_POST['summary'];
	$workReport = $_POST['workReport'];

	//Data inserting into the database 
	
	$sql_query = "INSERT INTO data1 (ministry,month,income,expensives,summary,work_report)

	VALUES ('$ministry','$month','$income','$expensives','$summary','$workReport') ";


	 if (mysqli_query($conn,$sql_query))
	  {
	 	echo "New details Entered successfully !";
	 	header('location:fetch.php');

	 }
	 else
	 {
	 	echo "Error: ".$sql."".mysqli_error($conn);
	 }

	 mysqli_close($conn);
}
?>