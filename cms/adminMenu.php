<?php include 'db.php'?>


<div class="controls">
<a href="index.php"><img src="../images/back.png" alt="" style="width:50px"></a>
<a href="addNewProduct.php" class="btn btn-info">Add New Product</a>
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
      $query = $dbHandle->insertQuery("DELETE FROM menu WHERE id='$a'");
      break;
  }
}

$menu = $dbHandle->runQuery("SELECT * FROM menu");
if(!empty($menu))
{
  foreach ($menu as $key => $value)
  {
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Menu Management</title>
  </head>
  <body>
    <div class="table-responsive">
    <table class="table table-bordered">
      <tr>
        <th>ID</th>
        <th>Product Code</th>
        <th>Product Name</th>
        <th>Product Description</th>
        <th>Product Price</th>
        <th>Product Image</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>

      <tr>
        <td><?php echo $menu[$key]["id"]; ?></td>
        <td><?php echo $menu[$key]["code"]; ?></td>
        <td><?php echo $menu[$key]["name"]; ?></td>
        <td style="white-space: pre-wrap;"><?php echo $menu[$key]["description"]; ?></td>
        <td><?php echo $menu[$key]["price"]. "€"; ?></td>
        <td><img src="../<?php echo $menu[$key]["image"]; ?>" alt="" class="img-fluid"></td>
        <td><a href="updateSingleMenu.php?id=<?php echo $menu[$key]["id"]; ?>">Update</a></td>
        <td><a href="adminMenu.php?action=delete&id=<?php echo $menu[$key]["id"]; ?>" onclick="return confirm('Are you sure you want to delete this product?')">Delete</a></td>
      </tr>
    </table>
  </div>

    <?php
      }
    }
     ?>
  </body>
</html>
