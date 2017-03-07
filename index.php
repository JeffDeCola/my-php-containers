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

	<!-- For Syntax Highlighting -->
	<script src="https://rawgit.com/google/code-prettify/master/loader/run_prettify.js?autoload=true&amp;skin=sunburst&amp;lang=css" defer=""></script>
      
</head>

<body>

<noscript>
<div style="padding: 10px; color: #f01; font-size: 11px; width:100%; text-align:center"> You may not get the full functionality of this webpage because JavaScript is either disabled or not supported by your browser. <br /> </div>
</noscript>

<!-- START OF entire_wrapper -->
<div id="entire_wrapper">

	<!-- Get the page for the container -->
	<?php
  		$container_name = $_GET['container_name'];
 		if ($container_name == "") {
 		 	$container_name = "all";
 	 	}
	?>    

	<div id="title">
    	<h1> JEFF'S PHP CONTAINERS </h1>
    	<h2> Designed for Dynamic Screen Widths</h2>
        <br />
     	<?php if ($container_name == "all") { ?>
        	<p> <a href="https://github.com/JeffDeCola/my-php-containers"> Get any of the following php containers on GitHub </a> </p>
   		<?php } else { ?>
           	<p> <a href="https://github.com/JeffDeCola/my-php-containers"> Get this container on GitHub </a> </p>
    	<?php } ?>
    </div>
    
     <?php if ($container_name == "all") { ?>
	 	<FORM>
        	<INPUT id="container_button" TYPE="button" VALUE="Home" onClick="location.href='http://www.jeffryadecola.com'" style="cursor:pointer">
    	</FORM> 
    <?php } else { ?>
    	 <FORM>
        	<INPUT id="container_button" TYPE="button" VALUE="Back" onClick="location.href='http://www.jeffryadecola.com/my-php-containers'" style="cursor:pointer">
    	</FORM> 
    <?php } ?>
	
    <!-- ********************************************************************************************************** -->
    <?php if (($container_name == "all") || ($container_name == "jeffs_tiny_url_container")) { ?>
		<div class="container_header">
   	 		<h2> JEFFS TINY URL CONTAINER </h2>
         	<p> Shorten long URLs to tiny ones </p>
         	<?php if ($container_name == "all") { ?>
				<p> <a href="http://www.jeffryadecola.com/my-php-containers/index.php?container_name=jeffs_tiny_url_container">
                See this container on its own page </a> </p>
			<?php } ?>
  		</div>
    	<link rel="stylesheet" type="text/css" href="jeffs_tiny_url_container/css/jeffs_tiny_url_container.css"> 
 		<?php include 'jeffs_tiny_url_container/jeffs_tiny_url_container.php';?>
  	<?php } ?>

    <!-- ********************************************************************************************************** -->
    <?php if (($container_name == "all") || ($container_name == "jeffs_simple_chat_container")) { ?>
        <div class="container_header">
            <h2> JEFFS SIMPLE CHAT CONTAINER </h2>
         	<p> TBD </p>
         	<?php if ($container_name == "all") { ?>
         		<p> <a href="http://www.jeffryadecola.com/my-php-containers/index.php?container_name=jeffs_simple_chat_container"> 
                See this container on its own page </a> </p>
			<?php } ?>
        </div>
        <link rel="stylesheet" type="text/css" href="jeffs_simple_chat_container/css/jeffs_simple_chat_container.css"> 
        <?php include 'jeffs_simple_chat_container/jeffs_simple_chat_container.php';?>
  	<?php } ?>

    <!-- ********************************************************************************************************** -->
    <?php if (($container_name == "all") || ($container_name == "narrow_picture_container")) { ?>
        <div class="container_header">
            <h2> NARROW PICTURE CONTAINER </h2>
         	<p> Allow a picture to scale and display across the screen </p>
         	<?php if ($container_name == "all") { ?>
	         	<p> <a href="http://www.jeffryadecola.com/my-php-containers/index.php?container_name=narrow_picture_container">
                See this container on its own page </a> </p>
			<?php } ?>
        </div>
        <link rel="stylesheet" type="text/css" href="narrow_picture_container/css/narrow_picture_container.css"> 
        <?php include 'narrow_picture_container/narrow_picture_container.php';?>
  	<?php } ?>

    <!-- ********************************************************************************************************** -->
    <?php if (($container_name == "all") || ($container_name == "social_media_bar_container")) { ?>
        <div class="container_header">
            <h2> SOCIAL MEDIA BAR CONTAINER </h2>
            <p> Provide links to social media, built with Dynamic Items Container </p>
         	<?php if ($container_name == "all") { ?>
         		<p> <a href="http://www.jeffryadecola.com/my-php-containers/index.php?container_name=social_media_bar_container">
            	See this container on its own page </a> </p>
			<?php } ?>
        </div>
        <link rel="stylesheet" type="text/css" href="social_media_bar_container/css/social_media_bar_container.css"> 
        <?php include 'social_media_bar_container/social_media_bar_container.php';?>
   	<?php } ?>
   
    <!-- ********************************************************************************************************** -->
    <?php if (($container_name == "all") || ($container_name == "dynamic_items_container")) { ?>
        <div class="container_header">
            <h2> DYNAMIC ITEMS CONTAINER </h2>
            <p> Displays items (e.g. Menu) that will center and collapse properly on smaller screens </p>
         	<?php if ($container_name == "all") { ?>
         		<p> <a href="http://www.jeffryadecola.com/my-php-containers/index.php?container_name=dynamic_items_container">
                See this container on its own page </a> </p>
			<?php } ?>
        </div>
        <link rel="stylesheet" type="text/css" href="dynamic_items_container/css/dynamic_items_container.css"> 
        <?php include 'dynamic_items_container/dynamic_items_container.php';?>
  	<?php } ?>

    <!-- ********************************************************************************************************** -->
    <?php if (($container_name == "all") || ($container_name == "contact_form_container")) { ?>
        <div class="container_header">
            <h2> CONTACT FORM CONTAINER </h2>
         	<p> An online contact form that is sent to an email </p>
         	<?php if ($container_name == "all") { ?>
         		<p> <a href="http://www.jeffryadecola.com/my-php-containers/index.php?container_name=contact_form_container">
                See this container on its own page </a> </p>
			<?php } ?>
        </div>
        <link rel="stylesheet" type="text/css" href="contact_form_container/css/contact_form_container.css"> 
        <?php include 'contact_form_container/contact_form_container.php';?>
  	<?php } ?>

    <!-- ********************************************************************************************************** -->
    <?php if (($container_name == "all") || ($container_name == "video_container")) { ?>
        <div class="container_header">
            <h2> VIDEO CONTAINER </h2>
         	<p> For Youtube or Vimeo with optional background </p>
         	<?php if ($container_name == "all") { ?>
         		<p> <a href="http://www.jeffryadecola.com/my-php-containers/index.php?container_name=video_container">
                See this container on its own page </a> </p>
			<?php } ?>
        </div>
        <link rel="stylesheet" type="text/css" href="video_container/css/video_container.css"> 
        <script type="text/javascript" src="video_container/jqs/custom.js"></script>
        <script type="text/javascript" src="video_container/jqs/fitvids.js"></script>
        <?php include 'video_container/video_container.php';?>
  	<?php } ?>

    <div id="footer_wrapper">
                
        <div id="footer_copyright_container">
            <p> 
                Copyright &copy; 2017
                <a href="http://www.jeffryadecola.com"> JAD, </a>                    
                <a href="http://www.jeffryadecola.com/index.php?page=my_website_links"> LINKS, </a>                    
                <a href="http://www.jeffryadecola.com/aw-stats"> AW, </a>
                <a href="http://www.jeffryadecola.com/phpinfo.php"> PHP, </a>
                <a href="http://www.jeffryadecola.com/index.php?page=stop_counting_me"> GA </a>
                <script type="text/javascript">
                    // Check if Google Analytics Master Tracking Cookie is set
                    if (document.cookie.indexOf('jeff_master_disable_google_analytics=') != -1) {
                        document.write("BLOCKING ON");
                    }
                </script>
            </p>
        </div>
    
    </div>
   	<!-- END OF footer_wrapper -->
    
</div>
<!-- END OF entire_wrapper -->

</body>
</html>
