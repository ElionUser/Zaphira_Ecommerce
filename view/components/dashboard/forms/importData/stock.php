<div class="col-xl-12 bg-white br-3 p-4">
    <div class="row">
        <div class="col-xl-4 border br">
            <img 
            src="<?php echo helper::storageImg().'products/'.$compact['product'][0]->img; ?>" 
            class="img-fluid">
        </div>
        <div class="col-xl-8">
            <div class="row">
            <div class="col-xl-6 py-4">
                <?php echo $compact['product'][0]->name_brands; ?> 
                <h3><?php echo $compact['product'][0]->name; ?></h3>
                <span class="badge bg-primary text-white fw-m">
                    <?php echo $compact['product'][0]->name_categories; ?>
                </span>
            </div>
            <div class="col-xl-6 pt-5 d-block text-center">
                <small>Precio</small>
                <h1>$ <?php echo $compact['product'][0]->price; ?></h1>
            </div>
            <div class="col-xl-6">
                <span class="icon-box mr-2"></span>
                stock: <?php echo $compact['product'][0]->stock; ?>  
                <br>
                <small>
                    <?php echo $compact['product'][0]->points; ?> <br>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-half"></span>
                    <span class="icon-star"></span>
                </small> <br>
                <small><?php echo $compact['product'][0]->descount; ?> % OFF</small> <br>
                <span class="badge bg-info text-white fw-m">
                    <span class="icon-check mr-2"></span>
                    <?php echo $compact['product'][0]->status; ?>
                </small> 
            </div>
            </div>
        </div>
    </div>
</div>