<!DOCTYPE html>
<html >
<head>
    
    <title>User information</title>
</head>
<body>
    <form action="validate_form.php" method="post">

        First name : <input type="text" id="first_name" name="first_name" required><br><br>
        Last name : <input type="text" id="last_name" name="last_name" required><br><br>
        Date of birth : <input type="date" id="dob" name="dob" required><br><br>
        <label>Gender:</label><br>
        <input type="radio" id="male" name="gender" value="male" required>
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female" required>
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other" required>
        <label for="other">Other</label><br><br>
        Phone number : <input type="text" id="phone" name="phone" required><br><br>
        Email : <input type="email" id="email" name="email" required><br><br>
        Password : <input type="password" id="password" name="password" required><br><br>
        Confirm_password :<input type="password" id="confirm_password" name="confirm_password" required><br><br>
        <input type="submit" value="Submit"><br>
    </form>
</body>
</html>
