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

            $detalles = $this->detallesModel->listarDetalleTourById($tour->tid);

            $galeria = $this->galeriaModel->llamarTresSlides($tour->tid);



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

    public function reservar()
    {
        $this->rsvModel = $this->model('Reserva');

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            date_default_timezone_set('America/Lima');
            $fechaPeru = date("Y-m-d H:i:s");

            $data = [
                'reservar_consultar' => trim($_POST['booking_or_no']),
                'tour_id' => trim($_POST['tid']),
                'nombres' => trim($_POST['nombres']),
                'correo' => trim($_POST['correo']),
                'created_at' => $fechaPeru,
                'cuando'=> trim($_POST['fecha']),
                'cantidad'=> trim($_POST['cantidad']),
                'mensaje' => trim($_POST["mensaje"]),

            ];


            if($this->rsvModel->add($data)){
                redirect('index');

            } else {
                die('Something went wrong');
            }

        } else {
            die('Something went wrong');
        }



    }





}