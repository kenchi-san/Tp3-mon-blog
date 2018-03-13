<?php
require_once ('model/PostManager.php');
require ('model/CommentManager.php');

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
        echo $postId;
       
        echo $author;
        echo $comment;
       
        
        die('Impossible d\'ajouter le commentaire !');
    } else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}


function displaylogin()
{
    require ('view/backend/loginView.php');
}



