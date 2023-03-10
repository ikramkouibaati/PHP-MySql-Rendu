<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img class="logo" src="/img/logo.png">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
                <a class="nav-link active" aria-current="page" href="/login.php">Log in</a>
                <a class="nav-link active" aria-current="page" href="/contact.php">Contact</a>
                <?php
                if (getSessionData('user')) { ?>
                    <a class="nav-link active" aria-current="page" href="/logout.php">Logout</a>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</nav>