
<form action="<?php echo helper::base_path().'/products/profile/shell'; ?>" method="post">
    <div class="col-xl-12 px-0 mb-4" style="padding-top:200px;">
        <div class="col-xl-12 py-5 bg-white bs">
            <div class="row">
                <?php foreach($compact['proc'] as $profile) :?>
                    <div class="col-xl-5 col-lg-6 col-md-12">
                        <div class="col-xl-12 col-lg-12 col-md-5 col-sm-8 col-8 mx-auto">
                        <img src="<?php echo helper::storageImg().'/products/'.$profile->img; ?>" class="img-proc-profile">
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 col-md-12">
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
                                    <p>Impuesto: <?php echo $profile->tax; ?> %</p>
                                    <p class="fw-b"><?php echo $profile->descount; ?> % OFF</p>
                                    <small class="mr-2"><?php echo stars($profile->points); ?></small> <?php echo $profile->points; ?> pnts
                                </div>
                                <div class="col-xl-12">
                                    <hr>
                                    <h5> Descripcion </h5>
                                    <p> <?php echo $profile->description; ?> </p>
                                </div>
                                <div class="col-xl-12">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-4 col-md-2 col-sm-4 col-12 py-2">
                                            <input type="number" name="cuantity" class="form-control" min="1" value="1">
                                            <input type="hidden" name="product_id" value="<?php echo $profile->products_id; ?>">
                                        </div>
                                        <div class="col-xl-5 col-lg-8 col-md-6 col-sm-6 col-12 mx-auto d-block mt-1">
                                            <button class="btn btn-primary d-block col-xl-12 py-2">
                                                <span class="icon-cart2 mr-2"></span>
                                                Agregar al carro
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                
                               
                            </div>
                        </div>
                    </div>
                    
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</form>



