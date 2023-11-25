<?php
    $name = $_POST = $_POST['name'];
    $email = $_POST = $_POST['email'];
    $password = $_POST = $_POST['password'];

    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "test2";

    //database connection
    $conn = mysqli_connect ($serverName, $serverName, $password, $dbName);
    if ($conn->connect_error){
        die('Connection Failed : '.$conn->coonect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(name,email,password)
        values(?, ?, ?)");
        $stmt->bind_param("sss",$name ,$email ,$password);
        $stmt->execute();
        echo "Registration Successfully";
        $stmt->close();
        $stmt->close();
    }

?>