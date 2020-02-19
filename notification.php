<?php

  // Step 1: (1 point) Start your session
  // CREATE YOUR SESSION START BELOW THIS LINE

  // Step 2: (4) Redirect the user if they don't have a notification
  // CREATE YOUR REDIRECT LOGIC BELOW THIS LINE

  // Step 3: (5) Output the notification and clear it from the session (once it's outputted)
  // CREATE YOUR NOTIFICATION OUTPUT AND CLEAR BELOW THIS LINE



  // TOTAL POINTS POSSIBLE: 10
  // Resume the session 
 session_start();
 // Redirect user if there is no notifications
 if(empty($_SESSION{['notification']})) {
     header("Location: index.php");
     die;
 }

 // output our notification 
 echo $_SESSION['notification'];

 // clear the notification 
 unset($_SESSION['notification']);


?>