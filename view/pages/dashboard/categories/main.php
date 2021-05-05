<div class="col-xl-12">
    <div class="row">
        <div class="col-xl-4">
            <div class="col-xl-12">
                <?php view::component('dashboard/tables/categories',$compact); ?>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="col-xl-12 mb-4">
                <?php view::component('dashboard/gadgets/enumCategories',$compact); ?>
            </div>
            <div class="col-xl-12 mb-4">
                <?php view::component('dashboard/forms/create/categories'); ?>
            </div>
        </div>
    </div>
</div>