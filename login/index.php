<?php 
    include_once '../config/stuff.php';
    include_once '../functions/html.php';
    define('PAGE_NAME', 'Entrar');
    $img_number = rand(1, 10);
    $user_image = 'img/user.png';
?>

<!DOCTYPE html>
<html>
<head>
    
    <?php utf8() ?>

    <?php viewport() ?>

    <title><?= APP_NAME ?> - <?= PAGE_NAME ?></title>

    <?php bootstrap() ?>

    <?php css('index.css') ?>

    <?php favicon() ?>

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
                    <img class="profile-img" src="<?= $user_image ?>"
                        alt="Imagem de Usuário">
                    <form class="form-signin" method="POST" action="authenticate.php">
                    <input type="email" class="form-control mb-3 mt-2" placeholder="Email" required autofocus>
                    <input type="password" class="form-control" placeholder="Senha" required>
                    <button class="btn btn-md btn-outline-primary mt-2" type="submit">
                        <?= PAGE_NAME ?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
        

</body>
</html>

    
