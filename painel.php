<!doctype html>
<html>
<head>
    <title>Curso Layout Dashboard</title>

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!-- BootStrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- CSS Personalizado -->
    <link rel="stylesheet" href="css/especializati.css">

    <!-- CSS Reset -->
    <link rel="stylesheet" href="css/especializatireset.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="imgs/favicon.png">
</head>

<body>

<section class="menu">
    <div class="logo">
        <img class="logo-painel" src="imgs/icone-especializati.png" alt="EspecializaTi">

        <div class="list-menu">
            <ul class="menu-list">
                <li>
                    <a href="?pag=home">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        Home
                    </a>
                </li>

                <li>
                    <a href="?pag=list">
                        <i class="fa fa-id-card" aria-hidden="true"></i>
                        Listagem
                    </a>
                </li>

                <li>
                    <a href="?pag=forms">
                        <i class="fa fa-fort-awesome" aria-hidden="true"></i>
                        Forms
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section> <!-- End Menu -->

<section class="content">
    <div class="top-dashboard">
        <div class="dropdown user-dash">
            <div class="dropdown-toggle" id="dropDownCustom" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <img class="img-circle user-dashboard" src="imgs/user-carlos-ferreira.png" alt="Carlos Ferreira">
                <p class="user-name">Nome User</p>
                <span class="caret"></span>
            </div>
            <ul class="dropdown-menu dp-menu" aria-labelledby="dropDownCustom">
                <li><a href="#">Perfil</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </div>
    </div> <!-- Top Dashboard -->

    <div class="content-ds">

        <div class="bred">
            <a href="" class="bred">Home ></a><a href="" class="bred">Dashboard</a>
        </div>

        <?php
        if(!isset($_GET['pag']))
            include 'pags/home.php';
        elseif( file_exists("pags/{$_GET['pag']}.php"))
            include "pags/{$_GET['pag']}.php";
        else
            include 'pags/erro404.php';
        ?>

    </div><!-- End Content DS

</section> <!-- End Content -->

<!-- jQuery -->
<script src="js/jquery-3.2.0.min.js"></script>
<!-- JS Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>