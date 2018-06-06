<?php
/**
 * User: GoMiNam
 * Date: 3/13/2018
 * Time: 6:07 AM
 */

class Aboutus extends Controller {

    public function __construct(){

    }


    public function index(){
        $data = [ ];

        $this->view('aboutus/index', $data);

    }

}