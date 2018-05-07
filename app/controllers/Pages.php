<?php 
#podemos acceder a Controller desde aqui
class Pages extends Controller {

	public function __construct(){


	}

    public function index(){


        $data = [

        ];

        $this->view('pages/index', $data);
    }

    public function todos(){
        if(!isLoggedIn()){
            redirect('users/login');
        }
        $this->tourModelo = $this->model('Ture');
        $this->userModel = $this->model('User');

        $tours = $this->tourModelo->listarTourAll();

        $data = [
            'tours' => $tours,
        ];

        $this->view('pages/todos',$data);

    }


    public function spanish(){

        if(!isLoggedIn()){
            redirect('users/login');
        }
        $this->tourModelo = $this->model('Ture');
        $this->userModel = $this->model('User');

        $tours = $this->tourModelo->listarTourSpanishAll();

        $data = [
            'tours' => $tours,
        ];

        $this->view('pages/spanish',$data);

    }

    public function english(){
        if(!isLoggedIn()){
            redirect('users/login');
        }
        $this->tourModelo = $this->model('Ture');
        $this->userModel = $this->model('User');

        $tours = $this->tourModelo->listarTourEnglishAll();

        $data = [
            'tours' => $tours,
        ];

        $this->view('pages/english',$data);

    }



    public function add(){
        if(!isLoggedIn()){
            redirect('users/login');
        }
        $this->tourModelo = $this->model('Ture');
        $this->userModel = $this->model('User');

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
            if($this->tourModelo->agregarTour($data)){
                $this->tourModelo->agregarTourTemporal($data);
                // $this->tourModelo->agregarTourPortada($data);
                flash('post_message', 'Se agrego un nuevo tour');
                redirect('pages/temporal');
            } else {
                // Load view with errors
                $this->view('pages/add', $data);
            }


        } else {
            $data = [
                'titulo' => '',
                'duracion' => '',
                'etiquetas' => '',
                'idioma' => ''

            ];

            $this->view('pages/add', $data);
        }
    }

    public function temporal(){

        if(!isLoggedIn()){
            redirect('users/login');
        }
        $this->tourModelo = $this->model('Ture');
        $this->userModel = $this->model('User');

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array
            // $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            date_default_timezone_set('America/Lima');
            $fechaPeru = date("Y-m-d H:i:s");

            $tourIdTemporal = $this->tourModelo->listarTourTemporal();

            $data = [

                'tid' => $tourIdTemporal->tid,
               // 'isimple' => trim($_POST['tisimple']),
                'ifull' => trim($_POST['tifull']),
                'descripcion' => trim($_POST['tdescripcion']),
               // 'nota' => trim($_POST['tnota']),
                'incluye' => trim($_POST['tincluye']),
                'noincluye' => trim($_POST['tnoincluye']),
               // 'quellevar' => trim($_POST['tquellevar'])

            ];


            if($this->tourModelo->agregarTourDetalles($data)){

                $dataRegistro = [
                    'uid'=>$_SESSION['user_id'],
                    'fecha'=>$fechaPeru,
                    'pid'=>$tourIdTemporal->tid,
                    'actividad'=>'Creo',
                ];
                //Guardar Actividad
                $this->userModel->guardar_Reg_Actividad($dataRegistro);

                if($this->tourModelo->eliminarTourTemporal()){
                    flash('post_message', 'Se agrego un nuevo tour');
                    redirect('pages/spanish');
                }    else {
                    // Load view with errors
                    $this->view('pages/todos', $data);
                }

            } else {
                // Load view with errors
                $this->view('pages/temporal', $data);
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

            $this->view('pages/temporal', $data);
        }
    }

    public function edit($tid = null){

        if(!isLoggedIn()){
            redirect('users/login');
        }
        $this->tourModelo = $this->model('Ture');
        $this->userModel = $this->model('User');

        if(!empty(isset($tid))){

            // ver si el tour existe
            if($this->tourModelo->encontrarTourbyId($tid)){
            }else {
                redirect('pages/spanish');
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
                    //'eisimple' => trim($_POST['eisimple']),
                    'eifull' => trim($_POST['eifull']),
                    'edescripcion' => trim($_POST['edescripcion']),
                    //'edolares' => trim($_POST['edolares']),
                   // 'esoles' => trim($_POST['esoles']),
                    //'eetiquetas' => trim($_POST['eetiquetas']),
                    'enota' => trim($_POST['enota']),
                    'eincluye' => trim($_POST['eincluye']),
                    'enoincluye' => trim($_POST['enoincluye']),
                    'equellevar' => trim($_POST['equellevar']),
                    'fecha' => $fechaPeru,
                    'uid' => $user

                ];

                if($this->tourModelo->actualizarTour($data)){

                    $dataRegistro = [
                        'uid'=>$user,
                        'fecha'=>$fechaPeru,
                        'pid'=>$tid,
                        'actividad'=>'Modifico',
                    ];
                    //Guardar Registro si se modifico
                    $this->userModel->guardar_Reg_Actividad($dataRegistro);

                    flash('post_message', 'El tour fue actualizado');
                    redirect('pages/spanish');
                } else {
                    // Load view with errors
                    $this->view('pages/edit', $data);
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
                    //'itinerario' => $tour->itinerario,
                    'full_itinerario' => $tour->full_itinerario,
                    'descripcion' => $tour->descripcion,
                    //'dolares' => $tour->dolares,
                    //'soles' => $tour->soles,
                    //'etiquetas' => $tour->etiquetas,
                    'nota' => $tour->nota,
                    'incluye' => $tour->incluye,
                    'noincluye' => $tour->noincluye,
                    'quellevar' => $tour->quellevar

                ];

                $this->view('pages/edit', $data);
            }

        }else {
            redirect('home/index');
        }

    }


    public function progreso(){

        if(!isLoggedIn()){
            redirect('users/login');
        }
        $this->tourModelo = $this->model('Ture');
        $this->userModel = $this->model('User');

        $tours = $this->tourModelo->listarTourSpanishAll();

        $data = [
            'tours' => $tours,
        ];

        $this->view('pages/progreso',$data);

    }

    public function progresoEn(){

        if(!isLoggedIn()){
            redirect('users/login');
        }
        $this->tourModelo = $this->model('Ture');
        $this->userModel = $this->model('User');

        $tours = $this->tourModelo->listarTourEnglishAll();

        $data = [
            'tours' => $tours,
        ];

        $this->view('pages/progresoEn',$data);

    }
}