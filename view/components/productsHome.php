<div class="col-xl-12">
    <div class="row bs">
        <?php foreach($compact['products'] as $p) : ?>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-sm-6 box-cards-products trans bg-white" style="overflow:hidden;">
                <a href="http://localhost/MVC-ORM-MASTER/productos/<?php echo $p->products_id; ?>" class="td-none">
                    <div class="row">
                        <div class="col-xl-8 col-lg-10 col-md-6 col-sm-8 col-4 py-4 mx-auto">
                            <?php echo "<img src='http://localhost/MVC-ORM-MASTER/storage/images/products/$p->img' class='img-fluid' >"; ?>
                        </div>
                        <div class="box-brand">
                            <span class="brand-card"><?php echo $p->name_brands; ?></span>
                        </div>
                        <div class="col-xl-12 col-8 p-0 text-center">
                    
                            <div class="col-xl-12 py-0">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <small class="f-cus-03 ts">
                                            <?php echo stars($p->points); ?>
                                        </small> <br>
                                    </div>
                                    <div class="col-xl-6">
                                        <span class="badge rounded-pill bg-cus-01 f-cus-01">
                                            <?php echo $p->name_categories; ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-12 py-0">
                                <h5 class="py-2 fw-m f-cus-02 fw-b"> <?php echo $p->name; ?> </h5>
                            </div>
                            
                            <div class="col-xl-12 py-0">
                                <h4 class="py-2 f-cus-01 fw-b"> $ <?php echo $p->price; ?> </h4>
                            </div>

                        </div>
                    </div>
                   
                    
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>