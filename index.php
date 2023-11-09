<!DOCTYPE html>
<html>
<head>
	<title> Hackathon </title>
</head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>
<body>
 <ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>


<div id="main">

<?php
$servername = "localhost";
$username = "Bother";
$password = "1234";
$dbname = "mbr_test_database";

error_reporting(E_ALL ^ E_WARNING); 
$email = $_POST['email'];
$psw = $_POST['psw'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
  if ($email != "" && $psw != ""){

        $sql_query = "select count(*) as owner from owner where email ='".$email."' and psw ='".$psw."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['owner'];

        if($count > 0){
			session_start();
			$_SESSION['email'] = $email;
            
     
        }else{
            echo "Invalid email and/or password";
        }

    }
    if(isset($_SESSION)){ 
	echo $_SESSION['email']." Logged in";
	?>
	<?php
		}
include 'connect.php';
?>
<h2> Superpowered VSU chatbot </h2>
<form method = "post" action="">
	
	<label for="fname"><b>Email:</b></</label><br>
	<input type="text" id="email" name="email" placeholder="Johndoe@gmail.com" required><br>
	

	<label for="psw"><b>Password</b></label><br>
	<input type="password" id = "psw" placeholder="Enter Password" name="psw" required> <br>
	
	<input type="submit" value="Login">
</form> 
<br><br>
<a href = "MBR_signup.php">Dont have an account? Sign up here!</a>
</div> 
</body>
</html>
