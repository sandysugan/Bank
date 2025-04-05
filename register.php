<?php
    session_start();

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bankingsystem";
     
    $conn = mysqli_connect($servername, $username, $password, $dbname);

 
    if (!$conn) {
        die("Connection Failed: " . mysqli_connect_error());
    }

    if (isset($_POST['register'])) {
        $AccNo = $_POST["AccountNo"];
        $FullName = $_POST["FullName"];
        $UserID = $_POST["UserID"];
        $UserName = $_POST["UserName"];
        $PhoneNo = $_POST["PhoneNo"];
        $Address = $_POST["Address"]; 
        $UserType = $_POST["UserType"];

       
        $stmt = $conn->prepare("INSERT INTO user_detail (UserID, AccountNo, FullName, Username, PhoneNo, Adddress, UserType) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $UserID, $AccNo, $FullName, $UserName, $PhoneNo, $Address, $UserType);

        if ($stmt->execute()) {
            echo "<h1>Account Created Successfully!!</h1>";
        } else {
            echo "<h1>Error: " . $stmt->error . "</h1>";
        }

        $stmt->close();
    }

    mysqli_close($conn);
?>
