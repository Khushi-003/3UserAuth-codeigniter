<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Menu -> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <?php if ($this->session->userdata("type") === "1") { ?>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home For Admin <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('Login/Contentmanager') ?>">Blogs By Manager</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('Login/Contentwriter') ?>">Articles By Writer</a>
                    </li>
                </ul>
            <?php } elseif ($this->session->userdata("type") === "2") { ?>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('Login/Contentmanager') ?>">Blogs By Manager</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('Login/Contentwriter') ?>">Articles By Writer</a>
                    </li>
                </ul>
            <?php } else { ?>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('Login/Contentwriter') ?>">Articles By Writer</a>
                    </li>
                </ul>
            <?php } ?>
            <span class="navbar-text">
                <a class="nav-link" href="<?php echo site_url('Login/logout'); ?>">Log out</a>
            </span>
        </div>
    </nav>
    <?php $this->load->view($middle); ?>
</body>

</html>