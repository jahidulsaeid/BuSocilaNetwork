<?php
session_start();

if (!isset($_SESSION['admin_email'])) {
	header('location: ../index.php');
}

?>
<!DOCTYPE html>
<html>

<head>
	<title> </title>
	<link rel="stylesheet" href="./../../Components/Dist/semantic.min.css">
	<link rel="stylesheet" href="./../../Components/Dist/margin.padding.min.css">
	<link rel="stylesheet" type="text/css" href="./../css/custom.css">
</head>

<body>
	<!-- Header Area Start -->
	<?php include("./../Components/Header.php"); ?>
	<!-- Header Area End -->

	<div class="ui bottom segment">

		<div class="pusher">
			<?php
			if (isset($_GET['result'])) {
				if ($_GET['result'] == 'warningnotsent') {
					echo '<div class="ui ignored negative message"><i class="close icon" style="font-size:14px;top:0"></i>  <p style="font-size:14px;margin-top:0;">Something is wrong warning not send</p></div>';
				}
				if ($_GET['result'] == 'warningsent') {
					echo '<div class="ui ignored positive message"><i class="close icon" style="font-size:14px;top:0"></i>  <p style="font-size:14px;margin-top:0;">Warning Send Successfully</p></div>';
				}
			}
			?>
			<div class="ui basic segment">

				<h3 class="ui header" style="display:inline-block;"><a href="http://localhost/BuSocilaNetwork/Admin">Bu Social Community</a></h3>


				<button class="ui right floated google plus button warningmassage"><i class="envelope icon"></i>Send a warning massage</button>

				<!-- content -->
				<table class="ui celled striped table">
					<thead>
						<tr>
							<th class="center aligned" colspan="9">User Information</th>
						</tr>
						<tr>
							<th width="40">USER ID</th>
							<th>Name</th>
							<th>Email</th>
							<th>Password</th>
							<th>Gender</th>
							<th>Birth Of Day</th>
							<th>Profile Pic</th>
							<th>Delete</th>
							<th>Approve Status</th>
						</tr>
					</thead>

					<?php

					include('../../inc/conn.php');

					$user_data = mysqlI_query($connect, "SELECT * FROM user_info");

					while ($user_slice = mysqli_fetch_array($user_data)) : ?>

						<tbody>
							<tr>
								<td><?php echo $user_slice['id']; ?></td>
								<td><?php echo $user_slice['fname'] . ' ' . $user_slice['sname']; ?></td>
								<td><?php echo $user_slice['email']; ?></td>
								<td><?php echo $user_slice['pass']; ?></td>
								<td><?php echo $user_slice['gender']; ?></td>
								<td><?php echo $user_slice['birthday']; ?></td>
								<td>
									<img class="ui avatar image" src="./../../Images/Profilepic/<?php echo $user_slice['ppic']; ?>" alt="">
								</td>
								<td>
									<a href='../inc/Delete.php?id=<?php echo $user_slice['id']; ?>'><i class="trash icon" title="Hapus"></i></a>

								</td>

								<!-- asdaf -->
								<td>
									<?php
									$email = $user_slice['email'];
									$email_select = mysqli_query($connect, "SELECT * FROM valid_user_info WHERE email='$email'");

									$how_many_user = mysqli_num_rows($email_select);

									if ($how_many_user >= 1) {
										echo "Approved";
									} else {
										echo "<a class='mini ui button' href=\"../inc/Userrequest.php?id=$user_slice[id]\">Not Approve</a>";
									}

									?>
								</td>

								<!-- asdfa -->
							</tr>
						</tbody>



					<?php endwhile; ?>

					<tfoot>
						<tr>
							<th colspan="9">
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





	<!-- Modal area -->

	<div class="ui modal post p20 warningmassagebox">
		<form class="ui form" action="../inc/warningmassage.php" method="POST" enctype="multipart/form-data">
			<div class="header ui center aligned">Create Post</div>
			<div class="content">
				<!-- <form class="ui form"> -->
				<div class="field ">
					<input type="text" name="wmuserid" placeholder="User ID">
				</div>
				<div class="field">
					<textarea placeholder="Type Here what ever you want?" name="upostcontent"></textarea>
				</div>
			</div>
			<div class="actions pr0 pt10">
				<button type="submit" class="ui submit button blue right floated">Send</button>
				<div class="ui cancel button right floated">Cancel</div>
			</div>
		</form>
	</div>

	<!-- Modal End -->



	<script src="./../../Components/Dist/Jquery-3.1.1.min.js"></script>
	<script src="./../../Components/Dist/semantic.min.js"></script>
	<script type="text/javascript" src="./../js/custom.js"></script>
	<script>
		$(".warningmassage").click(function() {
			$(".ui.modal.warningmassagebox").modal('show');
		});

		$(".close.icon").click(function() {
			$(this).parent().hide();
		});
	</script>
</body>

</html>