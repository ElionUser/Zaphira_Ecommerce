<form id="form-filters" action="<?php echo helper::base_path().'/Shopping/1'; ?>" method="post">
<div class="col-xl-12 py-3">
    <h6>FILTRO</h6>
    <hr>
</div>
<div class="col-xl-12">
    <div class="row">

        <div class="col-xl-12 col-lg-4 col-md-4 col-sm-6 py-2">
            <label>Categorias</label>
            <select name="categories_id" id="categories_id" class="form-control">
                <option value="Todos">Todas</option>
                <?php foreach($compact['categories'] as $category): ?>
                    <option value="<?php echo $category->categories_id; ?>">
                        <?php echo $category->name_categories; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="col-xl-12 col-lg-4 col-md-4 col-sm-6 py-2">
            <label>Marcas</label>
            <select name="brands_id" id="brands_id" class="form-control">
                <option value="Todos">Todas</option>
                <?php foreach($compact['brands'] as $brand): ?>
                    <option value="<?php echo $brand->brands_id; ?>">
                        <?php echo $brand->name_brands; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="col-xl-12 col-lg-4 col-md-4 col-sm-12 py-1">
            <hr>
            <button class="btn btn-primary col-xl-12" name="searchFilter" value="1">
                <span class="icon-search mr-3"></span> Buscar
            </button>
        </div>
    </div>
</div>

</form>