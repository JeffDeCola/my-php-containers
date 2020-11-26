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

        <h3> Sorry</h3>
        <p> It appears the Tiny Link <b>"<?php echo $bad_tiny_link ?>"</b> </p>
        <br/>
        <p> does not exist anymore. </p>
        <br />

        <FORM>
            <INPUT class="jeffs_tiny_url_button" TYPE="button" VALUE="Back" onClick="history.go(-1);return true;" style="cursor:pointer">
        </FORM>

    </div>

</body>

</html>
