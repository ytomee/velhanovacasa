<?php
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    setcookie('lang', $lang, time() + 31536000, '/');
}
elseif (isset($_COOKIE['lang'])) {
    $lang = $_COOKIE['lang'];
}
else {
    $lang = 'pt';
}

$translationFile = __DIR__ . "/../lang/$lang.php";
if (!file_exists($translationFile)) {
    $translationFile = __DIR__ . "/../lang/pt.php";
}
$t = include $translationFile;

function t($path) {
    $parts = explode('.', $path);
    $value = $GLOBALS['t'];
    foreach ($parts as $part) {
        if (!isset($value[$part])) return $path;
        $value = $value[$part];
    }
    return $value;
}
?>
