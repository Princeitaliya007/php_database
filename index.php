<?php
    include('connection/conn.php');

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $city = $_POST['city'];
        $contact = $_POST['contact'];

        $sql = "INSERT INTO students(name, age, city, contact) VALUES('$name', '$age', '$city', '$contact')";

        if(mysqli_query($conn, $sql)){
            $data = 1;
        }else{
            $data = 2;
        }
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Student Insert Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="main-block">
      <h1>Student Insert Data Form</h1>

      <?php
            
            if(@$data == 1)
            {
                echo "<p>Data Insert Success.</p>";
            }
            else if(@$data == 2){
              echo "<p>Data Insert Failed!!!</p>";

            }
           
       ?>

      <form method="POST">
        <hr>
        <input type="text" name="name" placeholder="name" />
        <input type="text" name="age"  placeholder="age" />
        <input type="text" name="city"  placeholder="city" />
        <input type="text" name="contact" placeholder="phone" />
        <hr>
        <div class="btn-block">
          <button type="submit" name="submit">Submit</button>
        </div>
        <div class="btn-block">
          <a href="table.php"><button type="button" name="show">Show Data</button></a>
        </div>
      </form>
    </div>
  </body>
</html>