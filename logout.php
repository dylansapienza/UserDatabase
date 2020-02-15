<?php
  // TODO: start session
  session_start();  

  // TODO: If the user is logged in, delete the session vars to log them out
  if(isset($_SESSION['username'])){
    $_SESSION = array();

    session_destroy();
  }

  // TODO: Redirect to the login page
  session_destroy();
  $home_url = 'http://' . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . '/index.php';
  header('Location: ' . $home_url);

  
?>