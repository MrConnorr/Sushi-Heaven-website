<?php
include 'db.php';

$a = $_GET["id"];
$comment = $dbHandle->getQuery("SELECT * FROM reservations WHERE id='$a'");
?>

 <a href="adminReservations.php"><img src="../images/back.png" alt="" style="width:50px"></a>

<html>
<head>
<title>Update Data</title>
</head>
<body>
  <div class="container">
<form method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
Name :<br>
<input type="text" name="userName" value="<?php echo $comment['userName']; ?>" required>
<br>
Date:<br>
<input type="date" name="userDate" value="<?php echo $comment['userDate']; ?>" required>
<br>
Time: <br>
<input type="time" name="userTime" value="<?php echo $comment['userTime']; ?>" required>
<br>
Persons:<br>
<input type="number" name="userPersons" value="<?php echo $comment['userPersons']; ?>" required>
<br>
Email:<br>
<input type="email" name="userMail" value="<?php echo $comment['userMail']; ?>" required>
<br>
Telephone:<br>
<input type="tel" name="userPhone" value="<?php echo $comment['userPhone']; ?>" required>
<br>
Notes:<br>
<input type="text" name="userNotes" value="<?php echo $comment['userNotes']; ?>">
<br>

<input type="submit" name="submit" value="Submit" >
</form>
</div>
<?php
if(isset($_POST['submit'])){

    $uName = $_POST['userName'];
    $uDate = $_POST['userDate'];
    $uTime = $_POST['userTime'];
    $uPersons = $_POST['userPersons'];
    $uMail = $_POST['userMail'];
    $uPhone = $_POST['userPhone'];
    $uNotes = $_POST['userNotes'];

    $query = $dbHandle->insertQuery("UPDATE reservations set userName='$uName', userDate='$uDate', userTime='$uTime', userPersons='$uPersons', userMail='$uMail', userPhone='$uPhone', userNotes='$uNotes' where id='$a'");

    if(!$query){
        echo "Record Modified Successfully <br>";
        echo "<a href='adminReservations.php'> Check your updated List </a>";

    }
    else { echo "Record Not modified";}
    }
?>
</body>
</html>
