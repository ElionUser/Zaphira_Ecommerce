<div class="bg-white br-3 bs py-4">

    <div class="col-xl-12">
        <span class="icon-user2 mr-3"></span>Ultimos usuarios registrados
        <hr>
    </div>
    <div class="col-xl-12" style="overflow:scroll;height:463px;">
        <?php foreach($compact['users'] as $user): ?>
            <div class="row">
                <div class="col-xl-2">
                   <div class="row">
                        <div class="col-xl-6 text-center d-block py-2">
                            <small><?php echo $user->users_id; ?></small>
                        </div>
                        <div class="col-xl-6">
                        <img src="<?php echo helper::storageImg().'users/'.$user->avatar;?>" class="img-table-grid-1">
                        </div>
                   </div>
                </div>
                <div class="col-xl-1">
                    <a href="<?php echo helper::base_path().'/dashboard/users/edit/'.$user->users_id; ?>">
                    <small><span class="icon-edit-2 d-block text-center py-2"></span></small>
                    </a>
                </div>
                <div class="col-xl-5">
                    <h6><?php  echo $user->name; ?></h6>
                    <small><?php echo $user->email; ?></small>
                </div>
                
            </div>
            <hr>
        <?php endforeach; ?>
    </div>
</div>