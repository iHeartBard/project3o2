<?php
    include "htmlstart.php";
    start("Participate |", "Upload you video and have a chance to win!");
?>
<!-- separate stylesheet for page load -->
<link rel="stylesheet" type="text/css" href="res/additional.css">

<!-- participate page html markup -->
<div class="opaque_image_participate"></div>
<div class="page_wrap">
	<article>
	<h2>VIDEO <br> APPLICATION</h2>
	<p>Share your creativity with us and have a chance for your video to be selected as one of the official videos promoting Aarhus European Capital of Culture in 2017.<br>All fields are required!</p>
	</article>
<!-- form for sharing a video -->
<div class="upload_form">
	<div class="aarhus_img"><img src="img/2017.png" alt="aarhus 2017"></div>
	<h3 class="sub">Fill out the form to share your video!</h3>
	<div class="opaque_form"></div>
	<!-- form targets video_database.php to execute the action -->
	<form action="video_database.php" method="POST">
		<section class="form user">
			<h2> Full name </h2>
			<input class="col-sm-6" type="text" name="uplfirstname" required placeholder="First name...">
			<input class="col-sm-6" type="text" name="upllastname" required placeholder="Last name..."><br />
			<h2> Date of Birth </h2>
			<input type="date" name="uplbirthdate" required id="datepick"> <br />
			<h2> Gender </h2>
			<select required size="1" name="uplgender">
				<option label=" "></option>
				<option>Male</option>
				<option>Female</option>
			</select><br />
			<h2> Email </h2>
			<input type="email" name="email" required placeholder="E-mail..."><br />
			<h2> Occupation </h2>
			<input type="text" name="ocupation" placeholder="Ocupation...">
		</section>
		<section class="form video">
<!-- 			<form action="upload.php" method="post" enctype="multipart/form-data">
			    <h2>Profile Picture </h2>
			    <input type="file" name="fileToUpload" id="fileToUpload">
			</form> -->
			<h2>Video Name</h2>
			<input type="text" name="videoname" required placeholder="Video name..."><br />
			<h2> Video Type </h2>
			<select required size="1" name="videotype">
				<option label=" "></option>
				<option>Animation</option>
				<option>Film</option>
			</select><br />
			<h2> Video URL </h2>
			<input type="url" name="link" required placeholder="Video url..."><br />
			<h2> Video Description </h2>
		<textarea class="col-sm-4"  rows="3" cols="65" name="videodescription"  required placeholder="Description (max 200 char.)..."></textarea><br />
		</section>
		<div class="applybtn"><input type="submit" name="share" value="Apply"></div>
	</form>
</div>
</div>
<!-- opaque container for the form wrap -->
<div class="opaque_container"></div>
<?php
	include("htmlend.php");
?>