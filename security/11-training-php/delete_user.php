<?php
session_start();

require_once 'models/UserModel.php';
$userModel = new UserModel();

// Kiểm tra xem người dùng đã đăng nhập chưa
if (!isset($_SESSION['id'])) {
    $_SESSION['error'] = "You must be logged in to perform this action.";
    header('location: login.php');
    exit();
}


if (!empty($_GET['id'])) {
    $id = $_GET['id']; 
    
   
    if ($id != null) {
        
        if ($id == $_SESSION['id']) {
            
            $userModel->deleteUserById($id);
            $_SESSION['success'] = "User deleted successfully.";
                
            
            header('location: logout.php');
            exit(); /
        } else {
            $_SESSION['error'] = "You do not have permission to delete this user.";
        }
    } else {
        $_SESSION['error'] = "Invalid user ID.";
    }
} else {
    $_SESSION['error'] = "No user ID provided.";
}
?>