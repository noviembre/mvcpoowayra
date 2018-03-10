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
    public function index($id){
        //recibimos el $id
        $tour = $this->tourModel->getTourById($id);

        $detalles = $this->detallesModel->listarDetalleTourById($tour->pid);
        $galeria = $this->galeriaModel->llamarTresSlides($tour->pid);

        $data = [
            'tours' => $tour,
            'detalles' => $detalles,
            'galeria' => $galeria
        ];

        $this->view('tours/index', $data);
    }



}