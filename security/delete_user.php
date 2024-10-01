<?php
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

if (!isset($_SESSION['user_id'])) {
    die("Bạn cần đăng nhập để thực hiện hành động này ");
}

if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    if ($id != $_SESSION['user_id']) {
        die("Bạn không có quyền xóa tài khoản này.");
    }

    $userModel->deleteUserById($id); 

    header('Location: list_users.php');
    exit(); 
} else {
    die("ID người dùng không hợp lệ.");
}
?>