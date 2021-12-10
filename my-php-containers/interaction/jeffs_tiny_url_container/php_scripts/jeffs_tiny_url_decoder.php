<?php

    include 'sql_pw-ignore.php';

    $sorry_url_page = "http://www.jeffdecola.com/my-php-containers/interaction/jeffs_tiny_url_container/pages/jeffs_tiny_url_does_not_exist.php";
    $database_error_page = "http://www.jeffdecola.com/my-php-containers/interaction/jeffs_tiny_url_container/pages/jeffs_tiny_url_database_error.php";

    // OPEN THE DATABASE
    $servername = "localhost";
    $username = "jeffdeco_jeff";
    $password = $pw;
    $dbname = "jeffdeco_jeffs_tiny_url_container";

    // CREATE DATABASE CONNECTION
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (mysqli_connect_errno($conn)) {
        header("Location: $database_error_page");
        exit;
    }

    // WHAT WAS THE CODE SENT FROM .htaccess (REDIRECTED 4 CHARACTERS AT END OF jeffdecola.com/t/????
    $decode_code_from_user = mysqli_real_escape_string($conn, $_GET["decode"]);

    //GET THE TABLE ROW
    $sql = "SELECT * FROM JEFFS_TINY_URL_TABLE where short_url='$decode_code_from_user'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    // CLOSE DATABASE
    mysqli_close($conn);

    // NOTHING IN DATABASE
    if (!$row) {
        header("Location: $sorry_url_page?bad_tiny_link=".$decode_code_from_user."");
        exit;
    }

    // GET THE long_url_escape THAT WAS IN DATABASE
    $long_url=$row['long_url_escape'];

    header("location:".$long_url."");

?>
