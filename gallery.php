<?php
    include "htmlstart.php";
    start("Gallery |", "Check out the videos taking part in the contest!");
?>
<!-- separate stylesheet for page load -->
<link rel="stylesheet" type="text/css" href="res/additional.css">

<!-- gallery html markup -->
<div class="opaque_image_gallery"></div>
<div class="page_wrap">
	<article>
		<h2>VIDEO CONTEST <br> AARHUS 2017</h2>
		<p>Welcome to our video gallery. Here you can see what other people have created for our 2017 event and also vote for the one that best depicts Aarhus as an European Capital of Culture.<br>The winner will be selected based on the cumulative votes from the teachers of <a href="http://www.animwork.dk/en/">Animation Workshop</a> and the people that cast their vote on our campaign website.</p>
		<h3 class="headline">GALLERY</h3>
	</article>
	<div class="flex_arrange">
    <!-- PHP for echoing out the gallery from the database -->
<?php
// Database connection file
    require "pdoconnect/pdoconnect.php";
    
// Database query to select data from table
    $pdoQuery = "SELECT * FROM videos";

    $pdoResult = $pdoConnect->query($pdoQuery);

// Foreach loop to echo out the data from the database
    foreach ($pdoResult as $row) {
    	echo '<div class="video_wrap"> 
              <div class="opaque_videos"></div>   
    	      <div class="wrap_boxes video_info">
                <article>
    			<h2>'.$row["videoname"].'</h2>
    			<h3>'."Uploaded by:".' '.' '.$row["upl_first_name"].' '.$row["upl_last_name"].'</h3>
    			<p>'.$row["description"].'</p>
                </article>
    		  </div>
    		  <div class="wrap_boxes video_frame">
    			<iframe src="http://www.youtube.com/embed/'.$row["link"].'"  allowfullscreen></iframe>
    		  </div>
              </div>';
    }

?>
	</div>
    </div>
    <!-- opaque container for the gallery items -->
    <div class="opaque_container"></div>
<?php
	include "htmlend.php";
?>
