<?php
 echo "hyy this is harsh php dude";



 $servername= "localhost";
 $username = "root";
 $password = "";
 echo "<br>";


// creating coonection to database


$conn = mysqli_connect($servername,$username,$password);

if(!$conn){
    echo " connection was not successfully conected to the database ";
}
 else{
      echo "connection was successfully";
 }
$sql = "create database dbhery";
 $result =mysqli_query($conn,$sql);
 if($result){
     echo "the db was created successfully";
 }
 else {
    echo "the db was not  created successfully becouse of this error ------>". mysqli_error($conn);
     
 }
//  echo " the result is";
//  echo var_dump($result);
//  echo "<br>";
?>