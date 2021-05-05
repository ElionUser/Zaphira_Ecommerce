<form action="<?php echo helper::base_path().'/dashboard/products/actualizar'; ?>" method="post" class="py-4">

    <?php foreach($compact['product'] as $product): ?>
    
    <div class="col-xl-12">
        <div class="row">
            <div class="col-xl-10">
                <label>Nombre del producto</label>
                <input value="<?php echo $product->name; ?>" name="name" class="form-control">
            </div>
        </div>
        <hr>
    </div>

    <div class="col-xl-12">
        
        <div class="row">

            <div class="col-xl-3">
                <label>Costo</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">$</span>
                    <input value="<?php echo $product->cost; ?>" name="cost" class="form-control">
                </div>
            </div>
            <div class="col-xl-3">
                <label>Precio</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">$</span>
                    <input class="form-control" name="price" value="<?php echo $product->price; ?>">
                </div>
            </div>
            <div class="col-xl-3">
                <label>Descuento</label>
                <div class="input-group mb-3">
                    <?php if($product->descount_active == 1) : ?>
                        <input type="checkbox" class="mt-3 mr-4" checked>
                    <?php else: ?>
                        <input type="checkbox" class="mt-3 mr-4">
                    <?php endif; ?>
                    <span class="input-group-text">%</span>
                    <input value="<?php echo $product->descount; ?>" name="descount" type="number" class="form-control">
                </div>
            </div>
            <div class="col-xl-2">
                <label>Impuesto</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">%</span>
                    <input value="<?php echo $product->tax; ?>" class="form-control" name="tax">
                </div>
            </div>
            

            <!-- hiddens  -->
            <input type="hidden" name="products_id" value="<?php echo $product->products_id; ?>">
            <input type="hidden" name="img" value="<?php echo $product->img; ?>">
        </div>
        <hr>
    </div>
    
    <div class="col-xl-12">
        <div class="row">
            <div class="col-xl-4">
                <label>Marcas</label>
                <select name="brand_id" class="form-control">
                    <option value="<?php echo $product->brands_id; ?>">
                        <?php echo $product->name_brands; ?> - Seleccionado -
                    </option>
                    <?php foreach($compact['brands'] as $brands): ?>
                        <?php if($brands->brands_id != $product->brands_id): ?>
                            <option value="<?php echo $brands->brands_id; ?>">
                                <?php echo $brands->name_brands; ?>
                            </option> 
                        <?php endif; ?>
                    <?php endforeach ; ?>

                </select>
            </div>
            <div class="col-xl-4">
                <label>Categorias</label>
                <select name="category_id" class="form-control">
                    <option value="<?php echo $product->categories_id; ?>">
                        <?php echo $product->name_categories; ?> - Seleccionado -
                    </option>
                    <?php foreach($compact['categories'] as $categories): ?>
                        <?php if($categories->categories_id != $product->categories_id): ?>
                            <option value="<?php echo $categories->categories_id; ?>">
                                <?php echo $categories->name_categories; ?>
                            </option> 
                        <?php endif; ?>
                    <?php endforeach ; ?>
                </select>
            </div>
            <div class="col-xl-4">
                <label>Estado</label>
                <select name="status" class="form-control">
                    <option value="<?php echo $product->status; ?>"><?php echo $product->status.'- Seleccionado -'; ?></option>
                    <option value="Disponible">Disponible</option>
                    <option value="En espera">En espera</option>
                    <option value="Reserva">Reserva</option>
                </select>
            </div>
        </div>
        <hr>
    </div>
    <div class="col-xl-12">
        <div class="row">
            <div class="col-xl-4">
                <label>
                    <small>
                    <span class="icon-star-full mr-2"></span>
                    </small>
                    Puntos
                </label>
                <input value="<?php echo $product->points; ?>" name="points" type="number" class="form-control" placeholder="ej: 14%">
            </div>
            <div class="col-xl-4">
                <label>
                    Talles
                </label>
                <input value="<?php echo $product->talles; ?>" name="talles" class="form-control" placeholder="ej: 43,41,39,37">
            </div>
        </div>
        <hr>
    </div>
    <div class="col-xl-12">
        <div class="row">
            <div class="col-xl-9">
                <label>Descripcion</label>
                <textarea class="form-control p-0" rows="3" name="description" style="height:100px;">
                    <?php echo $product->description; ?>
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
    <?php endforeach; ?>
</form>
