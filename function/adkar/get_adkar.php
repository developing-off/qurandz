<?php
$json = file_get_contents("assets/json/adkar/adkar.json");
$data = json_decode($json, true);


$hour = date("G");
$hour = 8;
if ($hour >= 6 && $hour < 12) {
  $category = 'أذكار الصباح';
} else {
  $category = 'أذكار المساء';
}

$filtered_data = array_filter($data, function($item) use ($category) {
  return $item['category'] == $category;
});

$random_item = $filtered_data[array_rand($filtered_data)];
?>