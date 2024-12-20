<?php

include './controllers/AuthController.php';
include './controllers/UserController.php';
include './controllers/ChefController.php';
include './controllers/PlatController.php';
include './controllers/MenuController.php';


$request_method = $_SERVER['REQUEST_METHOD'];

$route = htmlspecialchars($_GET['route']);
preg_match('/^\/chef\/plats\/(\d+)$/', $route, $matches);

var_dump($matches[1]);
var_dump($route);

if ($route === '/auth/signup') {
    if ($request_method === 'POST') {
        AuthController::signup();
    }
} elseif ($route === '/auth/login') {
    if ($request_method === 'POST') {
        AuthController::login();
    }
} elseif ($route === '/menus') {
    if ($request_method === 'GET') {
        MenuController::getAllMenus();
    } elseif ($request_method === 'POST') {
        UserController::createReservation();
    }
} elseif ($route === '/reservations') {
    if ($request_method === 'GET') {
        UserController::getReservation();
    } elseif ($request_method === 'POST') {
        UserController::createReservation();
    }
} elseif (preg_match('/^\/reservations\/(\d+)$/', $route, $matches)) {
    if ($request_method === 'PUT') {
        UserController::updateReservation();
    } elseif ($request_method === 'DELETE') {
        UserController::removeReservation();
    }
} elseif ($route === '/chef/stats') {
    if ($request_method === 'GET') {
        ChefController::getStats();
    }
} elseif ($route === '/chef/menus') {
    if ($request_method === 'GET') {
        MenuController::getAllMenus();
    } elseif ($request_method === 'POST') {
        MenuController::createMenu();
    }
} elseif ($route === '/chef/reservations') {
    if ($request_method === 'GET') {
        ChefController::GetAllReservations();
    } elseif ($request_method === 'POST') {
        ChefController::ReservartionStatus();
    }
} elseif (preg_match('/^\/chef\/reservations\/(\d+)\/approve$/', $route, $matches)) {
    if ($request_method === 'POST') {
        ChefController::approveReservation();
    }
} elseif (preg_match('/^\/chef\/reservations\/(\d+)\/reject$/', $route, $matches)) {
    if ($request_method === 'POST') {
        ChefController::rejectReservation();
    }
} elseif ($route === '/chef/plats') {
    if ($request_method === 'GET') {
        PlatController::getAllPlats();
    } elseif ($request_method === 'POST') {
        PlatController::AjoutePlat();
    }
} elseif (preg_match('/^\/chef\/plats\/(\d+)$/', $route, $matches)) {
    $plat_id = $matches[1];
    if ($request_method === 'GET') {
        PlatController::getPlat($plat_id);
    } elseif ($request_method === 'PUT') {
        PlatController::updatePlat($plat_id);
    } elseif ($request_method === 'DELETE') {
        PlatController::deletePlat($plat_id);
    }
} elseif (preg_match('/^\/chef\/menus\/(\d+)$/', $route, $matches)) {
    $menu_id = $matches[1]; 
    if ($request_method === 'GET') {
        MenuController::getMenu($menu_id);
    } elseif ($request_method === 'DELETE') {
        MenuController::deleteMenu($menu_id);
    }
} else {
    header("HTTP/1.1 404 Not Found");
    echo json_encode(['message' => 'Route not found']);
}
