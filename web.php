<?php

    return [


        array(
            'path' => 'web/Error',
            'controller' => 'homeController',
            'method' => 'errorWeb',
            'type' => 'get',
        ),

        // COMPANY

        array(
            'path' => 'dashboard/company',
            'controller' => 'companyController',
            'method' => 'indexCompany',
            'type' => 'get',
        ),
        array(
            'path' => 'dashboard/company/edit',
            'controller' => 'companyController',
            'method' => 'editCompany',
            'type' => 'get',
        ),
        array(
            'path' => 'dashboard/company/edit/update',
            'controller' => 'companyController',
            'method' => 'updateCompanyData',
            'type' => 'post',
        ),
        array(
            'path' => 'dashboard/company/edit/img/update',
            'controller' => 'companyController',
            'method' => 'updateImgCompany',
            'type' => 'post',
        ),
        array(
            'path' => 'dashboard/company/edit/banner/update',
            'controller' => 'companyController',
            'method' => 'updateBannerCompany',
            'type' => 'post',
        ),
        //INDEX
        array(
            'path' => '',
            'controller' => 'homeController',
            'method' => 'index',
            'type' => 'get',
        ),

        
        array(
            'path' => 'shop',
            'controller' => 'productController',
            'method' => 'shop',
            'type' => 'get',
        ),
        array(
            'path' => 'Shopping/id',
            'controller' => 'productController',
            'method' => 'Shopping',
            'type' => 'get',
        ),
        array(
            'path' => 'productos',
            'controller' => 'productController',
            'method' => 'index',
            'type' => 'get',
        ),
        array(
            'path' => 'productos/id',
            'controller' => 'productController',
            'method' => 'details',
            'type' => 'get',
        ),
        array(
            'path' => 'login',
            'controller' => 'usersController',
            'method' => 'logIn',
            'type' => 'get',
        ),
        array(
            'path' => 'ingreso',
            'controller' => 'usersController',
            'method' => 'ingreso',
            'type' => 'get',
        ),
        array(
            'path' => 'logout',
            'controller' => 'usersController',
            'method' => 'logout',
            'type' => 'get',
        ),

        array(
            'path' => 'dashboard/home',
            'controller' => 'homeController',
            'method' => 'dashboardInit',
            'type' => 'get',
        ),

        /* DASHBOARD -> users */

        array(
            'path' => 'dashboard/users/create',
            'controller' => 'usersController',
            'method' => 'crear',
            'type' => 'get',
        ),

        array(
            'path' => 'dashboard/users/store',
            'controller' => 'usersController',
            'method' => 'store',
            'type' => 'post',
        ),

        array(
            'path' => 'dashboard/users/edit',
            'controller' => 'usersController',
            'method' => 'store',
            'type' => 'post',
        ),


        array(
            'path' => 'dashboard/users/id',
            'controller' => 'usersController',
            'method' => 'index',
            'type' => 'get',
        ),

        array(
            'path' => 'dashboard/users/profile/id',
            'controller' => 'usersController',
            'method' => 'profileUserDash',
            'type' => 'get',
        ),

        array(
            'path' => 'dashboard/users/edit/id',
            'controller' => 'usersController',
            'method' => 'edit',
            'type' => 'get',
        ),

        array(
            'path' => 'dashboard/users/update/user/id',
            'controller' => 'usersController',
            'method' => 'updateUser',
            'type' => 'post',
        ),

        array(
            'path' => 'dashboard/users/update/datas/id',
            'controller' => 'usersController',
            'method' => 'updateDatas',
            'type' => 'post',
        ),

        array(
            'path' => 'dashboard/users/update/avatar',
            'controller' => 'usersController',
            'method' => 'updateUserAvatar',
            'type' => 'post',
        ),

        array(
            'path' => 'dashboard/users/delete/id',
            'controller' => 'usersController',
            'method' => 'deleteUser',
            'type' => 'post',
        ),

        /* DASHBOARD -> providers */

        array(
            'path' => 'dashboard/providers',
            'controller' => 'usersController',
            'method' => 'listProviders',
            'type' => 'get',
        ),

        /* DASHBOARD -> customers */

        array(
            'path' => 'dashboard/customers',
            'controller' => 'usersController',
            'method' => 'listCustomers',
            'type' => 'get',
        ),

        /* DASHBOARD -> products */
        
        array(
            'path' => 'dashboard/products/id',
            'controller' => 'productController',
            'method' => 'dashProducts',
            'type' => 'get',
        ),
        array(
            'path' => 'dashboard/products/profile/id',
            'controller' => 'productController',
            'method' => 'dashProductsProfile',
            'type' => 'get',
        ),

        /* DASHBOARD -> products -> create */

        array(
            'path' => 'dashboard/products/nuevo',
            'controller' => 'productController',
            'method' => 'crear',
            'type' => 'get',
        ),
        array(
            'path' => 'dashboard/products/store',
            'controller' => 'productController',
            'method' => 'store',
            'type' => 'get',
        ),

        /* DASHBOARD -> products -> update */

        array(
            'path' => 'dashboard/products/edit/id',
            'controller' => 'productController',
            'method' => 'edit',
            'type' => 'get',
        ),
        array(
            'path' => 'dashboard/products/actualizar',
            'controller' => 'productController',
            'method' => 'actualizar',
            'type' => 'post',
        ),
        array(
            'path' => 'dashboard/products/actualizar/imagen',
            'controller' => 'productController',
            'method' => 'updateImage',
            'type' => 'post',
        ),

        /* DASHBOARD -> products -> delete */

        array(
            'path' => 'dashboard/products/delete/id',
            'controller' => 'productController',
            'method' => 'borrar',
            'type' => 'get',
        ),

        /* DASHBOARD -> categorias */ 

        array(
            'path' => 'dashboard/categories',
            'controller' => 'categoriesController',
            'method' => 'index',
            'type' => 'get',
        ),

        array(
            'path' => 'dashboard/categories/store',
            'controller' => 'categoriesController',
            'method' => 'store',
            'type' => 'post',
        ),

        array(
            'path' => 'dashboard/categories/delete/id',
            'controller' => 'categoriesController',
            'method' => 'borrar',
            'type' => 'post',
        ),

        array(
            'path' => 'dashboard/categories/pdf',
            'controller' => 'categoriesController',
            'method' => 'pdf',
            'type' => 'post',
        ),

        /* DASHBOARD -> brand */

        array(
            'path' => 'dashboard/brands',
            'controller' => 'brandsController',
            'method' => 'index',
            'type' => 'get',
        ),

        array(
            'path' => 'dashboard/brands/delete/id',
            'controller' => 'brandsController',
            'method' => 'borrar',
            'type' => 'get',
        ),

        array(
            'path' => 'dashboard/brands/store',
            'controller' => 'brandsController',
            'method' => 'store',
            'type' => 'get',
        ),

        array(
            'path' => 'dashboard/brands/pdf',
            'controller' => 'brandsController',
            'method' => 'pdf',
            'type' => 'post',
        ),


        /* DASHBOARD -> importar stock */ 

        array(
            'path' => 'dashboard/products/stock/import/id',
            'controller' => 'productController',
            'method' => 'importStock', 
            'type' => 'get',
        ),

        array(
            'path' => 'dashboard/products/stock/import/update/id',
            'controller' => 'productController',
            'method' => 'updateStock', 
            'type' => 'get',
        ),

        /* DASHBOARD -> compras */
        

        array(
            'path' => 'dashboard/products/purchases/listPurchases',
            'controller' => 'purchasesController',
            'method' => 'listPurchases', 
            'type' => 'get',
        ),

        array(
            'path' => 'dashboard/products/purchases',
            'controller' => 'purchasesController',
            'method' => 'index', 
            'type' => 'get',
        ),

        array(
            'path' => 'dashboard/products/purchases/getCuantities',
            'controller' => 'purchasesController',
            'method' => 'getCuantities', 
            'type' => 'get',
        ),

        array(
            'path' => 'dashboard/products/purchases/chooseProducts',
            'controller' => 'purchasesController',
            'method' => 'chooseProducts', 
            'type' => 'post',
        ), 
        
        array(
            'path' => 'dashboard/products/purchases/processQuantities',
            'controller' => 'purchasesController',
            'method' => 'processQuantities', 
            'type' => 'post',
        ),

        array(
            'path' => 'dashboard/products/purchases/getPurchase',
            'controller' => 'purchasesController',
            'method' => 'getPurchase', 
            'type' => 'post',
        ),
        
        /* WEB -> ventas */

        array(
            'path' => 'products/profile/shell',
            'controller' => 'shellController',
            'method' => 'addToCart', 
            'type' => 'get',
        ),

        array(
            'path' => 'products/profile/shell/pay',
            'controller' => 'shellController',
            'method' => 'cart', 
            'type' => 'get',
        ),
        
        array(
            'path' => 'products/profile/shell/MP',
            'controller' => 'shellController',
            'method' => 'passarellaMP', 
            'type' => 'get',
        ),

        /**/

        array(
            'path' => 'products/profile/shell/success',
            'controller' => 'shellController',
            'method' => 'successToPay', 
            'type' => 'get',
        ),
        array(
            'path' => 'products/profile/shell/error',
            'controller' => 'shellController',
            'method' => 'errorToPay', 
            'type' => 'get',
        ),
        array(
            'path' => 'products/profile/shell/pending',
            'controller' => 'shellController',
            'method' => 'pendingToPay', 
            'type' => 'get',
        ),


        /**/



        array(
            'path' => 'products/shell/emptyCart',
            'controller' => 'shellController',
            'method' => 'emptyCart', 
            'type' => 'get',
        ),


        array(
            'path' => 'products/shell/toPay',
            'controller' => 'shellController',
            'method' => 'toPay', 
            'type' => 'get',
        ),

        array(
            'path' => 'products/shell/deleteToCart',
            'controller' => 'shellController',
            'method' => 'deleteProductCart', 
            'type' => 'get',
        ),

        /* DAHSBOARD -> ventas */

        
        array(
            'path' => 'dashboard/products/shells',
            'controller' => 'shellController',
            'method' => 'index', 
            'type' => 'get',
        ),
        array(
            'path' => 'dashboard/products/shells/profile/id',
            'controller' => 'shellController',
            'method' => 'details', 
            'type' => 'get',
        ),













        array(
            'path' => 'migrate',
            'controller' => 'migrationsController',
            'method' => 'migrate',
            'type' => 'get',
        ),
        array(
            'path' => 'seed',
            'controller' => 'seederController',
            'method' => 'createSeeders',
            'type' => 'get',
        ),
        array(
            'path' => 'imagen',
            'controller' => 'usersController',
            'method' => 'uploadImg',
            'type' => 'get',
        ),
        array(
            'path' => 'Usuarios/Perfil/id',
            'controller' => 'usersController',
            'method' => 'profile',
            'type' => 'get',
        ),
        array(
            'path' => 'ddd',
            'controller' => 'usersController',
            'method' => 'index',
            'type' => 'get',
        ),
        array(
            'path' => 'edit',
            'controller' => 'usersController',
            'method' => 'Editar',
            'type' => 'get',
        )        
        
    ];

?>