<?php
require_once('model/Manager.php');

class CommentManager extends Manager 
{
    public function postComment($postId, $author, $comment)
	{
        if(!empty($postId) && !empty($author) && !empty($comment)){
            $db = $this->dbConnect();
            $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
            $affectedLines = $comments->execute(array($postId, $author, $comment));

            return $affectedLines;
        }
        else{
            throw new Exception('les variables ne sont pas recus');

        }
    }



    public function getComments($postId)
	{
        $db = $this-> dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($postId));

        return $comments;
	}


    public function insertpost( $title, $content)
	{
     
            $db = $this->dbConnect();
            $addcontent = $db->prepare('INSERT INTO posts(title, content, creation_date) VALUES(?,?, NOW())');
            $addcontents=$addcontent->execute(array($title, $content));

            return $addcontents;
        
    }
    

}
