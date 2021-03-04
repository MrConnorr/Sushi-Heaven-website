<?php
include "dbconnect.php";
$dbHandle = new DBController();

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
$uName = $_POST['userName'];
$uDate = $_POST['userDate'];
$uTime = $_POST['userTime'];
$uPersons = $_POST['userPersons'];
$uMail = $_POST['userMail'];
$uPhone = $_POST['userPhone'];
$uNotes = $_POST['userNotes'];
$sql = "INSERT INTO reservations (userName, userDate, userTime, userPersons, userMail, userPhone, userNotes) VALUES('$uName', '$uDate', '$uTime', '$uPersons', '$uMail', '$uPhone', '$uNotes')";

$comment = $dbHandle->insertQuery($sql);
}

header('Location: thanks-reservation.php');
exit;

?>