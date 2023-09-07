<?php
include 'config/app.php';

if (isset($_POST['register_btn']))
{
    $name = validateInput($db->conn, $_POST['name']);
    $surName = validateInput($db->conn, $_POST['surName']);
    $email = validateInput($db->conn, $_POST['email']);
    $password = validateInput($db->conn, $_POST['password']);
    $confirm_password = validateInput($db->conn, $_POST['confirm_password']);

    // TODO: To realize RegisterController
}
?>