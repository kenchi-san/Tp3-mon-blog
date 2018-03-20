<?php
require_once ('model/Manager.php');

class CommentManager extends Manager
{

    /**
     *
     * @param int $postId
     * @param string $author
     * @param string $comment
     * @return boolean
     */
    public function postComment($postId, $author, $comment)
    {
        $db = $this->dbConnect();
        $Comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(:post_id,:author,:comment, NOW())');
        $affectedLines = $Comments->execute(array(
            'post_id' => $_GET['id'],
            'author' => $_POST['author'],
            'comment' => $_POST['comment']
        ));
        
        return $affectedLines;
    }

    /**
     *
     * @param int $postId
     * @return PDOStatement
     */
    public function getComments($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, post_id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array(
            $postId
        
        ));
        return $comments;
    }

    /**
     *
     * @param int $id
     * @return boolean
     */
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

    /**
     *
     * @param int $id
     * @param string $author
     * @param string $comment
     * @return boolean
     */
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

    /**
     *
     * @param int $id
     */
    public function supressioncomments($id)
    {
        $db = $this->dbConnect();
        $addcontent = $db->prepare('DELETE FROM comments WHERE id=:id');
        $addcontents = $addcontent->execute(array(
            'id' => $id
        ));
    }

    /**
     *
     * @param int $id
     * @param int $repport
     * @return boolean
     */
    public function reportComments($repport)
    {
        $db = $this->dbconnect();
        $repportcom = $db->prepare('UPDATE comments SET repport=:repport WHERE id=:repport ');
        $repporting = $repportcom->execute(array(
            
            'repport' => $_GET['repport']
        ));
        // var_dump($repporting);die;
        return $repporting;
    }

    public function reportShow()
    {
        $db = $this->dbConnect();
        $comments = $db->query('SELECT id, post_id, repport, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE repport >0 ');
        return $comments;
    }

    public function reportbacks($id, $repport)
    {
        $db = $this->dbconnect();
        $back = $db->prepare('UPDATE comments SET repport=:repport WHERE id=:id ');
        $repportingback = $back->execute(array(
            'id' => $_GET['id'],
            'repport' => NULL
        ));
        // var_dump($repporting);die;
        return $repportingback;
    }

    public static function checkifempty()
    {
        if (empty($_GET['id']) && empty($_POST['author']) && empty($_POST['comment'])) {
            die('Impossible d\'ajouter le commentaire !');
        } else {
            return TRUE;
        }
    }
}


