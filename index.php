<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Php badwords</title>
</head>
<body class="row align-items-center justify-content-center">
    <?php
    $original_text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum accusantium commodi quo iste eligendi rem impedit quae modi corporis aut labore dolore, amet odio nisi voluptates pariatur voluptatum eum quidem?';
    $censure = $_GET['censure'];
    $substitute = '***';
    $corrected_text = str_ireplace($censure,$substitute,$original_text);
    ?>

    <div class="container-fluid m-auto">
        <h1 class="text-center">Attenzione alle parole offensive!</h1>
        <p class="text-center">Scegli nel testo le parole che ritieni offensive</p>
        <div class="main row row-cols-2 justify-content-center">
                <div class="original col-5">
                    <h3>Testo originale</h3>
                    <p>
                        <?= $original_text?>
                    </p>
                    <em><?= 'Il testo è lungo' . ' ' . strlen($original_text) . ' ' . 'caratteri'?></em>
                    <form action="" method="get">
                        <label for="censure"><strong>Inserisci la parola che ritieni offensiva</strong></label>
                        <input type="text" name="censure" id="censure">
                        <button class="btn btn-primary">Sostituisci</button>
                    </form>
                </div>
                <div class="corrected col-5">
                    <h3>Testo corretto</h3>
                    <p>
                        <?= $corrected_text ?>
                    </p>
                    <em><?= 'Il testo è lungo' . ' ' . strlen($corrected_text) . ' ' . 'caratteri'?></em>
                </div>
        </div>
    </div>
</body>
<style>
    body{
        height:100vh;
    }
</style>
</html>