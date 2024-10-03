<?php
session_start();

require_once 'models/UserModel.php';
$userModel = new UserModel();

// Kiểm tra xem người dùng đã đăng nhập chưa
if (!isset($_SESSION['id'])) {
    $_SESSION['error'] = "You must be logged in to perform this action.";
    header('location: list_users.php');
    exit();
}

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    var_dump($id == $_SESSION['id']); // Kiểm tra giá trị ID
    
    if ($id != null) {
        if ($id == $_SESSION['id']) {
            // Hiển thị hộp thoại xác nhận trước khi xóa
            echo '<script>
                    if (confirm("Are you sure you want to delete your account?")) {
                        // Nếu người dùng xác nhận, thực hiện xóa tài khoản
                        window.location.href = "delete_user_action.php?id=' . $id . '";
                    } else {
                        // Nếu người dùng không xác nhận, chuyển hướng đến trang khác
                        window.location.href = "list_users.php"; // Thay đổi thành trang bạn muốn
                    }
                  </script>';
            exit();
        } else {
            // Nếu ID không trùng khớp, hiển thị thông báo lỗi
            $_SESSION['error'] = "You cannot delete another user's account.";
        
            header('location: list_users.php');
            exit();
        }
    } else {
        $_SESSION['error'] = "Invalid user ID.";
        header('location: list_users.php'); // Chuyển hướng về danh sách người dùng
        exit();
    }
} else {
    $_SESSION['error'] = "No user ID provided.";
    header('location: list_users.php'); // Chuyển hướng về danh sách người dùng
    exit();
}
?>