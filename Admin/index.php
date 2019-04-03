<!DOCTYPE html>
<html>

<head>
	<title>Admin Template</title>
	<link rel="stylesheet" href="../Components/Dist/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>

<body>
	<!-- Header Area Start -->
	<?php include("./Components/Header.php"); ?>
	<!-- Header Area End -->

	<div class="ui bottom segment">
		
		<div class="pusher">
			<div class="ui basic segment">
				<h3 class="ui header">Bu Social Community</h3>
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
					<tbody>
						<tr>
							<td>1</td>
							<td>Jahidul islam</td>
							<td>Saeid@bu.edu.bd</td>
							<td>saeid1234</td>
							<td>Male</td>
							<td>12-03-2017</td>
							<td>
								<img class="ui avatar image" src="./../Images/muhammadsaeid.jpg" alt="">
							</td>
							<td>
								<a href="#"><i class="trash icon" title="Hapus"></i></a>
							</td>
						</tr>
						<tr>
							<td>1</td>
							<td>Jahidul islam</td>
							<td>Saeid@bu.edu.bd</td>
							<td>saeid1234</td>
							<td>Male</td>
							<td>12-03-2017</td>
							<td>
								<img class="ui avatar image" src="./../Images/muhammadsaeid.jpg" alt="">
							</td>
							<td>
								<a href="#"><i class="trash icon" title="Hapus"></i></a>
							</td>
						</tr>
						<tr>
							<td>1</td>
							<td>Jahidul islam</td>
							<td>Saeid@bu.edu.bd</td>
							<td>saeid1234</td>
							<td>Male</td>
							<td>12-03-2017</td>
							<td>
								<img class="ui avatar image" src="./../Images/muhammadsaeid.jpg" alt="">
							</td>
							<td>
								<a href="#"><i class="trash icon" title="Hapus"></i></a>
							</td>
						</tr>

					</tbody>
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

	<script src="./../Components/Dist/Jquery-3.1.1.min.js"></script>
	<script src="./../Components/Dist/semantic.min.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
</body>

</html>