<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  include('./_connect.php');
  // Step 2: (8 points) Retrieve the 'supers' row from your database
  // Ensure you use the condition to get only the one specific row
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
  $result = mysqli_query($conn, "SELECT * FROM project01 WHERE id = {$_GET['id']}");
  $row = mysqli_fetch_assoc($result);
  ?>

<!-- Step 3: (2 points) //Include your header here -->
 <?php include('./_header.php'); ?>
//<!-- Step 4: (1 points) Create a link back to home.php -->
//<!-- CREATE YOUR LINK BELOW THIS LINE -->
  <a href='./new.php'>Home</a>
<!-- Step 5: (15 points) Create a form that has a field// for the following columns -->
<!-- first_name, last_name, date_of_birth,  alias, active -->
<!-- Ensure you dont forget the name attribute //for each field -->
<form action="./update.php" method="post">
    <div>
    <input name= "id" type="hidden" value = "<?= $row['id'] ?>">
    </div>
    <div>
    <label>First Name:</label>
    <input name="first_name" value= "<?php echo $row['first_name'] ?>">
    </div>
    <div>
    <label>Last Name:</label>
    <input name="last_name" value = "<?php echo $row['last_name'] ?>">
    </div>
    <div>
    <label>Date Of Birth</label>
    <input name="date_of_birth" type="date" value = "<?php echo $row['date_of_birth'] ?>">
    </div>
    <div>
    <label>Alias:</label>
    <input name="alias" value = "<?php echo $row['alias'] ?>">
    </div>
    <div>
    <label>Active</label>
    <input name="active" value = "<?php echo $row['active'] ?>">
    </div>
    <button type="submit">Update</button>
    </form>

<!-- Step 6: (4 points) Add the action and method attributes -->
<!-- Ensure you  the correct HTTP method and point the action at the correct processing page -->

<!-- Step 7: (10 points) Prepopulate the form with the values from the retrieved row -->
<!-- CREATE YOUR FORM BELOW THIS LINE -->


<!-- Step 8: (2 points) //Include your footer here -->

  <?php include('./_footer.php'); ?>

<!-- TOTAL POINTS POSSIBLE: 44 -->
