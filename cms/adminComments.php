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
<th>ID</th><th>Comment</th><th>Name</th><th>Email</th><th>Edit</th><th>Delete</th>
</tr>
<?php
$comments = $dbHandle->runQuery("SELECT * FROM comments");
if(!empty($comments))
{
  foreach ($comments as $key => $value)
  {
?>
<tr>
<td><?php echo $comments[$key]["id"]; ?></td>
<td><?php echo $comments[$key]["userComment"]; ?></td>
<td><?php echo $comments[$key]["userName"]; ?></td>
<td><?php echo $comments[$key]["userEmail"]; ?></td>
<td><a href="updateSingleComment.php?id=<?php echo $comments[$key]['id']; ?>">Update</a></td>
<td><a href="deleteComment.php?id=<?php echo $comments[$key]['id']; ?>">Delete</a></td>
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
