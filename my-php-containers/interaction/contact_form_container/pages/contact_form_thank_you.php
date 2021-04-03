<!-- CONTACT FORM - THANK YOU -->

<?php
    session_start();
?>

<!DOCTYPE html>

<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> CONTACT FORM THANK YOU - Jeff DeCola </title>
    <meta name='Description' content='CONTACT FORM THANK YOU - Jeff DeCola '>

    <!-- LINK TO THE STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="../../../css/reset.css?v=<?php echo date('his'); ?>"/>
    <link rel="stylesheet" type="text/css" href="../css/contact_form_container.css?v=<?php echo date('his'); ?>">

    <!-- GOOGLE FONT -->
    <!-- Make sure to update Body tag in template.css with the font name -->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Domine">

</head>

<body>

    <div id="contact_form_container">

        <h3> Your comment has been sent </h3>
        <br />

        <FORM>
            <INPUT class="contact_button" TYPE="button" VALUE="Home"
                   onClick="location.href='http://www.jeffdecola.com/my-php-containers/index.php?page=contact_form_container'" style="cursor:pointer">
        </FORM>

    </div>

</body>

</html>
