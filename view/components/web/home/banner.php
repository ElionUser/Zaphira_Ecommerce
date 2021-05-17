<div class="col-xl-12 bg-white my-5 py-5">
        <div class="row">
            <div class="col-xl-6">
                <small class="d-block text-center"><?php echo stars(5); ?></small>
                <h6 class="text-center fw-m">Mejor valorados</h6>
                <div class="col-xl-6 mx-auto">
                    <img src="<?php echo helper::storageImg().'/products/'.$compact['beastProducts'][0]->img;?>" class="img-fluid">
                </div>
                <div class="col-xl-12 text-center mx-auto py-2">
                    <div class="col-xl-12">
                        <small><?php echo stars($compact['beastProducts'][0]->points); ?></small>
                        <h3 class="fw-b"><?php echo $compact['beastProducts'][0]->name;?></h3>
                        <h3 class="fw-l"><?php echo '$ '.$compact['beastProducts'][0]->price; ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-5 py-2">
                            <img src="<?php echo helper::storageImg().'/products/'.$compact['beastProducts'][1]->img;?>" class="img-fluid"> 
                        </div>
                        <div class="col-xl-7 py-5 text-center">
                            <small><?php echo stars($compact['beastProducts'][1]->points)?></small>
                            <h4 class="fw-m"><?php echo $compact['beastProducts'][1]->name;?></h4>
                            <h6 class="fw-m">$<?php echo $compact['beastProducts'][1]->price;?></h6> <br>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-5 py-2">
                            <img src="<?php echo helper::storageImg().'/products/'.$compact['beastProducts'][2]->img;?>" class="img-fluid"> 
                        </div>
                        <div class="col-xl-7 py-5 text-center">
                            <small><?php echo stars($compact['beastProducts'][2]->points)?></small>
                            <h4 class="fw-m"><?php echo $compact['beastProducts'][2]->name;?></h4>
                            <h6 class="fw-m">$<?php echo $compact['beastProducts'][2]->price;?></h6> <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>