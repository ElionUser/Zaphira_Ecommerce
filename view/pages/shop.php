<div class="container pt-5">
    <div class="col-xl-12 px-0 border">
        <div class="col-xl-12 py-4 border">
            <h6>CATALOGO</h6>
        </div>
        <div class="col-xl-12">
            <div class="row">
                <div class="col-xl-3 py-4 border">
                    <?php view::component('web/shop/filterShop',$compact); ?>    
                </div>
                <div class="col-xl-9 p-0 border">
                    <?php view::component('web/shop/products/list',$compact); ?>
                </div>
            </div>  
        </div>
    </div>
</div>

<!-- <script src="./public/js/api/shop/test.js"></script> -->