<?php 
require_once('model/Manager.php');

class MembersManager extends Manager
{

   public function sessionconect()
   {
       
        $db = $this->dbconnect();
        $pwdi = $db->prepare('SELECT pass , mail FROM members where pass=:pass AND mail=:mail');
        $pwdi->execute(array(
        'pass' => $_POST['pass'],
        'mail' => $_POST['mail']));
         $result=$pwdi->fetch();
         $pwdi->closeCursor();
         if($result) {
            return true;
         } else {
            return false;
         }
     
   }
    
}

