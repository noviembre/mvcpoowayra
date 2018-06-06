<?php
/**
 * User: GoMiNam
 * Date: 3/27/2018
 * Time: 4:13 PM
 */

class Users extends Controller {

    public function __construct(){
        $this->userModel = $this->model('User');

    }

    public function index(){
        // Check for POST
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // Init data
            //que enviaremos
            $data =[
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'email_err' => '',
                'password_err' => '',
            ];

            // si el  Email esta vacio...
            if(empty($data['email'])){
                //dile que ingrese un email
                $data['email_err'] = 'Por favor Ingrese su email';
            }

            // si el password esta vacio
            if(empty($data['password'])){
                //dile que Ingrese un password
                $data['password_err'] = 'Por favor Ingrese su password';
            }
            // ver si el email de usuario existe
            if($this->userModel->findUserByEmail($data['email'])){
                // User found
            } else {
                // no se pudo encontrar al usuario
                $data['email_err'] = 'El usuario no existe';
            }

            // Make sure errors are empty
            if(empty($data['email_err']) && empty($data['password_err'])){
                // Validated
                $loggedInUser = $this->userModel->login($data['email'], $data['password']);
                if($loggedInUser){
                    //Create session
                    //ejecute la funcion crateUserSession
                    $this->createUserSession($loggedInUser);
                } else {
                    $data['password_err'] = 'Password Incorrecto';
                    $this->view('users/login',$data);

                }

            } else {
                // Load view with errors
                $this->view('users/login', $data);
            }


        } else {
            // Init data
            $data =[
                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => '',
            ];

            // Load view
            $this->view('users/login', $data);
        }
    }

    public function registrar(){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data =[
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirm_password' => trim($_POST['confirm_password']),
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            ];

            // Validate Email
            if(empty($data['email'])){
                $data['email_err'] = 'Por Favor Ingrese su email';
            } else {
                // buscar si ya existe el email
                if($this->userModel->findUserByEmail($data['email'])){
                    $data['email_err'] = 'El Email ya ha sido tomado';
                }
            }

            // Validate Name
            if(empty($data['name'])){
                $data['name_err'] = 'Por Favor Ingrese su Nombre';
            }

            // Validate Password
            if(empty($data['password'])){
                $data['password_err'] = 'Por Favor Ingrese su password';
            } elseif(strlen($data['password']) < 6){
                $data['password_err'] = 'El Password debe ser de al menos 6 caracteres';
            }

            // Validate Confirm Password
            if(empty($data['confirm_password'])){
                $data['confirm_password_err'] = 'Por Favor confirme su password';
            } else {
                if($data['password'] != $data['confirm_password']){
                    $data['confirm_password_err'] = 'los Passwords no coinciden';
                }
            }

            // Make sure errors are empty
            if(empty($data['email_err']) && empty($data['name_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])){
                // Validated

                // Encriptar pass. Hash Password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                // Si se logra regsitrar vaya a...
                if($this->userModel->register($data)){
                    flash('register_success', 'Ya estas registrado ahora puedes Logearte');
                    redirect('users/login');
                } else {
                    die('Algo Salio Mal');
                }

            } else {
                // Load view with errors
                $this->view('users/register', $data);
            }

        } else {
            // Init data
            $data =[
                'name' => '',
                'email' => '',
                'password' => '',
                'confirm_password' => '',
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            ];

            // Load view
            $this->view('users/register', $data);
        }
    }

    public function login(){
        date_default_timezone_set('America/Lima');
        $fechaPeru = date("Y-m-d H:i:s");
        // Check for POST
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            //que enviaremos
            $data =[
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'email_err' => '',
                'password_err' => '',
            ];

            // si el  Email esta vacio...
            if(empty($data['email'])){
                //dile que ingrese un email
                $data['email_err'] = 'Por favor Ingrese su email';
            }

            // si el password esta vacio
            if(empty($data['password'])){
                //dile que Ingrese un password
                $data['password_err'] = 'Por favor Ingrese su password';
            }
            // ver si el email de usuario existe
            if($this->userModel->findUserByEmail($data['email'])){

            } else {
                // no se pudo encontrar al usuario
                $data['email_err'] = 'El usuario no existe';
            }

            // Verificar si el usuario esta baneado
            $baneado = $this->userModel->User_Baneado($data['email']);
            if($baneado){
                $data['password_err'] = 'el Usuario esta Inactivo';
            }

            // Make sure errors are empty
            if(empty($data['email_err']) && empty($data['password_err'])){

                // Validated
                $loggedInUser = $this->userModel->login($data['email'], $data['password']);
                if($loggedInUser){
                    //Guardar registro de inicio
                    $dataRegistro = [
                        'email'=>$data['email'],
                        'fecha'=>$fechaPeru,
                        'actividad'=>'Ingreso',
                    ];
                    $this->userModel->registroIngreso($dataRegistro);

                    $this->createUserSession($loggedInUser);

                } else {

                    $this->userModel->Sumar_intentos($data['email']);

                    $data['password_err'] = 'Password Incorrecto';
                    $this->view('users/login',$data);

                }

            } else {
                // Load view with errors
                $this->view('users/login', $data);
            }


        } else {
            // Init data
            $data =[
                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => '',
            ];

            // Load view
            $this->view('users/login', $data);
        }
    }

    public function createUserSession($user){
        //los datos vienen del Modelo
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_email'] = $user->email;
        $_SESSION['user_name'] = $user->nombre;
        $_SESSION['user_photo'] = $user->photo;
        $_SESSION['user_rol'] = $user->rol;
        //si se inicio la sesion correctamente redirigir a posts
        redirect('home');
    }
    public function logout(){
        //Guardar registro de salida
        date_default_timezone_set('America/Lima');
        $fechaPeru = date("Y-m-d H:i:s");
        $data = [
            'email'=>$_SESSION['user_email'],
            'fecha'=>$fechaPeru,
            'actividad'=>'Salio',
        ];
        $this->userModel->registroIngreso($data);

        unset($_SESSION['user_id']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_name']);
        unset($_SESSION['user_photo']);
        unset($_SESSION['user_rol']);
        session_destroy();
        redirect('users/login');
    }

    //Verificar si el usuaior esta logeado
    public function isLoggedIn(){
        if(isset($_SESSION['user_id'])){
            return true;
        } else {
            return false;
        }
    }



    public function actividades(){

        $act = $this->userModel->listar_All_Actividades();

        $data = [
            'actividad' => $act,
        ];

        $this->view('users/actividades',$data);

    }

    public function historial(){

        $hist = $this->userModel->listar_All_Historial();

        $data = [
            'historial' => $hist,
        ];

        $this->view('users/historial',$data);

    }
}