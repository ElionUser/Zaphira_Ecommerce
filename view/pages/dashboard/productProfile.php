<div class="col-xl-12 py-4">
    <div class="row">
        <div class="col-xl-6 px-5">
            <?php view::component('dashboard/profiles/products',$compact); ?> 
        </div>
        <div class="col-xl-6">
        </div>
    </div>
    <div class="col-xl-12">
        <div class="row">
            <div class="col-xl-6 py-4">
                <?php view::component('comentsProcProfile',['coments' => $compact['coments']]); ?>
            </div>
        </div>
        
    </div>
</div>