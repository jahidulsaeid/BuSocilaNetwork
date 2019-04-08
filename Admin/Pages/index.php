<?php
session_start();

if (!isset($_SESSION['admin_email'])) {
	header('location: ../index.php');
}

?>
<!DOCTYPE html>
<html>

<head>
	<!-- <title>Admin Template</title> -->
	<title> </title>
	<link rel="stylesheet" href="./../../Components/Dist/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="./../css/custom.css">
</head>

<body>
	<!-- Header Area Start -->
	<?php include("./../Components/Header.php"); ?>
	<!-- Header Area End -->

	<div class="ui bottom segment">

		<div class="pusher">
			<div class="ui basic segment">
				<h3 class="ui header">Bu Social Community</h3>
				<h3 class="ui header">
					<?php 
				// echo $_SESSION['admin_email']
				// .' '.$_SESSION['admin_pass']; 
				?></h3>
				<!-- content -->
				<table class="ui celled striped table">
					<thead>
						<tr>
							<th class="center aligned" colspan="8">User Information</th>
						</tr>
						<tr>
							<th width="40">ID</th>
							<th>Name</th>
							<th>Email</th>
							<th>Password</th>
							<th>Gender</th>
							<th>Birth Of Day</th>
							<th>Profile Pic</th>
							<th>Delete</th>
						</tr>
					</thead>

<?php

include ('../../inc/conn.php');

$user_data = mysqlI_query($connect,"SELECT * FROM user_info");

while($user_slice = mysqli_fetch_array($user_data)): ?>

					<tbody>
						<tr>
							<td><?php echo $user_slice['id'];?></td>
							<td><?php echo $user_slice['fname'].' '.$user_slice['sname']; ?></td>
							<td><?php echo $user_slice['email']; ?></td>
							<td><?php echo $user_slice['pass']; ?></td>
							<td><?php echo $user_slice['gender']; ?></td>
							<td><?php echo $user_slice['birthday']; ?></td>
							<td>
								<img class="ui avatar image" src="./../../Images/Profilepic/<?php echo $user_slice['ppic']; ?>" alt="">
							</td>
							<td>
								<!-- <a href='../inc/Delete.php?id=<?php echo $user_slice['id'];?>'><i class="trash icon" title="Hapus"></i></a> -->
								<a href='../inc/Delete.php?id=<?php echo $user_slice['id'];?>'><i class="trash icon" title="Hapus"></i></a>
							</td>
						</tr>
					</tbody>

<?php endwhile;?>
					<tfoot>
						<tr>
							<th colspan="8">
								<div class="ui right floated pagination menu">
									<a class="icon item"><i class="left chevron icon"></i></a>
									<a class="item">1</a>
									<a class="item">2</a>
									<a class="item">3</a>
									<a class="item">4</a>
									<a class="icon item"><i class="right chevron icon"></i></a>
								</div>
							</th>
						</tr>
					</tfoot>
				</table>
			</div>

		</div>
	</div>
	<!-- </div> -->

	<script src="./../../Components/Dist/Jquery-3.1.1.min.js"></script>
	<script src="./../../Components/Dist/semantic.min.js"></script>
	<script type="text/javascript" src="./../js/custom.js"></script>
</body>

</html>