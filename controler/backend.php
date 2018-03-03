<?php

function postAdmin()
{
    $postManager = new PostManager();
    $commentManager = new CommentManager();
    
    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);
    
    require ('view/backend/commentGestionView.php');
}

function add_new_content($title, $content)
{
    $postManager = new PostManager();
    $addcontents = $postManager->insertpost($title, $content);
    
    if ($addcontents === false) {
        die('Impossible d\'ajouter l\'article !');
    } else {
        header('Location: index.php?action=gestionPosts');
    }
}

function postEdition($id, $title, $content)
{
    $postmanager = new PostManager();
    $postEditions = $postmanager->editionPosts($id, $title, $content);
    
    if ($postEditions === false) {
        die('Impossible d\'ajouter l\'article !');
    } else {
        header('Location: index.php?action=gestionPosts');
    }
}

function editshow($id)
{
    $postmanager = new PostManager();
    $currentPost = $postmanager->getPost($id);
    
    require ('view/backend/traitement_text.php');
}

function postSupression($id)
{
    $postmanager = new PostManager();
    $supressionpost = $postmanager->supressionPosts($id);
    header('Location: index.php?action=gestionPosts');
}

/*
 * function editShowComment($id)
 * {
 * $postmanager = new PostManager();
 * $addcomment= $postmanager-> getComments($postId);
 * require ('')
 * }
 */
function gestionPosts()
{
    
    // MembersManager::destroySession();
    
    // if ( empty($_SESSION['auth']) ) {
    MembersManager::checkSession();
    
    $postsManager = new PostManager();
    $listcourent = $postsManager->getPosts();
    require ('view/backend/gestionBillet.php');
}

function connectionMember($username, $pass)
{
    
    $oMembersM = new MembersManager();
    $checkConnection = $oMembersM->connect($username, $pass);
    
    if ($checkConnection == TRUE) {
        header('Location:index.php?action=gestionPosts');
    } else {
        echo "Votre mot de passe ou votre identifiant n'est pas correct. Veuillez v�rifier vos informations";
    }
}