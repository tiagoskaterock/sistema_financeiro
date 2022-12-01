<?php 
    include_once '../config/stuff.php';
    define('PAGE_NAME', 'Entrar');
    $img_number = rand(1, 10);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= APP_NAME ?> - <?= PAGE_NAME ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="index.css">
</head>
<body 
    style="
        background-image: url('img/<?php echo $img_number ?>.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        "
>

    <div class="container mt-5">        
        <div class="row">
            <div class="col-sm-6 col-md-4 offset-md-4 mt-5">
                <div class="account-wall text-center rounded">
                    <h1 class="text-center login-title mb-3"><?= APP_NAME ?></h1>
                    <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                        alt="">
                    <form class="form-signin" method="POST" action="authenticate.php">
                    <input type="email" class="form-control mb-3 mt-2" placeholder="Email" required autofocus>
                    <input type="password" class="form-control" placeholder="Senha" required>
                    <button class="btn btn-md btn-outline-primary btn-block mt-2" type="submit">
                        <?= PAGE_NAME ?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

    
