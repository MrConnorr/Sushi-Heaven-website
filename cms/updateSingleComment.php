<?php
include 'db.php';

$a = $_GET["id"];
$comment = $dbHandle->getQuery("SELECT * FROM comments WHERE id='$a'");
?>

 <a href="adminComments.php"><img src="../images/back.png" alt="" style="width:50px"></a>

<html>
<head>
<title>Update Data</title>
</head>
<body>
<form method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
Comment: <br>
<input type="text" name="userComment" size="150" value="<?php echo $comment['userComment']; ?>" required>
<br>
User Name :<br>
<input type="text" name="userName" value="<?php echo $comment['userName']; ?>" required>
<br>
User Email:<br>
<input type="email" name="userEmail" value="<?php echo $comment['userEmail']; ?>" readonly>
<br>

<input type="submit" name="submit" value="Submit" >
</form>
<?php
if(isset($_POST['submit'])){

    $uComment = $_POST['userComment'];
    $uName = $_POST['userName'];
    $query = $dbHandle->insertQuery("UPDATE comments set userComment='$uComment', userName='$uName' where id='$a'");

    if(!$query){
        echo "Record Modified Successfully <br>";
        echo "<a href='adminComments.php'> Check your updated List </a>";

    }
    else { echo "Record Not modified";}
    }
?>
</body>
</html>
