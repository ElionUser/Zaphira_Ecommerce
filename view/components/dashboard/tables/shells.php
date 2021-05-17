<!-- <div class="col-xl-12">
    <div class="row">
        <div class="col-xl-9 pt-2">
            <ul class="nav">
                <li class="nav-item br-3 bg-cus-04">
                    <a class="nav-link f-w" href="#" tabindex="-1" aria-disabled="true">
                        <span class="icon-file-pdf"></span>
                    </a>
                </li>
            </ul>
        </div>

    </div>
    <hr>
</div> -->

<?php  if(!$compact['shells']): ?>
    <div class="col-xl-6 mx-auto text-center alert alert-danger" role="alert">
        <span class="icon-alert-triangle"></span> <br>
        No se encontraron resultados para la busqueda selecionada
    </div>
<?php  endif; ?>

<?php foreach($compact['shells'] as $shell) : ?>
<div class="col-xl-12 py-2 px-4">
    <div class="row">

        <div class="col-xl-3">
            <h6>Total: $ <?php echo $shell->total;  ?></h6>
        </div>
        <div class="col-xl-2">
            <h6>Items: <?php echo count($shell->items); ?> </h6>
            <small><?php echo '# N° compra: '.$shell->shells_id;  ?></small>
        </div>
        <div class="col-xl-1">
            <img src="<?php echo helper::storageImg().'users/'.$shell->avatar; ?>" class="img-table-grid-1">
        </div>
        <div class="col-xl-2">
            <small>Comprador: <br> <?php echo $shell->name;  ?></small>
            <small><?php  ?></small>
        </div>
        <div class="col-xl-1">
            <a href="<?php echo helper::base_path().'/dashboard/products/shells/profile/'.$shell->shells_id; ?>">
                <span class="icon-edit-2 py-2 d-block c-b1"></span>
            </a>
        </div>
        <div class="col-xl-1">
            <a href="<?php echo helper::storagePdfs(true).'/shells/'.$shell->pdf; ?>" target="a_blank">
                <span class="icon-file-pdf py-2 d-block c-b1"></span>
            </a>
        </div>
    </div>
</div>
<?php endforeach; ?>

