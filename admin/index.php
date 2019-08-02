<?php
/*
 * Admin - controller
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
                $action = "login";
            }
            
        }
        
//process the request by the user
switch ($action) {
    case "login":
        include ("view/login.php");
        break;
    
//authenticate
    case "dashboard":
        include ("view/index.php");
        break;
    
     case "add-supplement":
        include ("view/add-supplement.php");
        break;
    
     case "all-supplement":
        include ("view/all-supplement.php");
        break;
    
     case "order":
        include ("view/orders.php");
        break;
    
     case "charts":
        include ("view/charts.php");
        break;
    
     case "clients":
        include ("view/client.php");
        break;
    
     case "tables":
        include ("view/tables.php");
        break;
    
    default:
        include ("view/index.php");
        break;
}
?>

