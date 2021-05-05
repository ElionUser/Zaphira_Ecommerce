<div class="col-xl-12 py-3 border">
    <div class="row">
        <?php if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0): ?>
            <?php foreach($_SESSION['cart'] as $cart): ?>
                <div class="col-xl-1 py-2">
                    <img src="<?php echo helper::storageImg().'/products/'.$cart['avatar']; ?>" class="img-fluid br">
                </div>
                <div class="col-xl-4 py-2">
                    <?php echo $cart['name']; ?>
                </div>
                <div class="col-xl-2 py-2">
                    $ <?php echo $cart['price']; ?>
                </div>
                <div class="col-xl-2 py-2">
                    <span class="icon-box mr-2"></span>
                    <?php echo $cart['cuantity']; ?>
                </div>
                <div class="col-xl-2 py-2">
                    $ <?php 

                        $price = $cart['price'] * $cart['cuantity'];
                        
                        if($cart['descount_active'] == 1) {

                            $descount = $price / 100 * $cart['descount'];

                            $price = $price - $descount; 
                        }
                        echo round($price,2);
                    ?>
                </div>
                <div class="col-xl-1 py-2">
                    <form action="<?php echo helper::base_path().'/products/shell/deleteToCart'; ?>" method="post">
                        <input type="hidden" name="products_id" value="<?php echo $cart['id']; ?>">
                        <input type="image" style="width:25px;" src="<?php echo helper::base_path().'/public/images/icons/svg/trash.jpg';?>">
                    </form>
                </div>
                <div class="col-xl-12">
                <hr>
                </div>
            <?php endforeach; ?>

        <?php else: ?>

        <div class="col-xl-12 text-center py-5">
            <span class="icon-warning"></span> <br>
            <h6>No hay productos agregados en su carrito</h6>
        </div>
        

        <?php endif; ?>
    </div>
</div>