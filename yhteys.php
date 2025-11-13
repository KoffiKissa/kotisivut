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
    <h2 class="container-fluid p-3 text-center bg-primary">Ota yhteyttä</h2>
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
        </ul>
    </div>
</nav>

<div class="container-md text-center">

    <h2>Ota yhteyttä</h2><br>

    <form method="post" action="yhteys.php">
        <label for="nimi" name="nimi">Nimesi:</label><br>
        <input name="nimi" id="nimi" type=><br><br>
        <label for="palaute" name="palaute">Asiasi:</label><br>
        <input name="palaute" id="palaute"><br><br>
        <button type="submit" class="nappi">Lähetä palaute</button><br><br>

    </form>

    <?php

        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $nimi = htmlspecialchars($_POST['nimi']);
            $sanoma = htmlspecialchars($_POST['palaute']);
            $to = "arttu.tuhkanen@edu.sakky.fi";
            $subject = "Tämä on testi";
            $message = wordwrap($sanoma, 70);
            $headers = "From: arttu.elias.tuhkanen@gmail.com" . "\r\n" . "Reply-To: vamos.kkona@gmail.com";
            if ($nimi != "" && $sanoma != "")
            {
                echo "<h2>Palautteesi:</h2><br>$sanoma<br>Lähettäjä: $nimi";
                mail($to, $subject, $message, $headers);
            }
        }

    ?>

    </div>

</body>

<footer class="container-fluid text-center">
    <p>Tekijä: Arttu Tuhkanen</p>
    <p><a href="mailto:arttu.tuhkanen@edu.sakky.fi">arttu.tuhkanen@edu.sakky.fi</a></p>
</footer>
</html>