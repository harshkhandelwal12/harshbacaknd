<?php
 echo "hyy this is harsh php dude";



 $servername= "localhost";
 $username = "root";
 $password = "";
 $database = "dbhery";
 echo "<br>";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("sorry we failed to cinnect:".mysqli_connect_error());
}
 else{
      echo "connection was successfully";
 }
 $sql = "CREATE TABLE `phpphpmytrip` ( `sno` INT(30) NOT NULL AUTO_INCREMENT , `name` VARCHAR(20)
  NOT NULL , `age` INT(4) NOT NULL , PRIMARY KEY (`sno`))";
$result =mysqli_query($conn, $sql);
if($result){
    echo "the table was created successfully";
}
else {
   echo "the table was not  created successfully becouse of this error ------>". mysqli_error($conn);
    
}
?>
