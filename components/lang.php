<?php

$lang = $_GET['lang'] ?? 'pt';
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