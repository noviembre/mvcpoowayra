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
    public function index($url = null){
        //recibe el url
        // compara si esta vacio
	    if(!empty(isset($url))){

            // compara si el url existe
            if($this->tourModel->encontrarTourbyUrl($url)){
            }else {
                redirect('index');
            }
            //
            $tour = $this->tourModel->listarTourByUrl($url);

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