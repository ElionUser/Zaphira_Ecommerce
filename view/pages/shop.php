<div class="container">
    <div class="col-xl-12 py-2 border">
        <div class="col-xl-12 py-3">
            <h6>CATALOGO</h6>
        </div>
        <div class="row">
            <div class="col-xl-3 border py-4">
                <?php view::component('web/shop/filterShop',$compact); ?>    
            </div>
            <div class="col-xl-9">
                <?php view::component('productsHome',$compact); ?>
            </div>
        </div>
    </div>
    
</div>