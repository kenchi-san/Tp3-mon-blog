<?php
require_once ('model/MembersManager.php');

function postAdmin()
{
    MembersManager::redirectToHomepageIfSessionNotExists();
    
    $postManager = new PostManager();
    $commentManager = new CommentManager();
    
    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);
    
    require ('view/backend/commentGestionView.php');
}

function add_new_content($title, $content)
{
    MembersManager::redirectToHomepageIfSessionNotExists();
    
    $postManager = new PostManager();
    $addcontents = $postManager->insertpost($title, $content);
    
    if ($addcontents === false) {
        die('Impossible d\'ajouter l\'article !');
    } else {
        header('Location: index.php?action=gestionPosts');
        exit();
    }
}

function postEdition($id, $title, $content)
{
    MembersManager::redirectToHomepageIfSessionNotExists();
    
    $postmanager = new PostManager();
    $postEditions = $postmanager->editionPosts($id, $title, $content);
    
    if ($postEditions === false) {
        die('Impossible d\'ajouter l\'article !');
    } else {
        header('Location: index.php?action=gestionPosts');
        exit();
    }
}

function editshow($id)
{
    MembersManager::redirectToHomepageIfSessionNotExists();
    
    $postmanager = new PostManager();
    $currentPost = $postmanager->getPost($id);
    require ('view/backend/traitement_text.php');
}

function postSupression($id)
{
    MembersManager::redirectToHomepageIfSessionNotExists();
    
    $postmanager = new PostManager();
    $supressionpost = $postmanager->supressionPosts($id);
    header('Location: index.php?action=gestionPosts');
    exit();
}

function editShowComment($id)
{
    MembersManager::redirectToHomepageIfSessionNotExists();
    
    MembersManager::redirectToHomepageIfSessionNotExists();
    $commentManager = new CommentManager();
    $curentCom = $commentManager->getCom($id);
    require ('view/backend/editionCommentView.php');
}

function commentEdition($id, $author, $comment)
{
    MembersManager::redirectToHomepageIfSessionNotExists();
    
    $commentManager = new CommentManager();
    $commentEditions = $commentManager->editionComment($id, $author, $comment);
    header('Location: index.php?action=gestionPosts');
    exit();
}

function commentSupression($id)
{
    MembersManager::redirectToHomepageIfSessionNotExists();
    
    $commentManager = new CommentManager();
    $supressioncomment = $commentManager->supressioncomments($id);
    header('Location: index.php?action=gestionPosts');
    exit();
}

function reportcomment($id, $repport)
{
    MembersManager::redirectToHomepageIfSessionNotExists();
    
    $commentManager = new CommentManager();
    $commentReport = $commentManager->reportComments($repport);
    header('Location: index.php?action=post&id=' . $id);
    exit();
}

function gestionrepport()
{
    MembersManager::redirectToHomepageIfSessionNotExists();
    
    $commentManager = new CommentManager();
    $commentReport = $commentManager->reportShow();
    require ('view/backend/repportGestion.php');
}

function comeBackComment($id, $repport)
{
    MembersManager::redirectToHomepageIfSessionNotExists();
    $commentManager = new CommentManager();
    $Repportback = $commentManager->reportbacks($id, $repport);
    
    header('Location: index.php?action=gestionrepport');
    exit();
}

function gestionPosts()
{
    MembersManager::redirectToHomepageIfSessionNotExists();
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
        exit();
    } else {
        header('location:index.php?action=displaylogin');
        exit();
    }

    function logOut()
    {
        $test = new MembersManager();
        $test->checkSession();
        header('Location: index.php?action=listPosts');
        exit();
    }
}