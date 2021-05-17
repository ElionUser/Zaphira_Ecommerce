<div class="col-xl-12 bg-white br-3 bs py-4">

<div class="col-xl-12">
    <div class="row">
        
        
        <div class="col-xl-5 pt-2">
        
            <ul class="nav">
                <li class="nav-item br-3 bg-cus-04 mr-4">
                    <a 
                        class="nav-link f-w"
                        aria-current="page"
                        href="<?php echo helper::base_path().'/dashboard/products/nuevo'; ?>">
                        <span class="icon-plus2 mr-2"></span>
                        Nuevo
                    </a>
                </li>
                <!-- <li class="nav-item br-3 bg-cus-04 mr-4">
                    <a class="nav-link f-w" href="#" tabindex="-1" aria-disabled="true">
                        <span class="icon-file-excel"></span>
                    </a>
                </li>
                <li class="nav-item br-3 bg-cus-04">
                    <a class="nav-link f-w" href="#" tabindex="-1" aria-disabled="true">
                        <span class="icon-file-pdf"></span>
                    </a>
                </li> -->
            </ul>
        
        </div>
        <div class="col-xl-2 pt-2">
        </div>
        <div class="col-xl-5 pt-2">
            <?php paginate($compact['id'],$compact['pages']); ?>
        </div>
    </div>
    <hr>
</div>

<?php  if(!$compact['products']): ?>
    <div class="col-xl-6 mx-auto text-center alert alert-danger" role="alert">
        <span class="icon-alert-triangle"></span> <br>
        No se encontraron resultados para la busqueda selecionada
    </div>
<?php  endif; ?>
<div class="col-xl-12" style="overflow:scroll;height:600px;">
<?php foreach($compact['products'] as $products) : ?>
<div class="col-xl-12 py-2 px-4">
    <div class="row">
        <div class="col-xl-1 py-0">
            <div class="col-xl-10 py-0">
            <?php if($products->stock >= 30 ): ?>
                <div class="stock-bubble-box bg-01-info f-c2 fw-b text-center d-block" title="stock">
                    <span style="font-size:.6rem;"><?php echo $products->stock; ?></span>
                </div>
            <?php endif; ?>
            <?php if($products->stock <= 30 ): ?>
                <div class="stock-bubble-box bg-01-success f-c1 fw-b text-center d-block" title="stock">
                    <span style="font-size:.6rem;"><?php echo $products->stock; ?></span>
                </div>
            <?php endif; ?>
            <?php if($products->stock <= 15 ): ?>
                <div class="stock-bubble-box bg-01-warning f-c4 fw-b text-center d-block" title="stock">
                <span style="font-size:.6rem;"><?php echo $products->stock; ?></span>
                </div>
            <?php endif; ?>

            <?php if($products->stock <= 5 ): ?>
                <div class="stock-bubble-box bg-01-danger f-c3 fw-b text-center d-block" title="stock">
                    <span style="font-size:.6rem;"><?php echo $products->stock; ?></span>
                </div>  
            <?php endif; ?>
            <a href="<?php echo helper::base_path().'/dashboard/products/profile/'.$products->products_id; ?>">
                <img src="<?php echo helper::storageImg().'products/'.$products->img; ?>" class="img-table-grid-1">
            </a>
            </div>
        </div>
        <div class="col-xl-2 py-1">
            <h6><?php  echo $products->name; ?></h6>
            <small><?php  echo '#: '.$products->products_id.' SKU: KDHHS-100154'; ?></small>
        </div>
        <div class="col-xl-1 py-1 px-0">
            <h6><?php  echo '$'.$products->price; ?></h6>
            <small><?php  echo 'costo: $'.$products->cost; ?></small>
        </div>
        <div class="col-xl-1 py-3">
            <?php if($products->status == 'Disponible') : ?>
            <span class="badge rounded-pill bg-01-success f-c1">
                <?php echo $products->status; ?> <span class="icon-check ml-1"></span>
            </span>
            <?php endif; ?>

            <?php if ($products->status == 'En espera') : ?>
                <span class="badge rounded-pill bg-01-warning f-c4">
                    <?php echo $products->status; ?> <span class="icon-clock ml-1"></span>
                </span>
            <?php endif; ?>

            <?php if ($products->status == 'Reserva') : ?>
                <span class="badge rounded-pill bg-01-info f-c2">
                    <?php echo $products->status; ?> <span class="icon-box ml-1"></span>
                </span>
            <?php endif; ?>

        </div>
        <div class="col-xl-1 py-1 text-center">
            <h6><?php echo $products->tax.' %'; ?></h6>
            <small><?php echo "Impuesto"; ?></small>
        </div>
        <div class="col-xl-1 py-1 text-center">
            <h6><?php echo $products->descount.' %'; ?></h6>
            <small><?php echo "Descuento"; ?></small>
        </div>
        <div class="col-xl-1 py-1 text-center">
            <small>Descuento</small><br>
            <?php if($products->descount_active == 0): ?>
                <small><span class="icon-warning mr-2"></span> <?php echo "Inactivo"; ?></small>
            <?php else: ?>
                <small><span class="icon-check mr-2"></span><?php echo "Activo"; ?></small>
            <?php endif; ?>
        </div>
        <div class="col-xl-1 py-1 text-center">
            <small><?php echo $products->points; ?></small><br>
            <small><?php stars($products->points); ?></small>
        </div>
        <div class="col-xl-1 py-1 text-center">
            <h6><?php echo $products->name_categories; ?></h6>
            <small><?php echo $products->name_brands; ?></small>
        </div>
        <div class="col-xl-1 py-1 text-center">
            <small><?php echo $products->date_updated; ?></small>
        </div>
        <div class="col-xl-1 py-2">
            <a href="<?php echo helper::base_path().'/dashboard/products/profile/'.$products->products_id; ?>">
                <span class="icon-eye2 mr-2 f-cb1"></span>
            </a>
            <a title="editar" href="<?php echo helper::base_path(); ?>/dashboard/products/edit/<?php echo $products->products_id; ?>">
                <span class="icon-edit-2 mr-2 f-cb1"></span>
            </a>
            <a title="importar stock" href="<?php echo helper::base_path().'/dashboard/products/delete/'.$products->products_id; ?>"> 
                <span class="icon-trash-2 mr-2 f-cb1"></span>
            </a>
        </div>
    </div>
</div>
<?php endforeach; ?>
</div>
</div>



