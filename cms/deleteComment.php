<?php
include 'db.php';

$a = $_GET["id"];
$comment = $dbHandle->getQuery("SELECT * FROM comments WHERE id= '$a'");
?>

 <a href="adminComments.php"><img src="../images/back.png" alt="" style="width:50px"></a>

<html>
<head>
<title>Delete Data</title>
</head>
<body>
<form method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
Comment: <br>
<input type="text" name="userComment" size="150" value="<?php echo $comment['userComment']; ?> " readonly>
<br>
User Name :<br>
<input type="text" name="userName" value="<?php echo $comment['userName']; ?>" readonly>
<br>
User Email:<br>
<input type="text" name="userEmail" value="<?php echo $comment['userEmail']; ?>" readonly>
<br>

<input type="submit" name="submit" value="Delete" >
</form>
<?php
if(isset($_POST['submit'])){

    $query = $dbHandle->insertQuery("DELETE FROM comments where id='$a'");
    if(!$query){
        echo "Record Deleted with id: $a <br>";
        echo "<a href='adminComments.php'> Check your updated List </a>";

    }
    else { echo "Record Not Deleted";}
    }
?>
</body>
</html>
