<div class="col-xl-12 bg-white py-4 br-3">
    <?php foreach($compact['products'] as $products): ?>

    <?php if($products->stock < 5): ?>

        <div class="col-xl-12 py-2 br-3 mt-2">
            <div class="row">
                <div class="col-xl-3">
                    <div class="col-xl-10">
                        <div class="stock-bubble-box bg-01-danger f-c3 fw-b" title="stock">
                            <?php echo $products->stock; ?>
                        </div>
                        <img src="<?php echo helper::storageImg().'products/'.$products->img; ?>" class='img-table-grid-1'></img>
                    </div>    
                </div>
                <div class="col-xl-5">
                    <h6><?php echo $products->name; ?></h6>
                    <small>SKU: KDHHS-100154</small>
                </div>
                <div class="col-xl-3">
                    <span class="badge rounded-pill bg-01-danger f-c3 mt-3 mx-auto d-block">Stock bajo</span>
                </div>
            </div>
        </div>   

    <?php endif; ?>

    <?php endforeach; ?>    
</div>