<?php 
#podemos acceder a Controller desde aqui
class Pages extends Controller {

	public function __construct(){

        $this->tourModel = $this->model('Tour');


	}
	//b. llamar al modelo de la funcion

    public function index(){
        // llamar al modelo
        $tours = $this->tourModel->getTours();

        $data = [
            'tours' => $tours
        ];

        $this->view('pages/index', $data);
    }

}