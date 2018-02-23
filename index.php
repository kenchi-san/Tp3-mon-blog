<?php
require ('controler/frontend.php');

$action = "";
if (! empty($_GET['action'])) {
    $action = $_GET['action'];
}

switch ($action) {
    
    case 'listPosts':
        listPosts();
        break;
    
    case 'addComment':
        addComment($_GET['id'], $_POST['author'], $_POST['comment']);
        break;
    
    case 'post':
        post();
        break;
    
    case 'editshow':
        editshow($_GET['id']);
        break;
    
    case 'add_new_content':
        add_new_content($_POST['title'], $_POST['content']);
        break;
    
    case 'postEdition':
        postEdition($_GET['id'], $_POST['title'], $_POST['content']);
        break;
    
    case 'postSupression':
        postSupression($_GET['id']);
        break;
    
        
        case 'displaylogin':
        displaylogin();
        break;
    
    case 'connectionMember':
        connectionMember();
        break;
        
    default:
        listPosts();
        break;
}