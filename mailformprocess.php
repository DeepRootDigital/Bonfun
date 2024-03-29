<?php
// Clear variables to make sure you don't get any artifact information //
$name = $email = $phone = $message = $formcontent = $headers = "";

// Validation to ensure that the following sections were filled out //

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["name"])) {
		// This happens if the section is left empty //
		// Currently redirects and stops the code //
		header('Location: http://clients.businessonmarketst.com/bonfun/');
		exit;
	}
	else {
		// This happens if the section is filled out properly //
		// Saves the info from the form into the given variable //
		$name = $_REQUEST["name"];
	}

	if (empty($_POST["email"])) {
		header('Location: http://clients.businessonmarketst.com/bonfun/');
		exit;
	}
	else {
		$email = $_REQUEST["email"];
	}

	if (empty($_POST["message"])) {
		header('Location: http://clients.businessonmarketst.com/bonfun/');
		exit;
	}
	else {
		$message = $_REQUEST["message"];
	}
}

// Create the message to be sent based on the information from the form //
$formcontent="From: ".$name."\r\nE-mail: ".$email."\r\nMessage: \r\n".$message;

// Set who the e-mail will be sent from and other headers //
$headers = 'From: Webmaster <webmaster@bonfunspirits.com>';

// Mail to the email address given in the first slot //
mail('colpanius@gmail.com','Bonfunning',$formcontent,$headers) or die("Error!");

// Redirect user to page after the form is complete //
header('Location: http://clients.businessonmarketst.com/bonfun/?page_id=30');

?>