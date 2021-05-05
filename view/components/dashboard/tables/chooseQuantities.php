<form action="<?php echo helper::base_path().'/dashboard/products/purchases/processQuantities'; ?>" method="post">
    
    <input type="hidden" name="user_id" value="<?php echo $_SESSION['users_id']; ?>">
    <input type="hidden" name="status" value="Pendiente">
    <div class="col-xl-6">
        <label>Proveedores</label>
        <select name="provider_name" class="form-control">
            <option value="Sin asignar">Ninguno</option>
            <?php foreach($compact['providers'] as $provider): ?>
                <option value="<?php echo $provider->name; ?>">
                    <?php echo $provider->name; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <hr>

    <?php foreach($compact['products'] as $products) : ?>
    <div class="col-xl-12 py-2">
        <div class="row">

            <div class="col-xl-2">

                
                <?php if($products->stock > 30 ): ?>
                    <div class="stock-bubble-box bg-01-info f-c2 fw-b" title="stock">
                        <?php echo $products->stock; ?>
                    </div>
                <?php endif; ?>
                <?php if($products->stock < 30 ): ?>
                    <div class="stock-bubble-box bg-01-success f-c1 fw-b" title="stock">
                        <?php echo $products->stock; ?>
                    </div>
                <?php endif; ?>
                <?php if($products->stock < 15 ): ?>
                    <div class="stock-bubble-box bg-01-warning f-c4 fw-b" title="stock">
                        <?php echo $products->stock; ?>
                    </div>
                <?php endif; ?>

                <?php if($products->stock < 5 ): ?>
                    <div class="stock-bubble-box bg-01-danger f-c3 fw-b" title="stock">
                        <?php echo $products->stock; ?>
                    </div>  
                <?php endif; ?>

                
                
                
                <a href="<?php echo helper::base_path().'/dashboard/products/profile/'.$products->products_id; ?>">
                    <img src="<?php echo helper::storageImg().'products/'.$products->img; ?>" class="img-table-grid-1">
                </a>
            </div>
            <div class="col-xl-4">
                <h6><?php  echo $products->name; ?></h6>
                <small><?php  echo '#: '.$products->products_id.' SKU: KDHHS-100154'; ?></small>
            </div>
            <div class="col-xl-3">
                <h6><?php  echo '$ '.$products->price; ?></h6>
                <small><?php  echo 'Costo : $'.$products->cost; ?></small>
            </div>
            <div class="col-xl-3 py-2">
                <input type="hidden" name="id[]" value="<?php echo $products->products_id; ?>">
                <input type="number" class="form-control" name="quantities[]">
            </div>
        </div>
        
    </div>
    <?php endforeach; ?>
    <hr>
    <div class="col-xl-12">
        <button class="btn btn-primary">
            Enviar
        </button>
    </div>
</form>