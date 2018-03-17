<?php
/**
 * User: GoMiNam
 * Date: 3/17/2018
 * Time: 4:28 PM
 */


class Home extends Controller {

    public function __construct(){
        //si no ha iniciado sesion redirigir a login
        if(!isLoggedIn()){
            redirect('users/login');
        }
      //  $this->tourModel = $this->model('Tour');
    }
    public function index(){

        $data = [

        ];

        $this->view('home/index', $data);
    }

    public function add(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'title' => trim($_POST['title']),
                'body' => trim($_POST['body']),
                'user_id' => $_SESSION['user_id'],
                'title_err' => '',
                'body_err' => ''
            ];

            // Validate data
            if(empty($data['title'])){
                $data['title_err'] = 'Please enter title';
            }
            if(empty($data['body'])){
                $data['body_err'] = 'Please enter body text';
            }

            // Make sure no errors
            if(empty($data['title_err']) && empty($data['body_err'])){
                // Validated
                if($this->postModel->addPost($data)){
                    flash('post_message', 'Post Added');
                    redirect('posts');
                } else {
                    die('Something went wrong');
                }
            } else {
                // Load view with errors
                $this->view('posts/add', $data);
            }

        } else {
            $data = [
                'title' => '',
                'body' => ''
            ];

            $this->view('posts/add', $data);
        }
    }

}