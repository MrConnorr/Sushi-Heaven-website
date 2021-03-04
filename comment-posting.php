 <?php
include "dbconnect.php";
$dbHandle = new DBController();

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
$uName = $_POST['userName'];
$uComment = $_POST['userComment'];
$uEmail = $_POST['userEmail'];
$sql = "INSERT INTO comments (userName, userComment, userEmail) VALUES('$uName', '$uComment', '$uEmail')";

$comment = $dbHandle->insertQuery($sql);
}

header('Location: thanks-comment.php');
exit;

?>