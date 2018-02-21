<?php
require_once ('model/Manager.php');

class PostManager extends Manager
{

    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 5');
        return $req;
    }

    public function getPost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
        $req->execute(array(
            $postId
        ));
        
        $req->execute();
        
        $post = $req->fetch(PDO::FETCH_ASSOC);
        
        return $post;
    }

    public function insertpost($title, $content)
    {
        $db = $this->dbConnect();
        $addcontent = $db->prepare('INSERT INTO posts(title, content, creation_date) VALUES(?,?, NOW())');
        $addcontents = $addcontent->execute(array(
            $title,
            $content
        ));
        
        return $addcontents;
    }

    public function editionPosts($id, $title, $content)
    {
        $db = $this->dbconnect();
        $inputpost = $db->prepare('UPDATE posts SET title=:title, content=:content WHERE id=:id ');
        $reqs = $inputpost->execute(array(
            'id'=>$id,
            'title'=>$title,
            'content'=>$content
            
        ));
        return $reqs;
        
    }
}
