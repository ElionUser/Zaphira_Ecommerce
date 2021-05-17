<div class="col-xl-12 p-4 br-3 bg-white bs">
    <div class="row">
        <div class="col-xl-12">
            <h5>Detalles de venta</h5>
            <hr>
        </div>
        <div class="col-xl-12">
            <p># ID de compra: <?php echo $compact['shells'][0]->shells_id; ?></p> 
            <p>Cantidad de items distintos: <span class="icon-box mr-2"></span><?php echo count($compact['items']); ?></p>
            <p>Total: $ <?php echo $compact['shells'][0]->total; ?></p> 
        </div>
        <div class="col-xl-12">
            <h5>Comprador</h5>
            <hr>
            <div class="row">
                <div class="col-xl-4">
                    <img class="img-fluid br-3" src="<?php echo helper::storageImg().'users/'.$compact['shells'][0]->avatar; ?>" alt="">
                </div>
                <div class="col-xl-8">
                    <p>Nombre: <br> <?php echo $compact['shells'][0]->name; ?></p>
                    <p>Email: <br> <?php echo $compact['shells'][0]->email; ?></p>
                </div>
            </div>
        </div>

    </div>

</div>