<?php
define("MYSQL_SERVER", "localhost");
define("MYSQL_USER", "dos");
define("MYSQL_PASSWORD", "4+4PezUVCkXRm5+5");
define("MYSQL_DATABASE", "cms_travel");

$mysqli = new mysqli(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DATABASE);
if (mysqli_connect_errno()) {  printf("Fallo la conexion: %s
", mysqli_connect_error());  exit(); }
