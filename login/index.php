<?php 

    // Logado vai para o admin
    @session_start();

    if (isset($_SESSION['logado']) && $_SESSION['logado'] == true) {
        echo '<script>window.location="../admin"</script>';
    }

    define('PAGE_NAME', 'Entrar');
    $img_number = rand(1, 10);
    $user_image = 'img/user.png';

    include_once 'includes/header.php';  

?>

<body style="background-image: url('img/<?php echo $img_number ?>.jpg');">

    <div class="container mt-5">        
        <div class="row">
            <div class="col-sm-6 col-md-4 offset-md-4 mt-5">
                <div class="account-wall text-center rounded">
                    <h1 class="text-center login-title mb-3"><?= APP_NAME ?></h1>
                    <img class="profile-img" src="<?= avatar() ?>"
                        alt="Imagem de Usuário">

                    <form class="form-signin" method="POST" action="authenticate.php">

                    <input 
                        type="email" 
                        name="email" 
                        class="form-control mb-3 mt-2" 
                        placeholder="Email" 
                        required 
                        autofocus
                    >

                    <input 
                        type="password" 
                        class="form-control" 
                        placeholder="Senha" 
                        name="senha"
                        required
                    >

                    <button class="btn btn-md btn-outline-primary mt-2" type="submit">
                        <?= PAGE_NAME ?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
        

</body>
</html>

