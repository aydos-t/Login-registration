<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('index.php') ?>">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <?php if (isset($_SESSION['authenticated'])) : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= $_SESSION['auth_user']['user_name']." ".$_SESSION['auth_user']['user_surName']; ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../my-profile.php">My Profile</a></li>
                            <li>
                                <form action="" method="POST">
                                    <button type="submit" name="logout_btn" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                <?php else : ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('../login.php') ?>">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('../register.php') ?>">Register</a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>