<div id="productsShop">
<?php foreach($compact['products'] as $product): ?>
    <div class="col-xl-12 b-b">
        <div class="row">
            <div class="col-xl-2 py-1">
                <a href="<?php echo helper::base_path().'/productos/'.$product->products_id; ?>">
                    <img src="<?php echo helper::storageImg().'/products/'.$product->img; ?> ?>" class="img-fluid">
                </a>
            </div>
            <div class="col-xl-4 py-4">
                <h6 class="fw-b f-cb1"><?php echo strtoupper($product->name); ?></h6>
                <small class="f-cb1">
                    <span class="icon-tag mr-2"></span>
                    <?php echo $product->name_categories.' - '.$product->name_brands; ?>
                </small>
            </div>
            <div class="col-xl-3 py-4">
                <h6 class="f-c5"><?php echo '$ '.$product->price; ?></h6>
                <small><?php echo 'Impuesto: '.$product->tax.' %'; ?></small> <br>
            </div>
            <div class="col-xl-2 py-3">
                <div class="col-xl-12 d-block mx-auto">
                    <small><?php echo stars($product->points); ?></small> <br>
                    <?php if($product->descount_active): ?>
                        <span class="badge-01 bg-cus-08">
                            <?php echo '- '.$product->descount.' % OFF'; ?>
                        </span>
                    <?php endif; ?>
                </div>        
            </div>
            <div class="col-xl-1 pt-4">
                <div class="btn-cart d-block mx-auto cp trans">
                    <span class="icon-cart2"></span>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
</div>