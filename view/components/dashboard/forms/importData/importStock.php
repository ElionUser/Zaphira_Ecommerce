
<form action="<?php echo helper::base_path().'/dashboard/products/stock/import/update/'.$compact['product'][0]->products_id; ?>" method="post" class="col-xl-12 bg-white br-3 py-5">
    <div class="row">
        <div class="col-xl-4 form-group">
            <label>Stock a importar</label>
            <input class="form-control" name="stock">
        </div>
        <div class="col-xl-4 form-group">
            <label>Stock anterior</label>
            <input class="form-control" value="<?php echo $compact['product'][0]->stock; ?>" disabled>
        </div>
        <div class="col-xl-4 form-group">
            <label>Usuario</label>
            <input name="user" class="form-control" value="<?php echo $_SESSION['name']; ?>" disabled>
        </div>
        <div class="col-xl-12 form-group">
            <label>Detalles</label>
            <textarea name="details" class="form-control" rows="3"></textarea>
        </div>
    </div>
    <hr>
    <button class="btn btn-info col-xl-4 mx-auto d-block">
        <span class="icon-box mr-2"></span>
        Importar stock
    </button>
</form>
    