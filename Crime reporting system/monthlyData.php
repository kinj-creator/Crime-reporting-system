<?php 

$server= "localhost";
$username= "root";
$password= "";
$dbname= "test";
	
$conn = mysqli_connect($server, $username, $password, $dbname);

	if($conn){
	?>
		<script>
			alert('Connecting to the database !!!');
		</script>
	<?php
	}
	else{
		die("No Connection".mysqli_connect_error());
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>View Complaints</title>
	<?php include 'link.php'; ?>
	<link rel="stylesheet" href="css/styles.css">
	<script src="https://use.fontawesome.com/602bbd89d0.js"></script>
</head>
<body>
	<nav>
		<ul>
			<li><a href="login.php">Go Back</a></li>
			<li><a >Report for the Monthly</a></li>
			
		</ul>
		<div class="logo">
			
	</nav>
	
	<div class="main-div">
		<h1>Already Solved</h1>
		<div class="center-div">
			<div class="table-responsive">
				<table>
					<thead>
						<tr>
							<th>Report ID</th>
							<th>Name</th>
							<th>Email</th>
							<th>Age</th>
							<th>Gender</th>
							<th>Phone No.</th>
							<th>Crime Location</th>
							<th>Description</th>
							<th colspan="2">Status</th>
						</tr>
					</thead>
					<tbody>
						<?php
	
							$selectquery = "select * from crime_reports ";
							$query = mysqli_query($conn, $selectquery);
							$num = mysqli_num_rows($query);
	
							while($res = mysqli_fetch_array($query)){
						
						?>
								
								<tr>
									<td><?php echo $res['Report ID']; ?></td>
									<td><?php echo $res['Name']; ?></td>
									<td><?php echo $res['Email'];?> </td>
									<td><?php echo $res['Age']; ?></td>
									<td><?php echo $res['Gender']; ?></td>
									<td><?php echo $res['Phone No.']; ?></td>
									<td><?php echo $res['Crime Location']; ?></td>
									<td><?php echo $res['Description']; ?></td>
									<td><button class="btn1">Already Solved</button></td>
									
								
								</tr>
						<?php
							}
	
						?>
					
					</tbody>
				</table>
			</div>
		</div>
	
	</div>




</body>
</html>