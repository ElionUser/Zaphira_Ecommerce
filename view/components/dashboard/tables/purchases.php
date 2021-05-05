

<form action="<?php echo helper::base_path().'/dashboard/products/purchases/chooseProducts'; ?>" method="post">
<div style="height:600px; overflow:scroll">

<?php foreach($compact['products'] as $products) : ?>
<div class="col-xl-12 py-2">
    <div class="row">
        
        
        <div class="col-xl-2">
            <div class="row">
                <div class="col-xl-1">
                    <input type="checkbox" name="choose[]" value="<?php echo $products->products_id; ?>" class="mx-auto d-block mt-3 check-box-buys">
                </div>
                <div class="col-xl-8">

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
            </div>
        </div>

        <div class="col-xl-4">
            <h6><?php  echo $products->name; ?></h6>
            <small><?php  echo '#: '.$products->products_id.' SKU: KDHHS-100154'; ?></small>
        </div>
        <div class="col-xl-3">
            <h6><?php  echo 'Venta $ '.$products->price; ?></h6>
            <small><?php echo 'Costo: $ '.$products->cost; ?></small>
        </div>
        <div class="col-xl-2 py-1 text-center">
            <h6><?php echo $products->name_categories; ?></h6>
            <small><?php echo $products->name_brands; ?></small>
        </div>
        <!-- <div class="col-xl-2 py-2 box-input-buys">
            <input name="cuantity[]" type="number" class="form-control">
        </div> -->
    </div>
</div>
<?php endforeach; ?>
</div>

<div class="col-xl-12">
<hr>
<button class="btn btn-info">
Comprar
</button>
</div>
</form>



