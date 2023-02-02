<?php
$base_url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . '/';
require_once('function/HijriDate/hijri.class.php');
$date = "02-02-2023";
$formatter = new IntlDateFormatter('ar_DZ', IntlDateFormatter::NONE, IntlDateFormatter::NONE, 'Africa/Algiers', IntlDateFormatter::GREGORIAN, "EEEE d MMMM y");
if (empty($_GET)) {
    include 'home.php';
} else {
    
    $url = explode("/", filter_var($_GET['url'],FILTER_SANITIZE_URL));
    #var_dump($base_url,$url = explode("/", filter_var($_GET['url'],FILTER_SANITIZE_URL)));
    switch ($url[0]) {
        case "home":
            include 'home.php';
            break;
        case "surat":
            if(isset($url[1]) && is_numeric($url[1])){
                $surat = $url[1];
                include 'quran/surat.php';
            }else{
                header('Location: '.$base_url);
            }
        break;
        case "kitab":
            include 'quran/kitab.php';
        break;
        case "about":
            include 'about.php';
            break;
        case "contact":
            include 'contact.php';
            break;
        default:
            include 'errors/404.php';
            break;
    }
}
?>