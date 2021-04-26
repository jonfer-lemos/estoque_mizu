<?php 
// header('Location: ../almoxarifado/msg.html');
// header('Location: ../almoxarifado/index.php');

use app\src\Mail;

require "../phpmailer/vendor/autoload.php";

$email = new Mail;
 
$email->send();

?>