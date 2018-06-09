<?php
/**
 * User: GoMiNam
 * Date: 3/17/2018
 * Time: 6:01 PM
 */

class Tures extends Controller {

    public function __construct(){
        //si no ha iniciado sesion redirigir a login
        if(!isLoggedIn()){
            redirect('users/login');
        }
        $this->tourModelo = $this->model('Ture');

    }
    public function index(){

        $tours = $this->tourModelo->listarTourAll();

        $data = [
            'tours' => $tours,
        ];

        $this->view('tures/index',$data);

    }

    public function spanish(){

        $tours = $this->tourModelo->listarTourSpanishAll();

        $data = [
            'tours' => $tours,
        ];

        $this->view('tures/spanish',$data);

    }

    public function english(){

        $tours = $this->tourModelo->listarTourEnglishAll();

        $data = [
            'tours' => $tours,
        ];

        $this->view('tures/english',$data);

    }

    public function published(){

        $tours = $this->tourModelo->listarTourPublishedAll();

        $data = [
            'tours' => $tours,
        ];

        $this->view('tures/published',$data);

    }

    public function editing(){

        $tours = $this->tourModelo->listarTourEditingAll();

        $data = [
            'tours' => $tours,
        ];

        $this->view('tures/editing',$data);

    }

    public function add(){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){


            // Sanitize POST array
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            date_default_timezone_set('America/Lima');


            $fechaPeru = date("Y-m-d H:i:s");
            $aleatorio= mt_rand(1, 99);
            $data = [
                'titulo' => trim($_POST['titulo']),
                'etiquetas' => trim($_POST['etiquetas']),
                'idioma' => trim($_POST['idioma']),
                'fecha' => $fechaPeru,
                'uid' => $_SESSION['user_id'],
                'aleatorio' => $aleatorio,

            ];



            if($this->tourModelo->agregarTour($data)){
                $this->tourModelo->agregarTourTemporal($data);
                // $this->tourModelo->agregarTourPortada($data);
                flash('post_message', 'Se agrego un nuevo tour');
                redirect('tures/temporal');
            } else {
                // Load view with errors
                $this->view('tures/add', $data);
            }


        } else {
            $data = [
                'titulo' => '',
                'duracion' => '',
                'etiquetas' => '',
                'idioma' => ''

            ];

            $this->view('tures/add', $data);
        }
    }





    public function temporal(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array
            // $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $tourIdTemporal = $this->tourModelo->listarTourTemporal();

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


            if($this->tourModelo->agregarTourDetalles($data)){
                if($this->tourModelo->eliminarTourTemporal()){
                    flash('post_message', 'Se agrego un nuevo tour');
                    redirect('tures');
                }    else {
                    // Load view with errors
                    $this->view('tures/temporal', $data);
                }

            } else {
                // Load view with errors
                $this->view('tures/temporal', $data);
            }


        } else {
            // Get existing post from model
            $tour = $this->tourModelo->listarTourTemporal();

            $data = [

                'titulo' => $tour->titulo,
                'duracion' => $tour->duracion,
                'estado' => $tour->estado,
                'ramdon' => $tour->ramdon

            ];

            $this->view('tures/temporal', $data);
        }
    }

    public function edit($tid = null){
        if(!empty(isset($tid))){

            // ver si el tour existe
            if($this->tourModelo->encontrarTourbyId($tid)){
            }else {
                redirect('tures');
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

                if($this->tourModelo->actualizarTour($data)){
                    flash('post_message', 'El tour fue actualizado');
                    redirect('tures/spanish');
                } else {
                    // Load view with errors
                    $this->view('tures/edit', $data);
                }


            } else {
                // Get existing post from model
                $tour = $this->tourModelo->listarTourById($tid);

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

                $this->view('tures/edit', $data);
            }

        }else {
            redirect('tures');
        }

    }



}