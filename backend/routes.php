<?php

include './controllers/AuthController.php';
include './controllers/UserController.php';
include './controllers/ChefController.php';
include './controllers/PlatController.php';
include './controllers/MenuController.php';


$request_method = $_SERVER['REQUEST_METHOD'];

$route = htmlspecialchars($_GET['route']);

switch ($route) {
    case '/auth/signup':
        var_dump("Hello");
        if ($request_method === 'POST') {
            AuthController::signup();
        }
        break;

    case '/auth/login':
        if ($request_method == 'POST') {
            AuthController::login();
        }
        break;

        // User Routes
    case '/menus':
        if ($request_method === 'GET') {
            MenuController::getAllMenus();
        } elseif ($request_method === 'POST') {
            UserController::createReservation();
        }
        break;

    case '/reservations':
        if ($request_method == 'GET') {
            UserController::getReservation();
        }

        if ($request_method == 'POST') {
            UserController::createReservation();
        }
        break;

    case preg_match('/^\/reservations\/(\d+)$/', $route, $matches):
        if ($request_method == 'PUT') {
            UserController::updateReservation();
        }

        if ($request_method == 'DELETE') {
            UserController::removeReservation();
        }

    case '/chef/stats':
        if ($request_method == 'GET') {
            ChefController::getStats();
        }
        break;

    case '/chef/menus':
        if ($request_method == 'GET') {
            MenuController::getAllMenus();
        } elseif ($request_method == 'POST') {
            MenuController::createMenu();
        }
        break;

    case '/chef/reservations':
        if ($request_method == 'GET') {
            ChefController::GetAllReservations();
        }

        if ($request_method == 'POST') {
            ChefController::ReservartionStatus();
        }
        break;
    case preg_match('/^\/chef\/reservations\/(\d+)\/approve$/', $route, $matches):
        if($request_method == 'POST') {
            ChefController::approveReservation();
        }
        break;
    case preg_match('/^\/chef\/reservations\/(\d+)\/approve$/', $route, $matches):
        if($request_method == 'POST') {
            ChefController::rejectReservation();
        }
        break;


    case '/chef/plats':
        if ($request_method === 'GET') {
            PlatController::getAllPlats();
        } elseif ($request_method === 'POST') {
            PlatController::AjoutePlat();
        }
        break;


    case  preg_match('/^\/plats\/(\d+)$/', $route, $matches):
        if ($request_method === 'GET') {
            PlatController::getPlat($plat_id);
        } elseif ($request_method === 'PUT') {
            PlatController::updatePlat($plat_id);
        } elseif ($request_method === 'DELETE') {
            PlatController::deletePlat($plat_id);
        }
        break;




    case preg_match('/^\/menus\/(\d+)$/', $route, $matches):
        if ($request_method === 'GET') {
            MenuController::getMenu($menu_id);
        } elseif ($request_method === 'PUT') {
            MenuController::updateMenu($menu_id);
        } elseif ($request_method === 'DELETE') {
            MenuController::deleteMenu($menu_id);
        }
        break;


    default:
        header("HTTP/1.1 404 Not Found");
        echo json_encode(['message' => 'Route not found']);
        break;
}
