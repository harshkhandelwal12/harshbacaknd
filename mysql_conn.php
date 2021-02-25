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
  echo "connection was successfully"
?>