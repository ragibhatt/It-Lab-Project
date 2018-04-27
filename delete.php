
 <?php
$servername = "localhost";
$username = "root";
$password = "tiger";
$dbname = "fin_vote";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "hi";
// sql to delete a record
$sql = "DELETE FROM cr WHERE name='$user';";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
 if(mysqli_query($conn,$sql))
        header('location:admin.php');
$conn->close();
?> 
