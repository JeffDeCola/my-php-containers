<?php
	session_start();
?>

<!DOCTYPE html>
      
<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php
		echo "<title> CONTAINERS - Jeff DeCola </title>";
 		echo "<meta name='Description' content='CONTAINERS - Jeff DeCola'>";	
	?>
	            
	<!-- THE PAGE ICON -->
	<link rel="icon" type="image/png" href="/images/page_icon/pageicon.png">
    
	<!-- LINK TO THE STYLE SHEETS -->
	<link rel="stylesheet" type="text/css" href="../css/reset.css"> 
	<link rel="stylesheet" type="text/css" href="template.css"> 
	<link rel="stylesheet" type="text/css" href="main_layout.css"> 
   
    <!-- GOOGLE FONT -->
    <!-- Make sure to update Body tag in template.css with the font name -->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Domine"> 

    <!-- JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="../jqs/custom.js"></script>
	<script type="text/javascript" src="../jqs/js.cookie.js"></script>

</head>

<body>

<noscript>
<div style="padding: 10px; color: #f01; font-size: 11px; width:100%; text-align:center"> You may not get the full functionality of this webpage because JavaScript is either disabled or not supported by your browser. <br /> </div>
</noscript>

<!-- START OF entire_wrapper -->
<div id="entire_wrapper">
    
    <div id="title">
    	<h1> JEFF'S CONTAINERS </h1>
    	<h2> Dynamic for any Size Screen </h2>
    </div>
    
   	<!-- ********************************************** -->
    <div class="container_header">
   	 	<h2> NARROW PICTURE CONTAINER </h2>
   	</div>
    <link rel="stylesheet" type="text/css" href="narrow_picture_container/css/narrow_picture_container.css"> 
 	<?php include 'narrow_picture_container/narrow_picture_container.php';?>

   	<!-- ********************************************** -->
    <div class="container_header">
   	 	<h2> SOCIAL MEDIA BAR CONTAINER </h2>
        <p> Built with Dynamic Items Container </p>
   	</div>
    <link rel="stylesheet" type="text/css" href="social_media_bar_container/css/social_media_bar_container.css"> 
 	<?php include 'social_media_bar_container/social_media_bar_container.php';?>
    
   	<!-- ********************************************** -->
    <div class="container_header">
   	 	<h2> DYNAMIC ITEMS CONTAINER </h2>
        <p> Examples of Single and Double Containers </p>
        <p> Also can be used to display a picture or create a menu</p>
   	</div>
    <link rel="stylesheet" type="text/css" href="dynamic_items_container/css/dynamic_items_container.css"> 
 	<?php include 'dynamic_items_container/dynamic_items_container.php';?>

   	<!-- ********************************************** -->
    <div class="container_header">
   	 	<h2> CONTACT FORM CONTAINER </h2>
   	</div>
    <link rel="stylesheet" type="text/css" href="contact_form_container/css/contact_form_container.css"> 
	<?php include 'contact_form_container/contact_form_container.php';?>

   	<!-- ********************************************** -->
    <div class="container_header">
   	 	<h2> VIDEO CONTAINER </h2>
        <p> Youtube and Vimeo Examples </p>
   	</div>
    <link rel="stylesheet" type="text/css" href="video_container/css/video_container.css"> 
    <script type="text/javascript" src="video_container/jqs/custom.js"></script>
    <script type="text/javascript" src="video_container/jqs/fitvids.js"></script>
 	<?php include 'video_container/video_container.php';?>
            
</div>
<!-- END OF entire_wrapper -->

</body>
</html>
