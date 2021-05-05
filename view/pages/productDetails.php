<div class="container">

    <!-- componete de productos mas vistos o vendidos -->

    <?php view::component('web/profile/profileProduct',$compact); ?>

    <?php view::component('productsHome',$compact);?>

    <?php view::component('comentsProcProfile',$compact); ?>

</div>