<div id="productsShop">
<?php foreach($compact['products'] as $product): ?>
    <div class="col-xl-12 bg-white box-list-products-shop">
        <a class="row" style="text-decoration:none;" href="<?php echo helper::base_path().'/productos/'.$product->products_id; ?>"> 
            
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-4 py-1">
                <img src="<?php echo helper::storageImg().'/products/'.$product->img; ?> ?>" class="img-fluid">
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-8 py-5 f-b">
                <h6><?php echo strtoupper($product->name); ?></h6>
                <small class="f-cb1">
                    <span class="icon-tag mr-2"></span>
                    <?php echo strtoupper($product->name_categories.' - '.$product->name_brands); ?>
                </small>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 py-5 price">
                <h6 class="f-c5 fw-b"><?php echo '$ '.$product->price; ?></h6>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 py-5 tax">
                <div class="col-xl-12 d-block mx-auto">

                    <small class="fw-b f-cb1"><?php echo 'Imp: '.$product->tax.' %'; ?></small> <br>
                    <?php if($product->descount_active): ?>
                        <span class="badge-01 bg-cus-08">
                            <?php echo '- '.$product->descount.' % OFF'; ?>
                        </span>
                    <?php endif; ?>
                     <br>
                </div>        
            </div>

            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-4 py-5 f-b disponibility">
                <small> <span class="icon-check mr-2"></span> Disponible </small>
            </div>
        </a>
    </div>
<?php endforeach; ?>
</div>
<script src="http://localhost/MVC-ORM-master/public/js/api/shop/test.js"></script>