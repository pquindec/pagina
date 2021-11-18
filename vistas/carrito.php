<?php

include_once '../includes/user.php';
include_once '../includes/user_session.php';

session_start();
$usuario = $_SESSION['user'];
$mensaje ="";

    if(isset($_POST['btnAccion'])){

    switch($_POST['btnAccion']){

    case "Agregar":
        $talla= $_POST['talla'];
        $mensaje .= "Talla: ".$talla. "<br/>";
        $cantidad=$_POST['cantidad'];
        $mensaje .= "Cantidad: ".$cantidad. "<br/>";
        $precio = $cantidad * 25;
        $mensaje .= "Precio: ".$precio. "<br/>";
        $mensaje .= "Usuario: ".$usuario;
    
    
    
    

    if(!isset($_SESSION['CARRITO'])&&isset($_POST['btnAccion'])){
        
        $producto = array(
            'Talla'=>$talla,
            'Cantidad'=>$cantidad,
            'Precio'=>$precio,
            'Usuario'=>$usuario,
        );
        $_SESSION['CARRITO'][0]=$producto;
        $mensaje="Agregado al Carrito";
    }elseif(isset($_SESSION['CARRITO'])&&isset($_POST['btnAccion'])){
        $numero=count($_SESSION['CARRITO']);
        $producto = array(
            'Talla'=>$talla,
            'Cantidad'=>$cantidad,
            'Precio'=>$precio,
            'Usuario'=>$usuario,
        );
        $_SESSION['CARRITO'][$numero]=$producto;
        $mensaje="Agregado al Carrito";
    }
    if(isset($_SESSION['CARRITO'])){
    //$mensaje=print_r($_SESSION['CARRITO'],true);
    
    }else{
    $mensaje="";
    }
    break;
    case "Eliminar":

        foreach ($_SESSION['CARRITO'] as $indice => $producto) {
            if($_POST['id']==$indice){
                
                unset($_SESSION['CARRITO'][$indice]);

                echo "<script>alert('Elemento Eliminado');</script>";
                $mensaje="";
            }
        }
    break;

    }
}
?>