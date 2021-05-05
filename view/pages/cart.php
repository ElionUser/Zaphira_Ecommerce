<div class="container" style="padding-top:150px;">
    <div class="col-xl-12 p-0">
        <div class="row">
            <div class="col-xl-8">
                <?php echo view::component('web/shop/cart'); ?>
            </div>
            <div class="col-xl-4">
                <?php echo view::component('web/shop/cartTotal',$compact); ?>
            </div>
        </div>
    </div>
</div>