<!DOCTYPE HTML>
<!--
	Dimension by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>LAHS Green Team</title>
		<link rel="shortcut icon" href="./images/favicon.png">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/lightslider.css" />
		<script src="/assets/js/jquery.min.js"></script>
		<script src="/assets/js/lightslider.js"></script>
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="logo">
							<span class="icon fa-leaf"></span>
						</div>
						<div class="content">
							<div class="inner">
								<h1>Students for Green High Schools</h1>
								<p>A conference for young environmentalists and activists who are interested in bringing change to their community.</p>
								<p>Coming Soon January 2020</p>
								<!-- <button><a href="https://goo.gl/forms/iljd3GMbV8vONPUu1" style="text-decoration:none">Sign up now</a></button> -->
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#intro">Info</a></li>
								<li><a href="#work">Gallery</a></li>
								<li><a href="#about">About</a></li>
								<li><a href="#contact">Contact</a></li>
								<!--<li><a href="#elements">Elements</a></li>-->
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Intro -->
							<article id="intro">
								<h2 class="major">Information</h2>
								<p><i>*Students for Green High Schools 2019</i></p>
								<section>
									<h3 class="major">Location</h3>
									<center><iframe height="400vh" width="500vw" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJjbPX1qW3j4ARz2fefpK0558&key=AIzaSyCOUJpOtO-38LVZu-3LtLiaIr0GTG8D5DQ" allowfullscreen></iframe></center>
								</section>
								<br />
								<section>
									<h3 class="major">Schedule</h3>
									<p>
										Date: January 26, 2019
										<i>*Schedule is subject to change</i>
									</p>

									<div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th>Time</th>
													<th>Description</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>7:30 AM - 8:00 AM</td>
													<td>Check-In</td>
												</tr>
												<tr>
													<td>8:05 AM - 8:20 AM</td>
													<td>Opening Ceremony</td>
												</tr>
												<tr>
													<td>8:20 AM - 8:45 AM</td>
													<td>Keynote Speaker: Darryl Willis</td>
												</tr>
												<tr>
													<td>8:45 AM - 8:55 AM</td>
													<td>Icebreaker</td>
												</tr>
												<tr>
													<td>9:00 AM - 9:30 AM</td>
													<td>Small Expert Table Discussions</td>
												</tr>
												<tr>
													<td>9:30 AM - 9:45 AM</td>
													<td>Pathwater Representative: Gulshan Kumar</td>
												</tr>
												<tr>
													<td>9:45 AM - 10:00 AM</td>
													<td>BREAK</td>
												</tr>
												<tr>
													<td>10:00 AM - 11:00 AM</td>
													<td>
														School Presentations
														<ol>
															<li>Harker Green Team</li>
															<li>Burlingame Environmental Club</li>
															<li>Toga Green Team</li>
															<li>Zero Waste Initiative</li>
															<li>SF Environmental Club</li>
															<li>ForeverGreen Club</li>
															<li>Run 5k Committee</li>
														</ol>
													</td>
												</tr>
												<tr>
													<td>11:00 AM - 11:30 AM</td>
													<td>Small Expert Table Discussions - Discuss With Other Groups</td>
												</tr>
												<tr>
													<td>11:35 AM - 11:55 AM</td>
													<td>Keynote Speaker: Silicon Valley Clean Energy</td>
												</tr>
												<tr>
													<td>11:55 AM - 12:10 PM</td>
                          <td>Closing Ceremony</td>
												</tr>
												<tr>
													<td>12:10 PM - 12:20 PM</td>
													<td>Networking/End of Event</td>
												</tr>
											</tbody>
										</table>
									</div>
								</section>
							</article>

						<!-- Work -->
							<article id="work">
								<h2 class="major">Gallery</h2>
								<h4>Students for Green High Schools 2019</h4>
								<ul class="lightSlider" id="lightSlider2019" style="height:auto;opacity:1">
									<?php
									foreach(glob('images/2019/*.*') as $file) {
											echo "<li data-thumb='$file'>";
											echo "<img src='$file'>";
											echo "</li>";
										}
									 ?>
								</ul>
								<h4>Students for Green High Schools 2018</h4>
								<ul class="lightSlider" id="lightSlider2020" style="height:auto;opacity:1">
									<?php
									foreach(glob('images/2018/*.*') as $file) {
											echo "<li data-thumb='$file'>";
											echo "<img src='$file'>";
											echo "</li>";
										}
									 ?>
								</ul>
							</article>

						<!-- About -->
							<article id="about">
								<h2 class="major">About</h2>
								<span class="image main"><img src="images/group.jpg" alt="" /></span>
								<center><h4>A CONFERENCE DESIGNED BY HIGH SCHOOLERS, FOR HIGH SCHOOLERS</h4></center>
								<p>Our goal is to help high schoolers effectively implement green projects and foster a culture of environmental responsibility at their schools.  With our student focused model, we aim to help clubs brainstorm feasible and sustainable projects.</p>
								<p>The format of the conference is pretty simple: We will see some projects that have worked at high schools in the past, split up your team members to let them learn about different areas to 'green your school', and then let them regroup with the members from your school to make a plan for this school year. We hope that your club can use the new-found information from this conference to further "green" your school.</p>
								<h4>Our Focus:</h4>
								<ul>
									<li>Reducing Carbon Emissions/Green Commute</li>
									<li>Increasing Publicity and Outreach</li>
									<li>Recycling and Compost</li>
									<li>Renewable Energy on Campus</li>
									<li>Sustainability and Environmental Impacts</li>
								</ul>
								<!-- <section>
									<h3 class="major">Sponsors</h3>
									<a href="https://google.org/"><img class="image fit" src="images/google.jpg"></a>
									<a href="https://www.svcleanenergy.org/"><img class="image fit" src="images/svce-logo.jpg"></a>
									<a href="https://drinkpathwater.com/"><img class="image fit" src="images/pathwater-logo.jpg"></a>
									<a href="https://www.stickermule.com/supports/you"><img class="image fit" src="images/sticker-mule-logo-light.png"/></a>
									<a href="https://greentownlosaltos.org/"><img class="image" style="width:50%" src="images/greentown_los_altos.png"></a><a href="https://www.calwater.com/"><img class="image" style="width:40%;display:inline-block;float:right" src="images/california_water_service.png"></a>
								</section> -->
							</article>

						<!-- Contact -->
							<article id="contact">
								<h2 class="major">Contact</h2>
								<form method="post" action="#">
									<div class="field half first">
										<label for="name">Name</label>
										<input type="text" name="name" id="name" required />
									</div>
									<div class="field half">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" required />
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="message" id="message" rows="4" required></textarea>
									</div>
									<ul class="actions">
										<li><input type="button" id="submit" value="Send Message" class="special" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</form>
								<ul class="icons">
									<li><a href="https://www.facebook.com/groups/2050346228325871/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.instagram.com/lahsgreenteam/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
								</ul>
							</article>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">Copyright &copy; 2019 LAHS Green Team | Website created by Kung-Min Lin in association with <a href="https://lahs.club">LAHS Hack Club</a> using <a href="https://html5up.net">HTML5 UP</a>.</p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="assets/js/contact.js"></script>
	</body>
</html>
