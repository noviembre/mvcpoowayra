<?php 
#podemos acceder a Controller desde aqui
class Tours extends Controller {

	public function __construct(){

	    //llamando al Modelo por el nombre de la clase
        $this->tourModel = $this->model('Tour');
        $this->detallesModel = $this->model('Detalle');
        $this->galeriaModel = $this->model('Galeria');

	}

    // el $id que recibe show viene de la url
    public function index($id = null){
        //recibe el id
        // compara si esta vacio
	    if(!empty(isset($id))){

            // compara si el id existe
            if($this->tourModel->encontrarTourById($id)){
            }else {
                redirect('index');
            }
            //
            $tour = $this->tourModel->getTourById($id);

            $detalles = $this->detallesModel->listarDetalleTourById($tour->pid);


            $galeria = $this->galeriaModel->llamarTresSlides($tour->pid);

            $data = [
                'tours' => $tour,
                'detalles' => $detalles,
                'galeria' => $galeria
            ];

            $this->view('tours/index', $data);

        }  else{
	        redirect('index');
        }


    }



}