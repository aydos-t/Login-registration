<?php
//include 'config/app.php';

class RegisterController
{
    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }

    public function registration($name,$surName,$email,$password)
    {
        $register_query = "INSERT INTO users (name,surName,email,password) VALUES ('$name','$surName','$email','$password')";
        $result = $this->conn->query($register_query);
        return $result;
    }

    public function isUserExists($email)
    {
        $checkUser = "SELECT email FROM users WHERE email='$email' LIMIT 1";
        $result = $this->conn->query($checkUser);
        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function confirmPassword($password, $confirmPassword)
    {
        if ($password == $confirmPassword) {
            return true;
        } else {
            return false;
        }
    }
}
?>