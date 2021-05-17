<footer class="col-xl-12 bg-cus-07 p-0 py-4" style="margin-top:250px;">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-sm-12 col-12 mx-auto">
                <div class="col-xl-12 text-center py-4 f-w">
                    <p>Lea mas...</p> 
                    <a href="" class="f-w2">Sobre nosotros</a> <br>
                    <a href="" class="f-w2">Terminos y condiciones</a> <br>
                    <div class="col-xl-12 py-4">
                        <div class="col-xl-12 col-lg-8 col-md-12 col-sm-8 col-12 mx-auto">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 px-4">
                                    <img src="<?php echo helper::storageImg().'/svg/footer/mp.svg'; ?>">
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 px-4">
                                    <img src="<?php echo helper::storageImg().'/svg/footer/paypal.svg'; ?>">
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 px-4">
                                    <img src="<?php echo helper::storageImg().'/svg/footer/payU.svg'; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-8 col-md-12 col-sm-8 col-12 py-4 mx-auto">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 px-4">
                                    <img src="<?php echo helper::storageImg().'/svg/footer/visa.svg'; ?>">
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 px-4">
                                    <img src="<?php echo helper::storageImg().'/svg/footer/maestro.svg'; ?>">
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 px-4">
                                    <img src="<?php echo helper::storageImg().'/svg/footer/mastercard.svg'; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 mx-auto ">
                <!-- <div class="col-xl-12 py-4">
                    <p class="f-w2">Quieres recibir noticias sobre indumentaria nueva todas las semanas?</p> <br>
                    <div class="row">
                        <div class="col-xl-12">
                            <small class="f-w fw-l">Newsletter</small>
                            <input class="col-xl-12 form-control text-center" placeholder="tuEmail@ejemplo.com">
                        </div>
                        <div class="col-xl-12 mt-2">
                            <button class="col-xl-12 btn btn-info">Confirmar </button>
                        </div>
                    </div>
                </div> -->
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-4 col-6 mx-auto py-2">
                    <img src="<?php echo helper::storageImg().'company/'.$compact['company']->img; ?>" class="img-fluid">
                </div>
                <div class="col-xl-10 text-center mx-auto">

                    <p class="f-w text-center">
                        <?php echo $compact['company']->name; ?>
                    </p> <br>
                    <small class="f-w2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque labore placeat mollitia quidem, tempore dicta quaerat ipsam ab eligendi dolores culpa!</small>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-8 col-sm-12 col-12 mx-auto py-4">
                
                <div class="col-xl-12 py-3">
                    <div class="row">
                        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10 f-w2">
                            <span class="d-block text-center">
                            <span class="icon-phone2 mr-2 f-w1"></span> <?php echo $compact['company']->phone; ?>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 py-3">
                    <div class="row">
                        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10 f-w2">
                            <span class="d-block text-center">
                                <span class="icon-envelope f-w1 mr-2"></span>
                            <?php echo $compact['company']->email; ?></span>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 py-3">
                    <div class="row">
                        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10 f-w2">
                            <span class="d-block text-center">
                                <span class="icon-location mr-2 f-w1"></span>
                            <?php echo $compact['company']->adress.' - '.$compact['company']->location; ?></span>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 py-3">
                    <div class="row">
                        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10 f-w2">
                            <span class="d-block text-center">
                                <span class="icon-whatsapp mr-2 f-w1"></span>
                            <?php echo $compact['company']->cel; ?></span>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-xl-12 py-3">
                    <div class="row">
                        <div class="col-xl-2">
                            <span class="icon-store f-w1"></span>
                        </div>
                        <div class="col-xl-10">
                            <span class="d-block text-center f-w2">08:00 a 19:30 hrs</span>
                            <small class="d-block text-center fw-l f-w1">Abierto de y hasta</small>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="col-xl-12 pt-4 f-w2 text-center" style="border-top:1px solid rgba(255,255,255,.3);">
                <p>Seguinos en:</p>
                <div class="col-xl-4 f-w1 py-2 mx-auto">
                    <span class="icon-facebook mr-4"></span>
                    <span class="icon-instagram mr-4"></span>
                    <span class="icon-twitter mr-4"></span>
                    <span class="icon-pinterest mr-4"></span>
                    <span class="icon-youtube mr-4"></span>
                </div>
            </div>
        </div>
    </div>
</footer>