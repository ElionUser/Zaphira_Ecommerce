<div class="container" style="padding-top:250px;">
    <div class="col-xl-12 p-0 bg-white bs">
        <div class="row">
            <div class="col-xl-8">
                <?php echo view::component('web/shop/cart',$compact); ?>
            </div>
            <div class="col-xl-4">
                <?php echo view::component('web/shop/cartTotal',$compact); ?>
            </div>
        </div>
    </div>
</div>