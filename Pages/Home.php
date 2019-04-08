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
	<link rel="stylesheet" href="./Home.css">
	<style>
		.stickySidebar {
			height: 665px !important;
			position: sticky !important;
			top: 0px !important;
		}

		.ui.secondary.inverted.menu .dropdown.item:hover {
			background: transparent !important;
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
				<div class="ui large vertical menu">
					<a class="item">
						<div class="ui small teal label">1</div>
						menu
					</a>
					<a class="item">
						<div class="ui small label">51</div>
						Spam
					</a>
					<a class="item active">
						<div class="ui small label">1</div>
						Updates
					</a>
					<div class="item">
						<div class="ui icon input">
							<input type="text" placeholder="Search mail...">
							<i class="search icon"></i>
						</div>
					</div>
				</div>
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
				
				
				include ('../inc/conn.php');

				$post_data = mysqli_query($connect,"SELECT * FROM user_post ORDER BY post_id DESC");

				while($post_slice = mysqli_fetch_array($post_data)):?>

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
						<div class="ui large transparent left icon input">
							<div class="ui comments mb0">
								<div class="comment">
									<a>
										<img class="ui mini circular image" style="height:35px;" src="./../Images/Profilepic/<?php echo $_SESSION['user_ppic'] ?>">
									</a>
								</div>
							</div>
							<input type="text" placeholder="Add Comment..." autocomplete="off">
						</div>
					</div>
				</div>
	<?php endwhile;?>


				<div class="ui comments">

					<div class="comment">
						<a class="avatar">
							<img src="./../Images/muhammadsaeid.jpg">
						</a>
						<div class="content">
							<a class="author">Matt</a>
							<div class="metadata">
								<span class="date">Today at 5:42PM</span>
							</div>
							<div class="text">
								How artistic!
							</div>
							<div class="actions">
								<a class="reply">Reply</a>
							</div>
						</div>
					</div>
					<div class="comment">
						<a class="avatar">
							<img src="./../Images/muhammadsaeid.jpg">
						</a>
						<div class="content">
							<a class="author">Elliot Fu</a>
							<div class="metadata">
								<span class="date">Yesterday at 12:30AM</span>
							</div>
							<div class="text">
								<p>This has been very useful for my research. Thanks as well!</p>
							</div>
							<div class="actions">
								<a class="reply">Reply</a>
							</div>
						</div>
						<div class="comments">
							<div class="comment">
								<a class="avatar">
									<img src="./../Images/muhammadsaeid.jpg">
								</a>
								<div class="content">
									<a class="author">Jenny Hess</a>
									<div class="metadata">
										<span class="date">Just now</span>
									</div>
									<div class="text">
										Elliot you are always so right :
									</div>
									<div class="actions">
										<a class="reply">Reply</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="comment">
						<a class="avatar">
							<img src="./../Images/muhammadsaeid.jpg">
						</a>
						<div class="content">
							<a class="author">Joe Henderson</a>
							<div class="metadata">
								<span class="date">5 days ago</span>
							</div>
							<div class="text">
								Dude, this is awesome. Thanks so much
							</div>
							<div class="actions">
								<a class="reply">Reply</a>
							</div>
						</div>
					</div>
				</div>

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
								<div class="ui action input">
									<!-- <span class="pt10 pr5">Profile Pic : </span> -->
									<input type="text" placeholder="Add Media" readonly name="profilepic">
									<input type="file" style="display:none;" name="profilepic">
								</div>
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
			<div class="four wide column ui secondary segment m0 stickySidebar computer only">
				<div class="ui middle aligned selection list">
					<div class="item">
						<div class="right floated content">
							<div class="ui button">Follow</div>
						</div>
						<img class="ui mini circular image" src="./../Images/muhammadsaeid.jpg" style="height:35px;">
						<div class="content">
							<div class="header">Helen</div>
						</div>
					</div>
					<div class="item">
						<div class="right floated content">
							<div class="ui button">Follow</div>
						</div>
						<img class="ui mini circular image" src="./../Images/muhammadsaeid.jpg" style="height:35px;">
						<div class="content">
							<div class="header">Helen</div>
						</div>
					</div>
					<div class="item">
						<div class="right floated content">
							<div class="ui button">Follow</div>
						</div>
						<img class="ui mini circular image" src="./../Images/muhammadsaeid.jpg" style="height:35px;">
						<div class="content">
							<div class="header">Helen</div>
						</div>
					</div>
					<div class="item">
						<div class="right floated content">
							<div class="ui button">Follow</div>
						</div>
						<img class="ui mini circular image" src="./../Images/muhammadsaeid.jpg" style="height:35px;">
						<div class="content">
							<div class="header">Helen</div>
						</div>
					</div>
					<div class="item">
						<div class="right floated content">
							<div class="ui button">Follow</div>
						</div>
						<img class="ui mini circular image" src="./../Images/muhammadsaeid.jpg" style="height:35px;">
						<div class="content">
							<div class="header">Helen</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- From are Start-->



	<!-- Footer Area Start -->
	<?php include("./../Components/Footer/Footer.php"); ?>
	<!-- Footer Area End -->


	<!-- Jquery min Files -->
	<script src="./../Components/Dist/Jquery-3.1.1.min.js"></script>
	<!-- Sematic Min Files -->
	<script src="./../Components/Dist/semantic.min.js"></script>
	<!-- Custom-Js-Files -->
	<script src="./../Components/Dist/Custom.js"></script>
	<script>

	</script>

</body>

</html>