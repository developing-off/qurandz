<?php

$access_token = "IGQVJXT05hNnJUYTh5WGp5NHcxV1JLUk9ScGVtXzJGbWNPTC1wTHMtTHZAPLWhLUHZAZAeGIyRzQyRGZAWbkZAYMkZAsaGU1MS1wMkJzYTBCd1hXcU9yVi1WUDc4bEdicmFmSFVLLVQtcUpyTnFVdDgwYjVLdwZDZD";
$user_id = "737606984759580";

$api_url = "https://graph.instagram.com/$user_id/reels?access_token=$access_token";

$response = file_get_contents($api_url);
$data = json_decode($response, true);

print_r($data);

?>
