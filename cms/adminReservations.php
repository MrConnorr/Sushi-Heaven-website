<?php include 'db.php'?>


<div class="controls">
<a href="index.php"><img src="../images/back.png" alt="" style="width:50px"></a>
</div>


<html>
<head>
<title> Update Data</title>
</head>
<body>
<hr>
<table border="1" cellpadding="5">
<tr>
<th>ID</th><th>Name</th><th>Date</th><th>Time</th><th>Persons</th><th>Email</th><th>Telephone</th><th>Notes</th><th>Edit</th><th>Delete</th>
</tr>
<?php
$comments = $dbHandle->runQuery("SELECT * FROM reservations");
if(!empty($comments))
{
  foreach ($comments as $key => $value)
  {
?>
<tr>
<td><?php echo $comments[$key]["id"]; ?></td>
<td><?php echo $comments[$key]["userName"]; ?></td>
<td><?php echo $comments[$key]["userDate"]; ?></td>
<td><?php echo $comments[$key]["userTime"]; ?></td>
<td><?php echo $comments[$key]["userPersons"]; ?></td>
<td><?php echo $comments[$key]["userMail"]; ?></td>
<td><?php echo $comments[$key]["userPhone"]; ?></td>
<td><?php echo $comments[$key]["userNotes"]; ?></td>
<td><a href="updateSingleReservation.php?id=<?php echo $comments[$key]['id']; ?>">Edit</a></td>
<td><a href="deleteReservation.php?id=<?php echo $comments[$key]['id']; ?>">Delete</a></td>
</tr>

<?php
  }
}
else
{
    echo "no results";
}
?>
</table>
</body>
</html>
