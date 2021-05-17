
<table id="myTable"></table>
<div class="col-xl-12">
    <div class="row">
        <div class="col-xl-8 py-1">
            <span class="icon-layout mr-3"></span>
            Tabla de Pedidos de productos
        </div>
        <div class="col-xl-4">
            <ul class="nav">
                <li class="nav-item">
                    <a class="f-b active" href="<?php echo helper::base_path().'/dashboard/products/purchases';?>">
                        <span class="icon-plus2"></span>
                    </a>
                </li>
                <li class="nav-item px-4">
                    <a class="f-b" href="<?php echo helper::base_path().'/dashboard/products/1'; ?>">
                        <span class="icon-box"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <hr>
</div>
<div class="col-xl-12" style="overflow:scroll;height:600px;">
<?php if(count($compact['purchases']) > 0): ?>
<?php foreach($compact['purchases'] as $purchase) : ?>
<div class="col-xl-12 py-2 text-center" >
    <div class="row">
        <div class="col-xl-2">
            <div class="row">
                <div class="col-xl-1">
                    <?php  echo $purchase->purchases_id; ?>
                </div>
                <div class="col-xl-3" title="<?php echo $purchase->name; ?>">
                    <img src="<?php echo helper::storageImg().'users/'.$purchase->avatar; ?>" class="img-table-grid-1">
                </div>
                <div class="col-xl-7 text-left">
                    <small><?php  echo $purchase->email; ?></small> <br> 
                    <?php if($purchase->status == 'Pendiente'): ?>
                       
                        <small>Pedido por</small>
                    <?php else: ?>
                        <small>Recepcionado por</small>
                    <?php endif; ?>
                    
                </div>
            </div>
            
        </div>
        <div class="col-xl-2">
            <span><?php echo $purchase->provider_name; ?></span> <br> 
            <small>Proveedor</small>
        </div>
        <div class="col-xl-2">
            <?php if($purchase->status == 'Pendiente'): ?>
                <small><span class="icon-clock mr-2"></span></small>
            <?php else: ?>
                <small><span class="icon-check mr-2"></span></small>
            <?php endif; ?>
            <span><?php  echo $purchase->status; ?></span> <br> 
            <small>Estado</small>
        </div>
        <div class="col-xl-1">
            <span><strong><?php  echo '$ '.$purchase->total; ?></strong></span> <br> 
            <small>total</small>
        </div>
        <div class="col-xl-1">
            <a href="<?php echo helper::base_path().'/storage/pdfs/purchases/'.$purchase->pdf; ?>" target="a_black">
                <span class="icon-file-pdf"></span>
            </a> <br>
            <small>Comprobante</small>
        </div>
        <div class="col-xl-2">
            <form action="<?php echo helper::base_path().'/dashboard/products/purchases/getPurchase'; ?>" method="post">
                <input type="hidden" name="purchases_id" value="<?php echo $purchase->purchases_id; ?>">
                <input type="hidden" name="user_id" value="<?php echo $_SESSION['users_id']; ?>">
                <?php if($purchase->status == 'Pendiente'): ?>
                    <div class="row">
                        <div class="col-xl-8">
                            <select name="status" class="form-control">
                                <option value="<?php echo $purchase->status; ?>">
                                    <?php echo $purchase->status; ?>
                                </option>
                                <?php if($purchase->status == 'Pendiente'): ?>
                                    <option value="Recepcionado">Recepcionado</option>
                                <?php else: ?>
                                    <option value="Pendiente">Pendiente</option>
                                <?php endif; ?>
                            </select>    
                        </div>
                        <div class="col-xl-4">
                            <button class="btn btn-info">
                                Cambiar
                            </button>
                        </div>
                    </div>
                <?php else: ?>
                    <span><?php echo $purchase->received; ?></span>
                    <small>Recepcionado el</small>
                <?php endif; ?>
            </form>
        </div>
        <div class="col-xl-2">
            <small><?php  echo $purchase->date; ?></small> <br> 
            <small>Fecha de pedido</small>
        </div>

    </div>
    <hr>
</div>
<?php endforeach; ?>
<?php else: ?>
    <div class="col-xl-6 mx-auto py-5 text-center mt-5">
        
        <h3>
            <small class="icon-warning d-block"></small> <br>
            No se han encontrado pedidos realizados...
        </h3>
    </div>
<?php endif; ?>
</div>
