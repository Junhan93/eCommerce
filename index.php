<?php
    ob_start();
    // the content after ob_start() will not be sent to the browser
    include('header.php');
?>

<!-- start #main-site -->
<main id="main-site">

<?php
    include('Template/_banner.php');

    include('Template/_top-sale.php');

    include('Template/_special-price.php');

    include('Template/_banner-ads.php');

    include('Template/_new-phones.php');

    include('Template/_blogs.php');
?>

</main>
<!-- end #main-site -->


<!-- start of Footer -->
<?php
    include('footer.php');
?>
<!-- end of Footer -->