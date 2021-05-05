<div class="col-xl-12 bg-white br-3 bs pt-0 pb-4 pl-0" style="overflow:hidden;">
    
    <div class="" style="overflow:hidden;width:100%;height:130px;position:absolute;border:1px solid black;">
        <a href="<?php echo helper::base_path().'/dashboard/company/edit'; ?>">
            <span class="icon-edit-2" style="top:10px;right:25px;color:#fff;z-index:10;position:absolute;"></span>
        </a>
        <img src="<?php echo helper::storageImg().'/company/banner-01.jpg'?>" class="img-fluid">
    </div>
    <div class="col-xl-7 mx-auto" style="margin-top:80px;">
        <div style="margin:0 auto;width:100px;height:100px;border-radius:50%;overflow:hidden;">
            <img src="<?php echo helper::storageImg().'/company/DDigital.jpg';?>" class="img-fluid">
        </div>
    </div>
    <div class="col-xl-12 mt-5">
        <h6 class="text-center">
            <span class="icon-office mr-2"></span>
            <?php echo $compact['company']->name; ?>
        </h6>
    </div>
    <hr>
    <div class="col-xl-12 text-center">
        <p>SEO: <?php echo $compact['company']->SEO; ?></p>
        <span class="icon-location"></span>
        <?php echo $compact['company']->location.' - '; ?>
        <?php echo $compact['company']->adress.' - '; ?>
        <?php echo $compact['company']->dis; ?>
    </div>
    <hr>
    <div class="col-xl-12 text-center">
        <span class="icon-envelope mr-2"></span>
        <?php echo $compact['company']->email; ?> <br>
        <span class="icon-phone mr-2"></span>
        <?php echo $compact['company']->phone; ?> <br>
        <span class="icon-smartphone mr-2"></span>
        <?php echo $compact['company']->cel; ?> <br>
    </div>
    <hr>
    <div class="col-xl-12 text-center">
        <?php echo $compact['company']->locateToSend; ?> <br>
        <small>Recepcion de pedidos:</small>
    </div> 

        
    
</div>