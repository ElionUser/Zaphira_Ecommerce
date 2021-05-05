<div class="col-xl-12 py-4">
    <div class="row">
        <div class="col-xl-8 border">
            <div class="col-xl-12">
                <?php view::component('dashboard/tables/users',$compact); ?>
            </div>
        </div>
        <div class="col-xl-4">
            <?php view::component('dashboard/gadgets/enumUsers',$compact); ?>
        </div>

    </div>

</div>