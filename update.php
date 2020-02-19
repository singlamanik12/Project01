<?php
  
  include('./_connect.php');

  


 $sql = "UPDATE project01 SET 
         first_name = '{$_POST['first_name']}',
         last_name = '{$_POST['last_name']}',
         date_of_birth = '{$_POST['date_of_birth']}',
         alias = '{$_POST['alias']}',
         active = '{$_POST['active']}'
         WHERE id = {$_POST['id']}";
 $res = mysqli_query($conn, $sql);

 if($res){
     echo "The row was updated successfully";
 }
 else{
     echo "There was an error updating the row beacause: ". mysqli_error($conn);
 }


  // TOTAL POINTS POSSIBLE: 38
?>