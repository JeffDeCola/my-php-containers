<?php
    session_start();
?>

<!DOCTYPE html>

<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    
        // THE PAGES
        $whitelist = array( "",
                            "contact_form_container",
                            "dynamic_items_container",
                            "jeffs_tiny_url_container",
                            "narrow_picture_container",
                            "video_container");

        // THE PAGE TITLE
        if (in_array($_GET['page'], $whitelist)) {
            if ($_GET['page'] == "") {
                echo "<title> CONTAINERS - Jeff DeCola </title>";
                echo "<meta name='Description' content='CONTAINERS - Jeff DeCola' />";
            }
            elseif ($_GET['page'] == "contact_form_container") {
                echo "<title> CONTAINERS - contact_form_container - Jeff DeCola </title>";
                echo "<meta name='Description' content='CONTAINERS - contact_form_container - Jeff DeCola' />";
            }
            elseif ($_GET['page'] == "dynamic_items_container") {
                echo "<title> CONTAINERS - dynamic_items_container - Jeff DeCola </title>";
                echo "<meta name='Description' content='CONTAINERS - dynamic_items_container - Jeff DeCola' />";
            }
            elseif ($_GET['page'] == "jeffs_tiny_url_container") {
                echo "<title> CONTAINERS - jeffs_tiny_url_container - Jeff DeCola </title>";
                echo "<meta name='Description' content='CONTAINERS - jeffs_tiny_url_container - Jeff DeCola' />";
            }
            elseif ($_GET['page'] == "narrow_picture_container") {
                echo "<title> CONTAINERS - narrow_picture_container - Jeff DeCola </title>";
                echo "<meta name='Description' content='CONTAINERS - narrow_picture_container - Jeff DeCola' />";
            }
            elseif ($_GET['page'] == "video_container") {
                echo "<title> CONTAINERS - video_container - Jeff DeCola </title>";
                echo "<meta name='Description' content='CONTAINERS - video_container - Jeff DeCola' />";
            }
            // For the index.php page
            else  {
                echo "<title> CONTAINERS - Jeff DeCola </title>";
                echo "<meta name='Description' content='CONTAINERS - Jeff DeCola' />";
            }
        }
        // The page does not exist - Just give a 404 error
        else {
            echo "<title>404 - CONTAINERS - PAGE NOT FOUND - Jeff DeCola </title>";
            echo "<meta name='Description' content='404 - CONTAINERS - PAGE NOT FOUND - Jeff DeCola' />";
        }
    ?>

    <!-- TAGS FOR GOOGLE, YAHOO, BING, AND ALEXA, IN THAT ORDER -->
    <!-- <meta name="y_key" content="????" > -->
    <!-- <meta name="msvalidate.01" content="????" > -->
    <!-- <meta name="alexaVerifyID" content="??" > -->
    <!-- <meta name="google-site-verification" content="??" > -->

    <!-- THE PAGE ICON -->
    <link rel="icon" type="image/ico" href="../images/page_icon/favicon.ico"/>

    <!-- LINK TO THE STYLE SHEETS - FORCE UPDATE WITH DATE-->
    <link rel="stylesheet" type="text/css" href="../css/reset.css?v=<?php echo date('his'); ?>"/>
    <link rel="stylesheet" type="text/css" href="../css/template.css?v=<?php echo date('his'); ?>"/>
    <link rel="stylesheet" type="text/css" href="../css/wrappers.css?v=<?php echo date('his'); ?>"/>
    <link rel="stylesheet" type="text/css" href="../css/containers.css?v=<?php echo date('his'); ?>"/>
    <link rel="stylesheet" type="text/css" href="css/containers.css?v=<?php echo date('his'); ?>"/>

    <!-- GOOGLE FONT -->
    <!-- Make sure to update Body tag in template.css with the font name -->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Domine"/>

    <!-- JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="jqs/custom.js"></script>
    <script type="text/javascript" src="jqs/js.cookie.js"></script>
    
    <!-- GOOGLE ANALYTICS -->

</head>

<body>

<noscript>
    <div style="margin-top: 10px; color: #f01; font-size: 11px; width:100%; text-align:center">
        You may not get the full functionality of this webpage because JavaScript is either disabled or not supported by your browser. <br />
    </div>
</noscript>

