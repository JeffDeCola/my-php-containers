<?php

    // Google reCAPTCHA v3 API private keys settings
    include '../../../../../reCAPTCHASecrets.php';

    // PAGES
    $formurl = "http://www.jeffdecola.com/my-php-containers";
    $errorurl = "http://www.jeffdecola.com/my-php-containers/interaction/contact_form_container/pages/contact_form_error.php";
    $thankyouurl = "http://www.jeffdecola.com/my-php-containers/interaction/contact_form_container/pages/contact_form_thank_you.php";

    // CONFIGURE
    $email_is_required = 1;  // Really set this to 1
    $name_is_required = 1;
    $comments_is_required = 1;
    $uself = 0; // To do with the header separator /n or /r
    $use_utf8 = 1; // iso or utf
    $use_envsender = 0; // -f flag (So you know who it's from)
    $my_recaptcha_private_key = '';

    // GET THE DATA FROM THE FORM (POST)
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $comments = $_POST['comments'];
    $answer = $_POST['answer'];
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

    // IS EMAIL REQUIRED, NAME REQUIRED, OR COMMENTS REQUIRED
    if (($email_is_required && (empty($email) || !preg_match('/@/', $email))) || ($name_is_required && empty($fullname)) || ($comments_is_required && empty($comments))) {
        header( "Location: $errorurl" );
        exit;
    }

    // SECURITY FEATURES ************************************************************************

    // SECURITY FEATURE 1 - ARE YOU HUMAN
    if ($answer != ($number1 + $number2) ){
        header( "Location: $errorurl" );
        exit;
    }

    // SECURITY FEATURE 2 - RECAPTCHA CHECK
    // Google reCAPTCHA verification API Request  
    $api_url = 'https://www.google.com/recaptcha/api/siteverify';  
    $ip = $_SERVER['REMOTE_ADDR']; 
    $resq_data = array(  
        'secret' => $secretKeyPHPContainer,
        'response' => $_POST['g-recaptcha-response'],  
        'remoteip' => $ip  
    );  

    $curlConfig = array(  
        CURLOPT_URL => $api_url,  
        CURLOPT_POST => true,  
        CURLOPT_RETURNTRANSFER => true,  
        CURLOPT_POSTFIELDS => $resq_data  
    );  

    $ch = curl_init();  
    curl_setopt_array($ch, $curlConfig);  
    $response = curl_exec($ch);  
    curl_close($ch);  

    // Decode JSON data of API response in array  
    $reCAPTCHAResponseData = json_decode($response, true);  

    if ($reCAPTCHAResponseData["success"]) {
        $success = "true";
    } else {
        $success = "false";
    }
    $score = $reCAPTCHAResponseData["score"];
    $action = $reCAPTCHAResponseData["action"];
    $challenge_ts = $reCAPTCHAResponseData["challenge_ts"];
    $hostname = $reCAPTCHAResponseData["hostname"];
    $errorcodes = $reCAPTCHAResponseData["error-codes"];

    if (($success == "false") && ($score < 0.8)) {
        header( "Location: $errorurl" );
        exit;
    }

    // OK, LETS DO THIS ************************************************************************

    // 1 - WHERE IS IT GOING

        $mailto = 'webmaster@jeffdecola.com' ;

    // 2 - WHAT IS THE SUBJECT

        $subject = "PHP Container Contact at jeffdecola.com/my-php-containers";

    // 3 - CREATE THE MESSAGE TO SEND

        // WHAT IS THE URL
        $http_referrer = getenv("HTTP_REFERER" );

        // If the email field is blank - MUST HAVE A REPLY TO EMAIL
        // But just set email required so you don't need to worry about this
        if (empty($email)) {
            $email = $mailto ;
        }

        // Build the array to mail
        $messageproper =
            "-------------------------------------\n" .
            "NAME:   $fullname \n" .
            "EMAIL:   $email \n" .
            "PHONE:   $phonenumber \n" .
            "IP ADR:   $ip \n" .
            "-------------------------------------\n\n" .
            "$comments" .
            "\n\n\n" .
            "-------------------------------------\n" .
            "This email was sent from: \n" .
            "$http_referrer \n" .
            "reCAPTCHA SUCCESS: $success \n" .
            "reCAPTCHA SCORE: $score \n" .
            "reCAPTCHA ACTION: $action \n" .
            "reCAPTCHA TIME: $challenge_ts \n" .
            "reCAPTCHA HOSTNAME: $hostname \n" .
            "reCAPTCHA ERROR CODES: $errorcodes \n" .
            "\n\n\n" .

    // 4 - CREATE THE HEADER

        // A - header separator
        $headersep = (!isset( $uself ) || ($uself == 0)) ? "\r\n" : "\n" ;

        // Is it utf or iso-8859-1
        $content_type = (!isset( $use_utf8 ) || ($use_utf8 == 0)) ? 'Content-Type: text/plain; charset="iso-8859-1"' : 'Content-Type: text/plain; charset="utf-8"' ;

        // For the from field - Must use because it will look like spam otherwise
        $name = "Contact Form at jeffdecola.com";

        // The header - MUST USE MAILTO
        $headers =
            "From: \"$name\" <$mailto>" . $headersep . "Reply-To: \"$fullname\" <$email>" . $headersep . "X-Mailer: chfeedback.php 2.15.0" .
            $headersep . 'MIME-Version: 1.0' . $headersep . $content_type ;

    // 5 - ARE YOU USING -f FLAG

        $envsender = "-f$mailto" ;

    // 6 - MAIL THE MESSAGE

        // Basically are we using the from address?
        if ($use_envsender) {
            mail($mailto, $subject, $messageproper, $headers, $envsender );
        }
        else {
            mail($mailto, $subject, $messageproper, $headers);
        }

    // 7 - SUCCESS - GOTO THANK YOU URL

        header( "Location: $thankyouurl" );
        exit;

?>
