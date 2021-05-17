<div class="container px-0 pb-0" style="padding-top:200px;">
    <div class="col-xl-12 p-0 bs bg-white">
        <div class="col-xl-12 py-4 px-4 border">
            <h6> <span class="icon-layout mr-2"></span> CATALOGO</h6>
        </div>
        <div class="col-xl-12">
            <div class="row">
                <div class="col-xl-3 col-lg-12 py-4">
                    <?php view::component('web/shop/filterShop',$compact); ?>    
                </div>
                <div class="col-xl-9 col-lg-12 p-0">
                    <?php view::component('web/shop/products/list',$compact); ?>
                </div>
            </div>  
        </div>
    </div>
</div>