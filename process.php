
<h1 style="color: darkred;">Online Appointment Booking</h1>
 <h2 style="color: darkred;">Record inserted successfully</h2>
<br><br>

<a href="http://localhost/project/index.php">
    <button>Home</button>
    </a>
    
	<a href="http://localhost/project/retrieve.php">
    <button>Retrieve</button>
    </a>

	<a href="http://localhost/project/update.php">
    <button>Update</button>
    </a>
	<a href="http://localhost/project/delete.php">
    <button>Delete</button>
</a>

<style>
   body {
            background-image: url('https://www.maketecheasier.com/assets/uploads/2016/09/settings-app-not-working-featured.jpg');
			position: center;
        }
     </style>

<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $firstname = $_POST['firstname'];
	 $lastname = $_POST['lastname'];
	 $Age = $_POST['Age'];
	 $Adhaar_Number = $_POST['Adhaar_Number'];
	 $Previous_Health_Condition = $_POST['Previous_Health_Condition'];
	 $Present_Health_Condition = $_POST['Present_Health_Condition'];
	 $phonenumber = $_POST['phonenumber'];
	 $specs = $_POST['specs'];
	 $Date_of_Appointment = $_POST['Date_of_Appointment'];
	 $Time_Slot = $_POST['Time_Slot'];
	 $sql = "INSERT INTO record (firstname,lastname,Age,Adhaar_Number,Previous_Health_Condition,Present_Health_Condition,phonenumber,specs,Date_of_Appointment,Time_Slot)
	 VALUES ('$firstname','$lastname','$Age','$Adhaar_Number','$Previous_Health_Condition','$Present_Health_Condition','$phonenumber','$specs','$Date_of_Appointment','$Time_Slot')";
	 if (mysqli_query($conn, $sql)) {
		echo '<h1><b>Click on Retrieve to See inserted data</b></h2>!</a>';
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
