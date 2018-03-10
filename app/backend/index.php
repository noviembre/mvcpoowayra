<?php

require_once "models/enlaces.php";
require_once "models/ingreso.php";
require_once "models/gestorSlide.php";


require_once "controllers/template.php";
require_once "controllers/enlaces.php";
require_once "controllers/ingreso.php";
require_once "controllers/gestorSlide.php";

// TOURS
require_once "models/gestorTours.php";
require_once "controllers/gestorTours.php";

/* TAREAS  */
require_once "models/gestorTareas.php";
require_once "controllers/gestorTareas.php";

/* GALERIA  */
require_once "models/gestorGaleria.php";
require_once "controllers/gestorGaleria.php";

/* PERFIL  */
require_once "models/gestorPerfil.php";
require_once "controllers/gestorPerfil.php";

$template = new TemplateController();
$template -> template();