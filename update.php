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

<?php 

echo "<h1 class='bg-success text-white text-center'>update record</h1>";

$eid= $_GET['id'];
$ename= $_GET['name'];
$eage= $_GET['age'];
$edesig= $_GET['desg'];
$esal= $_GET['sal'];    

?>

<center>
    <form action="" method="Post">
    <input type="text" readonly name="txtid" value="<?php echo $eid ?>" >
<br><br>
<input type="text" name="txtname" value="<?php echo $ename ?>"  >
<br><br>
<input type="text" name="txtdesignation" value="<?php echo $edesig ?>" >
<br><br>
<input type="text" name="txtage"  value="<?php echo $eage ?>">
<br><br>
<input type="text" name="txtsalary" value="<?php echo $esal ?>">

<br><br>
<input type="submit" name="updatebtn" class="btn-primary" value="UPDATE"  id="">
    </form>
</center>

<?php 

$connection=mysqli_connect("localhost","root","","shahzaib");

if(isset($_POST['updatebtn']))
{
  $myid= $_POST['txtid'];
  $myname= $_POST['txtname'];
  $mydesg= $_POST['txtdesignation'];
  $myage= $_POST['txtage'];
  $mysal= $_POST['txtsalary'];


  //update query


  $query="UPDATE `emp_tbl` SET name='$myname',designation='$mydesg',
  age=$myage,salary=$mysal WHERE id=$myid";

   //query execute

  $result= mysqli_query($connection,$query);

  if($result==true){
    echo "<script>
          window.location.href='insert.php';
          </script>";
  }


}


?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>