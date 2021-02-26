

<?php
$servername = "localhost:3307";
$username = "root";
$password = "root";
$dbname = "sushiheaven";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM comments";
$result = $conn->query($sql);?>
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
if($result ->num_rows > 0) {
    while($row = $result ->fetch_assoc()){
?>
<tr>
<td><?php echo $row["id"]; ?></td>
<td><?php echo $row["userComment"]; ?></td>
<td><?php echo $row["userName"]; ?></td>
<td><?php echo $row["userEmail"]; ?></td>
<td><a href="updateSingleComment.php?id=<?php echo $row['id']; ?>">Update</a></td>
<td><a href="deleteComment.php?id=<?php echo $row['id']; ?>">Delete</a></td>
</tr>

<?php
}
}
else
{
    echo "no results";
}
$conn->close();
?>
</table>
</body>
</html>