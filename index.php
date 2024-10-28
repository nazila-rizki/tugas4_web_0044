<?php 
include 'config/database.php';
include 'app/controllers/UserController.php';

$dbConnection = getDBConnection();
$controller = new UserController($dbConnection);

$aksi = $_GET['aksi'] ?? 'index';
$id = $_GET['id'] ?? null;

switch ($aksi) {
    case 'detail';
    $user = $controller->detail($id);
    include 'app/views/userDetail.php';
    break;

    case 'edit';
    $user = $controller->edit($id);
    include 'app/views/edit.php';
    break;

    case 'delete';
    $user = $controller->delete($id);
    break;

    case 'create';
    $controller->create();
    break;

    default:
        $users =$controller->show();
        include 'app/views/UserView.php';
        break;
}






