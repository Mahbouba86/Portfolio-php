<?php

/**
 * Le routeur est chargé d'écouter les 
 * requêtes HTTP provenant du client web 
 * puis d'y répondre avec le contenu approprié.
 */
$path = $_SERVER['REQUEST_URI'];

$cleanPath = preg_replace('/\?.*/', '', $path);

switch ($cleanPath) {
    case '/':
        include './templates/home.php';
        break;
    // Filter à partir de la fin de l'URL
    case '/about':
        include './templates/about.php';
        break;
    case '/skills':
        include './templates/skills.php';
        break;
    case '/projects':
        include './templates/projects.php';
        break;
    case '/contact':
        include './templates/contact.php';
        break;

    default:
        echo 'Page introuvable - 404 ';
        break;
}