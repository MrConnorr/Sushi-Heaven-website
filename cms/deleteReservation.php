<?php
include 'db.php';

$a = $_GET["id"];
$comment = $dbHandle->getQuery("SELECT * FROM reservations WHERE id= '$a'");
?>

 <a href="adminReservations.php"><img src="../images/back.png" alt="" style="width:50px"></a>

<html>
<head>
<title>Delete Data</title>
</head>
<body>
<div class="container">
<form method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
Name :<br>
<input type="text" name="userName" value="<?php echo $comment['userName']; ?>" readonly>
<br>
Date:<br>
<input type="date" name="userDate" value="<?php echo $comment['userDate']; ?>" readonly>
<br>
Time: <br>
<input type="time" name="userTime" value="<?php echo $comment['userTime']; ?>" readonly>
<br>
Persons:<br>
<input type="number" name="userPersons" value="<?php echo $comment['userPersons']; ?>" readonly>
<br>
Email:<br>
<input type="email" name="userMail" value="<?php echo $comment['userMail']; ?>" readonly>
<br>
Telephone:<br>
<input type="tel" name="userPhone" value="<?php echo $comment['userPhone']; ?>" readonly>
<br>
Notes:<br>
<input type="text" name="userNotes" value="<?php echo $comment['userNotes']; ?>" readonly>
<br>

<input type="submit" name="submit" value="Delete" >
</form>
</div>
<?php
if(isset($_POST['submit'])){

    $query = $dbHandle->insertQuery("DELETE FROM reservations where id='$a'");
    if(!$query){
        echo "Record Deleted with id: $a <br>";
        echo "<a href='adminReservations.php'> Check your updated List </a>";

    }
    else { echo "Record Not Deleted";}
    }
?>
</body>
</html>
