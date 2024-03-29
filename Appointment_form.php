<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Appointment form</title>
</head>
<body>
<form method='post' action='../Controller/appointmentform_check.php'>

<legend>
       <h1> Appointment form</h1>
</lenged>
<h2> Client Information </h2>
   Full Name : <input type="text" name="name" id=""><br>
    Email :<input type="email" name="email" id=""><br>
   Phone Number: <input type="text" name="phn_no" id=""><br>
   <h2> Appointment Details</h2>
   Date : <input type="date" name="date" id=""><br>
   Time : <input type="time" name="time" id=""><br>
   Duration : <input type="text" name="duration" id=""><br>
   Full Name : <input type="text" name="name" id=""><br>
  
<h2> Property information </h2>
Property address : <input type="text" name="pro_add" id=""><br>
MLS Number : <input type="text" name="mls_no" id=""><br>

<h2> Agent Information </h2>
Name : <input type="text" name="a_name" id=""><br>
Email : <input type="text" name="a_email" id=""><br>
Phone Number : <input type="text" name="a_phn" id=""><br>

<input type = "submit" name="submit">




    </form>
</body>
</html>