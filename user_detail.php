<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="viewuser.css">
</head>
<body>
    <h1>Account Holders Details</h1> 
    <div class="View">    
    <table>
        <tr>
            <th>UserID</th>
            <th>AccountNo</th>
            <th>FullName</th>
            <th>Username</th>
            <th>PhoneNo</th>
            <th>Adddress</th>
            <th>UserType</th>
        </tr>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bankingsystem";

        $conn = mysqli_connect("$servername","$username","$password","$dbname");

        if(!$conn){
            echo "Connection Failed";
        }

        $query = "select UserID ,AccountNo, FullName, Username, PhoneNo, Adddress,UserType from user_detail";
        $final = mysqli_query($conn,$query);

        if($final){
            while($row = mysqli_fetch_row($final)){
                echo "<tr>";
                for($i=0; $i<7; $i++){
                    echo "<td>".($row[$i])."</td>";
                }
                echo "</tr>";
            }
        }
    ?>
    </table>
    </div>
</body>
</html>