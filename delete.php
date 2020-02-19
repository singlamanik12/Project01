<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  include_once('./_connect.php');
  // Step 2: (20 points) Delete the existing 'supers' row from the database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE

  // Step 3: (16 points) Perform basic error handling and redirect the user with a success or error message
  // Ensure you store the messages into the $_SESSION
  // Ensure you exit after your redirect
  // CREATE YOUR ERROR HANDLING BELOW THIS LINE

  $sql = "DELETE FROM project01  
         WHERE id = {$_GET['id']}";
  $res = mysqli_query($conn, $sql);

  if ($res) {
    // We were successful
    echo "The row was delete successfully.";
  } else {
    // We failed
    echo "There was an error deleting the record: " . mysqli_error($conn);
  }
  
  // TOTAL POINTS POSSIBLE: 38
?>