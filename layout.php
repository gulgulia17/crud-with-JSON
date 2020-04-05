<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php include(__DIR__.'/functions.php');  $obj = new Functions(); ?>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="all.php">JSON OBJECT</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item <?php echo explode('/',$_SERVER['REQUEST_URI'])[array_key_last(explode('/',$_SERVER['REQUEST_URI']))] === 'all.php' ? 'active' : '' ?>">
                <a class="nav-link text-uppercase" href="all.php">all</a>
            </li>
            <li class="nav-item <?php echo explode('/',$_SERVER['REQUEST_URI'])[array_key_last(explode('/',$_SERVER['REQUEST_URI']))] === 'add.php' ? 'active' : '' ?>">
                <a class="nav-link text-uppercase" href="add.php">add</a>
            </li>
        </ul>
    </div>
</nav>
