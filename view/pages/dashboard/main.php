<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/MVC-ORM-MASTER/public/css/style.css"> 
    <link rel="stylesheet" href="http://localhost/MVC-ORM-MASTER/public/css/colors.css">   
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="http://localhost/MVC-ORM-MASTER/public/css/icons/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <title>Main</title>
</head>
<body>

    <?php session_start(); ?>

    <div class="col-xl-12 bg-cus-b0">
    
        <div class="row">
            <div class="col-xl-2 box bg-cus-05" style="box-shadow:0px 0px 25px rgba(0,0,0,.2);">
                <?php view::component('dashboard/nav');  ?>
            </div>
            <div class="col-xl-10 p-0">
                <?php view::component('dashboard/top-nav'); ?>
                <?php view::page($compact);?>
            </div>
        </div>
    </div>


    
    <!-- JavaScript Bundle with Popper -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    
</body>
</html>