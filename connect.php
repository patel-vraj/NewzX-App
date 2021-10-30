<?php
  $username = $_POST['username'];
  $password = $_POST['password'];
//Connect to Database
$conn = new mysqli('localhost' ,'root', '','test');
if($conn->connect_error){
    die('connection failed : ' .$conn->connect_error);

}
else{
    $stmt = $conn->prepare("insert into registation(username, password) values(?,?)");
    $stmt->bind_param("ssssssi" ,$username, $password);
    $stmt->execute();
    echo "registation sucessful";
    $stmt->close();
    $stmt->close();
}
?>
