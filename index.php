<?php
// récup infos de contenu
    // récup page demandée
    if (isset($_GET['page'])) {
    $page = $_GET['page'];
    } 
    else {
        $page = 'accueil';
    }
    $pageTitle = 'Accueil';
    $heroTitle = 'Bienvenue sur la page d\'accueil';
    $heroImage = 'assets/hero.jpg';

    // $heroBackground = "background-image: linear-gradient(180deg, rgba(255, 255, 255, 0) 0%, rgba(93, 93, 93, 0.51) 0.01%, rgba(0, 0, 0, 0.51) 100%), url('<path-to-image>') lightgray 0% 0% / 41.15920662879944px 41.15920662879944px repeat, url('" . (isset($heroImage) ? $heroImage : '') . "');";

    $heroBackground = "background-image: 
    linear-gradient(180deg, rgba(255, 255, 255, 0.00) 0%, rgba(93, 93, 93, 0.51) 0.01%, rgba(0, 0, 0, 0.51) 100%), url(<path-to-image>) lightgray 0% 0% / 41.15920662879944px 41.15920662879944px repeat,
    url('$heroImage');";
?>

<!-- inclure la page de fonctions -->

<!-- Header -->
<?php
    include 'theme_parts/header.php';
?>
<!-- Contenu -->
 <?php
    // récup page demandée
    if (isset($_POST['page'])) {
        $page = $_POST['page'];
    }
    //  appeler la bonne page - fonction
    switch ($page) {
        case 'accueil':
            include 'page_accueil.php';
            break;
        case 'programmation':
            include 'page_programmation.php';
            break;
        case 'contact':
            include 'page_contact.php';
            break;
        // default:
        //     include 'page_404.php';
        //     break;
    }
 ?>