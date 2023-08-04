<?php 
return[
    'get' => [
        '/' => 'HomeController@index',
        '/login'=>'LoginController@index',
        '/veiculos'=>'VeiculosController@index'
    ],
    'post' => [
        '/login'=>'LoginController@store',

    ]
];
?>