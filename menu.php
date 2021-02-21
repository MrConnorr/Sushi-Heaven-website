 <?php
  include 'header.php';

  if(!empty($_GET["action"]))
  {
    switch($_GET["action"])
    {
    	case "add":
    		if(!empty($_POST["quantity"]))
        {
    			$productByCode = $dbHandle->runQuery("SELECT * FROM menu WHERE code='" . $_GET["code"] . "'");
    			$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"]));

    			if(!empty($_SESSION["cart_item"]))
          {
    				if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"])))
            {
    					foreach($_SESSION["cart_item"] as $k => $v)
              {
    							if($productByCode[0]["code"] == $k)
                  {
    								if(empty($_SESSION["cart_item"][$k]["quantity"]))
                    {
    									$_SESSION["cart_item"][$k]["quantity"] = 0;
    								}
    								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
    							}
    					}
    				} else
            {
    					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
    				}
    			} else
          {
    				$_SESSION["cart_item"] = $itemArray;
    			}
    		}
    	break;
    	case "remove":
    		if(!empty($_SESSION["cart_item"])) {
    			foreach($_SESSION["cart_item"] as $k => $v)
          {
    					if($_GET["code"] == $k)
    						unset($_SESSION["cart_item"][$k]);
    					if(empty($_SESSION["cart_item"]))
    						unset($_SESSION["cart_item"]);
    			}
    		}
    	break;
      case 'update':
      if(!empty($_POST["quantity"]))
      {
        $productByCode = $dbHandle->runQuery("SELECT * FROM menu WHERE code='" . $_GET["code"] . "'");
        $itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"]));

        if(!empty($_SESSION["cart_item"]))
        {
          if(array_keys($_SESSION["cart_item"]))
          {
            foreach($_SESSION["cart_item"] as $k => $v)
            {
                if($productByCode[0]["code"] == $k)
                {
                  if(empty($_SESSION["cart_item"][$k]["quantity"]))
                  {
                    $_SESSION["cart_item"][$k]["quantity"] = 0;
                  }
                  $_SESSION["cart_item"][$k]["quantity"] = $_POST["quantity"];
                }
            }
          } else
          {
            $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
          }
        } else
        {
          $_SESSION["cart_item"] = $itemArray;
        }
      }
        break;
    	case "empty":
    		unset($_SESSION["cart_item"]);
    	break;
  }
}
  ?>

  <script>
      if(typeof window.history.pushState == 'function') {
          window.history.pushState({}, "Hide", '<?php echo $_SERVER['PHP_SELF'];?>');
      }
  </script>

<link rel="stylesheet" href="css/menu.css">

        <div class="container container-main">
            <div class="row top-buffer">
                <div class="col-md-3">
                    <img src="images/ramsey.jfif" alt="Gordon Ramsey" class="ramsey">
                </div>
                <div class="col-md-9">
                    <p class="quote">
                        “The extension of the japanese soul is unbelievable in this menu. I wouldn’t hesitate to exchange all my Michelin stars and the left kidney for a chance to experience these delicacies again.”
                    </p>
                </div>
            </div>
            <div class="container sushi-img-over-text">
                <img src="images/sushi-rolls.jpg" alt="Sushi" class="sushi-img">
                <h1 class="sushi-text">
                    TOP-QUALITY STRAIGHT FROM THE BALTIC SEA SUSHI IN THE TOWN OF HäMEENLINNA
                </h1>
            </div>

            <div class="row top-buffer">
                <div class="col-lg-6 border-right">
                  <?php
                    $productArray = $dbHandle->runQuery("SELECT * FROM menu ORDER BY id ASC");
                    if(!empty($productArray))
                    {
                      foreach ($productArray as $key => $value)
                      {
                  ?>
                    <div class="row menu">
                        <div class="col-sm-6 col-img">
                            <img src="<?php echo $productArray[$key]["image"]; ?>" alt="<?php echo $productArray[$key]["name"]; ?>" class="menu-img">
                        </div>
                        <div class="col-sm-6 menu-text">
                            <p><?php echo $productArray[$key]["name"] ?><br>
                            <?php echo $productArray[$key]["description"] ?> <br>
                            <?php echo $productArray[$key]["price"]. "€" ?>
                          </p>
                        </div>
                        <form  class="form" action="menu.php?action=add&code=<?php echo $productArray[$key]['code']; ?>" method="post">
                        <input type="hidden" name="code" value="<?php echo $productArray[$key]['code'] ?>">
                        <input type="number" name="quantity" value="1" min="1" class="productQuantity" />
                        <input type="submit" value="Add To Cart" class="btnAdd btn-dark" />
                      </form>
                    </div>
                    <?php
                      }
                    }
                    ?>
                </div>

                <div class="col-lg-6 border-left">
                    <div class="row">
                        <p class="prices-text justify-content-center">
                            We are the proud bearers of the millenial sushi tradition. For us, the mission is to provide the authentic and quality experience of Japan to everyone. For that reason, we keep the prices same for each of the sushi sets.
                        <br><br>
                            And of course, you are most welcome to experience our fresh hand-made all-you-can-eat buffet.
                            <br><br>
                            Prices: <br>
                            Set.................................................18.00EUR
                            <br>
                            Buffet.......................................29.00EUR
                        </p>
                    </div>
                    <a href="#" class="btn btn-dark" role="button" aria-pressed="true">Wolt Delivery</a>
                    <a href="#" class="btn btn-dark" role="button" aria-pressed="true">Table Reservation</a>
                </div>
              </div>


                <div class="shoppingCart">

                  <?php
                  if(isset($_SESSION["cart_item"]))
                  {
                      $total_quantity = 0;
                      $total_price = 0;
                  ?>

                  <a id="btnEmpty" class="btn-dark" href="menu.php?action=empty">Empty Cart</a>

                  <table class="tbl-cart" cellpadding="10" cellspacing="1">
                  <tbody>
                  <tr>
                  <th style="text-align:center;">Name</th>
                  <th style="text-align:right;" width="5%">Quantity</th>
                  <th style="text-align:right;" width="10%">Unit Price</th>
                  <th style="text-align:right;" width="10%">Price</th>
                  <th style="text-align:center;" width="5%">Remove</th>
                  </tr>

                  <?php
                      foreach ($_SESSION["cart_item"] as $item){
                          $item_price = $item["quantity"]*$item["price"];
                      ?>
                          <tr>
                          <td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><p class="cart-name"><?php echo $item["name"]; ?></p></td>
                          <form class="" action="menu.php?action=update&code=<?php echo $item["code"]; ?>" method="post">
                          <td style="text-align:right;"><input type="number" name="quantity" value="<?php echo $item["quantity"]; ?>" min="1" class="productQuantity" /></td>
                        </form>
                          <td  style="text-align:right;"><?php echo "€ ".$item["price"]; ?></td>
                          <td  style="text-align:right;"><?php echo "€ ". number_format($item_price,2); ?></td>
                          <td style="text-align:center;"><a href="menu.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
                          </tr>
                          <?php
                          $total_quantity += $item["quantity"];
                          $total_price += ($item["price"]*$item["quantity"]);
                      }
                      ?>
                  <tr>
                  <td colspan="2" align="right">Total:</td>
                  <td align="right"><?php echo $total_quantity; ?></td>
                  <td align="right" colspan="2"><strong><?php echo "$ ".number_format($total_price, 2); ?></strong></td>
                  <td></td>
                  </tr>
                  </tbody>
                  </table>
                  <?php
                  }
                  ?>
                  </div>

            </div>

<?php include 'footer.php' ?>
