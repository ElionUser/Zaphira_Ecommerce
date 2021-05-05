<form action="<?php echo helper::base_path().'/dashboard/products/store';?>" method="post" class="col-xl-12 p-5 bg-white border br-3">
    <div class="col-xl-12">
        <span>
            <span class="icon-plus2 mr-2"></span>
            Creacion de productos
        </span>
        <hr>
    </div>
    <div class="col-xl-12">
        <div class="row">
            <div class="col-xl-4">
                <label>Nombre del producto</label>
                <input name="name" class="form-control" placeholder="Ej: Guitarra" required>
            </div>
            <div class="col-xl-2">
                <label>Costo</label>
                <input name="cost" class="form-control" required>
            </div>
            <div class="col-xl-2">
                <label>Precio</label>
                <input name="price" class="form-control" placeholder="ej: 1232.99" required>
            </div>
            <div class="col-xl-2">
                <label>Impuesto</label>
                <input name="tax" class="form-control" required>
            </div>
            
            
            

            <!-- hiddens  -->

            <input name="img" value="avatar-proc.jpg" type="hidden">
            <input name="stock" value="0" type="hidden">
            
            <input name="points" value="0" type="hidden">
            <input name="descount_active" value="0" type="hidden">
        </div>
        <hr>
    </div>
    <div class="col-xl-12">
        <div class="row">
            <div class="col-xl-3">
                <label>Talles</label>
                <input name="talles" class="form-control">
            </div>
            <div class="col-xl-3">
                <label>Descuento %</label>
                <input name="descount" type="number" class="form-control" placeholder="ej: 14%">
            </div>
        </div>
        <hr>
    </div>
    <div class="col-xl-12">
        <div class="row">
            <div class="col-xl-3">
                <label>Marcas</label>
                <select name="brand_id" class="form-control">
                <?php foreach($compact['brands'] as $brands): ?>
                        <option value="<?php echo $brands->brands_id; ?>">
                            <?php echo $brands->name_brands; ?>
                        </option> 
                <?php endforeach ; ?>

                </select>
            </div>
            <div class="col-xl-3">
                <label>Categorias</label>
                <select name="category_id" class="form-control">
                    <?php foreach($compact['categories'] as $categories): ?>
                        <option value="<?php echo $categories->categories_id; ?>">
                            <?php echo $categories->name_categories; ?>
                        </option> 
                    <?php endforeach ; ?>
                </select>
            </div>

            <div class="col-xl-3">
                <label>Estado</label>
                <select name="status" class="form-control">
                    <option value="Disponible">Disponible</option>
                </select>
            </div>
        </div>
        <hr>
    </div>
    <div class="col-xl-12">
        <div class="row">
            <div class="col-xl-6">
                <label>Descripcion</label>
                <textarea class="form-control" name="description">
                    Descripcion aqui...
                </textarea>
            </div>
        </div>
    </div>
    <div class="col-xl-12">
        <hr>
        <button class="btn btn-info">
            Registrar
        </button>
    </div>
</form>