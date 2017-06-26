<?php

require_once 'config.php';
require_once 'connect.php';


// Accueil | si il n'existe pas de variables GET ou POST 
if (empty($_GET) && empty($_POST)) {
    require_once 'accueil.php';
// Détail article
} elseif (isset($_GET['admin'])) {
    // on veut insérer un article
    if ($_GET['admin'] === "insert") {
        // pas envoyé
        if (empty($_POST)) {
            // affichage du formulaire
            require_once 'form_insert.php';
        } else {
            // on tente l'insertion
            require_once 'insert.php';
        }
    } elseif ($_GET['admin'] === "update") {
        if (isset($_GET['id']) && ctype_digit($_GET['id'])) {
            $article_id = (int) $_GET['id'];
            // pas envoyé
            if (empty($_POST)) {
                // affichage du formulaire
                require_once 'form_update.php';
            } else {
                // on tente l'insertion
                require_once 'update.php';
            }
        } else {
            echo "<h1>ID non correcte avec l'update</h1>";
        }
    } elseif ($_GET['admin'] === "delete") {
        if (isset($_GET['id']) && ctype_digit($_GET['id'])) {
            $article_id = (int) $_GET['id'];
            require_once 'delete.php';
        } else {
            echo "<h1>ID non correcte avec le delete</h1>";
        }
    }
//     n'importe quel autre cas, on va sur l'accueil
} else {
    require_once 'accueil.php';
}