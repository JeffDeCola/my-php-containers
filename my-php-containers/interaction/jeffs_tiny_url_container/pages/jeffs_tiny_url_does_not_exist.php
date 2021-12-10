<!-- JEFF'S TINY URL DOES NOT EXIST -->

<?php
    session_start();
?>

<!DOCTYPE html>

<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> JEFFS TINY URL DOES NOT EXIST - Jeff DeCola </title>
    <meta name='Description' content='JEFFS TINY URL DOES NOT EXIST - Jeff DeCola'>

    <!-- LINK TO THE STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="../../../css/reset.css?v=<?php echo date('his'); ?>"/>
    <link rel="stylesheet" type="text/css" href="../css/jeffs_tiny_url_container.css?v=<?php echo date('his'); ?>">

    <!-- GOOGLE FONT -->
    <!-- Make sure to update Body tag in template.css with the font name -->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Domine">

</head>

<body>

    <div id="jeffs_tiny_url_container">

        <h1> TINY URL DOES NOT EXIST </h1>
        <br />
        <p> <b> "<?php echo "http://JeffDeCola.com/t/".$_GET['bad_tiny_link'] ?>" </b> </p>
        <br/>

        <FORM>
            <INPUT class="jeffs_tiny_url_button" TYPE="button" VALUE="Back" onClick="history.go(-1);return true;" style="cursor:pointer">
        </FORM>
        
        <FORM>
            <INPUT class="jeffs_tiny_url_button" type="button" value="Create a Tiny URL"
                   onClick="location.href='https://www.jeffdecola.com/my-php-containers/index.php?page=jeffs_tiny_url_container'" style="cursor:pointer">
        </FORM>

    </div>

</body>

</html>
