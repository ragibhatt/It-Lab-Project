<?php
 unset($_SESSION['user']);
 unset($_SESSION['pass']);
  session_destroy();
 header('Location: login.php');
exit();
 ?>
