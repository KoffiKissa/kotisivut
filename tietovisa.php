<!DOCTYPE html>
<html lang="en">

<head>

    <title>Tietovisa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

<div>
    <h2 class="container-fluid p-3 text-center bg-primary">Tietovisa</h2>
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
            <a class="nav-link" href="yhteys.php">Ota yhteyttä</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="tietovisa.php">Tietovisa</a>
        </li>
        </ul>
    </div>
</nav>

<form action="tietovisa.php" method="post">

    <div class="container-md text-center kysymys">
        <h3>Kysymys 1</h3><br>
        <p>Monestako pisteestä dartsissa yleensä aloitetaan?</p>
        <button type="button" id="K1V1" value="kysymys1" class="kysymys" onclick="return tarkista('paska')">301</button><br>
        <button type="button" id="K1V2" value="kysymys1" class="kysymys">501</button><br>
        <button type="button" id="K1V3" value="kysymys1" class="kysymys">701</button><br>
    </div>

    <div class="container-md text-center kysymys">
        <h3>Kysymys 2</h3><br>
        <p>Montako pelaajaa jalkapallossa on yhtäaikaa kentällä?</p>
        <button type="button" value="kysymys 1" class="kysymys">10</button><br>
        <button type="button" value="kysymys 1" class="kysymys">12</button><br>
        <button type="button" value="kysymys 1" class="kysymys">14</button><br>
    </div>

    <div class="container-md text-center kysymys">
        <h3>Kysymys 3</h3><br>
        <p>Montako askelta ihminen kävelee keskimäärin päivässä?</p>
        <button type="button" value="kysymys 1" class="kysymys">7500</button><br>
        <button type="button" value="kysymys 1" class="kysymys">10000</button><br>
        <button type="button" value="kysymys 1" class="kysymys">12500</button><br>
    </div>

    <div class="container-md text-center kysymys">
        <h3>Kysymys 4</h3><br>
        <p>Väärin tai Oikein</p>
        <button type="button" value="kysymys 1" class="kysymys">Kyssäri a vai o</button><br>
        <button type="button" value="kysymys 1" class="kysymys">Kyssäri a vai o</button><br>
        <button type="button" value="kysymys 1" class="kysymys">Kyssäri a vai o</button><br>
    </div>

    <div class="container-md text-center kysymys">
        <h3>Kysymys 5</h3><br>
        <p>Väärin tai Oikein</p>
        <button type="button" value="kysymys 1" class="kysymys">Kyssäri a vai o</button><br>
        <button type="button" value="kysymys 1" class="kysymys">Kyssäri a vai o</button><br>
        <button type="button" value="kysymys 1" class="kysymys">Kyssäri a vai o</button><br>
    </div>

    <div class="container-md text-center kysymys">
        <h3>Kysymys 6</h3><br>
        <p>Väärin tai Oikein</p>
        <button type="button" value="kysymys 1" class="kysymys">Kyssäri a vai o</button><br>
        <button type="button" value="kysymys 1" class="kysymys">Kyssäri a vai o</button><br>
        <button type="button" value="kysymys 1" class="kysymys">Kyssäri a vai o</button><br>
    </div>

    <div class="container-md text-center kysymys">
        <h3>Kysymys 7</h3><br>
        <p>Väärin tai Oikein</p>
        <button type="button" value="kysymys 1" class="kysymys">Kyssäri a vai o</button><br>
        <button type="button" value="kysymys 1" class="kysymys">Kyssäri a vai o</button><br>
        <button type="button" value="kysymys 1" class="kysymys">Kyssäri a vai o</button><br>
    </div>

    <div class="container-md text-center kysymys">
        <h3>Kysymys 8</h3><br>
        <p>Väärin tai Oikein</p>
        <button type="button" value="kysymys 1" class="kysymys">Kyssäri a vai o</button><br>
        <button type="button" value="kysymys 1" class="kysymys">Kyssäri a vai o</button><br>
        <button type="button" value="kysymys 1" class="kysymys">Kyssäri a vai o</button><br>
    </div>

    <div class="container-md text-center kysymys">
        <h3>Kysymys 9</h3><br>
        <p>Väärin tai Oikein</p>
        <button type="button" value="kysymys 1" class="kysymys">Kyssäri a vai o</button><br>
        <button type="button" value="kysymys 1" class="kysymys">Kyssäri a vai o</button><br>
        <button type="button" value="kysymys 1" class="kysymys">Kyssäri a vai o</button><br>
    </div>

    <div class="container-md text-center kysymys">
        <h3>Kysymys 10</h3><br>
        <p>Väärin tai Oikein</p>
        <button type="button" value="kysymys 1" class="kysymys">Kyssäri a vai o</button><br>
        <button type="button" value="kysymys 1" class="kysymys">Kyssäri a vai o</button><br>
        <button type="button" value="kysymys 1" class="kysymys">Kyssäri a vai o</button><br>
    </div>

    <?php

        function tarkista($vastaus) {
            echo "<i>{$vastaus}</i><br>";
        }

        echo "<div class='container-md text-center kysymys'>
        <h3>Tulokset</h3><br>
        <button type=button value=tulos class=tulos>Katso tulokset!</button><br>
        </div>";

    ?>

</form>

</body>

<footer class="container-fluid text-center">
    <p>Tekijä: Arttu Tuhkanen</p>
    <p><a href="mailto:arttu.tuhkanen@edu.sakky.fi">arttu.tuhkanen@edu.sakky.fi</a></p>
</footer>
</html>