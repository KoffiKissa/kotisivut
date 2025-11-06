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
    <h2 class="container-fluid p-3 text-center bg-primary">Terveys</h2>
</div>

<nav class="navbar navbar-expand-sm bg-secondary navbar-dark sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.html">
            <img src="kuva1.jpg" alt="Avatar Logo" class="rounded-pill" style="width:80px;">
        </a>
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="terveys.php">Terveys</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Linkki 2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Linkki 3</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Linkki 4</a>
        </li>
        </ul>
    </div>
</nav>

<div class="container-md text-center">
    <h2>Verenpaine</h2>
    
    <p>Normaali ihanteellinen verenpaine aikuisilla on 120/80 mmHg ja kohonnut verenpaine yleensä alkaa 140/90 mmHg liepeillä.
        Matala verenpaine taas katsotaan alkavaksi arvojen 100/70 mmHg.</p>
    <p>Korkean verenpaineen hoito tapahtuu monesti lääkkeillä, mutta aktiivisuuden lisääminen ja painon pudotus ovat parhaimmat pitkäaikaiset
         hoitokeinot. Myös terveellinen ja tasapainoinen ruokavalio auttaa pitämään verenpaineen hallinnassa.</p>
</div>

<div class="container-md text-center">
    <h2>Liikunta lajit</h2>

    <h3>Darts</h3>
    <p>Darts on rento ja kevyttä liikuntaa tarjoava ajanvietteenäkin toimiva laji, jossa tarkoituksena on päästä 501 pisteestä
         mahdollisimman harvalla heitolla ja kopetus tapahtuu aina tuplaamalla.</p>
    <p>Dartsissa suurin osa liikunnasta tulee kävelyn muodossa taululle ja takaisin heittoviivalle.</p>

    <h3>Jalkapallo</h3>
    <p>Jalkapallo lienee meille kaikille tuttu laji, jossa juostaan pallonperässä pitkin kenttää koska joku sen aina potkii päin vittua kuitenkin.
        Liikunnallisesti jalkapallo on erittäin hyvä urheilumuoto, sillä tässä lajissa saa todellakin juosta.</p>

    <h3>Kävely</h3>
    <p>Kävely on yksi parhaista tavoista lisätä liikuntaa, se toimii todella hyvin ylläpitämään peruskuntoa, 
        jolloin se myös vähentää merkittävästi riskiä sairastua korkeaan verenpaineeseen ja moneen muuhunkin "kansantautiin".</p>
</div>

<div class="container-md text-center bmi">
    <h2>BMI laskuri</h2><br>
    
    <form method="get" action="terveys.php">
        <label for="paino">Painosi (kg):</label><br>
        <input type="number" name="paino" id="paino"><br><br>
        <label for="pituus">Pituutesi (cm):</label><br>
        <input name="pituus" id="pituus" type="number"><br><br>
        <button type="button" method="submit" name="submit" class="nappi">Laske BMI</button><br><br>

        <?php
            if($_GET['submit'])
            {
                $pituus = $_GET['pituus'];
                $paino = $_GET['paino'];

            function bmi_lasku($paino, $pituus) 
            {
                $pituus = $pituus / 100;
                $bmi = $paino * 1.3 / pow($pituus, 2.5);
                return $bmi;
            }

            $bmi = bmi_lasku($paino, $pituus);

            if($bmi <=18.5) {
                $luokka = "Alipainoinen";
            }
            else if ($bmi > 18.5 & $bmi <= 24.9) {
                $luokka = "Normaalipainoinen";
            }
            else if ($bmi > 24.9) {
                 $luokka = "Ylipainoinen";
            }
            echo "BMI: $bmi<br>$luokka";
        }
        echo "kekw ei taia toimia";
        echo $bmi;
        ?>

    </form>

</div>
</body>

<footer class="container-fluid text-center">
    <p>Tekijä: Arttu Tuhkanen</p>
    <p><a href="mailto:arttu.tuhkanen@edu.sakky.fi">arttu.tuhkanen@edu.sakky.fi</a></p>
</footer>
</html>