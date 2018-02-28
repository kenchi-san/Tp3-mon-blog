<?php
require_once ('model/PostManager.php');
require ('model/CommentManager.php');
require_once ('model/MembersManager.php');
require ('model/function.php');

function listPosts()
{
    $postsManager = new PostManager();
    $posts = $postsManager->getPosts();
    require ('view/frontend/listPostsView.php');
}

function post()
{
    $postManager = new PostManager();
    $commentManager = new CommentManager();
    
    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);
    
    require ('view/frontend/postView.php');
}

function addComment($postId, $author, $comment)
{
    $commentManager = new CommentManager();
    $affectedLines = $commentManager->postComment($postId, $author, $comment);
    
    if ($affectedLines === false) {
        die('Impossible d\'ajouter le commentaire !');
    } else {
        header('Location: index.php?action=post&id=' . $postId);
    }
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
    
    require ('view/frontend/traitement_text.php');
}

function postSupression($id)
{
    $postmanager = new PostManager();
    $supressionpost = $postmanager->supressionPosts($id);
    header('Location: index.php?action=gestionPosts');
}

function displaylogin()
{
    require ('view/backend/loginView.php');
}

function connectionMember($username, $pass)
{
    $oMembersM = new MembersManager();
    $vRes = $oMembersM->sessionconect($username, $pass);
     if(isset($_POST) && !empty($_POST['username']) && !empty($_POST['pass'])){
         
    header('Location:index.php?action=gestionPosts');
    
      }else {
      echo "Votre mot de passe ou votre identifiant n'est pas correct. Veuillez vérifier vos informations";
      }
     
}

function gestionPosts()
{
    $postsManager = new PostManager();
    $listcourent = $postsManager->getPosts();
    require ('view/backend/gestionBillet.php');
}