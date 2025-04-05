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

if (isset($_POST['login'])) {
    $User = isset($_POST['Username']) ? mysqli_real_escape_string($conn, $_POST['Username']) : '';
    $pass = isset($_POST['Password']) ? mysqli_real_escape_string($conn, $_POST['Password']) : '';

    if (!empty($User) && !empty($pass)) {
        $stmt = $conn->prepare("SELECT * FROM admin WHERE Username = ? AND Password = ?");
        $stmt->bind_param("ss", $User, $pass);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $_SESSION['Username'] = $User;
            header("Location: open.php"); 
            exit();
        } else {
            echo "<script>alert('Invalid details!');</script>";
        }

        $stmt->close();
    } else {
        echo "<script>alert('Please fill in all fields.');</script>";
    }
}

mysqli_close($conn);
?>
