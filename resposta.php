<?php 
session_start();
$usuario = $_SESSION['usuario'];
if (isset($usuario)) {
	echo "$usuario";
}else{
	echo"sem nome";

}
 ?>
