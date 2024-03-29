<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Sign_Up</title>
</head>
<body>
    <form align="center" method='post' action='../controller/Signupcheck.php'>
    <fieldset>
    <legend>
       <h1> Signup Here</h1>
    </legend>
   Name : <input type="text" name="name" id=""><br> <br>
    Email :<input type="email" name="email" id=""><br><br>
   Gender: <input type="text" name="gender" id=""><br><br>
   DOB : <input type="date" name="DOB" id=""><br><br>
    Password :<input type="password" name="password" id=""><br><br>
   Re Password : <input type="password" name="re_password" id=""><br><br>
   User-type : <input type="text" name="user_type" id=""><br><br>
   <input type="submit" value="Signup"name="submit"><br><br>

    <a href="./signin.php"> Sign-in Here </a><br><br>

    <a href="./signin_cookie.php"> Sign-in with cookie </a><br><br>
</fieldset>

    </form>
</body>
</html>