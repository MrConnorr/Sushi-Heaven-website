<?php
$servername = "localhost:3307";
$username = "root";
$password = "root";
$dbname = "sushiheaven";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);}
$a = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM comments WHERE id= '$a'");
$row= mysqli_fetch_array($result);
?>

<html>
<head>
<title>Delete Data</title>
</head>
<body>
<form method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
Comment: <br>
<input type="text" name="userComment" size="150" value="<?php echo $row['userComment']; ?> " readonly>
<br>
Last Name :<br>
<input type="text" name="userName" value="<?php echo $row['userName']; ?>" readonly>
<br>
City:<br>
<input type="text" name="userEmail" value="<?php echo $row['userEmail']; ?>" readonly>
<br>

<input type="submit" name="submit" value="Delete" >
</form>
<?php
if(isset($_POST['submit'])){

    $query = mysqli_query($conn,"DELETE FROM comments where id='$a'");
    if($query){
        echo "Record Deleted with id: $a <br>";
        echo "<a href='adminComments.php'> Check your updated List </a>";
        
    }
    else { echo "Record Not Deleted";}
    }
$conn->close();
?>
</body>
</html>