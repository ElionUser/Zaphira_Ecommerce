

<div class="col-xl-12 px-0 mb-4" style="padding-top:210px;">
    <div class="col-xl-12 bg-gradient-02">

        <!-- <div id="box-numbers-slider">
            <div class="box-border-btn-slide">
                <div class="inner-box-btn"></div> 
            </div>
            <div class="box-border-btn-slide">
                <div class="inner-box-btn"></div> 
            </div>
            <div class="box-border-btn-slide">
                <div class="inner-box-btn"></div> 
            </div>
            <div class="box-border-btn-slide">
                <div class="inner-box-btn"></div> 
            </div>
            <div class="box-border-btn-slide">
                <div class="inner-box-btn"></div> 
            </div>
        </div>
     -->
        <div class="col-xl-6 mx-auto">
            <img src="<?= helper::storageImg().'/home/slide/img-slide-01.png'; ?>" class="img-fluid">
        </div>
        <div class="box-brand-slider">
            <span class="text-inner-brand">N I K E</span>
        </div>
    </div>
    <!-- <div class="col-xl-12 p-0 ov-h c-slide-06 box-slide-01"> -->
        <!-- <?php foreach($compact['procPerCategory'] as $procCategory): ?>
            <div class="col-xl-12 f-w text-center">

                <div class="row">

                    <div class="col-xl-6 col-lg-7 col-md-6 px-4 py-5">

                        <div class="col-xl-8 mx-auto">
                            <span class="badge rounded-pill bg-cus-01 f-cus-01 px-3 mr-4">
                                <?php echo $procCategory->name_categories; ?>
                            </span> 
                            <small> <?php echo stars($procCategory->points); ?> </small>
                            <h4 class="mt-4"><?php echo strtoupper($procCategory->name); ?></h4>
                        </div>

                        <div class="col-xl-8 py-2 mx-auto">
                            <p><?php echo $procCategory->description; ?></p>
                        </div>

                        <div class="col-xl-8 py-2 mx-auto">
                            <div class="row">
                                <div class="col-xl-12">
                                    <h5 class="d-block">$ <?php echo $procCategory->price; ?></h5>
                                </div>
                                <div class="col-xl-12">
                                    <?php if($procCategory->descount_active): ?>
                                        <span class="badge rounded-pill bg-cus-01 f-cus-01 px-3">
                                            <?php echo $procCategory->descount.' % OFF'; ?>
                                        </span>
                                    <?php endif; ?>   
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-6 col-lg-5 col-md-6">
                        <div class="col-xl-8 col-md-12 col-sm-9 col-10 mx-auto">
                            <img src="<?php echo helper::storageImg().'/products/'.$procCategory->img;?>" class="img-slide">
                        </div>
                    </div>

                </div>

            </div>
        <?php endforeach; ?> -->
    <!-- </div> -->
</div>

    

