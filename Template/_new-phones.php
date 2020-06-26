<?php shuffle($product_shuffle);    
 //request method post
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      if(isset($_POST['new_phones_submit']))
      //calling method addToCart
      $Cart->addToCart($_POST['user_id'],$_POST['item_id']);
    }?>
        <!-- New Phones -->
        <section id="new-phones">
          <div class="container">
            <h4 class="font-lato font-size-20">New Phones</h4>
            <hr>

                  <!-- owl carousel -->
                  <div class="owl-carousel owl-theme">
                  <?php  foreach($product_shuffle as $item) {?>
            
                <div class="item py-2">
                  <div class="product font-lato">
                    <a href="<?php printf('%s?item_id=%s','singleProduct.php',$item['item_id'])?>"><img src="<?php echo $item['item_image'] ?? "./assets/products/1.png";?>" alt="product1" class="img-fluid"></a>
                    <div class="text-center">
                      <h6><?php echo $item['item_name'] ?? "Unknown"?></h6>
                      <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                      </div>
                      <div class="price py-2">
                        <span>$<?php echo $item['item_price'] ?? '0'?></span>
                      </div>
                      <form method="post">
                        <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? 1?>">
                        <input type="hidden" name="user_id" value="<?php echo 1?>">
                        <?php 
                        //the in_array function will find item_id with the second argument being passed to help it. 
                        if(in_array($item['item_id'],$Cart->getCartId($product->getData('cart'))?? [])){
                          echo'<button type="submit" disabled class="btn btn-success font-size-12">In the Cart</button>';
                        }else{
                       echo'<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>';

                        }?>                      
                        </form>                   
                       </div>
                  </div>
                </div>
                <?php
                //end foreach
              }  ?>
                  </div>
                <!-- !owl carousel -->
          </div>
        </section>
        <!-- New Phones End -->