<?php
#require_once('get_city_from_country.php');
$url = 'https://restcountries.com/v2/all';
$json = file_get_contents($url);
if ($json !== false) {
    $countries = json_decode($json, true);
    if (json_last_error() == JSON_ERROR_NONE) {
      $options = '';
      foreach ($countries as $country) {
        $options .= '<option value="' . $country['name'] . '">' . $country['translations']['fa'] . '</option>';
      }
      
    } else {
        echo "Error: json is invalid";
    }
} else {
    echo "Error: failed to read the file";
}