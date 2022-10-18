<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPT Midterm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
        <div class="container-fluid mx-5">
            <a class="navbar-brand" href="#">IPT Midterm Project</a>
            <div class="float-right" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="<?= url('/') ?>">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= url('/users')?>">Users</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= url('/accounts')?>">Accounts</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <br>
    <div class="card w-25 mx-auto bg-primary text-white">
        <div class="card-body d-grid gap-3">
            <div class="d-flex justify-content-center"><p>Main Menu</p></div>
            <div class="d-flex flex-column d-grid gap-2">
                <a href="<?= url('/') ?>" class="btn btn-light" aria-current="page">Home</a>
                <a href="<?= url('/users')?>" class="btn btn-light">Users</a>
                <a href="<?= url('/accounts')?>" class="btn btn-light">Accounts</a>
            </div>
        </div>
    </div>
</body>
</html>