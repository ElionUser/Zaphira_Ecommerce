
    
<!-- HEADER -->
<?php resources::component('nav'); ?>
<!-- SLIDE -->
<?php resources::component('slide'); ?>
<!-- MOVIES -->
<?php resources::component('movies',[
'product' => $param['products'],
]); ?>
<!-- FOOTER -->
<?php resources::component('footer'); ?>

    