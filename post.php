<?php
include 'header.php';
require 'lib/Parsedown.php';

$Parsedown = new Parsedown();

if (isset($_GET['file'])) {
    $file = $_GET['file'];
    $content = file_get_contents($file);

    preg_match('/\{Post "(.*?)" \[(.*?)\]\}/', $content, $matches);
    $title = $matches[1];
    $date = date("F j, Y", $matches[2]);
    $content = preg_replace('/\{Post "(.*?)" \[(.*?)\]\}/', '', $content);

    echo '<h1>' . $title . '</h1>';
    echo '<p>' . $date . ' by ' .$author . '</p>';
    echo '<div>' . $Parsedown->text($content) . '</div>';
}

include 'footer.php';
?>
