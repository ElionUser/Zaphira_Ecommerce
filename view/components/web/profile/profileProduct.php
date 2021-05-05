
    <form action="<?php echo helper::base_path().'/products/profile/shell'; ?>" method="post">
    <div class="row">
        <?php foreach($compact['proc'] as $profile) :?>
            <div class="col-xl-6">
                <?php echo "<img src='./../storage/images/products/$profile->img' class='img-fluid' >"; ?>
            </div>
            <div class="col-xl-6">
                <div class="col-xl-12 mt-5">
                    <div class="row">
                        <div class="col-xl-8">
                            <span>
                                <span class="icon-tag mr-2"></span>
                                <?php echo $profile->name_brands.' - '.$profile->name_categories; ?>
                            </span>
                            <h2 class="fw-b"><?php echo $profile->name; ?></h2>
                        </div>
                        <div class="col-xl-12 f-cus-01">

                            <h2 class="fw-b">$ <?php echo $profile->price; ?></h2>
                            <hr>
                        </div>
                        <div class="col-xl-12">
                            <h5 class=""><?php echo $profile->name_brands; ?></h5>
                        </div>
                        <div class="col-xl-12">
                            <h5 class=""><?php echo $profile->tax; ?></h5>
                        </div>
                        <div class="col-xl-12">
                            <?php if($profile->descount_active == 1): ?>
                                Descuento activo <?php echo $profile->descount; ?>
                            <?php else: ?>
                                Descuento desactivado <?php echo $profile->descount; ?>
                            <?php endif; ?>
                            
                        </div>
                        
                        <div class="col-xl-12">
                            <small class="fw-b">OFF <?php echo $profile->descount; ?> %</small>
                        </div>
                        <div class="col-xl-12">
                            <small>Talles: <?php echo $profile->talles; ?></small>
                        </div>
                        <div class="col-xl-12 py-2">
                            <small class="mr-2"><?php echo stars($profile->points); ?></small> <?php echo $profile->points; ?> pnts
                        </div>
                        <div class="col-xl-12 py-3">
                            <hr>
                            <h5> Descripcion </h5>
                            <p> <?php echo $profile->description; ?> </p>
                        </div>
                        <div class="col-xl-3">
                            <label> Cantidad </label>
                            <input type="number" name="cuantity" class="form-control" min="1" value="1">
                            <input type="hidden" name="product_id" value="<?php echo $profile->products_id; ?>">
                        </div>
                        <div class="col-xl-12 py-4">
                            <button class="btn btn-primary mr-4">
                                <span class="icon-heart"></span>
                            </button>
                            
                            <button class="btn btn-primary py-2">
                                <span class="icon-cart2 mr-2"></span>
                                Agregar al carro
                            </button>
                            
                        </div>
                    </div>
                </div>
            </div>
            
        <?php endforeach; ?>
    </div>
</form>



