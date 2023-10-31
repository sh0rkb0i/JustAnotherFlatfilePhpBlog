<?php
include 'header.php';
require 'lib/Parsedown.php';

$Parsedown = new Parsedown();
$files = array_diff(scandir('posts/'), array('..', '.'));

usort($files, function ($a, $b) {
    $idA = intval(pathinfo($a, PATHINFO_FILENAME));
    $idB = intval(pathinfo($b, PATHINFO_FILENAME));
    return $idB - $idA;
});

foreach ($files as $file) {
    $filePath = 'posts/' . $file;
    $content = file_get_contents($filePath);

    preg_match('/\{Post "(.*?)" \[(.*?)\]\}/', $content, $matches);
    $title = $matches[1];
    $date = date("F j, Y", $matches[2]);
    $content = preg_replace('/\{Post "(.*?)" \[(.*?)\]\}/', '', $content);

    echo '<div class="card mb-3">';
    echo '<div class="card-body">';
    echo '<h2><a href="post.php?file=' . $filePath . '">' . $title . '</a></h2>';
    echo '<p>' . $date . ' by ' .$author . '</p>';
    echo '</div></div>';
}

include 'footer.php';
?>
