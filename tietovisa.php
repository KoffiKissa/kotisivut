<?php
$questions = [
    [
        "id" => 1,
        "question" => "Monestako pisteestä Dartsissa yleensä aloitetaan?",
        "options" => ["301", "501", "701"],
        "correct" => 2
    ],
    [
        "id" => 2,
        "question" => "Montako pelaajaa jallkapallossa on kerralla kentällä?",
        "options" => ["9", "10", "11", "13"],
        "correct" => 3
    ],
    [
        "id" => 3,
        "question" => "Montako askelta ihmisen pitäisi keskimäärin kävellä vuorokaudessa?",
        "options" => ["5000", "8000", "12500"],
        "correct" => 2
    ],
    [
        "id" => 4,
        "question" => "Kuka voitti Dartsin maailmanmestaruuden vuonna 2025?",
        "options" => ["Luke Littler", "Luke Humphries", "Nathan Aspinal"],
        "correct" => 1
    ]
];
?>

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

<?php foreach ($questions as $q): ?>
    <div class="container-md kysymys text-center">
        <div class="kysymys text-center" id="question-<?php echo $q["id"]; ?>">
            <h3><strong><?php echo $q["question"]; ?></strong></h3>

            <?php foreach ($q["options"] as $i => $opt): ?>
                <button class="btn kysymys"
                        onclick="answerQuestion(<?php echo $q['id']; ?>, <?php echo $i; ?>, <?php echo $q['correct']; ?>, this)">
                    <?php echo htmlspecialchars($opt); ?>
                </button><br>
            <?php endforeach; ?>
        </div>
    </div>
<?php endforeach; ?>

<script>
let score = 0;

function answerQuestion(qid, chosen, correct, button) {
    let box = document.getElementById("question-" + qid);

    // Lock all buttons in this question
    box.classList.add("locked");

    // Mark chosen answer
    if (chosen === correct) {
        button.classList.add("correct");
        score++;
    }
    else {
        button.classList.add("incorrect");

        // Show correct answer
        let correctBtn = box.getElementsByTagName("button")[correct];
        correctBtn.classList.add("correct");
    }

    // Update score text
    document.getElementById("score").innerText = "Tulos: " + score;
}
</script>

<div class="container-md kysymys">
    <div id="score">Tulos: 0</div>
</div>

</body>

<footer class="container-fluid text-center">
    <p>Tekijä: Arttu Tuhkanen</p>
    <p><a href="mailto:arttu.tuhkanen@edu.sakky.fi">arttu.tuhkanen@edu.sakky.fi</a></p>
</footer>
</html>