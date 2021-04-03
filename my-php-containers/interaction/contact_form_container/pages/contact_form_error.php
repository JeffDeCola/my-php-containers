<!-- CONTACT FORM - ERROR -->

<?php
    session_start();
?>

<!DOCTYPE html>

<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> CONTACT FORM ERROR - Jeff DeCola </title>
    <meta name='Description' content='CONTACT FORM ERROR - Jeff DeCola '>

    <!-- LINK TO THE STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="../../../css/reset.css?v=<?php echo date('his'); ?>"/>
    <link rel="stylesheet" type="text/css" href="../css/contact_form_container.css?v=<?php echo date('his'); ?>">

    <!-- GOOGLE FONT -->
    <!-- Make sure to update Body tag in template.css with the font name -->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Domine">

</head>

<body>

    <div id="contact_form_container">

        <h3> Please fill in all fields </h3>
        <br />
        <p> Make sure your email is correct </p>
        <br />

        <FORM>
            <INPUT class="contact_button" TYPE="button" VALUE="Back" onClick="history.go(-1);return true;" style="cursor:pointer">
        </FORM>

    </div>

</body>

</html>
