

<div id="main-slide" class="col-xl-12">
    <span id="name-shoe-slide">Airbend Skill</span>
    <div id="box-interview-slide"></div>
    <div id="box-social-networks">
        <span class="icon-facebook icon-social-main"></span>
        <span class="icon-twitter icon-social-main"></span>
        <span class="icon-instagram icon-social-main"></span>
        <span class="icon-pinterest icon-social-main"></span>
        <span class="icon-youtube icon-social-main"></span>
    </div>
    <div id="box-contnt-slide">
        <div class="col-xl-12">
            <div class="row">
                
                <div class="col-xl-5 py-5">
                    <small class="f-w">Zapatillas · Deporte · Ropa · Calidad</small>
                    
                    <hr style="border-bottom:1px solid rgba(255,255,255,.5);">
                    <h4 class="f-w">Persigue el deporte , entrena , mejora </h4>
                    <h1 class="f-w">se una LEYENDA</h1>
                    <p class="text-white fw-l">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa cumque praesentium ea ad vel! Ea laboriosam amet repellat totam, deserunt sequi temporibus quasi aliquid reiciendis natus harum ipsam corrupti corporis.
                    </p>
                    <button id="btn-slide">
                        Ver mas...
                    </button>
                </div>
                <div class="col-xl-7">
                    <img src="<?php echo helper::base_path().'/public/images/slide/01.png'; ?>" class="img-fluid img-slide">
                </div>
            </div>
        </div>
    </div>
</div>    


<!-- no -->

<div class="col-xl-12 border bg-03 d-none" style="height:100vh;">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 border py-4" style="height:100vh;">
                <div class="col-xl-10 mx-auto mt-5 py-5">
                    
                    <hr>
                    <h5>Persigue el deporte , entrena , mejora </h5>
                    <h1>se una LEYENDA</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique aliquid officia cupiditate nobis excepturi ut itaque voluptatum corrupti voluptates reiciendis, fugit temporibus ratione ullam obcaecati rerum, exercitationem, dignissimos magnam quas?</p>

                    <button class="btn btn-primary">
                        ver mas...
                    </button>
                </div>
            </div>
            <div class="col-xl-6 border py-4" style="height:100vh;">
                <div class="col-xl-12 py-4">
                    <?php for($i = 0 ; $i < count($compact) ; $i++): ?>
                        <div class="number-slide"></div>
                    <?php endfor; ?>
                </div>
                <?php foreach($compact as $procs):?>
                    <?php echo "<img src='http://localhost/MVC-ORM-MASTER/storage/images/products/$procs->img' class='img-fluid' style='position:absolute;'>" ?>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>