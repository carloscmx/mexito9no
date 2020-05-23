<?php
include "Empleado.php";
$ObjEmpleado= new Empleado("jose","Can Luna",35);

echo $ObjEmpleado->getFristName();
echo "&nbsp;";
echo $ObjEmpleado->getLastName();
echo "&nbsp;";
echo $ObjEmpleado->getAge();

?>