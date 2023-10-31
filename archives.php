<?php
include 'header.php';
$files = array_diff(scandir('posts/'), array('..', '.'));

$archives = array();
foreach ($files as $file) {
    $content = file_get_contents('posts/' . $file);
    preg_match('/\{Post "(.*?)" \[(.*?)\]\}/', $content, $matches);
    $title = $matches[1];
    $unixDate = $matches[2];
    $monthYear = date("F Y", $unixDate);

    $archives[$monthYear][] = [
        'title' => $title,
        'file' => $file
    ];
}

echo '<h1>Archives</h1>';

foreach ($archives as $monthYear => $posts) {
    echo '<h3>' . $monthYear . '</h3>';
    foreach ($posts as $post) {
        echo '<p><a href="post.php?file=posts/' . $post['file'] . '">' . $post['title'] . '</a></p>';
    }
}

include 'footer.php';
?>
