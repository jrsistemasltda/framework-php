<?php 
namespace app\controllers;

class HomeController{

    public function index(){
        //var_dump('Home');
        view('home', ['name' => 'Jorge']);
    }

}
?>