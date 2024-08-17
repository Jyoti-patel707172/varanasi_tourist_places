<?php
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $number = $_POST['number'];

  //Database

  $conn = new msqli('localhost','root','','test');
  if($conn->connect_error){
  	die('connection Failed :'.$conn->connect_error);
  }
  else{
        $stmt = $conn->prepare("insert into richa(firstName, lastName, gender, email, password, number) values(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssi",$firstName, $lastName, $gender, $email, $password, $number);
        $stmt->execute();
        echo"registration Successfully...";
        $stmt->close();
        $conn->close();
  }
?>