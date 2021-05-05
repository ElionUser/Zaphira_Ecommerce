<form action="<?php echo helper::base_path().'/dashboard/users/update/user/'.$compact[0]->users_id; ?>" method="post">
  <div class="col-xl-12 br-4 bg-white p-4">
    <div class="row">
      <div class="col-xl-12 py-2">
        <div class="form-group">
          <label>Nombre</label>
          <input value="<?php echo $compact[0]->name; ?>" name="name" class="form-control">
        </div>
      </div>
      <div class="col-xl-12 py-2">
        <div class="form-group">
            <label>E-mail</label>
            <input value="<?php echo $compact[0]->email; ?>" name="email" type="email" class="form-control">
          </div>
          <hr>
          <button class="btn btn-info">
            Actualizar
          </button>
        </div>
    </div>
  </div>
</form>