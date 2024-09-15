<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
</head>
<body>
<center>
  <h1 class="bg-success text-white">REGISTRATION NOW</h1>

  <form action="" method="Post">
    <input type="text" name="id" placeholder="enter your id"><br><br>
    <input type="text" name="name" placeholder="enter your name"><br><br>
    <input type="text" name="desig" placeholder="enter your designation"><br><br>
    <input type="text" name="age" placeholder="enter your age"><br><br>
    <input type="text" name="sale" placeholder="enter your salary"><br><br>
    <input type="submit" class="btn-primary" name="btninsert" value="Insert">
  </form>
  </center>
  <br><br><br>

  <h1 class = "bg-success text-white text-center">SHOW EMPLOYEES</h1><br>

  <table class ="table table-hover">
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Age</th>
                <th>Designation</th>
                <th>Salary</th>
                <th>Option</th>
                <th>Option</th>

            </tr>
        </thead>

        <tbody>
   

 <?php
  
  $conection = mysqli_connect("Localhost","root","","shahzaib");
  // if($conection==true){
  //   echo "conection sucessfully";
  // }else{
  //   echo "database is not connect";
  // }

   if(isset($_POST['btninsert'])){
    
      $i = $_POST['id'];
      $n = $_POST['name'];
      $d = $_POST['desig'];
      $a = $_POST['age'];
      $s = $_POST['sale'];
  
   $query = "INSERT INTO `emp_tbl` VALUES ($i,'$n','$d',$a,$s)";

   $result = mysqli_query($conection,$query);

  //  if($result==true){
  //   echo "Data has been insert into database";
  //  }else{
  //   echo "Data is not insert into database";
  //  }

  //  echo "<script>
  //             window.location.href='show.php';
  //       </script>"

  }

 ?>


<?php
            
            
            $connection=mysqli_connect("localhost","root","","shahzaib");

            
            $query="SELECT * FROM emp_tbl";

            

            $result=mysqli_query($connection,$query);

            foreach($result as $row){

                    echo "<tr>";
                    echo "<td>$row[id]</td>";
                    echo "<td>$row[name]</td>";
                    echo "<td>$row[age]</td>";
                    echo "<td>$row[designation]</td>";
                    echo "<td>$row[salary]</td>";

                   echo "<td><a href='delete.php?id=$row[id]'>Delete</a></td>";

                    echo "<td>
                 <a href='update.php?id=$row[id]&name=$row[name]
                 &age=$row[age]&desg=$row[designation]&sal=$row[salary]'>
                 UPDATE
                 </a>
                    </td>";
                

                echo "</tr>";

                

            }



//             ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>