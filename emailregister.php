 <?php
 $servername = 'bf1adw57uf1skqz6m6dk-mysql.services.clever-cloud.com:3306';
 $username = 'uvfmqmibbki1zaip';
 $password = 'p9JlNuAesTQtixenuEdR';
 $dbname = 'bf1adw57uf1skqz6m6dk';

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