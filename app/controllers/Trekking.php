<?php 

class Trekking extends Controller {

	public function __construct(){

	}


    public function index(){
        $data = [ ];

        $this->view('trekking/index', $data);

    }

}