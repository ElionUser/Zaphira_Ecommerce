   
    <div class="col-xl-12 py-3 br-3 bg-white">
        <div class="col-xl-12">
            <div class="row">
                <div class="col-xl-9">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">
                                <span class="icon-file-excel"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo helper::base_path().'/dashboard/categories/pdf'; ?>" target="a_blank" class="nav-link" href="#" tabindex="-1" aria-disabled="true">
                                <span class="icon-file-pdf"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr>
        </div> 
        <div class="col-xl-12" style="overflow:scroll;height:600px;">
            <?php foreach($compact['categories'] as $categories): ?>
                <div class="col-xl-12 py-2">
                    <div class="row">
                        <div class="col-xl-1 py-2">
                            <?php echo '#'.$categories->categories_id ?>
                        </div>
                        <div class="col-xl-6 py-2">
                            <span><?php  echo $categories->name_categories; ?></span>
                        </div>
                        <div class="col-xl-2">
                            <a href="<?php echo helper::base_path().'/dashboard/categories/delete/'.$categories->categories_id; ?>">
                                <button class="btn btn-danger" type="button">
                                    <span class="icon-trash-2"></span>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
