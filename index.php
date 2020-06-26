
    <?php
    //starting output buffering
    ob_start();
      //Including header
    include('Template/header.php')?>
    
    <?php 
      //Including banner area
    include('Template/_banner-area.php')?>

  
    <?php 
      //Including top-sale
    include('Template/_top-sale.php')?>

    <?php
      //Including special price
    include('Template/allproducts.php')?>


    <?php 
      //Including addbanner
    include('Template/_add-banner.php')?>

    <?php 
      //Including new Phones
    include('Template/_new-phones.php')?>

    <?php 
      //Including blogs
    include('Template/_blogs.php')?>
    


    <?php 
        //Including footer
    include('Template/footer.php')
    ?>



  