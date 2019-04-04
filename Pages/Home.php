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

		a.item.profileItem:hover {
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
			<div class="four wide column ui secondary segment m0 stickySidebar">
				<div class="ui large vertical menu">
					<a class="item">
						<div class="ui small teal label">1</div>
						Inbox
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
			<div class="ui eight wide column ">

				<div class="ui grid segment mt0">
					<div class="six wide column"><img class="ui mini circular image" src="./../Images/muhammadsaeid.jpg"
							alt="" style="height:35px;"></div>
					<div class="ten wide column right aligned"><button class="ui button teal create_btn" type="button"
							id="postForm">Create Post</button>
						<button class="ui button blue create_btn" type="button" id="noticeBoardForm">Write a
							Notice</button>
					</div>
				</div>

				<div class="ui card fluid">
					<div class="content">
						<div class="right floated meta pt5"><span>15 hours ago</span>
							<!-- <a href=""><i class="icon ellipsis horizontal"></i></a> -->
						</div>
						<img class="ui mini circular image" src="./../Images/muhammadsaeid.jpg" alt=""
							style="height:35px;">
						<b>Jahidul Islam</b>



						<div class="description pt10" style="font-weight:600">
							<p>Cute dogs come in a variety of shapes and sizes. Some cute dogs are cute for their
								adorable
								faces, others for their tiny stature, and even others for their massive size.Many people
								also have their own barometers for what makes a cute dog.</p>
						</div>




					</div>

					<div class="image">
						<img src="./../Images/muhammadsaeid.jpg" alt="">
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
									<a class="avatar">
										<img src="./../Images/muhammadsaeid.jpg">
									</a>
								</div>
							</div>
							<input type="text" placeholder="Add Comment..." autocomplete="off">
						</div>
					</div>
				</div>


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
										Elliot you are always so right :)
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

				<div class="ui modal">
					
						<div class="header ui center aligned">Create Post</div>
						<div class="content">
								<form class="ui form">
							<div class="field">
								<textarea placeholder="What's on your mind, Muhammad?"></textarea>
							</div>

						</form>
						</div>
						<div class="actions">
							<!-- <div class="ui approve button">Approve</div>
						<div class="ui button">Neutral</div>
						<div class="ui cancel button">Cancel</div> -->
							<!-- <div class="ui cancel button">Cancel</div> -->
							<button type="submit" class="ui approve button blue">Approve</button>
						</div>
					
				</div>

				<!-- Model area end -->

			</div>
			<div class="four wide column ui secondary segment m0 stickySidebar">
				<div class="ui middle aligned selection list">
					<div class="item">
						<div class="right floated content">
							<div class="ui button">Add</div>
						</div>
						<img class="ui mini circular image" src="./../Images/muhammadsaeid.jpg" style="height:35px;">
						<div class="content">
							<div class="header">Helen</div>
						</div>
					</div>
					<div class="item">
						<div class="right floated content">
							<div class="ui button">Add</div>
						</div>
						<img class="ui mini circular image" src="./../Images/muhammadsaeid.jpg" style="height:35px;">
						<div class="content">
							<div class="header">Helen</div>
						</div>
					</div>
					<div class="item">
						<div class="right floated content">
							<div class="ui button">Add</div>
						</div>
						<img class="ui mini circular image" src="./../Images/muhammadsaeid.jpg" style="height:35px;">
						<div class="content">
							<div class="header">Helen</div>
						</div>
					</div>
					<div class="item">
						<div class="right floated content">
							<div class="ui button">Add</div>
						</div>
						<img class="ui mini circular image" src="./../Images/muhammadsaeid.jpg" style="height:35px;">
						<div class="content">
							<div class="header">Helen</div>
						</div>
					</div>
					<div class="item">
						<div class="right floated content">
							<div class="ui button">Add</div>
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
		$(function () {
			$("#noticeBoardForm").click(function () {
				$(".ui.modal").modal('show');
			});
			$("#postForm").click(function () {
				$(".ui.modal").modal('show');
			});

		});

		$(document).ready(function () {
			$('.ui.dropdown').dropdown();

			$('.ui.sticky')
				.sticky({
					context: '#example3'
				});
		});
		// $(document).ready(function () {
		// 	$('.ui.sticky')
		// 		.sticky({
		// 			context: '#example3'
		// 		});
		// });
	</script>

</body>

</html>