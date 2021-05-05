<div class="col-xl-12 border br-3 bg-cus-04">
                <div class="row">

                    <div class="col-xl-4 py-4"> 
                        <div class="col-xl-12">
                            <h6 class="f-w">
                                <span class="icon-users2 mr-2"></span>
                                Usuarios
                            </h6>
                            <br>
                        </div>
                        <div class="col-xl-12">
                            <h1 class="f-w fw-b"><?php echo count($compact['users']); ?></h1>
                            <small class="f-w">Personal en total</small>
                        </div>
                    </div>

                    <div class="col-xl-8">
                        <div class="col-xl-12">
                            <div class="col-xl-12 mt-5">
                                <p class="f-w">
                                    <small><span class="icon-clock mr-3"></span></small>
                                    Usuarios Recientes
                                </p>
                                <hr style="border-bottom:1px solid rgba(255,255,255,.2);">
                            </div>
                            <div class="col-xl-12">
                                <div class="row">
                                    <?php foreach($compact['lastUsers'] as $lastUsers): ?>
                                        <div class="box-users-avatars-dashboard">
                                            <a href="<?php echo helper::base_path().'/dashboard/users/profile/'.$lastUsers->users_id; ?>">
                                                <img src="<?php echo helper::storageImg().'/users/'.$lastUsers->avatar; ?>" class="img-fluid br">
                                            </a>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>