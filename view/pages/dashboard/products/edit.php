<div class="col-xl-12 py-5">
    <div class="row">
        <div class="col-xl-4">
            <div class="col-xl-12 bg-white py-4 br-3 bs">
                <?php view::component('dashboard/forms/images/editProductImg',$compact['product']); ?>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="col-xl-10 bg-white py-4 br-3 bs">
                <?php view::component('dashboard/forms/edit/product',$compact = array(
                    'product' => $compact['product'],
                    'brands' => $compact['brands'],
                    'categories' => $compact['categories'],
                )); ?>
            </div>
        </div>
    </div>
</div>