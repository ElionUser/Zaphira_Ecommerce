
    <div id="box-nav-main">
        <nav>   
            <img id="logo" src="<?php echo helper::base_path().'/public/images/logos/logo-01.png'; ?>">
            <ul>
                <div id="box-first-btns">
                    <li><a href="<?php echo helper::base_path(); ?>">INICIO</a></li>
                    <li><a href="<?php echo helper::base_path().'/shop'; ?>">SHOP</a></li>
                    <li><a href="">ARTICLES</a></li>
                    <li><a href="">NEWS</a></li>
                </div>
                <div id="box-seconds-btns">
                    <li><a href="">HOMBRES</a></li>
                    <li><a href="">MUJERES</a></li>
                    <li><a href="">NIÑOS</a></li>
                </div>
            </ul>
            <div id="box-cart">
                <div class="btn-group">
                    <button type="button" class="btn f-w" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="icon-cart mr-2 f-w"></span>
                        <span class="box-cart-number">
                            <?php if(isset($_SESSION['cart'])) { echo count($_SESSION['cart']); } else { echo 0; } ?>
                        </span>
                    </button>
                    <ul class="dropdown-menu bg-white br-3 bs" style="border:none;width:500px;">
                    
                        <?php if(isset($_SESSION['cart']) && count($_SESSION['cart']) != 0): ?>

                            <?php foreach($_SESSION['cart'] as $cart): ?>
                                <li>
                                    <div class="col-xl-12">
                                        <div class="row">
                                            <div class="col-xl-2 pt-3">
                                                <small>
                                                    <span class="icon-box mr-2"></span>
                                                    <?php echo $cart['cuantity'] ; ?>
                                                </small>
                                            </div>
                                            <div class="col-xl-1 p-0">
                                                <img src="<?php echo helper::storageImg().'products/'.$cart['avatar'] ; ?>" class="img-fluid br">
                                            </div>
                                            <div class="col-xl-3 pt-3">
                                                <small><?php echo $cart['name'] ; ?></small>
                                            </div>
                                            <div class="col-xl-3 pt-3">
                                                <small> <strong>$ <?php echo $cart['price'] ; ?></strong></small>
                                            </div>
                                            <div class="col-xl-3 pt-3">
                                                <small> <strong>$ <?php echo $cart['subtotal'] ; ?></strong></small>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; ?>

                            <li>
                                <hr>
                                <div class="row">
                                    <div class="col-xl-4">
                                        
                                        <?php $json = json_encode($_SESSION['cart']); ?>

                                        <form action="<?php echo helper::base_path().'/products/profile/shell/pay'; ?>"  method="post">
                                            <?php echo "<input name='cart' type='hidden' value='$json'>"; ?>
                                            <button class="btn btn-primary ml-2">
                                                <span class="icon-credit-card2 mr-2"></span> Pagar
                                            </button>                                            
                                        </form>
                                    </div>
                                    <div class="col-xl-8">
                                        <a href="<?php echo helper::base_path().'/products/shell/emptyCart'; ?>">
                                            <div class="col-xl-12 pb-2">
                                                <span class="icon-warning mr-2"></span> Vaciar Carrito de compras
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                                
                        <?php else: ?>

                            
                            <div class="col-xl-12 text-center pt-2">
                                <span class="icon-warning"></span>
                                <p>No posee elementos en su carrito</p>
                            </div>

                        <?php endif; ?>
                            

                       
                        
                    </ul>
                </div>
            </div>

            <!-- AUTH -->

            <?php if(!isset($_SESSION['name'])) : ?>

                <div class="reg-log">
                    <span class="icon-user2"></span>
                    <ul>
                        <li><a href="">Registrarse</a></li>
                        <li><a href="ingreso">Ingresar</a></li>
                    </ul>
                </div>

            <?php else: ?>
                <div id="box-auth">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle cp" style="color:#fff;" id="navbarDropdown"  data-bs-toggle="dropdown" aria-expanded="false">
                                <img class="mr-3" src="<?php echo helper::storageImg().'/users/'.$_SESSION['avatar']; ?>" class="img-auth-web" style="height:30px;width:30px;border-radius:50%;">
                                Matias
                            </a>
                            <ul class="dropdown-menu box-drop-collapse" aria-labelledby="navbarDropdown">
                                <?php if($_SESSION) : ?>
                                    <li>
                                        <a class="dropdown-item" style="color:#fff;" href="<?php echo helper::base_path().'/dashboard/home'; ?>">
                                            <small><span class="icon-dashboard mr-2"></span></small>
                                            Dashboard
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <li>
                                    <a class="dropdown-item" style="color:#fff;" href="#">
                                        <small><span class="icon-user2 mr-2"></span></small>
                                        Perfil
                                    </a>
                                </li>
                                <li><a class="dropdown-item" style="color:#fff;" href="logout">Cerrar Sesion</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                
                
            <?php endif; ?>
            
            <div id="box-btn-menu">
                <span class="icon-menu"></span>
            </div>
        </nav>
    </div>