<?php
include 'db.php';

$a = $_GET["id"];
$imageSlidertxt = $dbHandle->getQuery("SELECT * FROM welcometxt WHERE id='$a'");
 ?>

 <a href="imgSliderMain.php"><img src="../images/back.png" alt="" style="width:50px"></a>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Update Slider Welcome Text</title>
   </head>
   <body>
     <div class="container">
     <form class="" method="post">
       Slider Title Text: <br>
       <input type="text" name="title" value="<?php echo $imageSlidertxt['slidertitletxt']; ?>" required><br>
       Slider Welcome Description Text: <br>
       <textarea type="text" name="description" rows="10" required><?php echo $imageSlidertxt['sliderwelcometxt']; ?></textarea><br>
       Slider Button Text: <br>
       <input type="text" name="buttonTxt" value="<?php echo $imageSlidertxt['sliderbuttontxt']; ?>" required><br>
       <input type="submit" name="submit" value="Save Data" >
    </form>
    </div>

      <?php

      if(isset($_POST['submit']))
      {
        $wTitle = $_POST['title'];
        $wDescription = $_POST['description'];
        $wButtonTxt = $_POST['buttonTxt'];

        $query = $dbHandle->insertQuery("UPDATE welcometxt set slidertitletxt='$wTitle', sliderwelcometxt='$wDescription', sliderbuttontxt='$wButtonTxt' WHERE id='$a'");

        echo "Image Slider Welcome Text was updated. <br> Please return back to Image Slider Management to see changes";
      }

       ?>
   </body>
 </html>
