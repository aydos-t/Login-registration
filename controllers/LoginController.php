<?php

class LoginController
{
    public function __construct()
    {
        $db = new DatabaseConnection;
        $this -> conn = $db -> conn;
    }

    public function userLogin($email, $password)
    {
        $checkLogin = "SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 1";
        $result = $this -> conn -> query($checkLogin);
        if ($result -> num_rows > 0) {
            $data = $result -> fetch_assoc();
            $this -> userAuthentication($data);
            return true;
        } else {
            return false;
        }
    }

    private function userAuthentication($data)
    {
        $_SESSION['authenticated'] = true;
        $_SESSION['auth_user'] = [
            'user_id' => $data['id'],
            'user_name' => $data['name'],
            'user_surName' => $data['surName'],
            'user_email' => $data['email']
        ];
    }

    public function isLoggedIn()
    {
        if (isset($_SESSION['authenticated']) === TRUE) {
            redirect("You are already Logged In", "index.php");
        } else {
            return false;
        }
    }

    public function logout()
    {
        if (isset($_SESSION['authenticated']) === TRUE)
        {
            unset($_SESSION['authenticated']);
            unset($_SESSION['auth_user']);
            return true;
        } else {
            return false;
        }
    }
}

?>