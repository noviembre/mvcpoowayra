<?php 

class Pages extends Controller {
	public function __construct(){
        $this->userModel = $this->model('User');
		
	}

    public function index(){
        // Init data
        $data =[];

        // Load view
        $this->view('pages/index', $data);
	}



}