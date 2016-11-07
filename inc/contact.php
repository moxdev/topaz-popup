<?php

session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/topaz-house/inc/akismet.class.php';

// PREVENT DIRECT ACCESS TO THANK YOU PAGE
if ( !isset( $_POST['names']) || !isset( $_POST['email']) ) {
	echo 'This page cannot be accessed directly.';
	exit();
}

if ( empty( $_POST['names']) || empty( $_POST['email'])  ) {
	echo 'You neglected to fill out required form fields.';
	exit();
}
	
// HIDDEN HONEYPOT
$spa = $_POST["spam"];
	
if (!empty($spa) && !($spa == "7" || $spa == "seven")) {
	echo "We're sorry, but you appear to be a spambot";
    exit ();
}
	
if($_SERVER['REQUEST_METHOD']=="POST") {
	$WordPressAPIKey = 'c32918c5e5bc';
	$MyBlogURL = 'http://www.topazhouse.com/';
	
	$recipients=$_POST["recipients"];
	$to = str_replace("_AT_","@",$recipients);
	//$to='chris@mm4solutions.com';
	
	$names=strip_tags($_POST["names"]);
	$phone=$_POST["phone"];
	$email=strip_tags($_POST["email"]);
	$date=strip_tags($_POST["date"]);
	$comments=strip_tags($_POST["comments"]);
	$sbjct=strip_tags($_POST["subject"]);
	
	$comment = array(
		'author' => $names,
		'email' => $email,
		'website' => $MyBlogURL,
		'body' => $comments
	);
	 
	$akismet = new Akismet($MyBlogURL, $WordPressAPIKey, $comment);
	
	$from="do-not-reply@topazhouse.com";
	$subject=$sbjct;
	$message="Name: ".$names."<br>". "Phone: ".$phone."<br>"."Email: ".$email."<br>"."Desired Move In Date: ".$date."<br>"."Comments: ".$comments;
	$header='From: '.$from."\r\n".'Reply-To: '.$from."\r\n".'MIME-Version: 1.0'."\r\n".'Content-type: text/html; charser=iso-8859-1'."\r\n".'X-Mailer: PHP/'.phpversion();
	
	if ($akismet->isSpam()) {
		//-- THIS IS SPAM, YO!!!!!
		echo "We're sorry, but you appear to be a spambot";
		exit();
	} else {
		@mail($to,$subject,$message,$header);
	}
}
?>