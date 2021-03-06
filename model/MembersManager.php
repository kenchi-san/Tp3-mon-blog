<?php

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

    /**
     * Vérifie si une clé de session existe pour clé "auth"
     */
    public static function checkIfSessionExists()
    {
        if (empty($_SESSION['auth'])) {
            return false;
        } else {
            return true;
        }
    }

    public static function redirectToHomepageIfSessionNotExists()
    {
        if (self::checkIfSessionExists() == false) {
            header('Location: index.php');
            exit();
        }
    }
}



