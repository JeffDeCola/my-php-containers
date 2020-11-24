<?php

	include 'sql_pw-ignore.php';

	$shortened_url_page = "http://www.jeffdecola.com/my-php-containers/jeffs_tiny_url_container/pages/jeffs_tiny_url_shortened.php";
	$database_error_page = "http://www.jeffdecola.com/my-php-containers/jeffs_tiny_url_container/pages/jeffs_tiny_url_database_error.php";
	$form_error_page = "http://www.jeffdecola.com/my-php-containers/jeffs_tiny_url_container/pages/jeffs_tiny_url_form_error.php";

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

	// WE GOT A URL (OR WE GOT SOMETHING)
	
	// OPEN THE DATABASE
	$con = @mysql_connect("localhost", "jeffdeco_jeff", "$pw");
	if (!$con) {
		header("Location: $database_error_page");
		exit;
	}

	// SELECT DATABASE
	mysql_select_db("jeffdeco_jeffs_tiny_url_container", $con);
	$long_url_escape = mysql_real_escape_string($long_url);

	// GET A RANDOM NUMBER AND BASE CONVERT IT TO BASE 36 (10 numbers plus 26 letters)
	$random_number_id = rand(10000, 99999);  // 5 digits
	$short_url = base_convert($random_number_id, 20, 36);  // base 36

	//CHECK TO SEE IF THAT NUMBER HAS BEEN USED BEFORE
	
		//GET THE TABLE ROW
		$result=mysql_query("select * from URL_TABLE where short_url='$short_url'");

		// GET THE ENTIRE ROW
		$row = mysql_fetch_array($result);
	
		// The link already exists!!! Say database error
		if ($row) {
			header("Location: $database_error_page");
			exit;
		}

	// GET DATE AND TIME
	$the_date = date("Y-m-d H:i:s");
	//echo $date;
	//exit;
	
	// FORMAT OF DATABASE TABLE "the_date, random_number_id, long_url_escape, short_url"
	$sql = "insert into URL_TABLE values('$the_date','$random_number_id','$long_url_escape','$short_url')";
	
	// WRITE TO TABLE IN DATABASE
	mysql_query($sql, $con);
	
	// CLOSE DATABASE
	mysql_close($con);
	
	// Encode long_url to pass (_GET) and have it display properly on shortneed page
	$long_url_escape_encoded = urlencode($long_url_escape);
	
	// IF YOU ARE USING other variables change ? to &
	header("Location: $shortened_url_page?short_url=".$short_url."&long_url=".$long_url_escape_encoded."");
	exit;

?>
