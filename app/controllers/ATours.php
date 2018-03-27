<?php
/**
 * User: GoMiNam
 * Date: 3/17/2018
 * Time: 6:01 PM
 */

class ATours extends Controller {

    public function __construct(){
        //si no ha iniciado sesion redirigir a login
        if(!isLoggedIn()){
            redirect('users/login');
        }
        $this->tourModel = $this->model('ATour');
       
    }
    public function index(){

        $tours = $this->tourModel->listarTourAll();

        $data = [
            'tours' => $tours,
        ];

        $this->view('atours/index',$data);

    }

    public function spanish(){

        $tours = $this->tourModel->listarTourSpanishAll();

        $data = [
            'tours' => $tours,
        ];

        $this->view('atours/spanish',$data);

    }

    public function english(){

        $tours = $this->tourModel->listarTourEnglishAll();

        $data = [
            'tours' => $tours,
        ];

        $this->view('atours/english',$data);

    }

    public function published(){

        $tours = $this->tourModel->listarTourPublishedAll();

        $data = [
            'tours' => $tours,
        ];

        $this->view('atours/published',$data);

    }

    public function editing(){

        $tours = $this->tourModel->listarTourEditingAll();

        $data = [
            'tours' => $tours,
        ];

        $this->view('atours/editing',$data);

    }

    public function add(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            date_default_timezone_set('America/Lima');
            $user = $_SESSION['user_id'];
            $fechaPeru = date("Y-m-d H:i:s");
            $aleatorio= mt_rand(100, 999);

            $data = [
                'titulo' => trim($_POST['titulo']),
                'duracion' => trim($_POST['duracion']),
                'etiquetas' => trim($_POST['etiquetas']),
                'idioma' => trim($_POST['idioma']),
                'enlace' => trim($_POST['titulo']),
                'fecha' => $fechaPeru,
                'uid' => $user,
                'aleatorio' => $aleatorio,
                'titulo_err' => ''
            ];

            // Validate data
            if(empty($data['titulo'])){
                $data['titulo_err'] = 'Please enter title';
            }




            if($this->tourModel->agregarTour($data)){
                $this->tourModel->agregarTourTemporal($data);
                // $this->tourModel->agregarTourPortada($data);
                flash('post_message', 'Se agrego un nuevo tour');
                redirect('atours/temporal');
            } else {
                // Load view with errors
                $this->view('atours/add', $data);
            }


        } else {
            $data = [
                'titulo' => '',
                'duracion' => '',
                'etiquetas' => '',
                'idioma' => ''

            ];

            $this->view('atours/add', $data);
        }
    }

    public function temporal(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array
            // $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $tourIdTemporal = $this->tourModel->listarTourTemporal();

            $data = [

                'tid' => $tourIdTemporal->tid,
                'isimple' => trim($_POST['tisimple']),
                'ifull' => trim($_POST['tifull']),
                'descripcion' => trim($_POST['tdescripcion']),
                'nota' => trim($_POST['tnota']),
                'incluye' => trim($_POST['tincluye']),
                'noincluye' => trim($_POST['tnoincluye']),
                'quellevar' => trim($_POST['tquellevar'])

            ];


            if($this->tourModel->agregarTourDetalles($data)){
                if($this->tourModel->eliminarTourTemporal()){
                    flash('post_message', 'Se agrego un nuevo tour');
                    redirect('tours');
                }    else {
                    // Load view with errors
                    $this->view('atours/temporal', $data);
                }

            } else {
                // Load view with errors
                $this->view('atours/temporal', $data);
            }


        } else {
            // Get existing post from model
            $tour = $this->tourModel->listarTourTemporal();

            $data = [

                'titulo' => $tour->titulo,
                'duracion' => $tour->duracion,
                'estado' => $tour->estado,
                'ramdon' => $tour->ramdon

            ];

            $this->view('atours/temporal', $data);
        }
    }

    public function edit($tid = null){
        if(!empty(isset($tid))){

            // ver si el tour existe
            if($this->tourModel->encontrarTourbyId($tid)){
            }else {
                redirect('tours');
            }
            // si el id existe entonces prosiga
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                // Sanitize POST array
                // $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);

                date_default_timezone_set('America/Lima');
                $fechaPeru = date("Y-m-d H:i:s");

                $user = $_SESSION['user_id'];
                $data = [
                    'tid' => $tid,
                    'etitulo' => trim($_POST['etitulo']),
                    'eduracion' => trim($_POST['eduracion']),
                    'eestado' => trim($_POST['eestado']),
                    'eisimple' => trim($_POST['eisimple']),
                    'eifull' => trim($_POST['eifull']),
                    'edescripcion' => trim($_POST['edescripcion']),
                    'edolares' => trim($_POST['edolares']),
                    'esoles' => trim($_POST['esoles']),
                    'eetiquetas' => trim($_POST['eetiquetas']),
                    'enota' => trim($_POST['enota']),
                    'eincluye' => trim($_POST['eincluye']),
                    'enoincluye' => trim($_POST['enoincluye']),
                    'equellevar' => trim($_POST['equellevar']),
                    'fecha' => $fechaPeru,
                    'uid' => $user

                ];

                if($this->tourModel->actualizarTour($data)){
                    flash('post_message', 'El tour fue actualizado');
                    redirect('atours/spanish');
                } else {
                    // Load view with errors
                    $this->view('atours/edit', $data);
                }


            } else {
                // Get existing post from model
                $tour = $this->tourModel->listarTourById($tid);

                $data = [
                    'tid' => $tid,
                    'titulo' => $tour->titulo,
                    'duracion' => $tour->duracion,
                    'estado' => $tour->estado,
                    'lang' => $tour->lang,
                    'itinerario' => $tour->itinerario,
                    'full_itinerario' => $tour->full_itinerario,
                    'descripcion' => $tour->descripcion,
                    'dolares' => $tour->dolares,
                    'soles' => $tour->soles,
                    'etiquetas' => $tour->etiquetas,
                    'nota' => $tour->nota,
                    'incluye' => $tour->incluye,
                    'noincluye' => $tour->noincluye,
                    'quellevar' => $tour->quellevar

                ];

                $this->view('atours/edit', $data);
            }

        }else {
            redirect('tours');
        }

    }



}