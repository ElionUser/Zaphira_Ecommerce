<div class="col-xl-12 py-4 border br-3 bg-white bs">
    <form action="<?php echo helper::base_path().'/dashboard/products/1'; ?>" method="post">
        <input type="hidden" name="confirm">
        <div class="col-xl-12">
            <label>
                <span class="icon-tag mr-2"></span> Marca
            </label>
            <select name="brands_id" class="form-control">
                <option value="Todo">Todo</option>
                <?php foreach($compact['brands'] as $b): ?>
                    <option value="<?php echo $b->brands_id; ?>">
                        <?php echo $b->name_brands; ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <hr>
        </div>
        <div class="col-xl-12">
            <label>
                <span class="icon-tag mr-2"></span> Categoria
            </label>
            <select name="categories_id" class="form-control">
                <option value="Todo">Todo</option>
                <?php foreach($compact['categories'] as $category): ?>
                    <option value="<?php echo $category->categories_id; ?>">
                        <?php echo $category->name_categories; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <hr>
        <div class="col-xl-12">
            <div class="row">
                <button class="btn btn-primary col-xl-4 mx-auto">
                    <span class="icon-search mr-3"></span>Buscar
                </button>
            </div>
        </div>
    </form>
</div>