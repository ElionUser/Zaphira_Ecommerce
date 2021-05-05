<div class="col-xl-12 p-5">
    <div class="row">
        <div class="col-xl-6 py-4 br-3 bg-white bs">
            <?php view::component('dashboard/tables/purchases',$compact); ?>
        </div>
        <div class="col-xl-5">
            <?php view::component('dashboard/gadgets/minStock',$compact); ?>
        </div>
    </div>
</div> 