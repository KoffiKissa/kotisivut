<!DOCTYPE html>
<html lang="en">

<head>

    <title>Terveys </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

<div>
    <h2 class="container-fluid p-3 text-center bg-primary">Liikunta päiväkirja</h2>
</div>

<nav class="navbar navbar-expand-sm bg-secondary navbar-dark sticky-top">
     <div class="container-fluid">
        <a class="navbar-brand" href="index.html">
            <img src="saukko.jpg" alt="Avatar Logo" class="rounded-pill" style="width:80px;">
        </a>
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="index.html">Koti</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="terveys.php">Terveys</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="liikunta_kirja.php">Liikunta päiväkirja</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Linkki 4</a>
        </li>
        </ul>
    </div>
</nav>

<div class="container-md text-center kirja">

    <h2>Liikunta päiväkirja</h2><br>

    <form method="post" action="liikunta_kirja.php">

    <?php

        echo "<label for=laji name=laji>Laji: </label><br>
            <input name=laji id=laji type=text><br><br>
            <label for=aika name=aika>Liikunnan kesto (h):</label><br>
            <input name=aika id=aika type=number><br><br>
            <label for=kalorit name=kalorit>Poltetut kalorit (kcal):</label><br>
            <input name=kalorit id=kalorit type=number><br><br>
            <button method=submit type=button>Lisää päiväkirjaan</button>";

    ?>

    </form>

</div>

</body>

<footer class="container-fluid text-center">
    <p>Tekijä: Arttu Tuhkanen</p>
    <p><a href="mailto:arttu.tuhkanen@edu.sakky.fi">arttu.tuhkanen@edu.sakky.fi</a></p>
</footer>
</html>