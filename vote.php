<?php
session_start();
?>
<html>
<head>
      <link rel="stylesheet" href="css/style.css">

</head>
<body>
<div id="poll">
<div class="wrapper">
	<div class="container">
<h3>CR Selection</h3>

<form method="post">
<?php
$conn = new mysqli('localhost', 'root', 'tiger') or die(mysqli_error());
 //Select DB From database
 $db = mysqli_select_db($conn, 'fin_vote') or die("databse error");
 //Selecting database

 $query = mysqli_query($conn, "SELECT * FROM cr WHERE sec='".$_SESSION["sec"]."' ");
$voted="1";
if ($_SESSION['vote'] == "$voted")
{
echo"voted";
echo "<a href='logout.php'>logout</a>";
}
else
{	
while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
{	
	echo '<input type="radio" name="vote" value="'.$row['name'].'" id="r1" >' .$row['name'].'</input> <br />';


}


?>
<input type="submit" value="vote" name="submit"><br/>
<?php
}
?>

</form></div>
	
	
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>
<?php

if(isset($_POST["submit"])){
$vote=$_POST['vote'];
$query = mysqli_query($conn, "UPDATE cr 
  SET vote = vote + 1 
  WHERE name = '$vote'");
$query = mysqli_query($conn, "UPDATE info 
  SET voted = voted+1 
  WHERE user = '".$_SESSION["user"]."'");
echo"voted";
unset($_SESSION['user']);
 unset($_SESSION['pass']);
  session_destroy();
 header('Location: login.php');
exit();
}

?>
<br />

</div>
<p><button onclick="window.location.href='home.html' " class="w3-button w3-black">HOME</button></p>


</body>
</html> 
