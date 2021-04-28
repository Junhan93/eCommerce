<?php
    $product_shuffle = $product->getData('product');
    shuffle($product_shuffle);
?>

<!-- Best Seller -->
<section id="top-sale">
    <div class="container py-5">
    <h4 class="font-rubik font-size-20">Best Seller</h4>
    <hr>
    <!-- Owl Carousel -->
        <div class="owl-carousel owl-theme">
            <?php foreach($product_shuffle as $item) { ?>
            <!-- Item 1 -->
            <div class="item py-2">
                <div class="product font-rale">
                <a href="#"><img src="<?php echo $item['item_image'] ?? "assets/products/1.png"; ?>" alt="product1" class="img-fluid"></a>
                    <div class="text-center">
                        <h6><?php echo $item['item_name'] ?? "Unknown"; ?></h6>
                        <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                        <span><?php echo $item['item_price'] ?? "0"; ?></span>
                        </div>
                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                    </div>
                </div>
            </div> 
            <!-- Item 1 -->
            <?php }; ?>
        </div>
    <!-- Owl Carousel -->

    </div>
</section>
<!-- Best Seller -->