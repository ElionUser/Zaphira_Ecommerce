<?php view::component('slide',$compact['products']); ?>

<div class="container bs bg-white" style="margin-top:-100px;position:relative;z-index:20;">

    <div class="col-xl-12 p-0">
        <!-- componente de servicios  -->

        <?php view::component('services'); ?>

        <?php view::component('productsCategories'); ?>

        <?php view::component('menOrWomen'); ?>

        <!-- componete de productos mas vistos o vendidos -->

        <?php view::component('productsHome',$compact); ?>

    </div>

</div>