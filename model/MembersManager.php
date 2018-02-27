<?php
require_once ('model/Manager.php');

class MembersManager extends Manager
{

    public function sessionconect()
    {
        $db = $this->dbconnect();
        $pwdi = $db->prepare('SELECT pseudo,pass FROM members where pseudo=:pseudo AND pass=:pass');
        $pwdi->execute(array(
            'pseudo' => $_POST['username'],
            'pass' => $_POST['pass']
        ));
        $result = $pwdi->fetch(PDO::FETCH_ASSOC);
        $pwdi->closeCursor();
        
        if ($result == TRUE) {
          header('Location: view/backend/gestionBillet.php');
        } else {
           echo "Votre mot de passe ou votre identifiant n'est pas correct. Veuillez vérifier vos informations";
        }
    }
}

