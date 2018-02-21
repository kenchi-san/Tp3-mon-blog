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
        header('Location: index.php?action=listPosts');
    }
}

function postEdition($id, $title, $content)
{
    $postmanager = new PostManager();
    $postEditions = $postmanager->editionPosts($id, $title, $content);

    if ($postEditions === false) {
       die('Impossible d\'ajouter l\'article !');
   } else {
       header('Location: index.php?action=listPosts');
   }
}

function editshow($id)
{
    $postmanager = new PostManager();
   $currentPost = $postmanager->getPost($id);
    
    require ('view/frontend/traitement_text.php');
}

function connectionMember()
{
    $oMembersM = new MembersManager();
    
    $vRes = $oMembersM->sessionconect();
}

function displaylogin()
{
    require ('view/frontend/loginView.php');
}

