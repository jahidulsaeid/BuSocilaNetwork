<?php
session_start();

if (!isset($_SESSION['user_email'])) {
	header('location: ../index.php');
};

$full_name = $_SESSION['user_fname'] . ' ' . $_SESSION['user_lname'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Bu Socila NetWork</title>
	<!-- Semantic min Css -->
	<link rel="stylesheet" href="./../Components/Dist/semantic.min.css">
	<!-- margin-padding min css -->
	<link rel="stylesheet" href="./../Components/Dist/margin.padding.min.css">
	<!-- Custom Css -->
	<link rel="stylesheet" href="../style.css">
	<!-- Jquery min Files -->
	<script src="./../Components/Dist/Jquery-3.1.1.min.js"></script>

	<script>

	</script>

	<style>
		.stickySidebar {
			height: 665px !important;
			position: sticky !important;
			top: 0px !important;
		}

		.ui.secondary.inverted.menu .dropdown.item:hover {
			background: transparent !important;
		}

		#status {
			text-align: center;
			font-size: 24px;
			font-family: Helvetica, Arial, sans-serif;
			color: #fff;
			margin-top: 20px;
			font-weight: bold;
		}
	</style>

</head>

<body>

	<!-- Header Area Start -->
	<?php include("./../Components/Header/Header.php"); ?>
	<!-- Header Area End -->
	<div class="ui grid container">

		<div class="three column row">
			<div class="four wide column ui secondary segment m0 stickySidebar computer only">
				<div>
					<img class="ui centered image tiny circular" style="height:80px;" src="./../Images/Profilepic/<?php echo $_SESSION['user_ppic'] ?>" alt="">
					<div class="ui center aligned grid pt30">
						<h3><?php echo $full_name; ?></h3>
						<p style="text-align:center; ">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
							Voluptas aperiam, accusamus eos</p>
						<!-- <p style="text-align:center; ">Student</p> -->
						<p style="text-align:center; "><i class="envelope outline icon"></i><?php echo $_SESSION['user_email']; ?></p>
					</div>
				</div>
				<div class="ui vertical menu fluid secondary pl20 leftmenu pt30">
					<div class="item">
						<a class="header" href="#"><i class="home icon"></i>Home</a>
					</div>
					<div class="item">
						<a class="header" href="#"><i class="clipboard list icon"></i>Notice Board</a>
					</div>
					<div class="item">
						<a class="header" href="#"><i class="user icon"></i>User Profile</a>
					</div>
					<div class="item">
						<a class="header" href="#"><i class="clipboard list icon"></i>Users</a>
					</div>
					<div class="item">
						<a class="header" href="#"><i class="clipboard list icon"></i>Help</a>
					</div>
					<div class="item">
						<a class="header" href="#"><i class="lock icon"></i>Logout</a>
					</div>
				</div>
				<p style="text-align:center;" class="pt20">BuSocilaNetwork © 2019</p>




			</div>
			<div class="ui eight wide computer sixteen wide mobile tablet column">

				<div class="ui grid segment mt0">
					<div class="six wide column"><img class="ui mini circular image" src="./../Images/Profilepic/<?php echo $_SESSION['user_ppic'] ?>" alt="" style="height:35px;"></div>
					<div class="ten wide column right aligned"><button class="ui button teal create_btn" type="button" id="postForm">Create Post</button>
						<button class="ui button blue create_btn" type="button" id="noticeBoardForm">Write a
							Notice</button>
					</div>
				</div>



				<?php


				include('../inc/conn.php');

				$post_data = mysqli_query($connect, "SELECT * FROM user_post ORDER BY post_id DESC");



				while ($post_slice = mysqli_fetch_array($post_data)) : ?>


					<?php $postcommid = $post_slice['post_id']; ?>

					<div class="ui card fluid">
						<div class="content">
							<div class="right floated meta pt5"><span><?php echo $post_slice['post_date']; ?></span>
							</div>
							<img class="ui mini circular image" src="./../Images/Profilepic/<?php echo $post_slice['user_image']; ?>" alt="" style="height:35px;">
							<b> <?php echo $post_slice['puser_name']; ?></b>



							<div class="description pt10" style="font-weight:600">
								<p><?php echo $post_slice['user_post']; ?></p>
							</div>
						</div>

						<div class="image">
							<img src="./../Images/Postimage/<?php echo $post_slice['post_image']; ?>" alt="">
						</div>
						<div class="content">
							<span class="right floated">
								<i class="comment icon"></i>
								3 comments

							</span>
							<i class="heart outline like icon"></i>
							17 likes

						</div>

						<div class="extra content">
							<div class="ui fluid transparent left icon input">
								<div class="ui comments mb0">
									<form action="../inc/comment.php" method="POST">
										<div class="comment">
											<a>
												<img class="ui mini circular image" style="height:35px;" src="./../Images/Profilepic/<?php echo $_SESSION['user_ppic'] ?>">
											</a>
										</div>
								</div>
								<input type="text" placeholder="Add Comment..." autocomplete="off" name="commentcont" id="commentarea">
								<input type="hidden" value="<?php echo $postcommid; ?>" name="cpostid">
								</form>

							</div>
						</div>
					</div>
					<!-- here is the post area end -->

					<?php

					$pcomment_data = mysqli_query($connect, "SELECT * FROM post_comment WHERE commentpost_id = '$postcommid' ORDER BY pcomment_id DESC");

					while ($pcomment_slice = mysqli_fetch_array($pcomment_data)) :

						?>


						<div class="ui comments">
							<div class="comment">
								<a class="avatar">
									<img src="./../Images/Profilepic/<?php echo $pcomment_slice['pcomment_uimg']; ?>">
								</a>
								<div class="content">
									<a class="author"><?php echo $pcomment_slice['pcomment_user']; ?></a>
									<div class="metadata">
										<span class="date">Today at 5:42PM</span>
									</div>
									<div class="text">
										<?php echo $pcomment_slice['pcomment_cont']; ?>
									</div>
									<div class="actions">
										<a class="reply"><label for="commentarea" style="cursor: pointer;">Reply</label></a>
									</div>
								</div>
							</div>
						</div>

					<?php endwhile; ?>
				<?php endwhile; ?>

				<!-- Model area start -->

				<div class="ui modal post p20">
					<form class="ui form" action="../inc/userpost.php" method="POST" enctype="multipart/form-data">
						<div class="header ui center aligned">Create Post</div>
						<div class="content">
							<!-- <form class="ui form"> -->
							<div class="field ">
								<div class="ui action input">
									<input type="text" placeholder="Add Media" readonly name="userpimg">
									<input type="file" style="display:none;" name="userpimg">
								</div>
							</div>
							<div class="field">
								<textarea placeholder="What's on your mind, Muhammad?" name="upostcontent"></textarea>
							</div>

						</div>

						<div class="actions pr0 pt10">
							<div class="ui cancel button right floated">Cancel</div>
							<button type="submit" class="ui submit button blue right floated">Post</button>
						</div>
					</form>
				</div>

				<div class="ui modal notice">
					<div class="header ui center aligned">Post a Notice</div>
					<div class="content">
						<form class="ui form">
							<div class="field ">
								<input type="text" name="noticetitle" placeholder="Enter Notice Title" />
							</div>
							<div class="field ">
								<div class="ui action input">
									<!-- <span class="pt10 pr5">Profile Pic : </span> -->
									<input type="text" placeholder="Add Media" readonly name="profilepic">
									<input type="file" style="display:none;" name="profilepic">
								</div>
							</div>
							<div class="field">
								<textarea placeholder="What's on your mind, Muhammad?"></textarea>
							</div>
						</form>
					</div>
					</form>
					<div class="actions">
						<div class="ui cancel button">Cancel</div>
						<button type="submit" class="ui approve button blue">Post</button>
					</div>
				</div>

				<!-- Model area end -->

			</div>

			<?php

			$alluser = mysqli_query($connect, "SELECT * FROM valid_user_info ORDER BY id DESC LIMIT 5");

			// $alluserslice = mysqli_fetch_array($alluser);
			?>

			<div class="four wide column ui secondary segment m0 stickySidebar computer only">
				<div class="ui middle aligned selection list">
					<h4 style="text-align:center">Suggestions For You</h4>
					<?php while ($alluserslice = mysqli_fetch_array($alluser)) : ?>
						<div class="item">

							<div class="right floated content">
								<div class="ui button"><i class="plus icon mr0"></i></div>
							</div>

							<img class="ui mini circular image" src="./../Images/Profilepic/<?php echo $alluserslice['ppic']; ?>" style="height:35px;">
							<div class="content">
								<div class="header"><?php echo $alluserslice['fname'] . ' ' . $alluserslice['sname']; ?>
								</div>
							</div>


						</div>
					<?php endwhile; ?>
				</div>
			</div>



		</div>

	</div>


	<!-- From are Start-->

	<!-- chat -->
	<div class="ui card chatarea" id="chatarea" style="position: fixed;bottom: -12px;right: 0%;display:none">
		<div class="content chatboxhidesign" style="border-bottom: 1px solid rgba(34,36,38,.1);cursor:pointer;">
			<b>Community Chats</b> <i class="icon minus right floated"></i>
		</div>

		<div id="chat" class="ui divided items m0 chatboxclass" style="overflow:auto;height:400px!important;"></div>
		<div class="extra content">
			<form method="POST" id="gchatform" class="massageform">
				<div class="ui small transparent left icon input">
					<img class="ui avatar image" src="./../Images/Profilepic/<?php echo $_SESSION['user_ppic'] ?>" alt="">
					<input style="padding-left:5px!important;" id="massageinput" type="text" autocomplete="off" placeholder="Type a message..." name="gchatcont">
				</div>
			</form>
		</div>

	</div>
	<!-- / -->
	<button class="ui circular facebook icon button huge chatbutton" style="position: fixed;bottom: 20px;right: 2%;">
		<i class="wechat icon"></i>
	</button>

	<!-- Footer Area Start -->
	<?php

	include("./../Components/Footer/Footer.php");

	?>
	<!-- Footer Area End -->


	<!-- Sematic Min Files -->
	<script src="./../Components/Dist/semantic.min.js"></script>
	<!-- Custom-Js-Files -->
	<script src="./../Components/Dist/Custom.js"></script>
	<script type="text/javascript">
		LoadChat();


		setInterval(function() {

			LoadChat();

		}, 1000);


		function LoadChat() {
			$.post('../inc/messages.php?action=getMessages', function(response) {


				var scrollpos = $('#chat').scrollTop();
				var scrollpos = parseInt(scrollpos) + 405;
				var scrollHeight = $('#chat').prop('scrollHeight');
				$('#chat').html(response);
				if (scrollpos < scrollHeight) {
				
				} else {
					$('#chat').scrollTop($('#chat').prop('scrollHeight'));
				}

				// $('#chat').scrollTop($('#chat').prop('scrollHeight'));
			});
		}


		$('#gchatform').submit(function() {

			var message = $('#massageinput').val();

			$.post('../inc/messages.php?action=sendMessage&message=' + message, function(response) {

				if (response == 1) {
					// LoadChat();
					document.getElementById('gchatform').reset();
				}

			});

			return false;

		});
	</script>




</body>

</html>