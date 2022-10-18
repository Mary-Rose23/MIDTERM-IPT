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
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
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

    <div class="container">

        <div class="row">
            <div>
                <h2>Accounts</h2>

                <table class="table table-bordered">
                    <thead class="thead-dark bg-primary">
                        <tr>
                            <th scope="col">Account #</th>
                            <th scope="col">Account Name</th>
                            <th scope="col">Initial Investment</th>
                            <th scope="col">Date Started</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($accts as $a): ?>
                            <tr>
                                <td><?= $a->id ?></td>
                                <td><?= $a->acct_name ?></td>
                                <td><?= $a->init_invest ?></td>
                                <td><?= $a->start_date ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>   
            </div>
        </div>
    </div>
</body>
</html>