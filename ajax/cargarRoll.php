<?php


require_once "config/dbconfig.php";

$mensaje = $_POST['saludo'];

$idRol = $_POST['idRol'];

if($idRol == 1 || $idRol == 10){
    $query = "SELECT * FROM roles";
}else if($idRol == 12){
    $query = "SELECT * FROM roles WHERE id_rol IN (19, 11, 12)";
}
$ejecucion = mysqli_query($enlace,$query);
$opcion = "";
while($fila = $ejecucion->fetch_assoc()){
    $opcion.= "<option value =" . $fila['id_rol'].">". $fila['rol_descripcion']."</option>";
} 
echo $opcion;
    

?>