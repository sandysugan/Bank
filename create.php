<!DOCTYPE html>
<html>
<head>
    <title>Create Account</title>
</head>
<body>
    <form method="POST" action="register.php">
        <label>Account Number:</label>
        <input type="text" name="AccountNo" required><br><br>
        
        <label>Full Name:</label>
        <input type="text" name="FullName" required><br><br>
        
        <label>User ID:</label>
        <input type="text" name="UserID" required><br><br>
        
        <label>Username:</label>
        <input type="text" name="UserName" required><br><br>
        
        <label>Phone Number:</label>
        <input type="text" name="PhoneNo" required><br><br>
        
        <label>Address:</label>
        <input type="text" name="Address" required><br><br>  
        
        <label>User Type:</label>
        <input type="text" name="UserType" required><br><br>
        
        <button type="submit" name="register">Create Account</button>
    </form>
</body>
</html>
