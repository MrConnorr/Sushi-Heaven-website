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
<title>Update Data</title>
</head>
<body>
<form method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
Comment: <br>
<input type="text" name="userComment" size="150" value="<?php echo $row['userComment']; ?> ">
<br>
Last Name :<br>
<input type="text" name="userName" value="<?php echo $row['userName']; ?>">
<br>
City:<br>
<input type="text" name="userEmail" value="<?php echo $row['userEmail']; ?>">
<br>

<input type="submit" name="submit" value="Submit" >
</form>
<?php
if(isset($_POST['submit'])){

    $uComment = $_POST['userComment'];
    $uName = $_POST['userName'];
    $uEmail = $_POST['userEmail'];
    $query = mysqli_query($conn,"UPDATE comments set userComment='$uComment', userName='$uName', userEmail='$uEmail'
       where id='$a'");
    if($query){
        echo "Record Modified Successfully <br>";
        echo "<a href='adminComments.php'> Check your updated List </a>";
        
    }
    else { echo "Record Not modified";}
    }
$conn->close();
?>
</body>
</html>
