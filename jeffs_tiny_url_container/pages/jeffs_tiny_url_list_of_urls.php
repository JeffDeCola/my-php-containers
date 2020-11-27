<!-- JEFF'S TINY URL LIST OF URLs -->

<?php
    session_start();
?>

<!DOCTYPE html>

<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> JEFFS TINY URL LIST OF URLS - Jeff DeCola </title>
    <meta name='Description' content='JEFFS TINY URL LIST OF URLS - Jeff DeCola'>

    <!-- LINK TO THE STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="../../../css/reset.css?v=<?php echo date('his'); ?>"/>
    <link rel="stylesheet" type="text/css" href="../css/jeffs_tiny_url_container.css?v=<?php echo date('his'); ?>">

    <!-- GOOGLE FONT -->
    <!-- Make sure to update Body tag in template.css with the font name -->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Domine">

</head>

<body>

    <div id="jeffs_tiny_url_container">

    <h1> JEFFS TINY DATABASE </h1>
    <p> Last one created listed first </p>
    <br />

    <FORM>
        <INPUT class="jeffs_tiny_url_button" TYPE="button" VALUE="Back"
        onClick="history.go(-1);return true;" style="cursor:pointer">
    </FORM>
    <br />

    <?php

        include '../php_scripts/sql_pw-ignore.php';

        $database_error_page = "http://www.jeffdecola.com/my-php-containers/jeffs_tiny_url_container/pages/jeffs_tiny_url_database_error.php";

        // OPEN THE DATABASE
        $servername = "localhost";
        $username = "jeffdeco_jeff";
        $password = $pw;
        $dbname = "jeffdeco_jeffs_tiny_url_container";

        // CREATE DTABASE CONNECTION
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (mysqli_connect_errno($conn)) {
            header("Location: $database_error_page");
            exit;
        }

        // GET ENTIRE CONTENTS OF TABLE - BY REVERSE ORDER - id is generic (could use random_number_id)
        $sql = "SELECT * FROM JEFFS_TINY_URL_TABLE ORDER BY the_date DESC";
        $data = mysqli_query($conn, $sql);

        // MAKE THE TABLE
        echo '<table table id="jeffs_tiny_url_list_table">';

            // PLACE CONTENTS IN ARRAY
            while ($info = mysqli_fetch_array($data)) {
                echo '<tr class="jeffs_tiny_url_list_row">';
                    echo '<td class="jeffs_tiny_url_list_random_number">';
                        echo $info['random_number_id'];
                    echo "</td>";
                    echo '<td class="jeffs_tiny_url_list_long_url">';
                        echo $info['long_url_escape'];
                    echo "</td>";
                echo "</tr>";

                echo '<tr class="jeffs_tiny_url_list_row">';
                    echo '<td class="jeffs_tiny_url_list_date">';
                        echo $info['the_date'];
                    echo "</td>";
                    echo '<td class="jeffs_tiny_url_list_short_url">';
                        // ******* THIS LINKS POINTS TO TINY URL DIR WHERE .htaccess file is  *****************************
                        echo '<a href="'.$info['long_url_escape'].'">http://JeffDeCola.com/t/'.$info['short_url'].'</a>';
                        // ******* THIS LINKS POINTS TO TINY URL DIR WHERE .htaccess file is  *****************************
                    echo "</td>";
                echo "</tr>";

                echo '<tr class="jeffs_tiny_url_list_row">';
                    echo '<td>';
                        echo "<br/>";
                    echo "</td>";
                echo "</tr>";

            }

         echo "</table>";

        // CLOSE DATABASE
        mysqli_close($conn);

    ?>
    
    <p> END OF LIST </p>

</body>

</html>
