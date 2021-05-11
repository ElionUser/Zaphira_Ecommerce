<?php view::component('slide',$compact['products']); ?>

<div class="container" style="margin-top:-100px;position:relative;z-index:20;">

    <div class="col-xl-12 p-0">
        <!-- componente de servicios  -->

        <?php view::component('services'); ?>

        <?php view::component('web/home/promos'); ?>

        <?php view::component('productsHome',$compact); ?>

    </div>

</div>