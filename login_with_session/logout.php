<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   echo 'Logging out please wail......';
   header('Refresh: 2; URL = index.php');
?>