<?php include 'db.php'?>


<div class="controls">
<a href="adminMain.php"><img src="../images/back.png" alt="" style="width:50px"></a>
<a href="addNewSliderImage.php" class="btn btn-info">Add New Image To Slider</a>
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
      $query = $dbHandle->insertQuery("DELETE FROM imgslider WHERE id='$a'");
      break;
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Image Slider Management</title>
  </head>
  <body>

    <h1 style="text-align:center; margin-bottom:50px;">Slider Welcome Text</h1>

    <?php
     $imageSlidertxt = $dbHandle->runQuery("SELECT * FROM welcometxt");
      if(!empty($imageSlidertxt))
      {
        foreach ($imageSlidertxt as $key => $value)
        {
     ?>
<div class="table-responsive">
   <table class="table table-bordered">
     <tr>
       <th>ID</th>
       <th>Slider Title Text</th>
       <th>Slider Welcome Description Text</th>
       <th>Slider Button Text</th>
       <th>Update</th>
     </tr>

     <tr>
       <td><?php echo $imageSlidertxt[$key]["id"]; ?></td>
       <td><?php echo $imageSlidertxt[$key]["slidertitletxt"]; ?></td>
       <td><?php echo $imageSlidertxt[$key]["sliderwelcometxt"]; ?></td>
       <td><?php echo $imageSlidertxt[$key]["sliderbuttontxt"]; ?></td>
       <td><a href="updateSliderWelcomeTxt.php?id=<?php echo $imageSlidertxt[$key]["id"]; ?>">Update</a></td>
     </tr>
   </table>
 </div>

   <?php
     }
   }
    ?>

    <h1 style="text-align:center; margin:50px;">Slider Images</h1>

    <?php
     $imageSlider = $dbHandle->runQuery("SELECT * FROM imgslider");
    if(!empty($imageSlider))
    {
      foreach ($imageSlider as $key => $value)
      {
       ?>
       <div class="table-responsive">
    <table class="table table-bordered">
      <tr>
        <th>ID</th>
        <th>Slider Image</th>
        <th>Slider Image Alt</th>
        <th>Slider Image Number</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>

      <tr>
        <td><?php echo $imageSlider[$key]["id"]; ?></td>
        <td><img src="../<?php echo $imageSlider[$key]["image"]; ?>" class="img-fluid"></td>
        <td><?php echo $imageSlider[$key]["imagealt"]; ?></td>
        <td><?php echo $imageSlider[$key]["imgslidernum"]; ?></td>
        <td><a href="updateSingleImageSlider.php?id=<?php echo $imageSlider[$key]["id"]; ?>">Update</a></td>

        <?php
        if ($imageSlider[$key]["imgslidernum"] != 0)
        {
         ?>
        <td><a href="imgSliderMain.php?action=delete&id=<?php echo $imageSlider[$key]["id"]; ?>" onclick="return confirm('Are you sure you want to delete this image?')">Delete</a></td>
      <?php
    } else
    {
      echo "<td>You cannot delete this image, only update</td>";
    }
       ?>
      </tr>
    </table>
  </div>
    <?php
      }
    }
     ?>
  </body>
</html>
