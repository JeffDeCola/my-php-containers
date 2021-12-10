<!-- JEFF'S TINY URL SHORTENED -->

<?php
    session_start();
?>

<!DOCTYPE html>

<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> JEFFS TINY URL SHORTENED - Jeff DeCola </title>
    <meta name='Description' content='JEFFS TINY URL SHORTENED - Jeff DeCola'>

    <!-- LINK TO THE STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="../../../css/reset.css?v=<?php echo date('his'); ?>"/>
    <link rel="stylesheet" type="text/css" href="../css/jeffs_tiny_url_container.css?v=<?php echo date('his'); ?>">

    <!-- GOOGLE FONT -->
    <!-- Make sure to update Body tag in template.css with the font name -->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Domine">

    <!-- JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <script type="text/javascript" src="../jqs/custom.js"></script>
    
</head>

<body>

    <div id="jeffs_tiny_url_container">

        <h1> TINY URL CREATED</h1>
        <br />

        <?php
            $long_url = $_GET['long_url'];
            $short_url = $_GET['short_url'];
        ?>

        <!-- BEFORE -->
        <h3> Original URL: </h3>
        <?php $parts = parse_url($long_url); ?>
        <p> <?php echo $long_url; ?></p>
        
        <br />

         <!-- AFTER -->
        <h3> Tiny URL: </h3>

        <!-- ******* THIS LINKS POINTS TO TINY URL DIR WHERE .htaccess file is  -->
        <p id="copy_me"> http://JeffDeCola.com/t/<?php echo $short_url ?> </p>
        <!-- ******* THIS LINKS POINTS TO TINY URL DIR WHERE .htaccess file is  -->
        <br />
        
        <button class="jeffs_tiny_url_button" type="button" onclick="copyToClipboard('#copy_me')" style="cursor:pointer"> Copy to Clipboard </button>

        <FORM>
            <INPUT class="jeffs_tiny_url_button" type="button" value="Home"
                   onClick="location.href='https://www.jeffdecola.com/my-php-containers/index.php?page=jeffs_tiny_url_container'" style="cursor:pointer">
        </FORM>

    </div>

</body>

</html>

