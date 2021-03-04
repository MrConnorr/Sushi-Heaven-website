<?php include 'db.php'?>


<div class="controls">
<a href="index.php"><img src="../images/back.png" alt="" style="width:50px"></a>
<a href="addNewPost.php" class="btn btn-info">Add New Post</a>
</div>


<script>
    if(typeof window.history.pushState == 'function') {
        window.history.pushState({}, "Hide", '<?php echo $_SERVER['PHP_SELF'];?>');
    }
</script>

<?php

if(!empty($_GET["action"]))
{
  switch($_GET["action"])
  {
    case 'delete':
      $a = $_GET['id'];
      $query = $dbHandle->insertQuery("DELETE FROM maininfoposts WHERE id='$a'");
      break;
  }
}

$post = $dbHandle->runQuery("SELECT * FROM maininfoposts");
if(!empty($post))
{
  foreach ($post as $key => $value)
  {
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Main Management</title>
  </head>
  <body>
    <table class="table table-bordered table-main">
      <tr>
        <th>ID</th>
        <th>Post Name</th>
        <th>Post Description</th>
        <th>Post Image</th>
        <th>Post Image Alt</th>
        <th>Post Image Location</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>

      <tr>
        <td><?php echo $post[$key]["id"]; ?></td>
        <td><?php echo $post[$key]["title"]; ?></td>
        <td style="white-space: pre-wrap;"><?php echo $post[$key]["description"]; ?></td>
        <td><img src="../<?php echo $post[$key]["image"]; ?>" alt="" style="width:300; height:200;"></td>
        <td><?php echo $post[$key]["imageAlt"]; ?></td>
        <td><?php echo $post[$key]["imglocation"]; ?></td>
        <td><a href="updateSinglePost.php?id=<?php echo $post[$key]["id"]; ?>">Update</a></td>
        <td><a href="adminMain.php?action=delete&id=<?php echo $post[$key]["id"]; ?>" onclick="return confirm('Are you sure you want to delete this product?')">Delete</a></td>
      </tr>
    </table>

    <?php
      }
    }
     ?>
  </body>
</html>
