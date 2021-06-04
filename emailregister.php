 <?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "rtcampemail";

// Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
 if ($conn->connect_error) {
 	die("Connection failed: " . $conn->connect_error);
 }
 $mail =$_POST['mail'];
 

 $sql = "INSERT INTO email (emailid) VALUES ('$mail')";

 if ($conn->query($sql) === TRUE) {
 	echo "New record created successfully";
 	header("location: subsucess.php");
 } else {
 	echo "Error: " . $sql . "<br>" . $conn->error;
 }

 $conn->close();
 ?> 