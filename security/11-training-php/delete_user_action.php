<?php
session_start();

require_once 'models/UserModel.php';
$userModel = new UserModel();
$userModel->deleteUserById($_GET['id']);
session_destroy();
header('location: list_users.php');