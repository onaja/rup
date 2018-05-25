<?php
$access_token = '7CA87T9E0BRwYlrma5EPsEpEA/0X/wAQLB8avv0UXVKEo4jdbMpAAHGsEWHqiof9PWBquHunHE0HZtRL8Ezq9xf7cxTdeI/fKSKy9uNqwBJRLBWGOsmGZjR+EuJ3URp5/J+JZ2cwyPIDs+WO6/VioQdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
