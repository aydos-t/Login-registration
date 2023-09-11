<?php
require_once 'config/app.php';

class AuthenticationController
{
    public function __construct()
    {
        $this -> checkIsLoggedIn();
    }

    private function checkIsLoggedIn()
    {
        if (!isset($_SESSION['authenticated'])) {
            redirect("Login to Access the page", "login.php");
            return false;
        } else {
            return true;
        }
    }
}

$authenticated = new AuthenticationController;
?>