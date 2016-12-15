<?php
    include "htmlstart.php";
    start("Contact |", "Get in touch");
?>
<!-- separate stylesheet for page load -->
<link rel="stylesheet" type="text/css" href="res/additional.css">

<!-- contact page html markup -->
<div class="opaque_image_contact"></div>
<div class="page_wrap contactpage">
	<article>
		<h2>CONTACT <br> US</h2>
		<p>If you have any questions or you want to get in touch with us, fill the form below.</p>
	</article>
<div id="contact_form">
<div class="contactus">
<!-- PHP for contact page -->
	<?php
$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>
    <!-- Contact page form -->
    <form  action="contact.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="submit">
    Your name:<br>
    <input name="name" type="text" value="" size="30"/><br>
    Your email:<br>
    <input name="email" type="text" value="" size="30"/><br>
    Your message:<br>
    <textarea name="message" rows="7" cols="30"></textarea><br>
    <input type="submit" value="Send email"/>
    </form>
    <?php
    } 


    
else                /* send the submitted data */
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
        echo "All fields are required, please fill <a href=\"\">the form</a> again.";
        // echo out error
        }
    else{        
        $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
        mail("youremail@yoursite.com", $subject, $message, $from);
        echo "Email sent!";
        // echo out success
        }
    }  
?>
</div>
<!-- google map -->
<div class="findus">
<iframe width="300" height="350"  style="border:0"
src="https://www.google.com/maps/embed/v1/place?q=Kasernevej%205%208800%20Viborg%20Denmark%20&key=AIzaSyALPhCq1CQZsJk-7wbjnuFP55jPqO9u_QU " allowfullscreen></iframe> 
</div>
</div>
</div>
<div class="opaque_container"></div>

<?php
	include("htmlend.php");
?>