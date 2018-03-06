<?php
require_once ('model/Manager.php');

class CommentManager extends Manager
{

    /**
     *
     * @param int $postId
     * @param string $author
     * @param string $comment
     * @throws Exception
     * @return boolean
     */
    public function postComment($id, $author, $comment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(id,post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array(
            $id,
            $author,
            $comment
        ));
        // var_dump($affectedLines);die;
        return $affectedLines;
    }

    public function getComments($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, post_id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array(
            $postId
        
        ));
        return $comments;
    }

    public function getCom($id)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, post_id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE id =:id ');
        $comments->execute(array(
            'id' => $_GET['id']
        
        ));
        $comments->execute();
        
        $comment = $comments->fetch(PDO::FETCH_ASSOC);
        return $comment;
    }

    public function editionComment($id, $author, $comment)
    {
        $db = $this->dbconnect();
        $inputcomment = $db->prepare('UPDATE comments SET id=:id,author=:author, comment=:comment WHERE id=:id ');
        $commentedit = $inputcomment->execute(array(
            'id' => $id,
            'author' => $author,
            'comment' => $comment
        
        ));
        
        return $commentedit;
    }

    public function supressioncomments($id)
    {
        $db = $this->dbConnect();
        $addcontent = $db->prepare('DELETE FROM comments WHERE id=:id');
        $addcontents = $addcontent->execute(array(
            'id' => $id
        ));
    }
}


