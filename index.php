<?php
session_start();


require ('controler/frontend.php');
require ('controler/backend.php');


$action = "";
if (! empty($_GET['action'])) {
    $action = $_GET['action'];
}

switch ($action) {
    // liste tous les billets
    case 'listPosts':
        listPosts();
        break;
        
    // rajoute un commentaire a un billet
    case 'addComment':
        addComment($_GET['id'], $_POST['author'], $_POST['comment']);
        break;
        
    // affichage des billets et des commentaires dans le frontend
    case 'post':
        post();
        break;
        
    // affichage des billets et des commentaires dans le backend
    case 'postAdmin':
        postAdmin();
        break;
           
    // rajoute un nouvelle article dans la bdd
    case 'add_new_content':
        add_new_content($_POST['title'], $_POST['content']);
        break;
        
        // introduit le billet dans un editeur text
    case 'editshow':
        editshow($_GET['id']);
        break;
        
    // edit les billets dans la bdd
    case 'postEdition':
        postEdition($_GET['id'], $_POST['title'], $_POST['content']);
        break;
        
    // suprime un billet
    case 'postSupression':
        postSupression($_GET['id']);
        break;
        
        // introduit le commentaire dans un editeur text
    case 'editShowComment':
        editShowComment($_GET['id']);
        break;
        
        //edit les commentaires dans la bdd
    case 'commentEdition':
        commentEdition($_GET['id'], $_POST['author'], $_POST['comment']);
        break;
// supprime le commentaire
    case 'commentSupression':
        commentSupression($_GET['id']);
        break;
    // montre la page de connexion
    case 'displaylogin':
        displaylogin();
        break;
        
    // verification dans la bdd si l'utilisateur hexiste
    case 'connectionMember':
        if ( !empty($_POST['username']) && !empty($_POST['pass']) ) {
            connectionMember($_POST['username'], $_POST['pass']);
        }
        break;
        
    // affichage des billets dans la page admin
    case 'gestionPosts':
        gestionPosts();
        break;
        
    // list tous les billets par defaut
    default:
        listPosts();
        break;
}
