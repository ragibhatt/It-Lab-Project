
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
<?php
include('db.php');
$id=$_POST['id'];
$name=$_POST['name'];
$sec=$_POST['sec'];
$cgpa=$_POST['cgpa'];
$query_insert="insert into cr(id,name,sec,vote,cgpa) values ('$id','$name','$sec',0,'$cgpa');";
$insert_result =mysqli_query($dbh,$query_insert) or die ('error inserting');
mysqli_close($dbh);
echo '<p align=center>THANKYOU FOR REGISTERING </p>';
?>
<p><button onclick="window.location.href='home.html' " class="w3-button w3-black">HOME</button></p>

 <div class="w3-display-bottomleft w3-container">
    <p class="w3-xlarge">Presidency University</p>
    <p class="w3-large">Bangalore</p>
    <p>powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
  </div>
</div>
