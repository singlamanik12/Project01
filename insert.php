<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  include('./_connect.php');
  // Step 2: (17 points) Insert the new 'supers' row into the database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE

  // Step 3: (16 points) Perform basic error handling and redirect the user with a success or error message
  // Ensure you store the messages into the $_SESSION
  // Ensure you exit after your redirect
  // CREATE YOUR ERROR HANDLING BELOW THIS LINE
  $sql = "INSERT INTO project01 (first_name,last_name,date_of_birth,alias,active,hero) VALUES ('{$_POST["first_name"]}',
  '{$_POST["last_name"]}',
  '{$_POST["date_of_birth"]}',
  '{$_POST["alias"]}',
  '{$_POST["active"]}',
  '{$_POST["hero"]}')";
  $res = mysqli_query($conn, $sql);

   
  session_start();

  if($res){
      
      $_SESSION['notification'] = "New country created successfully.";
  }
  else{
      
      $_SESSION['notification'] = "There was an error creating this country: " . mysqli_error($conn);
  }
  
  header("Location: notification.php");
  die;

  // TOTAL POINTS POSSIBLE: 35
?>