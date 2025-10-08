<?php
$title = 'Home - ITE311 Project';
$active_page = 'home';
ob_start();
?>

<div class="text-center">
    <h2>Home Page</h2>
    <p>Home page content goes here</p>
</div>

<?php
$content = ob_get_clean();
include 'layout.php';
?>
