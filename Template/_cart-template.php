<!-- Shopping cart section -->
<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Shopping Cart</h5>

        <!-- Shopping cart items -->
        <div class="row">
            <div class="col-sm-9">
                <!-- cart item 1 -->
                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-2">
                        <img src="assets/products/2.png" style="height:120px" alt="cart2" class="img-fluid">
                    </div>
                    <div class="col-sm-8">
                        <h5 class="font-baloo font-size-20">Redmi Note 4</h5>
                        <small>by Xiaomi</small>
                        <!-- product rating -->
                        <div class="d-flex">
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <a href="#" class="px-2 font-rale font-size-14">20,534 ratings</a>
                        </div>
                        <!-- product rating -->

                        <!-- product quantity -->
                        <div class="qty d-flex pt-2">
                            <div class="d-flex font-rale w-25">
                                <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                <!-- 'disabled' makes sure user doesnt add imaginary quantity -->
                                <input type="text" data-id="pro1" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                <button class="qty-down border bg-light" data-id="pro1"><i class="fas fa-angle-down"></i></button>    
                            </div>
                            <button type="submit" class="btn font-baloo text-danger px-3 border-right">Delete</button>
                            <button type="submit" class="btn font-baloo text-danger">Save for later</button>
                        </div>

                        <!-- product quantity -->
                    </div>

                    <div class="col-sm-2 text-right">
                        <div class="font-size-20 text-danger font-baloo">
                            $<span class="product_price">558</span>
                        </div>
                    </div>


                </div>
                <!-- cart item 1 -->
                <!-- cart item 2 -->
                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-2">
                        <img src="assets/products/3.png" style="height:120px" alt="cart3" class="img-fluid">
                    </div>
                    <div class="col-sm-8">
                        <h5 class="font-baloo font-size-20">Redmi 6A</h5>
                        <small>by Xiaomi</small>
                        <!-- product rating -->
                        <div class="d-flex">
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <a href="#" class="px-2 font-rale font-size-14">21,672 ratings</a>
                        </div>
                        <!-- product rating -->

                        <!-- product quantity -->
                        <div class="qty d-flex pt-2">
                            <div class="d-flex font-rale w-25">
                                <button class="qty-up border bg-light" data-id="pro2"><i class="fas fa-angle-up"></i></button>
                                <!-- 'disabled' makes sure user doesnt add imaginary quantity -->
                                <input type="text" data-id="pro2" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                <button class="qty-down border bg-light" data-id="pro2"><i class="fas fa-angle-down"></i></button>    
                            </div>
                            <button type="submit" class="btn font-baloo text-danger px-3 border-right">Delete</button>
                            <button type="submit" class="btn font-baloo text-danger">Save for later</button>
                        </div>

                        <!-- product quantity -->
                    </div>

                    <div class="col-sm-2 text-right">
                        <div class="font-size-20 text-danger font-baloo">
                            $<span class="product_price">652</span>
                        </div>
                    </div>


                </div>
                <!-- cart item 2 -->
            </div>
            <!-- start of subtotal -->
            <div class="col-sm-3">
                <div class="sub-total border text-center mt-2">
                    <h6 class="font-rale font-size-12 text-success py-3">
                        <i class="fas fa-check"></i>Your order is eligible for FREE delivery.
                    </h6>
                    <div class="border-top py-4">
                        <h5 class="font-baloo font-size-20">Subtotal (2 items): &nbsp;<span class="text-danger">$<span class="text-danger" id="deal-price">1210.00</span></h5>
                        <button class="btn btn-warning mt-3">Proceed to Buy</button>
                    </div>
                </div>
            </div>
            <!-- end of subtotal-->
        </div>
        <!-- Shopping cart items -->
    </div>
</section>
<!-- Shopping cart section -->