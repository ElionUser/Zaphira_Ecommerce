<div class="col-xl-12 bg-white mt-5 bs">
    <?php foreach($compact['coments'] as $coments): ?>

    <div class="col-xl-12">
        <div class="row">
            <div class="col-xl-4">
                <div class="row">
                    <div class="col-xl-4 py-5">
                        <div style="overflow:hidden;width:50px;height:50px;border-radius:50px;">
                            <img class="img-fluid" src="https://images-na.ssl-images-amazon.com/images/M/MV5BMjEzMjA0ODk1OF5BMl5BanBnXkFtZTcwMTA4ODM3OQ@@._V1_UY256_CR5,0,172,256_AL_.jpg" >
                        </div>
                    </div>
                    <div class="col-xl-6 py-4">

                        <h6><?php echo $coments->name; ?></h6>
                        <small><?php echo $coments->email; ?></small>
                        
                        <div class="col-xl-12 p-0">
                        <small> 6 de marzo , 2019</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 py-4">
                <div class="col-xl-12 p-0">
                    <small>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                    </small>
                    <hr>
                </div>
                <?php echo $coments->coment;?>
            </div>
        </div>
    </div>

    <?php endforeach; ?>

</div>