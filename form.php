<?php

session_start();

// PREVENT DIRECT ACCESS TO THANK YOU PAGE
if (!isset($_POST['email'])) {
    echo 'This page cannot be accessed directly.';
    exit();
}

/* // FOR VISIBLE MATH QUESTION
$rnumTotal_answer = $_SESSION['rnumTotal'];
$rnumTotal_given = $_POST['rnumTotal'];

$_SESSION['rnumTotal'] = "";

if ($rnumTotal_answer != $rnumTotal_given) {
    $_SESSION['invalidCaptcha'] = 1;
    print "<script>history.go(-1);</script>";
    exit;
}*/

// HIDDEN HONEYPOT
$spa = $_POST["spam"];

if (!empty($spa) && !($spa == "4" || $spa == "four")) {
    echo "We're sorry, but you appear to be a spambot";
    exit ();
}

if($_SERVER['REQUEST_METHOD']=="POST") {
    $to="shane@mm4solutions.com";

    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];

    $from="shane@mm4solutions.com";
    $subject="I would like information about Topaz House specials";
    $message="Name: ".$name."<br>"."Email: ".$email."<br>"."Phone Number: ".$phone;
    $header='From: '.$from."\r\n".'Reply-To: '.$from."\r\n".'MIME-Version: 1.0'."\r\n".'Content-type: text/html; charser=iso-8859-1'."\r\n".'X-Mailer: PHP/'.phpversion();
    @mail($to,$subject,$message,$header);
}

// if( mail($to,$subject,$message,$header) )
//    {
//        echo "<h2>Someone will contact you</h2>";
//    }
//    else
//    {
//        echo "<h2>Sorry, there has been an error</h2>";
//    }
?>