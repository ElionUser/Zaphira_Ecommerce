<div class="col-xl-12 py-3">
    <h6>FILTRO</h6>
    <hr>
</div>

<div class="col-xl-12 py-2">
    <label>Categorias</label>
    <select name="" class="form-control">
        <?php foreach($compact['categories'] as $category): ?>
            <option value=""><?php echo $category->name_categories; ?></option>
        <?php endforeach; ?>
    </select>
</div>
<div class="col-xl-12 py-2">
    <label>Marcas</label>
    <select name="" class="form-control">
        <?php foreach($compact['brands'] as $brand): ?>
            <option value=""><?php echo $brand->name_brands; ?></option>
        <?php endforeach; ?>
    </select>
</div>
<div class="col-xl-12 py-2">
    <label>Categorias</label>
    <select name="" class="form-control">
        <option value=""></option>
    </select>
</div>