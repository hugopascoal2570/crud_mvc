<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;
use \src\models\Lei;

class HomeController extends Controller {

    public function index() {
        $usuarios = Usuario::select()->execute();

        $this->render('home',[
            'usuarios' =>$usuarios
        ]); 
    }

    public function Leisindex() {
        $leis = Lei::select()->execute();

        $this->render('lei_home',[
            'leis' =>$leis
        ]); 
    }

    public function erro(){
        $this->render('erro');
    }

    
}