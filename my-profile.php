<?php
require_once "controllers/AuthenticationController.php";

$data = $authenticated -> authDetail();

require_once 'components/navbar.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $data['name']; ?></title>
    <link rel="stylesheet" href="assets/css/bootstrap5.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
            crossorigin="anonymous"></script>
</head>
<body>
<div class="py-5">
    <div class="container">
        <?php include "message.php"; ?>
        <h1>My Profile</h1>
        <hr>
        <h5>Name: <?= $data['name']; ?></h5>
        <h5>SurName: <?= $data['surName']; ?></h5>
        <h5>Email: <?= $data['email'] ?></h5>
        <h5>Created At: <?= date('d-M-Y', strtotime($data['created_at'])) ?></h5>
    </div>
</div>
</body>
</html>