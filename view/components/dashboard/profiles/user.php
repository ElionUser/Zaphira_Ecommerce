<div class="row">

    <?php foreach($compact['user'] as $user): ?>
    <div class="col-xl-4">
        
        <div class="row">

            <div class="col-xl-4 border">
                <img src="<?php echo helper::storageImg().'users/'. $user->avatar; ?>" class="br-3 img-fluid">
            </div>
            <div class="col-xl-8 py-2">
                <div class="col-xl-12">
                    <p><?php echo '#'.$user->users_id.' '.$user->name; ?></p>
                    <p><span class="icon-envelope mr-2"></span> <?php echo $user->email; ?></p>
                    <small><?php echo $user->gender; ?></small> <br>
                    <small>Cumpleaños: <?php echo $user->birthday; ?></small> <br>
                    <small>Permisos: <?php echo $user->permision; ?></small>
                </div>
                <div class="col-xl-12">
                    <hr>
                    <?php if($user->status == 'Activo'): ?>
                    <p><span class="icon-check mr-2"></span>Activo</p>
                    <?php else: ?>
                    <p><span class="icon-warning mr-2"></span>Inactivo</p>
                    <?php endif; ?>
                </div>
            </div>

        </div>

        <div class="col-xl-12">

            <p><?php echo 'Celular: '.$user->celphone; ?></p>
            <p><?php echo 'Direccion: '.$user->adress; ?></p>
            <p><?php echo 'Localidad: '.$user->location; ?></p>

        </div>

    </div>

    <div class="col-xl-8 border">


    </div>
    <?php endforeach; ?>

</div>