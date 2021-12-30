


<?php

// Username is root
$user = 'root';
$password = '';

// Database name is work_details
$database = 'work_details';

// Server is localhost with
// port number 3308
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = "SELECT * FROM data1 ";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Employee_working_report_page</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body>
	<section>
		<h1>Employee Monthly Report</h1>
		<!-- TABLE CONSTRUCTION-->
		<table>
			<tr>
				<th>Ministry</th>
				<th>Month</th>
				<th>Income</th>
				<th>Expensives</th>
				<th>Summary</th>
				<th>workReport</th>	
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS-->
			<?php // LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!--FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN-->
				<td><?php echo $rows['ministry'];?></td>
				<td><?php echo $rows['month'];?></td>
				<td><?php echo $rows['income'];?></td>
				<td><?php echo $rows['expensives'];?></td>
				<td><?php echo $rows['summary'];?></td>
				<td><?php echo $rows['work_report'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>
