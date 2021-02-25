<?php



$servername= "localhost";
$username = "root";
$password = "";
$database = "dbhery";
$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("sorry we failed to cinnect:".mysqli_connect_error());
}
 else{
      echo "connection was successfully";
 }
 $name = "harshuli";
 $age = "26";
$sql =  "INSERT INTO `phpphpmytrip` (`name`, `age`) VALUES ('$name', '$age')";
$result =mysqli_query($conn,$sql);

 if($result){
    echo "the record has been inserted successfully";
}
else {
   echo "the record was not  inserted successfully becouse of this error ------>". mysqli_error($conn);
    
}
?>