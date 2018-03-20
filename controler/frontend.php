<?php

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
    
    header('Location: index.php?action=post&id=' . $postId);
    exit();
}

function displaylogin()
{
    require ('view/backend/loginView.php');
}



