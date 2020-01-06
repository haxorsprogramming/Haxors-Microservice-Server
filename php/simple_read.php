<?php
class dataRes{}
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHP_Mailer/Exception.php';
require 'PHP_Mailer/PHPMailer.php';
require 'PHP_Mailer/SMTP.php';
$mail = new PHPMailer(true);   
//explained
$dataBaru = new DataRes;

$dataBaru -> email = 'email@gmail.com';

echo json_encode($dataBaru);
?>
