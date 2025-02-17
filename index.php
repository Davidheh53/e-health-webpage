<?php
require_once '../config/config.php';
require_once '../src/controllers/HomeController.php';
require_once '../src/controllers/AboutController.php';
require_once '../src/controllers/ServicesController.php';
require_once '../src/controllers/AppointmentController.php';

$homeController = new HomeController();
$aboutController = new AboutController();
$servicesController = new ServicesController();
$appointmentController = new AppointmentController();

$requestUri = $_SERVER['REQUEST_URI'];

switch ($requestUri) {
    case '/':
    case '/home':
        $homeController->index();
        break;
    case '/about':
        $aboutController->index();
        break;
    case '/services':
        $servicesController->index();
        break;
    case '/appointment':
        $appointmentController->index();
        break;
    default:
        http_response_code(404);
        echo "404 Not Found";
        break;
}
?>