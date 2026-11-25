<?php 

// Require file Common
require_once './commons/env.php'; // Khai báo biến môi trường
require_once './commons/function.php'; // Hàm hỗ trợ

require_once './controllers/SiteController.php';

$controller = new SiteController();
$act = $_GET['act'] ?? 'home';

switch ($act) {
    case 'services':
        $controller->services();
        break;
    case 'barbers':
        $controller->barbers();
        break;
    case 'branches':
        $controller->branches();
        break;
    case 'styles':
        $controller->styles();
        break;
    case 'account':
        $controller->account();
        break;
    case 'register':
        $controller->register();
        break;
    case 'home':
    default:
        $controller->home();
        break;
}