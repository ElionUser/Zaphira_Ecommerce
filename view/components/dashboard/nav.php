<div class="col-xl-11 mx-auto">
    <nav id="nav-bar-dashboard" style="height:100vh;">
        <div class="col-xl-12 py-3">
            <h3 class="text-center f-w2">Zaphira</h3>
            <hr>
        </div>
        <div class="col-xl-12">
            <div class="col-xl-8 py-4 mx-auto">
                <img src="<?php echo helper::storageImg().'users/'.$_SESSION['avatar']; ?>" class="img-profile bs-ex">
            </div>
            <div class="col-xl-12 text-center">
                <h4 class="f-w"><?php echo $_SESSION['name']; ?></h4> 
                <small class="f-w1">DEVELOPER</small>
                <small class="f-w2"><?php echo $_SESSION['email']; ?></small>
            </div>
            <hr>
        </div>  

        <div class="accordion" id="accordionExample">
            <a href="<?php echo helper::base_path().'/dashboard/home'; ?>">
                <div class="btns"  data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <small><span class="icon-dashboard icon-gradient-01 mr-3"></span></small>
                    <span class="f-w2 fw-m">Dashboard</span> 
                </div>
            </a>
            <div class="accordion-item">
                <h6 class="vert-btn accordion-header" id="headingOne">
                    <div class="btns"  data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <small><span class="icon-users icon-gradient-01 mr-3"></span></small>
                        <span class="f-w2 fw-m">Usuarios</span>
                        <span class="icon-chevron-down"></span>
                    </div>
                </h6>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul class="nav-bar-list-dashboard">
                            <li><a class="links f-w2" href="<?php echo helper::dash(); ?>/users/create"><small>Nuevo</small></a></li>
                            <li><a class="links f-w2" href="<?php echo helper::dash(); ?>/users/1"><small>Usuarios</small></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="accordion-item">
                <h6 class="accordion-header" id="headingTwo">
                    <div class="btns"  data-bs-toggle="collapse" data-bs-target="#products" aria-expanded="false" aria-controls="collapseTwo">
                        <small><span class="icon-box icon-gradient-01 mr-3"></span></small>
                        <span class="f-w2 fw-m">Products</span>
                        <span class="icon-chevron-down"></span>
                    </div>
                </h6>
                <div id="products" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul class="nav-bar-list-dashboard">
                            <li><a class="links f-w2" href="<?php echo helper::dash(); ?>/products/nuevo"><small><span class="icon-plus2 mr-3"></span>Nuevo</small></a></li>
                            <li><a class="links f-w2" href="<?php echo helper::dash(); ?>/products/1"><small><span class="icon-list2 mr-3"></span>Lista de productos</small></a></li>
                            <li><a class="links f-w2" href="<?php echo helper::dash(); ?>/categories"><small><span class="icon-tag mr-3"></span>Categorias</small></a></li>
                            <li><a class="links f-w2" href="<?php echo helper::dash(); ?>/brands"><small><span class="icon-tag mr-3"></span>Marcas</small></a></li>
                            <li><a class="links f-w2" href="<?php echo helper::dash(); ?>/brands"><small><span class="icon-warning mr-3"></span>Alerta de stock</small></a></li>
                            <li><a class="links f-w2" href="<?php echo helper::dash(); ?>/stock/"><small><span class="icon-box mr-3"></span>Importar stock</small></a></li>
                            <li><a class="links f-w2" href="<?php echo helper::dash(); ?>/stock/"><small><span class="icon-barcode mr-3"></span>Codigo de barras</small></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h6 class="accordion-header" id="headingTwo">
                    <div class="btns"  data-bs-toggle="collapse" data-bs-target="#contact" aria-expanded="false" aria-controls="collapseTwo">
                        <small><span class="icon-user icon-gradient-01 mr-3"></span></small>
                        <span class="f-w2 fw-m">Contacto</span>
                        <span class="icon-chevron-down"></span>
                    </div>
                </h6>
                <div id="contact" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul class="nav-bar-list-dashboard">
                            <li><a class="links f-w2" href="<?php echo helper::dash(); ?>/providers"><small>Proveedores</small></a></li>
                            <li><a class="links f-w2" href="<?php echo helper::dash(); ?>/customers"><small>Clientes</small></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h6 class="accordion-header" id="headingTwo">
                    <div class="btns"  data-bs-toggle="collapse" data-bs-target="#purchases" aria-expanded="false" aria-controls="collapseTwo">
                        <small><span class="icon-coin-dollar icon-gradient-01 mr-3"></span></small>
                        <span class="f-w2 fw-m">Compras</span>
                        <span class="icon-chevron-down"></span>
                    </div>
                </h6>
                <div id="purchases" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul class="nav-bar-list-dashboard">
                            <li><a class="links f-w2" href="<?php echo helper::dash(); ?>/products/purchases"><small><span class="icon-plus2 mr-3"></span>Nueva compra</small></a></li>
                            <li><a class="links f-w2" href="<?php echo helper::dash(); ?>/products/purchases/listPurchases"><small><span class="icon-list2 mr-3"></span>Lista de pedidos</small></a></li>
                            <li><a class="links f-w2" href="<?php echo helper::dash(); ?>/products/purchases/listPurchases"><small><span class="icon-list2 mr-3"></span>Lista de devueltos</small></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h6 class="accordion-header" id="headingTwo">
                    <div class="btns"  data-bs-toggle="collapse" data-bs-target="#shells" aria-expanded="false" aria-controls="collapseTwo">
                        <small><span class="icon-coin-dollar icon-gradient-01 mr-3"></span></small>
                        <span class="f-w2 fw-m">Ventas</span>
                        <span class="icon-chevron-down"></span>
                    </div>
                </h6>
                <div id="shells" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul class="nav-bar-list-dashboard">
                            <li><a class="links f-w2" href="<?php echo helper::dash(); ?>/products/shells"><small>Lista de ventas</small></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h6 class="accordion-header" id="headingTwo">
                    <div class="btns"  data-bs-toggle="collapse" data-bs-target="#company" aria-expanded="false" aria-controls="collapseTwo">
                        <small><span class="icon-office icon-gradient-01 mr-3"></span></small>
                        <span class="f-w2 fw-m">Empresa</span>
                        <span class="icon-chevron-down"></span>
                    </div>
                </h6>
                <div id="company" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul class="nav-bar-list-dashboard">
                            <li><a class="links f-w2" href="<?php echo helper::dash(); ?>/company"><small>Configuracion de la empresa</small></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h6 class="accordion-header" id="headingThree">
                    <div class="btns" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <small><span class="icon-sphere icon-gradient-01 mr-3"></span></small>
                        <span class="f-w2 fw-m">Web</span>
                        <span class="icon-chevron-down"></span>
                    </div>
                </h6>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="accordion-body">
                            <ul class="nav-bar-list-dashboard">
                                <a class="links f-w2" href="http://localhost/MVC-ORM-MASTER/"><li>Inicio</li></a>
                            </ul>
                        </div>    
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h6 class="accordion-header" id="headingTwo">
                    <div class="btns"  data-bs-toggle="collapse" data-bs-target="#setting" aria-expanded="false" aria-controls="collapseTwo">
                        <small><span class="icon-cogs icon-gradient-01 mr-3"></span></small>
                        <span class="f-w2 fw-m">Configuracion</span>
                        <span class="icon-chevron-down"></span>
                    </div>
                </h6>
                <div id="setting" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul class="nav-bar-list-dashboard">
                            <li><a class="links f-w2" href="<?php echo helper::dash(); ?>/products/nuevo"><small>Empresa</small></a></li>
                            <li><a class="links f-w2" href="<?php echo helper::dash(); ?>/products/nuevo"><small>Imagenes</small></a></li>
                            <li><a class="links f-w2" href="<?php echo helper::dash(); ?>/products/nuevo"><small>Ventas</small></a></li>
                            <li><a class="links f-w2" href="<?php echo helper::dash(); ?>/products/nuevo"><small>General</small></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="btns"  data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <small><span class="icon-log-out icon-gradient-01 mr-3"></span></small>
                <span class="f-w2 fw-m">Salir</span>
            </div>
        </div>
    </nav>
</div>