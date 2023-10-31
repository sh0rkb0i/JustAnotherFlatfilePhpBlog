<!DOCTYPE html>
<?php include 'settings.php';?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $blogName; ?></title>
    <link rel="stylesheet" href="https://bootswatch.com/5/spacelab/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light" data-bs-theme="light">
  <div class="container-fluid">
      
    <a class="navbar-brand" href="/"><?php echo $blogName ?><br><small><small><?php echo $motto ?></small></small></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor03">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="/">Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/archives.php">Archives</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container mt-4">
