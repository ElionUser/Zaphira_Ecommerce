<div class="col-xl-12">
    <div class="row">
        <div class="col-xl-4 ml-5 border py-2">
            <?php view::component('dashboard/forms/create/users',$compact); ?>
        </div>
        <div class="col-xl-6 ml-5 border py-2">
            <?php view::component('dashboard/tables/recentUsers',$compact); ?>
        </div>
    </div>
</div>