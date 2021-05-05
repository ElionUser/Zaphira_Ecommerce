<div class="col-xl-12 p-4 br-3 bg-white bs">
    <div class="col-xl-12">
        <div class="row">
            <div class="col-xl-6">
                <p>Total: <strong>$ <?php echo $compact['shells'][0]->total; ?></strong></p>
            </div>
        </div>
    </div>
    
    <table class="table table-striped">
        <?php foreach($compact['products'] as $items): ?>
        <tr>
            <td>
                <p><?php echo '#: '.$items->products_id.' - '.$items->name ?></p>
                <small> <?php echo $items->name_brands.' - '.$items->name_categories ; ?> </small>
            </td>
            <td><img style="width:60px;" class="img-fluid br border bs" src="<?php echo helper::storageImg().'products/'.$items->img; ?>" alt=""></td>
            <td>
                <p><?php echo $items->status; ?></p>
                <small> <span class="icon-box mr-1"></span> <?php echo $items->stock; ?> </small>
            </td>
            <td>
                <p>$ <?php echo $items->price; ?></p>
                <small><?php echo 'Costo'; ?></small>
            </td>
            <td>
                <p>Cant.: <?php echo $items->cuantity; ?></p>
                <small> <span class="icon-star-full"></span> <?php echo $items->points.' Pnts'; ?></small>
                <small> % <?php echo $items->descount; ?> OFF </small>
            </td>
            <td>
                <p>Subtotal: $ <?php echo $items->subtotal; ?></p>
                <small>iva: 21%</small>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

</div>