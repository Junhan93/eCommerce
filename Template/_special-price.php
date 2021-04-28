<?php
    $brand = array_map(function($new){ return $new['item_brand']; }, $product_shuffle);
    $unique = array_unique($brand);
    sort($unique);
    shuffle($product_shuffle);
?>

<!-- Special Price -->
<section id="special-price">
        <div class="container">
        <h4 class="font-rubik-size-20">Special Price</h4>
            <div id="filters" class="button-group text-right font-baloo font-size-16">
                <button class="btn is-checked" data-filter="*">All Brand</button>
                <?php
                    array_map(function($brand){
                        printf('<button class="btn" data-filter=".%s">%s</button>', $brand, $brand);
                    }, $unique);
                ?>
            </div>

            <div class="grid">
            <!-- Grid item -->
            <?php 
                array_map(function($item){  
                    if ($item['item_id'] <= 13){  
            ?>

                <div class="grid-item border <?php echo $item['item_brand'] ?? "Brand"; ?>">
                    <div class="item py-2" style="width:200px">
                        <div class="product font-rale">
                        <a href="#"><img src="<?php echo $item['item_image'] ?? "assets/products/13.png"; ?>" alt="product13" class="img-fluid"></a>
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
                </div>
            <!-- Grid item -->

            <?php 
                    }
                }, $product_shuffle);
            ?>
            </div>
        </div>
    </section>
<!-- Special Price -->