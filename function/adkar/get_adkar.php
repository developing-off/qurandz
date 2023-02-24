<?php
$json = file_get_contents("assets/json/adkar/adkar.json");
$data = json_decode($json, true);


$hour = date("G");

if ($hour >= 6 && $hour < 12) {
  $category = 'أذكار الصباح';
} else {
  $category = 'أذكار المساء';
}

$filtered_data = array_filter($data, function($item) use ($category) {
  return $item['category'] == $category;
});
$random_item = $filtered_data[array_rand($filtered_data)];

// Créer des tableaux associatifs pour chaque catégorie
// $categories = array();
// foreach ($data as $item) {
//     $category = $item['category'];
//     if (!isset($categories[$category])) {
//         $categories[$category] = array();
//     }
//     $categories[$category][] = $item;
//     {
//       $uncategorized[] = $item;
//     }
// }
$categorie1 = array(); // "ما يعصم الله به من الدجال"
$categorie2 = array(); // "الدعاء لمن قال إني أحبك في الله"
$non_categorise = array();

foreach ($data as $item) {
  // Vérifier si la catégorie est définie pour l'élément en cours
  if (isset($item['category'])) {
      // Ajouter l'élément à la catégorie correspondante
      switch ($item['category']) {
          case 'أذكار الصباح':
              $categorie_masaa[] = $item;
              break;
          case 'أذكار المساء':
              $categorie_sabah[] = $item;
              break;
          default:
              $non_categorise[] = $item;
              break;
      }
  } else {
      $non_categorise[] = $item;
  }
}


// Stocker les tableaux associatifs dans des variables distinctes
$azkar_sabah = $categorie_masaa;
$azkar_masaa = $categorie_sabah;
$other = $non_categorise;


?>