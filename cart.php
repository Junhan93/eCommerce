<?php
    ob_start();
    
    include('header.php');
?>

<?php
    count($product->getData('cart')) ? include('Template/_cart-template.php') : include('Template/notFound/_cart-notfound.php');

    count($product->getData('wishlist')) ? include('Template/_wishlist.php') : include('Template/notFound/_wishlist-notfound.php');

    include('Template/_new-phones.php');
?>

<?php
    include('footer.php');
?>