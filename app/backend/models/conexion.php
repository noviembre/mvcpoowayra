<?php

class Conexion{

	public function conectar(){


        $params = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

        $link = new PDO("mysql:host=localhost;dbname=cms_travel","dos","4+4PezUVCkXRm5+5",$params);

		return $link;


	}

}
