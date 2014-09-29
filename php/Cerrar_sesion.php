<?php
  session_start();
  unset($_SESSION["nick"]); 
  unset($_SESSION["clave"]);
  session_destroy();
  header("Location: ../index.php");
  exit;
?>
