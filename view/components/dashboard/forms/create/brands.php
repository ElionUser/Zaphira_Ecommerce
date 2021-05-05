<div class="col-xl-12 bg-white br-3 py-4">
    <form action="<?php echo helper::base_path().'/dashboard/brands/store'; ?>" method="post">
        <div class="row">
            <div class="form-group col-xl-10 mx-auto">
                <label>
                    <span class="icon-tag mr-2"></span>
                    Nueva Marca
                </label>
                <input name="name_brands" class="form-control">
                <small class="f-b2">Agregue aqui una nueva marca.</small>
                <hr>
                <button class="btn btn-info mx-auto d-block col-xl-6">
                    <span class="icon-plus2 mr-2"></span>
                    Agregar
                </button>
            </div>
        </div>
    </form>
</div> 