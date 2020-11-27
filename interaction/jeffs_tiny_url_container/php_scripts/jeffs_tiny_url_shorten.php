<?php

    include 'sql_pw-ignore.php';

    $shortened_url_page = "http://www.jeffdecola.com/my-php-containers/interaction/jeffs_tiny_url_container/pages/jeffs_tiny_url_shortened.php";
    $database_error_page = "http://www.jeffdecola.com/my-php-containers/interaction/jeffs_tiny_url_container/pages/jeffs_tiny_url_database_error.php";
    $form_error_page = "http://www.jeffdecola.com/my-php-containers/interaction/jeffs_tiny_url_container/pages/jeffs_tiny_url_form_error.php";

    // GET THE DATA FROM THE FORM (POST)
    $long_url= $_POST['long_url'];
    $answer_question = $_POST['answer_question'];
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

    // DID YOU ENTER ANYTHING?
    if ($long_url == "") {
        header("Location: $form_error_page");
        exit;
    }
        
    // ARE YOU HUMAN?
    if ($answer_question != ($number1 + $number2)) {
        header("Location: $form_error_page");
        exit;
    }

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

    // CREATE A TABLE IF IT DOESN'T EXIST
    // FORMAT OF DATABASE TABLE "the_date, random_number_id, long_url_escape, short_url"
    $table = "CREATE TABLE JEFFS_TINY_URL_TABLE(
            the_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            random_number_id INT,
            long_url_escape VARCHAR(200) NOT NULL,
            short_url VARCHAR(100),
            PRIMARY KEY (random_number_id))";
    if(mysqli_query($conn, $table)){
        echo "Table created successfully";
    }
    
    // 1 - DATE AND TIME
    $the_date = date("Y-m-d H:i:s");

    // 2 - RANDOM NUMBER & SHORT_URL
    // CONVERT IT TO BASE 36 (10 numbers plus 26 letters)
    $random_number_id = rand(10000, 99999);  // 5 digits
    $short_url = base_convert($random_number_id, 20, 36);  // base 36
    
        // CHECK TO SEE IF THAT NUMBER HAS BEEN USED BEFORE

        //GET THE TABLE ROW
        $sql = "SELECT * FROM JEFFS_TINY_URL_TABLE WHERE short_url='$short_url'";
        $maybe_a_row = mysqli_query($conn, $sql);

        // GET THE ENTIRE ROW
        $row = mysqli_fetch_assoc($maybe_a_row);

        // DOES IT HAVE SOMETHING IN IT?
        // The link already exists!!! Say database error
        if ($row) {
            header("Location: $database_error_page");
            exit;
        }

    // 3 - LONG URL
    // Remove bad strings
    $long_url_escape = mysqli_real_escape_string($conn, $long_url);

    // INSERT INTO TABLE
    $sql =  "INSERT INTO JEFFS_TINY_URL_TABLE (the_date, random_number_id, long_url_escape, short_url) VALUES (
            '$the_date',
            '$random_number_id',
            '$long_url_escape',
            '$short_url')";
    // Write to Table
    mysqli_query($conn, $sql);

    // TEST TABLE -  PRINT OUT ENTIRE TABLE
    /* $test = "SELECT the_date, random_number_id, long_url_escape, short_url FROM JEFFS_TINY_URL_TABLE";
    $result = mysqli_query($conn, $test);
    echo "<br> The entire table is: <br>";
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "the_date: " . $row["the_date"].           " - random_number_id: " . $row["random_number_id"].
            "long_url_escape" . $row["long_url_escape"].    " - short_url: " . $row["short_url"].
            "<br>";
        }
    } else {
        echo "0 results";
    }
    echo "SLEEP";
    sleep(5); */

    // CLOSE DATABASE
    mysqli_close($conn);

    // Encode long_url to pass (_GET) and have it display properly on shortened page
    $long_url_escape_encoded = urlencode($long_url_escape);

    // IF YOU ARE USING other variables change ? to &
    header("Location: $shortened_url_page?short_url=".$short_url."&long_url=".$long_url_escape_encoded."");

    exit;

?>
