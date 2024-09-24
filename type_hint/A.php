<?php
require_once 'I.php';
require_once 'C.php'; // Thêm dấu chấm phẩy ở đây

class A extends C {
    public function a1() {
        echo 'This is function a1 from class A.';
    }
}
?>