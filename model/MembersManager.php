<?php
require_once ('model/Manager.php');

class MembersManager extends Manager
{

    public function connect($username, $pass)
    {
        $db = $this->dbconnect();
        $pwdi = $db->prepare('SELECT pseudo,pass FROM members where pseudo=:pseudo AND pass=:pass');
        $pwdi->execute(array(
            'pseudo' => $_POST['username'],
            'pass' => md5($_POST['pass'])
        ));
        $result = $pwdi->fetch(PDO::FETCH_ASSOC);
        $pwdi->closeCursor();
        
        return $result;
        
    }
}

