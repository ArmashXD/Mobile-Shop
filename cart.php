<?php ob_start()?>

<?php include('Template/header.php')?>
<?php count($product->getData('cart')) ? include('Template/_cart-template.php') : include('Template/notfound/_not_found1.php')?>
<!-- Include cart items if they are not empty  -->

<?php include('Template/_wishlist_template.php')?>    

<?php include('Template/_new-phones.php')?>


<?php include('Template/footer.php')?>
 