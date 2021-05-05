<div class="container border py-4">
    <div class="row">
        <div class="col-xl-4 border py-4"></div>
        <div class="col-xl-8 p-0 border">
            <div class="row">
                <?php foreach($compact['users'] as $users) : ?>
                
                    <div class="col-xl-6 mt-3">
                        <div class="col-xl-12 border py-2">
                            <small class="d-block text-center">
                                <?php echo $users['name']; ?>
                            </small>
                        </div>
                    </div>
                
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    
</div>