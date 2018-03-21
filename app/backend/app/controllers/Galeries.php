<?php
/**
 * Created by PhpStorm.
 * User: GoMiNam
 * Date: 3/21/2018
 * Time: 5:54 AM
 */

class Galeries extends Controller{

    public function __construct(){

        if(!isLoggedIn()){
            redirect('users/login');
        }
        $this->GaleryModel = $this->model('Galery');
        $this->tourModel = $this->model('Tour');

    }

    public function index(){

        $galeria = $this->GaleryModel->listarGalerySpanishAll();

        $data = [
            'galeria' => $galeria,
        ];

        $this->view('galeries/index',$data);

    }

    public function tours(){

        $galeryByTour = $this->GaleryModel->listarGaleryTourSpanishAll();

        $data = [
            'galeryByTour' => $galeryByTour,
        ];

        $this->view('galeries/tours',$data);

    }

    public function editTours($id = null){

        if(!empty(isset($id))){

            // ver si el tour existe
            if($this->tourModel->encontrarTourbyId($id)){
            }else {
                redirect('galeries/tours');
            }
            // si el id existe entonces prosiga
            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                // $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);

                date_default_timezone_set('America/Lima');
                $fechaPeru = date("Y-m-d H:i:s");

                $data = [
                    'gid' => trim($_POST['sid']),
                    'gtitulo' => trim($_POST['stitulo']),
                    'gruta' => trim(substr($_POST['sruta'],11)),
                    'fecha' => $fechaPeru

                ];

                if($this->GaleryModel->actualizarSlide($data)){
                    flash('post_message', 'El slide fue actualizada');
                    redirect('galeries/tours');
                } else {
                    // Load view with errors
                    $this->view('galeries/editslide', $data);
                }


            } else {
                // mostrar datos que son enviados
                //Seleccionar * de galeria donde el tid = id
                $galeria = $this->GaleryModel->listarTour($id);

                $galeriaSlide = $this->GaleryModel->listarTourSlide($galeria->tid);
                $tourNombre = $this->GaleryModel->listarTourNombre();

                $data = [

                    'galeria' => $galeria,
                    'galeriaSlide' => $galeriaSlide,
                    'tourNombre' => $tourNombre
                ];

                $this->view('galeries/editslide', $data);
            }

        }else {
            redirect('galeries/tours');
        }

    }

    public function edit($id = null){
    if(!empty(isset($id))){

        // ver si el tour existe
        if($this->GaleryModel->encontrarGalerybyId($id)){
        }else {
            redirect('galeries');
        }
        // si el id existe entonces prosiga
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            // $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);

            date_default_timezone_set('America/Lima');
            $fechaPeru = date("Y-m-d H:i:s");

            $data = [
                'gid' => $id,
                'gtitulo' => trim($_POST['gtitulo']),
                'gruta' => trim(substr($_POST['gruta'],12)),
                'fecha' => $fechaPeru

            ];

            if($this->GaleryModel->actualizarGalery($data)){
                flash('post_message', 'La Galeria fue actualizada');
                redirect('galeries');
            } else {
                // Load view with errors
                $this->view('galeries/edit', $data);
            }


        } else {
            // Get existing post from model
            $galeria = $this->GaleryModel->listarGaleryById($id);
            $galeriaUrl = $this->GaleryModel->listarGalery();
            $tourNombre = $this->GaleryModel->listarTourNombre();

            $data = [

                'galeria' => $galeria,
                'url' => $galeriaUrl,
                'tourNombre' => $tourNombre
            ];

            $this->view('galeries/edit', $data);
        }

    }else {
        redirect('galeries');
    }

}


}