<?php include 'includes/header.php';?>


<!-- Banner Start-->

	<section class="career_detail_banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="inner_heading">Careers Detail </h1>
					<p class="inner_para">Lorem ipsum dolor sit amet consectetur. Donec est convallis.</p>
				</div>
			</div>
		</div>
	</section>

<!-- Banner End -->

<!-- Careers Detail Start -->

<section class="details_section">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="images/career-detail.png" width="100%">
			</div>
			<div class="col-md-6">
				<h2 class="details_heading">
					Are you what we looking for ?<br>
					<span class="span_detail">Sr. Wordpress Developer</span>
				</h2>
				<p>We are looking for an experienced Sr. WordPress Developer to join our team. The ideal candidate should have a minimum of 3 to 4 years of experience in developing WordPress websites and should be able to work on-site, not remotely.</p>
				<div class="counter_details">
					<div id="countdown">
				        <div class="days_timer">
				            <span id="days"></span>
				            <div class="smalltext">Days</div>
				        </div>
				        <div class="hours_timer">
				            <span id="hours"></span>
				            <div class="smalltext">Hours</div>
				        </div>
				        <div class="minutes_timer">
				            <span id="minutes"></span>
				            <div class="smalltext">Minutes</div>
				        </div>
				        <div class="seconds_timer">
				            <span id="seconds"></span>
				            <div class="smalltext">Seconds</div>
				        </div>
				    </div>
				</div>
			</div>
		</div>
	</div>
	<div class="container container_two">
		<div class="row">
			<div class="col-md-8">
				<h2 class="jd_heading">Job Description</h2>
				<p class="jd_para">
					We are looking for an experienced Sr. WordPress Developer to join our team. The ideal candidate should have a minimum of 3 to 4 years of experience in developing WordPress websites and should be able to work on-site, not remotely. As a WordPress Developer, you will be responsible for developing and maintaining WordPress websites and plugins. You will also work closely with our team of designers, project managers, and other developers to ensure that our projects are completed on time and to our clients' satisfaction.
				</p>
				<!-- <h3 class="jd_heading">Who Are We Looking For?</h3>
				<p class="jd_para">
					Ut posuere semper malesuada. Praesent in mauris tristique, laoreet mi ac, volutpat enim. Curabitur pharetra sed erat nec molestie. Maecenas id luctus ex. Curabitur porta congue dui sit amet pulvinar. Suspendisse sagittis odio sed urna congue hendrerit. In ante quam, tincidunt et eros tempus, pulvinar tristique libero. In fermentum, velit eu efficitur finibus, metus sem lobortis lorem, a commodo lectus enim eu nisl. Duis quis metus neque. Sed hendrerit diam non justo aliquet, et ultrices erat consectetur. Proin pharetra augue at urna blandit, a porttitor urna viverra.
				</p> -->
				<h3 class="jd_heading">Responsibilities:</h3>
				<ul class="who_looking">
					<li class="who_list">
						Develop custom WordPress themes, plugins, and websites according to client requirements.
					</li>
					<li class="who_list">
						Collaborate with project managers, designers, and other developers to develop and maintain WordPress websites.
					</li>
					<li class="who_list">
						Troubleshoot and debug WordPress websites to ensure functionality and compatibility with different browsers.
					</li>
					<li class="who_list">
						Develop and maintain custom WordPress plugins to improve the functionality of websites.
					</li>
					<li class="who_list">
						Optimize WordPress websites for performance and search engine optimization (SEO).
					</li>
					<li class="who_list">
						Keep up-to-date with the latest WordPress updates, security patches, and trends in the WordPress development community.
					</li>
				</ul>
				<h4 class="jd_heading">Requirements</h4>
				<ul class="ul_list">
					<li class="li_list">Bachelor's degree in any stream.</li>
					<li class="li_list">At least 3-4 years of experience in WordPress development.</li>
					<li class="li_list">In-depth knowledge of WordPress CMS, PHP, HTML, CSS, and JavaScript.</li>
					<li class="li_list">Experience with WordPress plugin development and customization.</li>
				</ul>
				<ul class="ul_list">
					<li class="li_list">Knowledge of WordPress best practices for security, performance, and SEO.</li>
					<li class="li_list">Strong problem-solving skills and attention to detail.</li>
					<li class="li_list">Ability to work in a team environment and collaborate with designers, project managers, and other developers.</li>
				</ul>
				<a class="mt4_anchor" href="#">Apply Now </a>
			</div>
			<div class="col-md-4">
				<div class="careers_details_sticky_sidebar">
				<h3 class="careers_heading">
					<span>Job Summary</span>
				</h3>
				<div class="details_image_box">
					<img src="images/customer-service.jpg">
					<div class="detail_box_content">
						<h5>Pay</h5>
						<p>₹7,00,000 - ₹8,00,000 a year</p>
					</div>
				</div>
				<div class="details_image_box">
					<img src="images/customer-service.jpg">
					<div class="detail_box_content">
						<h5>Experience</h5>
						<p>3 to 4 years</p>
					</div>
				</div>
				<div class="details_image_box">
					<img src="images/customer-service.jpg">
					<div class="detail_box_content">
						<h5>Qualification</h5>
						<p>Bachelor's degree</p>
					</div>
				</div>
				<div class="details_image_box">
					<img src="images/customer-service.jpg">
					<div class="detail_box_content">
						<h5>Job type</h5>
						<p>Full-time</p>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Careers Detail End -->


 <!-- TALK TO US -->
  <?php include 'includes/talk-to-us.php';?>

  <!-- TALK TO US -->

  <!-- FOOTER -->
<?php include 'includes/footer.php';?>

  <!-- FOOTER -->
  
    <script>
    // Set the target date 10 days from now
    var targetDate = new Date();
    targetDate.setDate(targetDate.getDate() + 10);

    function updateCountdown() {
        var currentDate = new Date();
        var timeDifference = targetDate - currentDate;

        if (timeDifference <= 0) {
            document.getElementById("countdown").innerHTML = "Time's up!";
        } else {
            var days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
            var hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

            document.getElementById("days").innerHTML = days;
            document.getElementById("hours").innerHTML = hours;
            document.getElementById("minutes").innerHTML = minutes;
            document.getElementById("seconds").innerHTML = seconds;
        }
    }

    setInterval(updateCountdown, 1000); // Update every 1 second
</script>
</body>

</html>