<form action="<?php echo helper::base_path().'/dashboard/users/update/datas/'.$compact[0]->data_id; ?>" method="post">
  <div class="col-xl-12 br-4 bg-white p-4">
    <div class="row">
    
        <div class="col-xl-4 py-2">
            <div class="form-group">
                <label>Genero</label>
                <select name="gender" class="form-control">
                    <option value="<?php echo $compact[0]->gender; ?>"><?php echo $compact[0]->gender; ?></option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>
            </div>
        </div>

        <div class="col-xl-4 py-2">
            <div class="form-group">
                <label>Estado</label>
                <select name="status" class="form-control">
                    <option value="<?php echo $compact[0]->status; ?>"><?php echo $compact[0]->status; ?></option>
                    <option value="Activo">Activo</option>
                    <option value="Inactivo">Inactivo</option>
                </select>
            </div>
        </div>

        <div class="col-xl-4 py-2">
            <div class="form-group">
                <label>Permisos</label>
                <select name="permision" class="form-control">
                    <option value="<?php echo $compact[0]->permision; ?>"><?php echo $compact[0]->permision; ?></option>
                    <option value="Programador">Programador</option>
                    <option value="Administrador">Administrador</option>
                </select>
            </div>
        </div>

        <div class="col-xl-12">
            <hr>
        </div>


        <div class="col-xl-4 py-2">
            <div class="form-group">
                <label>Fecha de nacimiento:</label>
                <input value="<?php echo $compact[0]->birthday; ?>" name="birthday" class="form-control">
                <small class="mt-2 d-block"> <span class="icon-calendar2 mr-2"></span><?php echo $compact[0]->birthday; ?></small>
            </div>
        </div>

        <div class="col-xl-4 py-2">
            <div class="form-group">
                <label>Localidad:</label>
                <input value="<?php echo $compact[0]->location; ?>" name="location" class="form-control">
            </div>
        </div>

        <div class="col-xl-4 py-2">
            <div class="form-group">
                <label>Dirección:</label>
                <input value="<?php echo $compact[0]->adress; ?>" name="adress" class="form-control">
            </div>
        </div>

        <div class="col-xl-12">
            <hr>
        </div>

        <div class="col-xl-4 py-2">
            <div class="form-group">
                <label>Telefono:</label>
                <input value="<?php echo $compact[0]->phone; ?>" name="phone" class="form-control">
            </div>
        </div>

        <div class="col-xl-4 py-2">
            <div class="form-group">
                <label>Celular:</label>
                <input value="<?php echo $compact[0]->celphone; ?>" name="celphone" class="form-control">
            </div>
        </div>

        <div class="col-xl-12">
            <hr>
            <button class="btn btn-info">
                Actualizar
            </button>
        </div>

        

    </div>

  </div>
</form>