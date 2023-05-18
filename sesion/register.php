<?php 
    
    include 'code-register.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú lateral responsive</title>

    <link rel="stylesheet" href="../css/estilos.css">

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body id="body">
    
    <header>
        
            <div class="icon__menu">
                <i class="fas fa-bars" id="btn_open"></i>
            </div>
            <a href="../../pc store 2/index.php"><img src="../PC_STORE__3_-removebg-preview.png" width="180" height="180" alt=""></a>
            <div class="">
        <li class="search-icon">
                <input type="search" placeholder="Search">
                
                
                </label>
            </li>
            </div>
    </header>

    <div class="menu__side" id="menu_side">

        <div class="name__page">
           <!--no se que poner aca --> 
          
           
        </div>

        <div class="options__menu">	

            <a href="index.php" class="selected">
                <div class="option">
                    <img src="../img/icn-nav-user.png" width="30" height="30" alt="">
                    <h4>ㅤIniciar Sesión</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <img src="../img/armarpc.svg" width="30" height="30" alt="">
                    <h4>ㅤAyuda</h4>
                </div>
            </a>
            
            <a href="#" >
                <div class="option">
                    <img src="../img/componentes.svg" width="30" height="30" alt="">
                    <h4>ㅤComponentes</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <img src="../img/gamer-keyboard.png" width="30" height="30" alt="">
                    <h4>ㅤTeclados</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <img src="../img/gaming-chair.png" width="30" height="30" alt="">
                    <h4>ㅤSillas</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <img src="../img/mouse_1.png" width="30" height="30" alt="">
                    <h4>ㅤNosotros</h4>
                </div>
            </a>
            <a href="#">
                <div class="option">
                    <img src="../img/palanca-de-mando.png" width="30" height="30" alt="">
                    <h4>ㅤMandos</h4>
                </div>
            </a>
            <a href="#">
                <div class="option">
                    <img src="../img/parlantes.png" width="30" height="30" alt="">
                    <h4>ㅤParlantes</h4>
                </div>
            </a>
            <a href="#">
                <div class="option">
                    <img src="../img/monitor.png" width="30" height="30" alt="">
                    <h4>ㅤMonitor</h4>
                </div>
            </a>
            <a href="#">
                <div class="option">
                    <img src="../img/auris.png" width="30" height="30" alt="">
                    <h4>ㅤAuriculares</h4>
                </div>
            </a>
            <a href="#">
                <div class="option">
                    <img src="../img/Phone.svg" width="30" height="30" alt="">
                    <h4>ㅤTelefonos</h4>
                </div>
            </a>
            <a href="#" >
                <div class="option">
                    <img src="../img/mouse-pad.png" width="30" height="30" alt="">
                    <h4>ㅤMouse Pad</h4>
                </div>
            </a>

        </div>

    </div>

    <script src="../js/script.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="../css/estilos-login.css">
    <link rel="stylesheet" href="css/estilos.css">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>

<body id="body">

    <div class="container-all">

        <div class="ctn-form">
            <img src="images/logo-magtimus-small.png" alt="" class="logo">
            <h1 class="title">Registrarse</h1>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
               
                <label for="">Nombre de Usuario</label>
                <input type="text" name="username">
                <span class="msg-error"><?php echo $username_err; ?></span>
                <label for="">Email</label>
                <input type="text" name="email">
                <span class="msg-error"> <?php echo $email_err; ?></span>
                <label for="">Contraseña</label>
                <input type="password" name="password">
                <span class="msg-error"> <?php echo $password_err; ?></span>

                <input type="submit" value="Registrarse">

            </form>

            <span class="text-footer">¿Ya te has registrado?
                <a href="index.php">Iniciar Sesión</a>
            </span>
        </div>

       

    </div>

</body>

</html>
