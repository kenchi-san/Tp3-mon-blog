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
    public function postComment($postId, $author, $comment)
    {
        if (! empty($postId) && ! empty($author) && ! empty($comment)) {
            $db = $this->dbConnect();
            $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
            $affectedLines = $comments->execute(array(
                $postId,
                $author,
                $comment
            ));
            
            return $affectedLines;
        } else {
            throw new Exception('les variables ne sont pas recus');
        }
    }

    public function getComments($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array(
            $postId
        ));
        
        return $comments;
    }
}

