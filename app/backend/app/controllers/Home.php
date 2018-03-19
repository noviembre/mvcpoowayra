<?php
/**
 * User: GoMiNam
 * Date: 3/17/2018
 * Time: 4:28 PM
 */


class Home extends Controller {

    public function __construct(){
        //si no ha iniciado sesion redirigir a login
        if(!isLoggedIn()){
            redirect('users/login');
        }
        $this->contadorModel = $this->model('Contador');
    }
    public function index(){
        $total = $this->contadorModel->contarAllTours();
        $publicados = $this->contadorModel->contarAllToursPublicados();
        $editando = $this->contadorModel->contarAllToursEditando();

        $data = [
            'total' => $total,
            'publicados' => $publicados,
            'editando' => $editando

        ];

        $this->view('home/index', $data);
    }


}