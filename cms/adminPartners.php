<?php include 'db.php'?>


<div class="controls">
<a href="index.php"><img src="../images/back.png" alt="" style="width:50px"></a>
<a href="addNewPartner.php" class="btn btn-info">Add New Partner</a>
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
      $query = $dbHandle->insertQuery("DELETE FROM partners WHERE id='$a'");
      break;
  }
}

$menu = $dbHandle->runQuery("SELECT * FROM partners");
if(!empty($menu))
{
  foreach ($menu as $key => $value)
  {
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Partner Management</title>
  </head>
  <body>
    <table class="table table-bordered">
      <tr>
        <th>ID</th>
        <th>Partner Image</th>
        <th>Partner Description</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>

      <tr>
        <td><?php echo $menu[$key]["id"]; ?></td>
        <td><img style="display:block;" width="100%" height="100%" src="../<?php echo $menu[$key]["image"]; ?>" alt=""></td>
        <td style="white-space: pre-wrap;"><?php echo $menu[$key]["imageAlt"]; ?></td>
        <td><a href="updateSinglePartner.php?id=<?php echo $menu[$key]["id"]; ?>">Update</a></td>
        <td><a href="adminPartners.php?action=delete&id=<?php echo $menu[$key]["id"]; ?>" onclick="return confirm('Are you sure you want to delete this product?')">Delete</a></td>
      </tr>
    </table>

    <?php
      }
    }
     ?>
  </body>
</html>