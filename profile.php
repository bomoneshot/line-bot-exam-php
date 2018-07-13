<?php


$access_token = 'XLhMrUWYtQuATW5tmkaxqL1Iu3eyoaqpIuAJLuq47CW/yd7qX0MyxHhWNk01Uphc7hxRiZ/VdGrYqyEeibeYwAF7gqKn62iIwHKbLcJTVNz2/qinKhK9JvuESXOM7HCsvV/OHTz2eHcaaIR4L/yA5AdB04t89/1O/w1cDnyilFU=';

$userId = 'Ub78bc3753ed8a2afcb173f39457505f6';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

