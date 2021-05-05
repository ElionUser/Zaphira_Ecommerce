<div class="col-xl-12 p-4 br-3 bg-white">
    <div class="row">
        <div class="col-xl-9 py-2 px-5">
            <span class="icon-users mr-3"></span>Usarios
        </div>
        <div class="col-xl-3">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo helper::base_path().'/dashboard/users/create';?>">
                        <span class="icon-plus2"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="icon-file-pdf"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="icon-file-excel"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <hr>
    <div class="col-xl-12" style="overflow:scroll;height:600px;">
    <?php foreach($compact['users'] as $user): ?>
        <div class="col-xl-12 py-2">
            <div class="row">
                <!-- nombre y email y seleccion -->
                <div class="col-xl-4">
                    <div class="row">
                        <div class="col-xl-3 py-2">
                            <a href="<?php echo helper::base_path().'/dashboard/users/profile/'.$user->users_id; ?>"> 
                            <img src="<?php echo helper::storageImg().'users/'.$user->avatar;?>" class="img-table-grid-1">
                            </a>
                        </div>
                        <div class="col-xl-7">
                            <h6><?php  echo $user->name; ?></h6>
                            <small><?php echo $user->email; ?></small>
                        </div>
                    </div>
                </div>
                <?php if($user->status != 'Inactivo'): ?>
                    <!-- estado y permiso -->
                    <div class="col-xl-2">
                        <h6><span class="icon-check"></span> <?php echo $user->status; ?></h6>
                        <small><?php echo $user->permision; ?></small>
                    </div>
                    <!-- cumpleaños -->
                    <div class="col-xl-2">
                        <h6>Birthday:</h6>
                        <small><?php echo $user->birthday; ?></small>
                    </div>

                    <div class="col-xl-2">
                        <h6>Phone:</h6>
                        <small><?php echo $user->celphone; ?></small>
                    </div>
                <?php else: ?>
                    <div class="col-xl-6 text-center">
                        <small>Usuario inactivo: Cambio el estado o bien complete los datos para poder activar la cuenta</small>
                    </div>
                <?php endif; ?>
                <div class="col-xl-1 py-3">
                    <div class="row">
                        <div class="col-xl-6">
                            <a href="<?php echo helper::base_path().'/dashboard/users/edit/'.$user->users_id; ?>">
                                <span class="icon-edit-2 f-cb1"></span>
                            </a>
                        </div>
                        <div class="col-xl-6">
                            <a href="<?php echo helper::base_path().'/dashboard/users/delete/'.$user->users_id; ?>">
                                <span class="icon-trash f-cb1"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-1 py-3">
                    
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
</div>