<!-- START OF entire_wrapper -->
<div id="entire_wrapper">

    <div id="header_wrapper">

        <header>

            <h2 class="hidden"> HEADER </h2>

            <h1> JEFF'S PHP CONTAINERS </h1>

            <!-- <div id="header_container">
                <p> tbd </p>
            </div> -->

        </header>

    </div>
    <!-- END OF header_wrapper -->

    <div id="nav_wrapper">

        <nav>

            <h2 class="hidden"> Navigation </h2>

             <div id="nav_container">
                <ul>
                    <li><a href="http://www.jeffdecola.com/my-php-containers/index.php?page=contact_form_container"> contact_form_container </a> </li>
                    <li><a href="http://www.jeffdecola.com/my-php-containers/index.php?page=dynamic_items_container"> dynamic_items_container </a> </li>
                    <li><a href="http://www.jeffdecola.com/my-php-containers/index.php?page=jeffs_tiny_url_container"> jeffs_tiny_url_container </a> </li>
                    <li><a href="http://www.jeffdecola.com/my-php-containers/index.php?page=narrow_picture_container"> narrow_picture_container </a> </li>
                    <li><a href="http://www.jeffdecola.com/my-php-containers/index.php?page=video_container"> video_container </a> </li>
                    <br />
                    <li><a href="https://github.com/JeffDeCola/my-php-containers"> MY PHP GITHUB REPO </a> </li>
                    <li><a href="http://www.jeffdecola.com"> HOME </a> </li>
                </ul>
            </div>

        </nav>

    </div>
       <!-- END OF nav_wrapper -->

       <div id="section_wrapper">

        <section>

            <h2 class="hidden"> SECTION </h2>

            <div class="container_header_container">

                <?php

                    if (in_array($_GET['page'], $whitelist)) {
                        if ($_GET['page'] == "") { ?>
                            <p> CHOOSE A CONTAINER ABOVE </p>
                        <?php }
                        elseif ($_GET['page'] == "contact_form_container") { ?>
                            <h2> CONTACT FORM CONTAINER </h2>
                            <p> An online contact form that is sent to an email </p>
                            <p> Code located
                                <a href="https://github.com/JeffDeCola/my-php-containers/tree/master/interaction/contact_form_container"> here </a>
                            </p>
                        <?php }
                        elseif ($_GET['page'] == "dynamic_items_container") { ?>
                            <h2> DYNAMIC ITEMS CONTAINER </h2>
                            <p> Displays items (e.g. menu or picture) that will center and collapse properly on smaller screens </p>
                            <p> Code located
                                <a href="https://github.com/JeffDeCola/my-php-containers/tree/master/building-blocks/dynamic_items_container"> here </a>
                            </p>
                        <?php }
                        elseif ($_GET['page'] == "jeffs_tiny_url_container") { ?>
                            <h2> JEFFS TINY URL CONTAINER </h2>
                            <p> Shorten Long URLs to Tiny URLs </p>
                            <p> Information stored in a mySQLi database </p>
                            <p> Code located
                                <a href="https://github.com/JeffDeCola/my-php-containers/tree/master/interaction/jeffs_tiny_url_container"> here </a>
                            </p>
                        <?php }
                        elseif ($_GET['page'] == "narrow_picture_container") { ?>
                            <h2> NARROW PICTURE CONTAINER </h2>
                            <p> Allow a picture to scale and display across the screen </p>
                            <p> Code located
                                <a href="https://github.com/JeffDeCola/my-php-containers/tree/master/visual/narrow_picture_container"> here </a>
                            </p>
                        <?php }
                        elseif ($_GET['page'] == "video_container") { ?>
                            <h2> VIDEO CONTAINER </h2>
                            <p> A video container for Youtube or Vimeo with an optional background image </p>
                            <p> Code located
                                <a href="https://github.com/JeffDeCola/my-php-containers/tree/master/visual/video_container"> here </a>
                            </p>
                        <?php }
                        // For the index.php page
                        else { ?>
                            <p> Should not get this </p>
                        <?php }
                    }
                    // The page does not exist - Just give a 404 error
                    else { ?>
                        <p> CHOOSE A CONTAINER </p>
                    <?php }

                ?>

            </div>
            <!-- END OF container_header -->

            <div id="page_wrapper">

                <div id="article_wrapper">

                    <article>

                        <h2 class="hidden"> ARTICLE - HOME PAGE </h2>

                        <!-- CHOOSE PAGE -->
                        <?php
                             if(in_array($_GET['page'], $whitelist)) {

                                // Is it the home page?
                                if ($_GET['page'] == "") {
                                    // Blank
                                }
                                else if ($_GET['page'] == "contact_form_container")
                                {
                                    include("interaction/contact_form_container/contact_form_container.php");
                                }
                                else if ($_GET['page'] == "dynamic_items_container")
                                {
                                    include("building-blocks/dynamic_items_container/dynamic_items_container.php");
                                }
                                else if ($_GET['page'] == "jeffs_tiny_url_container")
                                {
                                    include("interaction/jeffs_tiny_url_container/jeffs_tiny_url_container.php");
                                }
                                else if ($_GET['page'] == "narrow_picture_container")
                                {
                                    include("visual/narrow_picture_container/narrow_picture_container.php");
                                }
                                else if ($_GET['page'] == "video_container")
                                {
                                    include("visual/video_container/video_container.php");
                                }
                            }
                            // NOT IN WHITELIST - Page does not exist - Just give a 404 error
                            else {
                                include ('../pages/jeffdecola_404.php');
                            }
                        ?>

                    </article>

                </div>

            </div>
            <!-- END OF page_wrapper -->

        </section>

    </div>
    <!-- END OF section_wrapper -->

    <div id="footer_wrapper">

        <footer>

            <h2 class="hidden"> FOOTER </h2>

            <div id="footer_copyright_container">
                <p>
                    Copyright &copy; 2020
                    <a href="http://www.jeffdecola.com"> HOME, </a>
                    <a href="http://www.jeffdecola.com/index.php?page=my_website_links"> MY LINKS, </a>
                    <!-- <a href="http://www.jeffdecola.com/aw-stats"> AW, </a> -->
                    <a href="http://www.jeffdecola.com/phpinfo.php"> PHP, </a>
                    <a href="http://www.jeffdecola.com/index.php?page=stop_counting_me"> GA </a>
                    <!---<script type="text/javascript">
                        // Check if Google Analytics Master Tracking Cookie is set
                        if (document.cookie.indexOf('jeff_master_disable_google_analytics=') != -1) {
                            document.write("BLOCKING ON");
                        }
                    </script> -->
                </p>
            </div>

        </footer>

    </div>
    <!-- END OF footer_wrapper -->

</div>
<!-- END OF entire_wrapper -->

</body>
</html>
