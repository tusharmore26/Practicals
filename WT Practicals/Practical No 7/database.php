<?php

$db_hostname ="localhost";
$db_username = "root";
$db_password="root";
$db_name ="practical7";

$conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
if(!$conn){
    echo "the connection is failed ".mysqli_connect_error();
    exit;

}

$fname=$_POST['firstName'];
$lname=$_POST['lastName'];
$email=$_POST['email'];
$pass=$_POST['password'];
$mobileno=$_POST['mobileno'];

$sql="insert into details(firstName ,lastName, email ,password,mobileno) values ('$fname','$lname','$email','$pass','$mobileno')";
// $sql="delete from data where name='$name'";
// $sql="update data set name='$name' where email='$email'";

$result=mysqli_query($conn,$sql);
if(!$result){
    echo " the failed to connect".mysqli_error($conn);
    exit;
}

echo " your regestration  is the successfully";
mysqli_close($conn);

?>