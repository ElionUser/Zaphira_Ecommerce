<div class="col-xl-12">
    <div class="row">
        <!-- usuarios -->
        <div class="col-xl-4">
            <?php view::component('dashboard/gadgets/enumUsers',$compact); ?>
        </div>

        <div class="col-xl-2">
            <div class="col-xl-12 br-3 bg-cus-01">
                <div class="row">

                    <div class="col-xl-12 py-4"> 
                        
                        <div class="col-xl-12">

                            <small>Productos nuevos</small>
                            
                            <div class="row">

                                <?php foreach($compact['lastProducts'] as $lastProducts): ?>
                                    <div class="box-users-avatars-dashboard cp">
                                        <a href="<?php echo helper::base_path().'/dashboard/products/profile/'.$lastProducts->products_id; ?>">
                                            <img 
                                            src="<?php echo helper::storageImg().'products/'.$lastProducts->img; ?>"
                                            class="img-fluid br">
                                        </a>
                                    </div>
                                <?php endforeach; ?>

                            </div>
                        </div>   
                        <div class="col-xl-12">
                            <h6 class="mt-4"> <span class="icon-box mr-2"></span>Productos</h6>
                            <h1 class="fw-b"><?php echo count($compact['products']); ?></h1>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-xl-4 py-4 br-3">
            <?php view::component('dashboard/gadgets/minStock',$compact);?>
        </div>

    </div>

    </div>
</div>

