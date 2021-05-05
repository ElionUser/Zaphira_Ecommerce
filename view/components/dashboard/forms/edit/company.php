<form action="<?php echo helper::base_path().'/dashboard/company/edit/update';?>" method="post" class="col-xl-12 py-4 bg-white bs br-3">
    <div class="col-xl-12">
        Edicion de empresa
        <hr>
    </div>
    <div class="row">
        <div class="col-xl-6">
            <input name="img" type="hidden" value="<?php echo $compact['company']->img; ?>">
            <input name="banner" type="hidden" value="<?php echo $compact['company']->banner; ?>">
            <div class="col-xl-12 py-3">
                <label>Nombre de empresa</label>
                <input name="name" value="<?php echo $compact['company']->name; ?>" class="form-control">
            </div>
            <div class="col-xl-12 py-3">
                <label>SEO</label>
                <input name="SEO" value="<?php echo $compact['company']->SEO; ?>" class="form-control">
            </div>
            <div class="col-xl-12 py-3">
                <label>Celular</label>
                <input name="cel" value="<?php echo $compact['company']->cel; ?>" class="form-control">
            </div>
            <div class="col-xl-12 py-3">
                <label>Localidad</label>
                <input name="location" value="<?php echo $compact['company']->location; ?>" class="form-control">
            </div>
            <div class="col-xl-12 py-3">
                <label>Partido</label>
                <input name="dis" value="<?php echo $compact['company']->dis; ?>" class="form-control">
            </div>
        </div>
        <div class="col-xl-6">
            
            <div class="col-xl-12 py-3">
                <label>Email</label>
                <input name="email" value="<?php echo $compact['company']->email; ?>" class="form-control">
            </div>
            <div class="col-xl-12 py-3">
                <label>Telefono</label>
                <input name="phone" value="<?php echo $compact['company']->phone; ?>" class="form-control">
            </div>
            <div class="col-xl-12 py-3">
                <label>Fax</label>
                <input name="fax" value="<?php echo $compact['company']->fax; ?>" class="form-control">
            </div>
            <div class="col-xl-12 py-3">
                <label>Direccion</label>
                <input name="adress" value="<?php echo $compact['company']->adress; ?>" class="form-control">
            </div>
            <div class="col-xl-12 py-3">
                <label>Entrega en:</label>
                <input name="locateToSend" value="<?php echo $compact['company']->locateToSend; ?>" class="form-control">
            </div>
        </div>
    </div>

    <div class="col-xl-12">
    <hr>
    <button class="btn btn-primary col-xl-6 mx-auto d-block">
        Actualizar
    </button>
    </div>

</form>