<?php
session_start();
echo ($_SESSION['auth']);die;
session_destroy();

//header('location:../../index.php');
?>