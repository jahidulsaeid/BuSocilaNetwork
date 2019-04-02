<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Bu Socila NetWork</title>
	<!-- Semantic min Css -->
	<link rel="stylesheet" href="../Components/Dist/semantic.min.css">
	<!-- margin-padding min css -->
	<link rel="stylesheet" href="../Components/Dist/margin.padding.min.css">
	<!-- Custom Css -->
	<link rel="stylesheet" href="../Home.css">
</head>

<body>
	<?php include("./../Components/Header/Header.php"); ?>
	<!-- From are Start-->

	<!-- Model area start -->
	<div class="ui grid container pb50 pt20">
		<div class="three wide column">

		</div>
		<div class="ui ten wide column ">
			<!-- Model area start -->
			<h2 class="ui teal image header center aligned grid">
				<!-- <img src="./../Images/muhammadsaeid.jpg" class="image"> -->
				<div class="content">
					Create your account
				</div>
			</h2>
			<div class="ui middle grid">
				<div class="column">

					<form class="ui large form">
						<div class="ui segment">
							<div class="two fields">
								<div class="field">
									<div class="ui left icon input">
										<i class="user icon"></i>
										<input type="text" name="firstname" placeholder="First Name">
									</div>
								</div>
								<div class="field">
									<div class="ui left icon input">
										<i class="user icon"></i>
										<input type="password" name="surname" placeholder="Last Name">
									</div>
								</div>
							</div>
							<div class="two fields">
								<div class="field">
									<div class="ui left icon input">
										<i class="lock icon"></i>
										<input type="password" name="password" placeholder="Password">
									</div>
								</div>
								<div class="field">
									<div class="ui left icon input">
										<i class="lock icon"></i>
										<input type="password" name="password" placeholder="Re-Password">
									</div>
								</div>
							</div>
							<div class="field">
								<div class="ui left icon input">
									<i class="user icon"></i>
									<input type="text" name="email" placeholder="E-mail address">
								</div>
							</div>

							<div class="field">
								<div class="ui selection dropdown ">
									<input type="hidden" name="gender">
									<i class="dropdown icon"></i>
									<div class="default text">Gender</div>
									<div class="menu">
										<div class="item" data-value="1">Male</div>
										<div class="item" data-value="0">Female</div>
									</div>
								</div>
							</div>

							<div class="fields">
								<label for="" class="pl10">Birth Of Day : </label>
								<div class="sixteen wide field">
									<div class="three fields">
										<div class="field">
											<select class="ui fluid search dropdown" name="BDay">
												<option value="">Day</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>
												<option value="13">13</option>
												<option value="14">14</option>
												<option value="15">15</option>
												<option value="16">16</option>
												<option value="17">17</option>
												<option value="18">18</option>
												<option value="19">19</option>
												<option value="20">20</option>
												<option value="21">21</option>
												<option value="22">22</option>
												<option value="23">23</option>
												<option value="24">24</option>
												<option value="25">25</option>
												<option value="26">26</option>
												<option value="27">27</option>
												<option value="28">28</option>
												<option value="29">29</option>
												<option value="30">30</option>
												<option value="31">31</option>
											</select>
										</div>
										<div class="field">
											<select class="ui fluid search dropdown" name="BMonth">
												<option value="">Month</option>
												<option value="January">January</option>
												<option value="February">February</option>
												<option value="March">March</option>
												<option value="April">April</option>
												<option value="May">May</option>
												<option value="June">June</option>
												<option value="July">July</option>
												<option value="August">August</option>
												<option value="September">September</option>
												<option value="October">October</option>
												<option value="November">November</option>
												<option value="December">December</option>
											</select>
										</div>
										<div class="field">
											<select class="ui fluid search dropdown" name="BYear">
												<option value="">Year</option>
												<option value="2014">2014</option>
												<option value="2013">2013</option>
												<option value="2012">2012</option>
												<option value="2011">2011</option>
												<option value="2010">2010</option>
												<option value="2009">2009</option>
												<option value="2008">2008</option>
												<option value="2007">2007</option>
												<option value="2006">2006</option>
												<option value="2005">2005</option>
												<option value="2004">2004</option>
												<option value="2003">2003</option>
												<option value="2002">2002</option>
												<option value="2001">2001</option>
												<option value="2000">2000</option>
											</select>
										</div>


									</div>
								</div>
							</div>
							<div class="required inline field left">
								<div class="ui checkbox ">
									<input type="checkbox" name="checkbox">
									<label>I agree to the terms and conditions</label>
								</div>
							</div>


							<div class="ui fluid large teal submit button">Login</div>
						</div>

						<div class="ui error message"></div>

					</form>

					<div class="ui message center aligned grid">
						New to us? <a href="#">Sign Up</a>
					</div>
				</div>
			</div>



			<!-- Model area end -->

		</div>


		<div class="three wide column"></div>
	</div>

	<!-- Model area end -->



	<!-- From are End-->
	<?php include("./../Components/Footer/Footer.php"); ?>

	<!-- Jquery min Files -->
	<script src="../Components/Dist/Jquery-3.1.1.min.js"></script>
	<!-- Sematic Min Files -->
	<script src="../Components/Dist/semantic.min.js"></script>
	<!-- Custom-Js-Files -->
	<script src="../Components/Dist/Custom.js"></script>
	<script>
		$(document).ready(function () {
			$('.ui.dropdown').dropdown();
		});

		$(document)
			.ready(function () {
				$('.ui.form')
					.form({
						fields: {
							firstname: {
								identifier: 'firstname',
								rules: [{
									type: 'empty',
									prompt: 'Please enter your first name'
								}]
							},
							surname: {
								identifier: 'surname',
								rules: [{
									type: 'empty',
									prompt: 'Please enter your last name'
								}]
							},
							email: {
								identifier: 'email',
								rules: [{
										type: 'empty',
										prompt: 'Please enter your e-mail'
									},
									{
										type: 'email',
										prompt: 'Please enter a valid e-mail'
									}
								]
							},
							password: {
								identifier: 'password',
								rules: [{
										type: 'empty',
										prompt: 'Please enter your password'
									},
									{
										type: 'length[6]',
										prompt: 'Your password must be at least 6 characters'
									}
								]
							},
							gender: {
								identifier: 'gender',
								rules: [{
									type: 'empty',
									prompt: 'Please select your gender'
								}]
							},
							BirthdayDay: {
								identifier: 'BDay',
								rules: [{
									type: 'empty',
									prompt: 'Please select birthday date'
								}]
							},
							BirthdayMonth: {
								identifier: 'BMonth',
								rules: [{
									type: 'empty',
									prompt: 'Please select birthday month'
								}]
							},
							BirthdayYear: {
								identifier: 'BYear',
								rules: [{
									type: 'empty',
									prompt: 'Please select birthday year'
								}]
							},
							checkbox: {
								identifier: 'checkbox',
								rules: [{
									type: 'checked',
									prompt: 'You must agree to the terms and conditions'
								}]
							}
						}
					});
			});
	</script>
</body>

</html>