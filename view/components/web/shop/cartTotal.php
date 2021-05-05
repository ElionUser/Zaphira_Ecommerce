<div class="col-xl-12 border py-4">
    Carrito de compras
    <hr>
    <?php if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0): ?>
        <?php

            $cuantity = 0;
            $total = 0;
            
            foreach($_SESSION['cart'] as $cart) { 

                $cuantity = $cart['cuantity'] + $cuantity;
                $total = $cart['subtotal'] + $total;
            }
        ?>
        <?php echo count($_SESSION['cart']); ?>
        <p><span class="icon-box mr-2"></span>Items: <?php echo $cuantity; ?></p>
        <h4>Total: $ <?php echo $total; ?></h4>

        <hr>
        <!-- <div class="col-xl-12">
            <div class="row">
                <div class="col-xl-3">
                    <img src="<?php echo helper::base_path().'/public/images/icons/passarellas/mp.jpg'; ?>" class="img-fluid">
                </div>
            </div>
        </div> -->
        <?php if(TEST_MP): ?>
            <script src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js" data-preference-id="<?php echo $compact['preference']->id; ?>"></script>
        <?php else: ?>
            <a href="<?php echo helper::base_path().'/products/shell/toPay'; ?>">
                <button class="btn btn-primary">
                    Pagar
                </button>
            </a>
        
        <?php endif; ?>
    <?php else: ?>
            <div class="col-xl-12 text-center">
                <span class="icon-warning"></span> <br>
                <p>no hay elementos en el carrito</p>
            </div>
    <?php endif; ?>
    
    
</div>