<!-- JEFF'S TINY URL SHORTENED -->

<!doctype html>

<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title> JEFFS TINY URL SHORTENED - Jeff DeCola </title>
 	<meta name='Description' content='JEFFS TINY URL SHORTENED - Jeff DeCola'>

	<!-- LINK TO THE STYLE SHEETS -->
	<link rel="stylesheet" type="text/css" href="../../../css/reset.css"> 
	<link rel="stylesheet" type="text/css" href="../../template.css"> 
	<link rel="stylesheet" type="text/css" href="../../main_layout.css"> 
    <link rel="stylesheet" type="text/css" href="../css/jeffs_tiny_url_container.css"> 

    <!-- GOOGLE FONT -->
    <!-- Make sure to update Body tag in template.css with the font name -->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Domine"> 
    
</head>

<body>    
        
    <div id="jeffs_tiny_url_container">

        <?php
            $long_url = $_GET['long_url'];
            $short_url = $_GET['short_url'];
        ?>
        
        <!-- BEFORE -->         
        <h3> Original URL: </h3>
        <br />
        <?php $parts = parse_url($long_url); ?>
        <p> <?php echo $long_url; ?></p>
    
        <br />

         <!-- AFTER -->                
        <h3>Tiny URL:</h3>
        <br />
     	
        <!-- ******* THIS LINKS POINTS TO TINY URL DIR WHERE .htaccess file is  -->
        <p> http://JeffDeCola.com/t/<?php echo $short_url ?></p>
		<!-- ******* THIS LINKS POINTS TO TINY URL DIR WHERE .htaccess file is  -->
        <br />
        
        <FORM> 
            <INPUT class="jeffs_tiny_url_button" TYPE="button" VALUE="Home" onClick="location.href='http://www.jeffryadecola.com/containers'" style="cursor:pointer">
        </FORM> 

    </div>
    
</body>

</html>

