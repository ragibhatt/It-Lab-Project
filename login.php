<!doctype html>
<!DOCTYPE html>
<html>
<title>VOTING</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h5 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
    background-color: lightblue;
    min-height: 100%;
    background-position: center;
    background-size: cover;
}
</style>

<body>

<div class="bgimg w3-display-container w3-text-black">
  <div class="w3-display-middle w3-jumbo">
    <p>VOTING SYSTEM</p>
  </div>
<form class="form"method="post">
<label>ID:</label><input type="text" name="user" required><br/>
<label>Password:</label><input type="password" name="pass" required><br/>
<input type="submit" value="Login" name="submit" id="login-button"><br/>
<!--New user Register Link -->
</form>
</div>
<p><button onclick="window.location.href='home.html' " class="w3-button w3-black">HOME</button></p>
</div>
<?php
if(isset($_POST["submit"])){
 if(!empty($_POST['user']) && !empty($_POST['pass'])){
 $user = $_POST['user'];
 $pass = $_POST['pass'];
 //DB Connection
 $conn = new mysqli('localhost', 'root', 'tiger') or die(mysqli_error());
 //Select DB From database
 $db = mysqli_select_db($conn, 'fin_vote') or die("databse error");
 //Selecting database
 $query = mysqli_query($conn, "SELECT * FROM info WHERE user='".$user."' AND pass='".$pass."'");


 $numrows = mysqli_num_rows($query);
 if($numrows !=0)
 {
 while($row = mysqli_fetch_assoc($query))
 {
 $dbusername=$row['user'];
 $dbpassword=$row['pass'];
 $sec=$row['sec'];
 $vote=$row['voted'];
 }
 if($user == $dbusername && $pass == $dbpassword)
 {
 session_start();
 $_SESSION['sec']="$sec";
$_SESSION['user']="$user";
$_SESSION['vote']="$vote";
 //Redirect Browser
 header("Location:vote.php");
 }
 }
 else
 {
 echo "Invalid Username or Password! or";
 }
 }
 else
 {
 echo "Required All fields!";
 }

$admin="admin";
$adpass="admin";

if($user == $admin && $pass == $adpass)
 {
 session_start();
$_SESSION['user']="$user";
 //Redirect Browser
 header("Location:admin.php");
 }
}
?>


  

    <script  src="js/index.js"></script>


</body>
</html>






