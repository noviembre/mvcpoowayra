<?php
/**
 * Created by PhpStorm.
 * User: GoMiNam
 * Date: 3/8/2018
 * Time: 5:05 PM
 */
class Project
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getProjects()
    {
        $this->db->query(
            "SELECT * FROM proyectos p LEFT JOIN proyectosdet d ON p.pid=d.pid 
                      WHERE season <= 12 AND season > 0 AND eid = 2 AND terminado = 0
                      AND prioridad != 'ninguna' AND fechaterminado = '0000-00-00 00:00:00'
                      AND contador != meta AND MONTH(fin) = MONTH(CURRENT_DATE()) 
                      AND YEAR(fin) = YEAR(CURRENT_DATE()) ORDER BY fin ASC
                        ");

        $results = $this->db->selectAll();
        return $results;
    }

    #----------------------
    #-- Mi nivel
    public function miNivelModel(){
        $this->db->query(
            "SELECT puntos FROM xposicion WHERE po_id = 1");

        $results = $this->db->single();
        return $results;
    }

}