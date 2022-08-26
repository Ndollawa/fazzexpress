<?php
// include __DIR__.'/../../backend/database.php';
// include __DIR__.'/../../backend/functions.php';
// include __DIR__.'/../../backend/timeAgo.php';
$smtp_server = "";
$username = "";
$password = "";
 

$from [] = $from_mail;
$recipients[] = $to_mail;

$html = <<<EOT
echo $mail;

EOT;
$plain_txt = <<<EOT

echo $mail;
EOT;



try {
// prepare email message
	$message = Swift_Message::newInstance()
				->setSubject('')
				->setFrom($from)
				->setTo($recipients)
				->setBody($html, 'text/html')
				->addPart($text, 'text/plain');

				// attach local file
				$attachment = Swift_Attachment::fromPath('./images/');
				$message->attach($attachment);

				// create the Transport
	$transport = Swift_SmtpTransport::newInstance($smtp_server, 465, 'ssl')
	->setUsername($username)
	->setPassword($password);

	$mailer = Swift_Mailer::newInstance($transport);
	$result = $mailer->send($message);
	if($result){

	}else{

	}

}catch(Exception $e){
 echo $e->getMessage();
}
?>