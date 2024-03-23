<?php
//////////--CONSTANTS--//////////
define("LB", "<br/>");
define("DS", DIRECTORY_SEPARATOR);
define("ROOT", getcwd());
define("HOST", $_SERVER["HTTP_HOST"]);
define("URI", $_SERVER["REQUEST_URI"]);

require 'config/config.php';
require 'vendor/autoload.php';

use Mailgun\Mailgun;

#Instantiate the client.
$mgClient = new Mailgun($mailGun['key']);
$domain = $mailGun['domain'];


if (isset($_POST["sent"])) {

	$error = false;

	try {
		#Make the call to the client
		$result = $mgClient->sendMessage($domain, array(
			'from'		=> (filter_var($_POST["name"], FILTER_SANITIZE_FULL_SPECIAL_CHARS) . ' <' . filter_var($_POST["email"], FILTER_SANITIZE_EMAIL) . '>'),
			'to'			=> $mailGun['toEmail'],
			'subject'	=> filter_var($_POST["subject"], FILTER_SANITIZE_FULL_SPECIAL_CHARS, FILTER_FLAG_NO_ENCODE_QUOTES),
			'text'		=> filter_var($_POST["message"], FILTER_SANITIZE_FULL_SPECIAL_CHARS, FILTER_FLAG_NO_ENCODE_QUOTES)
		));
	} catch (Exception $e) {
		$error = true;
		$errorMessage = $e->getMessage();
	}
	if ($error) {
		$formMessage["class"] = "error";
		$formMessage["message"] = $errorMessage;
	} else {
		$formMessage["class"] = "success";
		$formMessage["message"] = "Your message has been sent.  Thanks!";
	}
	echo json_encode($formMessage);
}
