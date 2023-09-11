<?php
//include 'config/app.php';
include 'controllers/RegisterController.php';

if (isset($_POST['login_btn'])) {
    $email = validateInput($db->conn, $_POST['email']);
    $password = validateInput($db->conn, $_POST['password']);
}

if (isset($_POST['register_btn'])) {
    $name = validateInput($db -> conn, $_POST['name']);
    $surName = validateInput($db -> conn, $_POST['surName']);
    $email = validateInput($db -> conn, $_POST['email']);
    $password = validateInput($db -> conn, $_POST['password']);
    $confirm_password = validateInput($db -> conn, $_POST['confirm_password']);

    $register = new RegisterController;
    $resultPassword = $register -> confirmPassword($password, $confirm_password);
    if ($resultPassword) {
        $resultUser = $register->isUserExists($email);
        if ($resultUser){
            redirect("Email already exists");
        }
        else {
            $registerQuery = $register->registration($name,$surName,$email,$password);
            if ($registerQuery) {
                redirect("Registered Successfully", "login.php");
            } else {
                redirect("Something went wrong!", "register.php");
            }
        }
    } else {
        redirect("Password and confirm password Does not match", "register.php");
    }
}
?>