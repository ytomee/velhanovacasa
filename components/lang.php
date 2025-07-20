<?php
if (!isset($_GET['hl'])) {
    $defaultLang = 'pt';
    $query = $_SERVER['QUERY_STRING'];
    $url = $_SERVER['PHP_SELF'] . (empty($query) ? "?hl=$defaultLang" : "?$query&hl=$defaultLang");
    header("Location: $url");
    exit();
}

$lang = $_GET['hl'];

$translationFile = __DIR__ . "/../lang/$lang.php";
if (!file_exists($translationFile)) {
    $translationFile = __DIR__ . "/../lang/pt.php";
    $lang = 'pt';
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
