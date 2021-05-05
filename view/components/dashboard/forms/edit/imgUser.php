<div class="col-xl-12 bg-white py-3 mb-5 br-3">
    <div class="row">
        <div class="col-xl-4 py-3 mx-auto">
            <img src="<?php echo helper::storageImg().'users/'.$compact[0]->avatar; ?>" class="img-fluid br-3">
        </div>
        <form 
            enctype='multipart/form-data'
            action="<?php echo helper::base_path().'/dashboard/users/update/avatar'; ?>"
            method="post" 
            class="col-xl-12">


            <input type="file" name="avatar">
            <input type="hidden" name="users_id" value="<?php echo $compact[0]->users_id; ?>">
            <hr>
            <button class="btn btn-primary col-xl-4 mx-auto d-block">
                <span class="icon-image2 mr-2"></span>
                Actualizar
            </button>
        </form>
    </div>
</div>