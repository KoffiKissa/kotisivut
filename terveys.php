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

<div class="container-md text-center">
    <h2>Verenpaine</h2>
    
    <p>Normaali ihanteellinen verenpaine aikuisilla on 120/80 mmHg ja kohonnut verenpaine yleensä alkaa 140/90 mmHg liepeillä.
        Matala verenpaine taas katsotaan alkavaksi arvojen 100/70 mmHg.</p>
    <p>Korkean verenpaineen hoito tapahtuu monesti lääkkeillä, mutta aktiivisuuden lisääminen ja painon pudotus ovat parhaimmat pitkäaikaiset
         hoitokeinot. Myös terveellinen ja tasapainoinen ruokavalio auttaa pitämään verenpaineen hallinnassa.</p>
</div>

<div class="container-md text-center">
    <h2>Liikunta lajit</h2>

    <h3><a href="https://darts.fi/peliohjeet/" target="_blank">Darts</a></h3>
    <p>Darts on rento ja kevyttä liikuntaa tarjoava ajanvietteenäkin toimiva laji, jossa tarkoituksena on päästä 501 pisteestä
         mahdollisimman harvalla heitolla ja kopetus tapahtuu aina tuplaamalla.</p>
    <p>Dartsissa suurin osa liikunnasta tulee kävelyn muodossa taululle ja takaisin heittoviivalle.</p>

    <h3><a href="https://www.palloliitto.fi/saannot-maaraykset-ja-ohjeet" target="_blank">Jalkapallo</a></h3>
    <p>Jalkapallo lienee meille kaikille tuttu laji, jossa juostaan pallonperässä pitkin kenttää koska joku sen aina potkii päin vittua kuitenkin.
        Liikunnallisesti jalkapallo on erittäin hyvä urheilumuoto, sillä tässä lajissa saa todellakin juosta.</p>

    <h3><a href="https://ukkinstituutti.fi/liikkuminen/liikuntalajit-ja-liikkumismuodot/kavely/?srsltid=AfmBOoqgoCrwkLCZCBW3lXayhKFwwFLvSq5B0E5hyuFxNTf_fFrHEVdb" target="_blank">Kävely</a></h3>
    <p>Kävely on yksi parhaista tavoista lisätä liikuntaa, se toimii todella hyvin ylläpitämään peruskuntoa, 
        jolloin se myös vähentää merkittävästi riskiä sairastua korkeaan verenpaineeseen ja moneen muuhunkin "kansantautiin".</p>
</div>

<div class="container-md text-center bmi">

    <h2>BMI laskuri</h2><br>
    
    <form method="post" action="terveys.php">

        <?php
            echo "<label for=paino>Painosi (kg):</label><br>
                <input type=number name=paino id=paino value=0><br><br>
                <label for=pituus>Pituutesi (cm):</label><br>
                <input name=pituus id=pituus type=number value=0><br><br>
                <button method=submit class=nappi>Laske BMI</button><br><br>";
            if ($_POST['pituus'] != "" && $_POST['paino'] != "")
            {
                if($_POST['pituus'] != 0 && $_POST['paino'] != 0)
                {
                $pituus = $_POST['pituus'];
                $paino = $_POST['paino'];

                $pituus = $pituus / 100;
                $bmi = $paino * 1.3 / pow($pituus, 2.5);
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
            else {echo "Et voi painaa 0 kg tai olla 0cm pitkä!";}
        }

        ?>

    </form>

</div>

<div class="container-md text-center diary">

        <h2><a href="liikunta_kirja.php">Liikunta päiväkirja</a></h2><br>

</div>

</body>

<footer class="container-fluid text-center">
    <p>Tekijä: Arttu Tuhkanen</p>
    <p><a href="mailto:arttu.tuhkanen@edu.sakky.fi">arttu.tuhkanen@edu.sakky.fi</a></p>
</footer>
</html>