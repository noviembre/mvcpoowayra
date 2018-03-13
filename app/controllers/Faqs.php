<?php
/**
 * User: GoMiNam
 * Date: 3/13/2018
 * Time: 6:07 AM
 */

class Faqs extends Controller {

    public function __construct(){

    }


    public function index(){
        $data = [ ];

        $this->view('faqs/index', $data);

    }

}