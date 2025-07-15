<?php
$currentPage = basename($_SERVER['PHP_SELF']);

$cursorClass = 'cursor-bg-red-2';

switch ($currentPage) {
    case 'index.php':
        $cursorClass = 'cursor-bg-red-2';
        break;
    case 'houses.php':
        $cursorClass = 'cursor-bg-white';
        break;
    default:
        $cursorClass = 'cursor-bg-red-2';
        break;
}
?>

<!-- Begin magic cursor -->
<div id="magic-cursor" class="<?= $cursorClass ?>">
    <div id="ball"></div>
</div>
<!-- End magic cursor -->
