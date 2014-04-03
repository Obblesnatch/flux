<?php
/**
* Author: Justin Conabree
* Email: Flux Planner
* URL: http://fluxplanner.com
* Version: 1.0.0
**/

//vars
$subject = $_POST['subject'];
$to = explode(',', $_POST['to'] );

$from = $_POST['email'];

//data
$msg = "NAME: "  .$_POST['contact-name']    ."<br>\n";
$msg .= "EMAIL: "  .$_POST['contact-email']    ."<br>\n";
$msg .= "COMMENTS: "  .$_POST['contact-message']    ."<br>\n";

//Headers
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: <".$from. ">" ;


//send for each mail
foreach($to as $mail){
   mail($mail, $subject, $msg, $headers);
}

?>
