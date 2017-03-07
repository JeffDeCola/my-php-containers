<?php

	$sorry_url_page = "http://www.jeffryadecola.com/my-php-containers/jeffs_tiny_url_container/pages/jeffs_tiny_url_does_not_exist.php";
	$database_error_page = "http://www.jeffryadecola.com/my-php-containers/jeffs_tiny_url_container/pages/jeffs_tiny_url_database_error.php";

	// OPEN THE DATABASE
	$con1 = mysql_connect("localhost","jeffryad_userurl","b75623b");  
	if (!$con1)  {  
		header( "Location: $database_error_page" );
		exit;
  	}  
	
	// SELECT DATABASE
	mysql_select_db("jeffryad_tinyurl", $con1);   
	
	// WHAT WAS THE CODE SENT FROM .htaccess (REDIRECTED 4 CHARACTERS AT END OF thewhipnovel.com/s/????
	$decode_code_from_user= mysql_real_escape_string($_GET["decode"]);  
    //echo "FROM USER11".$decode_code_from_user;  
	//echo "<br />";
	
  	//GET THE TABLE ROW
	$result=mysql_query("select * from URL_TABLE where short_url='$decode_code_from_user'"); 
    //echo "RESULT".$result;  
	//echo "<br />";

	// GET THE ENTIRE ROW
	$row = mysql_fetch_array($result);
	
	// CLOSE DATABASE
	mysql_close($con1);  

	// The link doesn't exist - Not in Database
	if (!$row) {
		header( "Location: $sorry_url_page?bad_tiny_link=".$decode_code_from_user."");
		exit;
	}
 	//echo "ROW".$row;  
	//echo "<br />";
	
	// GET THE LONG URL THAT WAS IN DATABASE
	$long_url=$row['long_url_escape'];
	//echo $long_url;  
	//echo "<br />";
	header("location:".$long_url."");  
	
?>