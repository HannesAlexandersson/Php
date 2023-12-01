<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><?php echo $config['title']; ?></a>

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/index.php">Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/about.php">About</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/Project-Structure/login.php">Login</a>
                <?php if(isset($_SESSION['user'])): ?>
                <a class="nav-link" href="/Project-Structure/app/users/logout.php">Logout</a>
                <?php endif; ?>
            </li>
        </ul>
    </div>
</nav>
