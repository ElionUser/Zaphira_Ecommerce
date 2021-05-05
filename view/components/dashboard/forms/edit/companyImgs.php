<div class="col-xl-12 br-3 bg-white bs py-4">
    <div class="row">
        <div class="col-xl-12">
            <span class="icon-image2 mr-2"></span> Edicion de imagen
            <hr>
        </div>
        <form action="<?php echo helper::base_path().'/dashboard/company/edit/img/update'; ?>" enctype='multipart/form-data' method="post" class="col-xl-12">
            <div class="col-xl-3 mx-auto">
                <img src="<?php echo helper::storageImg().'company/'.$compact['company']->img; ?>" class="img-fluid">
            </div>
            <div class="col-xl-12">
                <input type="file" name="img">
                <hr>
                <button class="btn btn-info col-xl-6 mx-auto d-block">
                    Actualizar
                </button>
            </div>
        </form>
    </div>
</div>

<div class="col-xl-12 br-3 bg-white bs py-4 mt-5">
    <div class="row">
        <div class="col-xl-12">
            <span class="icon-image2 mr-2"></span> Edicion de banner
            <hr>
        </div>
        <form action="<?php echo helper::base_path().'/dashboard/company/edit/banner/update'; ?>" enctype='multipart/form-data' method="post" class="col-xl-12">
            <div class="col-xl-6 mx-auto py-4">
                <img src="<?php echo helper::storageImg().'company/'.$compact['company']->banner; ?>" class="img-fluid br-3">
            </div>
            <div class="col-xl-12">
                <input type="file" name="banner">
                <hr>
                <button class="btn btn-info col-xl-6 mx-auto d-block">
                    Actualizar
                </button>
            </div>
        </form>
    </div>
</div>