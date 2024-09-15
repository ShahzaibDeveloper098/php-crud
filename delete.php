<?php  
$connection = mysqli_connect("localhost","root","","shahzaib");

$id=$_GET['id'];
echo $id;


$query="DELETE FROM emp_tbl where id=$id";

$result =mysqli_query($connection,$query);

echo "<script>
window.location.href='insert.php';
</script>";

// if($result==true){
//     echo "record has been deleted";
// }
// else
// {
//     echo "record not delete";
// }

?>