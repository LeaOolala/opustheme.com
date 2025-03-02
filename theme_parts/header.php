<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>
    <header>

        <nav>
            <form method="POST">
                <button type="submit" name="page" value="accueil">Accueil</button>
                <button type="submit" name="page" value="programmation">Programmation</button>
                <button type="submit" name="page" value="contact">Contact</button>
            </form>
        </nav>

        <div class="hero" style='<?= $heroBackground ?>'>
            <h1><?= $heroTitle ?></h1>
        </div>
    </header>
