<?php 

class Contactus extends Controller {

	public function __construct(){

	}


    public function index(){
        $data = [ ];

        $this->view('contactus/index', $data);

    }

}