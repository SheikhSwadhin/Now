<?php
   $username = $_POST['username'];
   $password = $_POST['password'];
   
   $conn = new mysqli('sql213.infinityfree.com', 'if0_36448863', 'ovZoS98dHyYZ', 'if0_36448863_test');
   
   if($conn->connect_error){
       die('connection failed: ' . $conn->connect_error);
   } else {
       $stmt = $conn->prepare("INSERT INTO Registration (username, password) VALUES (?, ?)");
       $stmt->bind_param("ss", $username, $password);
       $stmt->execute();
   
       echo "Registration Successful...!";
   
       $stmt->close();
       $conn->close();
   }
?>