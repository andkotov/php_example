<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    
<?php

$client  = @$_SERVER['HTTP_CLIENT_IP'];
$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
$remote  = @$_SERVER['REMOTE_ADDR'];
 
if(filter_var($client, FILTER_VALIDATE_IP)) $ip = $client;
elseif(filter_var($forward, FILTER_VALIDATE_IP)) $ip = $forward;
else $ip = $remote;
 
// echo $ip;

// echo $_SERVER['HTTP_HOST'];

// echo $_SERVER['HTTP_USER_AGENT'];

$ewew = "capybara";

$ewew = md5($ewew);

$filename = "C:\Users\l1ashok\Desktop/$ewew.txt";

$file = fopen($filename, "a");

$time = date('d.m.Y H:i:s');

// fwrite($file, $time."\n");

fclose($file);

// echo file_get_contents($filename);


$message = "Капібарики - в атаку!";
$to = "mr.kotov.play@gmail.com";
$from = "capybariki@ua.com";
$subject = "Привіт від КУБГу.";

$subject = "=?utf-8?B?".base64_encode($subject)."?=";
$headers = "From: $from\r\nReplt-to: $from\r\nContent-type:text/plain; charset=utf-8\r\n";

 mail($to, $subject, $message, $headers);


$_ENV["USER"] = "Aloy day";

if($_ENV["USER"] == "") {
  //  echo "Ти хто???";
}
else {
 //   echo 'Моє ім\'я: ' .$_ENV["USER"] . '!';
}







?>

</body>
</html>  

