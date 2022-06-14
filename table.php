<?php
  include('connection/conn.php');

  $sql = "SELECT * FROM students";

  $res = mysqli_query($conn, $sql);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
  
    
    <!-- Style -->
    <link rel="stylesheet" href="css/tablestyle.css">

    <title>Table #6</title>
  </head>
  <body>
  

  <div class="content">
    
    <div class="container">
      <h2 class="mb-5">Table #6</h2>
      

      <div class="table-responsive">

        <table class="table table-striped custom-table" >
          <thead>
            <tr>
              
              <th scope="col">Id</th>
              <th scope="col">Name</th>
              <th scope="col">Age</th>
              <th scope="col">City</th>
              <th scope="col">Contact</th>
        
            </tr>
          </thead>
          <tbody>

          <?php

            while($row = mysqli_fetch_assoc($res)){

              ?>

              <tr scope="row">

      
              <td><?php echo $row['id'] ?></td>
              <td><?php echo $row['name'] ?></td>
              <td><?php echo $row['age'] ?></td>
              <td><?php echo $row['city'] ?></td>
              <td><?php echo $row['contact'] ?> </td>
              <td><a href="update.php?id=<?php echo row['id']; ?>"><button type="submit">Edit</button></a></td>
              <td><a href="delete.php?id=<?php echo row['id']; ?>"><button type="submit">Delete</button></a></td>
         </tr>

         <?php } ?>

          
          </tbody>
        </table>
      </div>


    </div>

  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>