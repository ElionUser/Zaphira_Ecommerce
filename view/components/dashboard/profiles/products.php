<?php foreach( $compact['product'] as $p ): ?>
    <div class="col-xl-12 bg-white bs br-3 py-4">

        <div class="col-xl-12">
            <div class="row">
                <div class="col-xl-6"></div> 
                <div class="col-xl-6">
                    <nav class="nav">
                        <a title="Agregar nuevo" class="nav-link" href="<?php echo helper::base_path().'/dashboard/products/nuevo';?>">
                            <span class="icon-plus2 mr-2"></span>
                        </a>
                        <a title="Editar" class="nav-link" href="<?php echo helper::base_path().'/dashboard/products/edit/'.$p->products_id; ?>">
                            <span class="icon-edit-2 mr-2"></span>
                        </a>
                        <a title="Borrar" class="nav-link" href="<?php echo helper::base_path().'/dashboard/products/delete/'.$p->products_id; ?>">
                            <span class="icon-trash-2 mr-2"></span>
                        </a>
                        <a title="Ir a productos" class="nav-link" href="<?php echo helper::base_path().'/dashboard/products/1'; ?>">
                            <span class="icon-box mr-2"></span>
                        </a>
                    </nav> 
                </div> 
            </div>
            <hr>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <?php echo "<img class='img-fluid' src='http://localhost/MVC-ORM-MASTER/storage/images/products/$p->img'>" ?>
            </div>
            <div class="col-xl-6">
                <div class="col-xl-12 py-2">
                    <small><?php echo $p->name_brands; ?></small>
                    <h3><?php echo $p->name; ?></h3>
                    <span class="badge rounded-pill bg-01-success f-c1 px-3">
                        <span class="icon-tag mr-2"></span>
                        <?php echo $p->name_categories; ?>
                    </span>
                    <hr>
                    Stock : <span><?php echo $p->stock; ?></span>
                </div>
                <div class="col-xl-12 py-2">
                    <?php stars($p->points); ?>
                    <small class="mr-2"><?php echo $p->points; ?> points</small>
                </div>
                <div class="col-xl-12">
                    <small>Talles: </small>
                    <?php 
                        $talles = explode(',',$p->talles);

                        for($f = 0 ; $f < count($talles); $f++):
                    ?>

                    <span class="badge rounded-pill bg-01-info f-c2">
                        <?php echo $talles[$f]; ?>
                    </span>

                    <?php endfor; ?>
                </div>
                <div class="col-xl-12 py-4">
                    <h3><?php echo '$ '.$p->price; ?></h3>
                    <h6><?php echo $p->descount.' % OFF'; ?></h6>
                    <small><?php echo $p->points.' puntos'; ?></small>
                </div>
                <div class="col-xl-12 py-2">
                    <span class="icon-bubble3 mr-2"></span>
                    <?php echo 'Comentarios : '.count($compact['coments']); ?>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>