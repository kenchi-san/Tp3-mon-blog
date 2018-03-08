<?php
require_once ('model/Manager.php');

class CommentManager extends Manager
{

    
    
    
    
    
    
    
    public function postComment($postId, $author, $comment)
    {
        $db = $this->dbConnect();
        $Comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(:post_id,:author,:comment, NOW())');
        $affectedLines = $Comments->execute(array(
            'post_id'=>$_GET['id'],
            'author'=>$_POST['author'],
            'comment'=>$_POST['comment']
        ));
        
        return $affectedLines;
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    /**
     *
     * @param int $postId
     * @param string $author
     * @param string $comment
     * @throws Exception
     * @return boolean
     */
/*public function postComment($postId, $author, $comment)
    {
        $db = $this->dbConnect();
        $Comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?,?,?, NOW())');
        $affectedLines = $Comments->execute(array(
            $postId,
            $author,
            $comment
        ));
        
        return $affectedLines;
    }*/

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
    
      public function reportComments($id)
      {
      $db = $this->dbconnect();
      $inputcomment = $db->prepare('UPDATE comments SET repport=? WHERE id=? ');
      $repporting = $inputcomment->execute(array(
      $repport
      ));
     
      return $repporting;
      }
     
}


