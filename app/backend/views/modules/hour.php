<div class="page-head">
    <!-- Page heading -->
    <h2 class="pull-left">


        <!-- page meta -->
        <span class="page-meta">
                 <?php
                 switch (date("l")){
                     case "Monday":
                         $dia = "Lunes";
                         break;
                     case "Tuesday":
                         $dia = "Martes";
                         break;
                     case "Wednesday":
                         $dia = "Miercoles";
                         break;
                     case "Thursday":
                         $dia = "Jueves";
                         break;
                     case "Friday":
                         $dia = "Viernes";
                         break;
                     case "Saturday":
                         $dia = "Sabado";
                         break;
                     case "Sunday":
                         $dia = "Domingo";
                         break;
                 }

                 switch (date("F")){
                     case "January":
                         $mes = "Enero";
                         break;
                     case "February":
                         $mes = "Febrero";
                         break;
                     case "March":
                         $mes = "Marzo";
                         break;
                     case "April":
                         $mes = "Abril";
                         break;
                     case "May":
                         $mes = "Mayo";
                         break;
                     case "June":
                         $mes = "Junio";
                         break;
                     case "July":
                         $mes = "Julio";
                         break;
                     case "August":
                         $mes = "Agosto";
                         break;
                     case "September":
                         $mes = "Septiembre";
                         break;
                     case "October":
                         $mes = "Octubre";
                         break;
                     case "November":
                         $mes = "Noviembre";
                         break;
                     case "December":
                         $mes = "Diciembre";
                         break;

                 }
                 echo $dia.", ".date("d")." de ".$mes." de ".date("Y");

                 ?>



            </span>
    </h2>





    <!-- Breadcrumb -->
    <div class="bread-crumb pull-right">
        <a href="index.html"><i class="icon-home"></i> Home</a>
        <!-- Divider -->
        <span class="divider">/</span>
        <a href="#" class="bread-current">Dashboard</a>
    </div>

    <div class="clearfix"></div>

</div>