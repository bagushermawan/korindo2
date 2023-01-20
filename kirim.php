<?php
ini_set('display_errors', 1 );

error_reporting( E_ALL );

$from = "korindo@korindotech.com";

$to = "ptkorindotech@gmail.com";

$subject = "Information from korindo web | ". $_POST['judul'];

$message = 'From : '.  $_POST['nama'] . ' | Email : '. $_POST['email'].' | '. $_POST['pesan'];

$headers = "From:" . $from;

mail($to,$subject,$message, $headers);
header('Location: ' . $_SERVER['HTTP_REFERER']);
echo "Pesan email sudah terkirim.";