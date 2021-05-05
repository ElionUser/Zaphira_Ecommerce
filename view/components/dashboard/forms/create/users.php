<div class="col-xl-12 br-3 bg-white bs py-4">
    <form action="<?php echo helper::base_path().'/dashboard/users/store';?>" method="post">
        <div class="col-xl-12">
            <div class="row">
                <input type="hidden" name="avatar" value="00.jpg">
                <input type="hidden" name="data_id" value="0">
                <div class="col-xl-12 py-3">
                    <label>Nombre</label>
                    <input class="form-control" name="name" required>
                </div>
                <div class="col-xl-12 py-3">
                    <label>E-mail</label>
                    <input class="form-control" name="email" required>
                </div>
                <div class="col-xl-12 py-3">
                    <label>Password</label>
                    <input class="form-control" name="password" required>
                </div>
            </div>
            <hr>
            <button class="btn btn-primary col-xl-6 mx-auto d-block">
                <span class="icon-plus2 mr-2"></span>
                Crear usuario
            </button>
        </div>
    </form>
</div>