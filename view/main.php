<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/MVC-ORM-MASTER/public/css/style.css">  
    <link rel="stylesheet" href="http://localhost/MVC-ORM-MASTER/public/css/colors.css">          
    <link rel="stylesheet" href="http://localhost/MVC-ORM-MASTER/public/css/icons/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Main</title>
</head>
<body>

    <?php session_start(); ?>

    <?php view::component('nav',$compact); ?>
           
    <?php view::page($compact); ?>
        
    <?php view::component('footer',$compact); ?>


    <!-- <script src="http://localhost/MVC-ORM-master/public/js/api/shop/test.js"></script> -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>