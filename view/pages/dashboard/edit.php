<div class="col-xl-12 py-4">
    <div class="row">
        <div class="col-xl-4 border">
            <?php
                view::component('dashboard/forms/edit/imgUser',$compact['user']); 
                view::component('dashboard/forms/edit/user',$compact['user']); 
            ?>
        </div>
        <div class="col-xl-6 border">
            <?php view::component('dashboard/forms/edit/datas',$compact['user']); ?>
        </div>
    </div>
</div>
