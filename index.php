<?php
/*
 * *controller
 */

//begin the user authentification process
session_start();

//connect to thye database

//connect to the model

//get request from the user

$action = filter_input(INPUT_POST, "action");
        if($action == null){
            $action = filter_input(INPUT_GET, "action");
            if($action == null){
                $action = "home";
            }
            
        }
        
//process the request by the user
switch ($action) {
    case "home":
        include ("view/home.php");
        break;
    
    case "products":
        include ("view/all-products.php");
        break;
    
    case "register":
        include ("view/register.php");
        break;
    
    case "update":
        include ("view/update.php");
        break;
    
    case "cart":
        include ("view/cart.php");
        break;
    
    
    default:
        include ("view/home.php");
        break;
}
?>
