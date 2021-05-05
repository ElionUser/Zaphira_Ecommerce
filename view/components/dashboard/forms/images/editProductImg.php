<div class="col-xl-12">
    <div class="col-xl-12">
        <div class="row">
            <ul class="nav">
                <li class="nav-item">
                    <a href="<?php echo helper::base_path().'/dashboard/products/1'; ?>" class="nav-link active" title="tabla de productos" aria-current="page">
                        <span class="icon-layout mr-2"></span>
                        Tabla de productos
                    </a>
                </li>
            </ul>
        </div>
        <hr>
    </div>
    <div class="row">
        <div class="col-xl-4 mt-5 mx-auto">
            <img src="<?php echo helper::images().'products/'.$compact[0]->img; ?>" class="img-fluid" >
        </div>
        <form enctype='multipart/form-data'
              class="col-xl-9 mx-auto" 
              action="<?php echo helper::base_path(); ?>/dashboard/products/actualizar/imagen"
              method="post"
            >
            
            <input type="file" name="img">
            <input type="hidden" name="products_id" value="<?php echo $compact[0]->products_id; ?>">
            <hr>
            <button class="btn btn-primary">
                <span class="icon-image2 mr-2"></span>
                actualizar imagen
            </button>
        </form>
    </div>
</div>