<?php 
#podemos acceder a Controller desde aqui
class Pages extends Controller {

	public function __construct(){

	}
	//b. llamar al modelo de la funcion

    public function index(){

        $data = [

        ];

        $this->view('pages/index', $data);
    }

}