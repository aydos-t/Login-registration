<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
<!--        <a class="navbar-brand" href="--><?//= base_url('index.php') ?><!--">Home</a>-->
        <a class="navbar-brand" href="../index.php">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('login.php') ?>">Login</a>
<!--                    <a class="nav-link" href="../login.php">Login</a>-->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('../register.php') ?>">Register</a>
<!--                    <a class="nav-link" href="../register.php">Register</a>-->
                </li>
            </ul>
        </div>
    </div>
</nav>