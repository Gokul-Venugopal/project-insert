
<!DOCTYPE html>
<html>
 <div class="container" >
	<head > 
		<title>Appointment </title>
		<link rel="stylesheet" href="bootstrap.min.css">
    </head>
	<h1 style="color: darkred;">Online Appointment Booking</h1>	
	<br>
    <marquee behavior="scroll" direction="right">Open from 9am To 6pm Monday To Friday</marquee>


	<a href="https://projectinsert.herokuapp.com/">
    <button>Home</button>
    </a>
    
	<a href="https://projectvieww.herokuapp.com/">
    <button>Retrieve</button>
    </a>

	<a href="https://projectvieww.herokuapp.com/">
    <button>Update</button>
    </a>
	<a href="https://projectdelete.herokuapp.com/">
    <button>Delete</button>
    </a>

   <br><br>
  <body >
     <style>
   body {
            background-image: url('https://as1.ftcdn.net/v2/jpg/04/46/17/50/1000_F_446175004_65bFJcZd4UDzWWIda6Fz2maMrZkOO4NL.jpg');
			position: center;
        }
     </style>
	<form method="post" action="process.php" >
	 
		<b>First name:</b> <br>
		<input type="text" name="firstname" required>
		<br><br>
		<b>Last name:</b><br>
		<input type="text" name="lastname" required>
		<br><br>
		<b>Age:</b><br>
		<input type="text" name="Age" required>
		<br><br>
		<b>Adhaar Number:</b><br>
		<input type="number" name="Adhaar_Number"  required>
		<br><br>
		<b>Previous Health Condition:</b><br>
		<input type="text" name="Previous_Health_Condition" required>
		<br><br>
		<b>Present Health Condition:</b><br>
		<input type="text" name="Present_Health_Condition" required>
		<br><br>
		<b>Phonenumber</b><br>
		<input type="number" name="phonenumber" required>
		<br><br>
		<b>Doctor Specialization:</b><br>
		<input type="text" name="specs" required>
		<br><br>

		<b>Date of Appointment:</b><br>
		<input type="Date" name="Date_of_Appointment" required>
		<br><br>
		<b>Time Slot:</b><br>
		<input type="time" name="Time_Slot" required>
		<br><br>

		<input type="submit" name="save" value="Book Appointment">
	</div>
	</form>
  </body>
</html>
