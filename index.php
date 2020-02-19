<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  include('./_connect.php');
  // Step 2: (5 points) Retrieve all the 'supers' rows from your database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
  $result = mysqli_query($conn, "SELECT * FROM project01");
  
  $rows = mysqli_fetch_assoc($result);
  $row[] = $rows;
  //var_dump($rows);
?>

<!-- Step 3: (2 points) Include your header here -->
 <?php include('./_header.php'); ?>
<!-- Step 4: (2 points) Create a navigation bar for home.php and new.php -->
<!-- CREATE YOUR NAVIGATION HTML BELOW THIS LINE -->
  <div>
    <a href="./index.php">Home</a>
    <a href="./new.php">New</a>
  </div>
<!-- Step 5: (15 points) Create a table that display each row from the database -->
<!-- You only need to display the first_name, last_name, date_of_birth, -->
<!-- alias, active, and hero columns -->

  <table>
  <tr>
  <th>First Name</th>
      <th>Last Name</th>
      <th>Date Of Birth</th>
      <th>Alias</th>
      <th>Active</th>
      <th>Hero</th>
      <th>Action</th>
    </tr>
    <?php
    foreach($row as $rows){
      echo "<tr>
                <td>{$rows['first_name']}</td>
                <td>{$rows['last_name']}</td>
                <td>{$rows['date_of_birth']}</td>
                <td>{$rows['alias']}</td>
                <td>{$rows['active']}</td>
                <td>{$rows['hero']}</td>";
      echo "<td><a href='./edit.php?id={$rows['id']}'>edit</a>";
            echo "|";
            echo "<a href='./delete.php?id={$rows['id']}'>delete</a>";
            echo "</td></tr>";
    }
    echo "</table>";
    
//<!-- Step 6: (6 points) Create action links pointing to 'edit.php' and 'delete.php' -->
//<!-- Ensure there was one edit and delete link for each row -->

//<!-- CREATE YOUR TABLE BELOW THIS LINE -->


//<!-- Step 7: (2 points) Include your footer here -->

include('./_footer.php');
?>


<!-- TOTAL POINTS POSSIBLE: 34 -->