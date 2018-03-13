<?php
require_once ('model/Manager.php');

class MembersManager extends Manager
{

    /**
     * Se connecte et check le coupe login/password
     *
     * @param string $username
     * @param string $pass
     * @return bool
     */
    public function connect($username, $pass)
    {
        $db = $this->dbconnect();
        $pwdi = $db->prepare('SELECT id, pseudo, mail FROM members where pseudo=:pseudo AND pass=:pass');
        $pwdi->execute(array(
            'pseudo' => $_POST['username'],
            'pass' => md5($_POST['pass'])
        ));
        $result = $pwdi->fetch(PDO::FETCH_ASSOC);
        $pwdi->closeCursor(); // Fermeture curseur
        if (! empty($result)) {
            $this->_sessionSaveData($result);
            return true;
        } else {
            return false;
        }
    }

    /**
     * Sauvegarde nos donnees en session
     *
     * @param array $result
     */
   private function _sessionSaveData($result)
    {
        if (! empty($result)) {
            $_SESSION['auth'] = $result;
        }
    }

    public static function checkSession()
    {
        if (empty($_SESSION['auth'])) {
            FALSE;
        } else {
            TRUE;
        }
    }
}


