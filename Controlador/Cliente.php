<?php

require_once '../Modelo/Cliente_model.php';
	$nuevo = Cliente_model::conectar();
        
if(isset($_GET['Cliente'])){
    if ($_GET['Accion']==1) {
	$Cliente = $nuevo->Eliminar($_GET['Cliente']);
	echo "<script>alert('ELIMINADO CORRECTAMENTE'); window.location='Cliente.php'; </script>";
    }else{
	if ($_GET['Accion']==2) {
            $Cliente = $nuevo->Modificar($_POST['id'],$_POST['dni'],$_POST['nombre'],$_POST['apellidos'],$_POST['direccion'],$_POST['telefono'],$_POST['fechanacimiento'],$_POST['correo']);
            echo "<script>alert('ACTUALIZADO CORRECTAMENTE'); window.location='Cliente.php'; </script>";
        }else{
            if ($_GET['Accion']==3) {
		$cliente = $nuevo->TraerCliente($_GET['Cliente']);
		require_once("../Vista/Modificar.php");
            }else{
		if ($_GET['Accion']==4) {
                    require_once("../Vista/Nuevo.php");
					}
                else{
                    $Cliente = $nuevo->Guardar($_POST['dni'],$_POST['nombre'],$_POST['apellidos'],$_POST['direccion'],$_POST['telefono'],$_POST['fechanacimiento'],$_POST['correo']);
                    echo "<script>alert('GUARDADO CORRECTAMENTE'); window.location='Cliente.php'; </script>";
					}					
				}
			}
		}		
	}else{
		$usuario = $nuevo->Mostrar(); 
		require_once("../Vista/Cliente.php");
	}
?>