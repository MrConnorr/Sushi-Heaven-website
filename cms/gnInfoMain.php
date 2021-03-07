<?php include 'db.php'?>


<div class="controls">
<a href="adminMain.php"><img src="../images/back.png" alt="" style="width:50px"></a>
<a href="addNewGnInfo.php" class="btn btn-info">Add New General Info</a>
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
      $query = $dbHandle->insertQuery("DELETE FROM generalinfo WHERE id='$a'");
      break;
  }
}

$gnInfo = $dbHandle->runQuery("SELECT * FROM generalinfo");
if(!empty($gnInfo))
{
  foreach ($gnInfo as $key => $value)
  {
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>General Info Management</title>
  </head>
  <body>
    <div class="table-responsive">
    <table class="table table-bordered">
      <tr>
        <th>ID</th>
        <th>General Info Title</th>
        <th>General Info Description</th>
        <th>General Info Image</th>
        <th>Other Info</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>

      <tr>
        <td><?php echo $gnInfo[$key]["id"]; ?></td>
        <td><?php echo $gnInfo[$key]["title"]; ?></td>
        <td style="white-space: pre-wrap;"><?php echo $gnInfo[$key]["description"]; ?></td>
        <td><img src="../<?php echo $gnInfo[$key]["image"]; ?>" alt="" class="img-fluid"></td>
        <td style="white-space: pre-wrap;"><?php echo $gnInfo[$key]["otherinfo"]; ?></td>
        <td><a href="updateSingleGn.php?id=<?php echo $gnInfo[$key]["id"]; ?>">Update</a></td>
        <td><a href="gnInfoMain.php?action=delete&id=<?php echo $gnInfo[$key]["id"]; ?>" onclick="return confirm('Are you sure you want to delete this general info?')">Delete</a></td>
      </tr>
    </table>
  </div>

    <?php
      }
    }
     ?>
  </body>
</html>
