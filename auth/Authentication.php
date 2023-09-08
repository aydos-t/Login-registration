<?php
//include 'config/app.php';
include 'controllers/RegisterController.php';

if (isset($_POST['register_btn'])) {
    $name = validateInput($db -> conn, $_POST['name']);
    $surName = validateInput($db -> conn, $_POST['surName']);
    $email = validateInput($db -> conn, $_POST['email']);
    $password = validateInput($db -> conn, $_POST['password']);
    $confirm_password = validateInput($db -> conn, $_POST['confirm_password']);

    $register = new RegisterController;
    $resultPassword = $register -> confirmPassword($password, $confirm_password);
    if ($resultPassword) {

    } else {
        redirect("Password and confirm password Does not match","register.php");
    }
}
?>