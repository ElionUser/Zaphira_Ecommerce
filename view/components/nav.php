<div id="main-box" class="col-xl-12">
    <div class="row">
        <div class="col-xl-12 bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 py-2">
                        <img id="logo" src="<?php echo helper::storageImg().'company/'.$compact['company']->img; ?>">
                    </div>
                    <div class="col-xl-6 col-lg-4 col-md-4 col-sm-4 col-4"></div>
                    
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-4 py-3">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4  py-3">
                                
                                <div class="dropdown cp">
                                    <div class="dropdown-toggle" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="icon-cart"></span>
                                        <span class="box-cart-number">
                                            <?php if(isset($_SESSION['cart'])) { echo count($_SESSION['cart']); } else { echo 0; } ?>
                                        </span>
                                    </div>

                                    <!-- CARRITO DENTRO DEL DROPDOWN -->

                                    <ul class="dropdown-menu dropdown-cart">

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
                            <?php if(isset($_SESSION['name'])): ?>
                                <div class="col-xl-8 col-lg-4 col-md-4 col-sm-4 col-4 py-3">
                                    <div class="dropdown cp">
                                        <div class="dropdown-toggle" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="<?php echo helper::storageImg().'/users/'.$_SESSION['avatar']; ?>" class="img-auth-web">
                                            <?php echo $_SESSION['name']; ?>
                                            <!-- <span class="icon-user2" style="border-radius:50%;border:1px solid black;"></span> -->
                                        </div>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <?php if(0 == 0) : ?>
                                                <li>
                                                    <a class="dropdown-item" href="<?php echo helper::base_path().'/dashboard/home'; ?>">
                                                        <small><span class="icon-dashboard mr-2"></span></small>
                                                        Dashboard
                                                    </a>
                                                </li>
                                            <?php endif; ?>
                                            <li>
                                                <a class="dropdown-item" href="<?php echo helper::base_path().'/logout'; ?>">
                                                    <span class="icon-log-out mr-2"></span>   Cerrar Sesion
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            <?php else:?>
                                <div class="col-xl-8 col-lg-4 col-md-4 col-sm-4 col-4 py-3 cp">
                                    <div class="dropdown-toggle" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="icon-log-in"></span>
                                    </div>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li><a href="<?php echo helper::base_path().'/ingreso';?>" class="dropdown-item">Ingresar</a></li>
                                        <li><a class="dropdown-item" href="#">Registrarse</a></li>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-xl-12 bg-cus-07">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <button class="navbar-toggler float-right" style="padding:15px;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-menu f-w" ></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="<?php echo helper::base_path(); ?>" class="nav-link active" aria-current="page" >INICIO</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo helper::base_path().'/shop';?>" class="nav-link">SHOP</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
