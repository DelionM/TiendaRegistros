<?php
session_start();
if (isset($_SESSION['usuario'])) {

    $PageTitle = "Administrador";
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <div class="contenedor-header">
        <header>
            <div class="logo">
                <a href="../public/logout.php">
                    <div class="icono">
                        <i class="fa-solid fa-house"></i>
                         <span>Salir</span>
                     </div>
                </a>
            </div>
            <div class="nav-responsive menu-toggle" id="menu-toggle" onclick="mostrarOcultarMenu()">
                <i class="fa-solid fa-bars"></i>
            </div>

        </header>
    </div>
    <style>
        .contenedor-header{
    background: #1e2326;
    position: fixed;
    width: 100%;
    top: 0;
    left: 0;
    z-index: 99;
}

.contenedor-header header{
    max-width: 1100px;
    margin: auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
}
/*Logo o equipo*/
.contenedor-header header .logo a{
    font-family:'Righteous'; 
    font-size: 25px;
    color: rgb(85, 164, 178);
    text-decoration: none;
}

.contenedor-header header .logo a:hover{
    color: #ceec0c;
}

.contenedor-header header ul{
    display: flex;
    list-style: none;
    text-align: center;
}

.contenedor-header header nav ul li a{
    text-align: center;
    font-family: 'Righteous';
    color: rgb(255, 255, 255);
    margin: auto;
    padding: 20px;
    transition: 0.3s;
    text-decoration: none;
    font-size: 20px;
}

.contenedor-header header nav ul li a:hover{
    color: #07e7ef;
    
    border-radius: 15px;
}

.nav.responsive{
    background-color: aqua;
    color: white;
    padding: 5px 10px;
    border-radius: 5px;
    cursor: pointer;
    display: none;
}

.contenedor-header i{
    color: rgb(255, 255, 255);
    font-size: 30px;
}
    </style>
</body>
</html>
    <main>
        <div class="general">
        <h1>Bievenido Administrador <br> D3L10N</h1>
        <br><br><br><br><br><br><br><br><br><br><br><br><br>
        
        <div class="container__background-triangle">
            <div class="triangle triangle1"></div>
            <div class="triangle triangle2"></div>
            <div class="triangle triangle3"></div>
        </div>


        <div class="container_cards">
            <div class="card">
                <div class="cover__card">
                    <img src="../assets/img/compu.gif" alt="">
                </div>
                <h2>PEDIDOS</h2>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum numquam sapiente voluptate necessitatibus
                    reiciendis tempore, cupiditate facilis! Non est praesentium necessitatibus qui, sequi ea repellendus
                    sint. Magni architecto labore laboriosam.</P>
                <hr>
                <div class="footer__card">
                    <h3 class="user__name">Delion Martinez</h3>
                    <button><a class="nav-link text-primary" href="../public/pedidos_ver_todos.php">Pedidos</a></button>
                </div>
            </div>

            <div class="card">
                <div class="cover__card">
                    <img src="../assets/img/compu2.gif" alt="">
                </div>
                <h2>Inventario</h2>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum numquam sapiente voluptate necessitatibus
                    reiciendis tempore, cupiditate facilis! Non est praesentium necessitatibus qui, sequi ea repellendus
                    sint. Magni architecto labore laboriosam.</P>
                <hr>
                <div class="footer__card">
                    <h3 class="user__name">Delion Martinez</h3>
                   
                    <button> <a class="nav-link  text-primary" href="../public/playera_inventario.php">Inventario</a>
                    </button>

                </div>
            </div>

            <div class="card">
                <div class="cover__card">
                    <img src="../assets/img/3.gif" alt="">
                </div>
                <h2>Clientes</h2>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum numquam sapiente voluptate necessitatibus
                    reiciendis tempore, cupiditate facilis! Non est praesentium necessitatibus qui, sequi ea repellendus
                    sint. Magni architecto labore laboriosam.</P>
                <hr>
                <div class="footer__card">
                    <h3 class="user__name">Delion Martinez</h3>
                   <button><a class="nav-link text-primary" href="../public/cliente_consulta.php">Clientes</a></button>
                </div>
            </div>
        </div>
            <br><br><br><br><br><br><br><br><br><br><br>
        <!-- <button ><a class="nav-link text-warning" href="../public/logout.php">Salir</a></button> -->
        </div>

    </main>



    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
          
        }

        body {
            background-color: black;
        }

        h1 {
            color: aliceblue;
            font-size: 50px;
            text-align: center;
            margin-top: 5%;
           position: relative;
           z-index: 1;
        }

        .container__background-triangle {
            max-width: 1200px;
            height: 600px;
            margin: auto;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);


        }

        .triangle {
            width: 250px;
            height: 250px;
            background: rgb(160, 17, 17);
            position: absolute;
        }

        .triangle1 {
            width: 250px;
            height: 250px;
            background-color: rgb(117, 4, 83);
            top: 100px;
            right: 100px;
            animation: t1 9s ease infinite;
        }

        .triangle2 {
            width: 200px;
            height: 200px;
            background-color: rgb(11, 130, 76);
            top: 300px;
            animation: t2 7s ease infinite;

        }

        .triangle3 {
            width: 350px;
            height: 350px;
            background-color: rgb(73, 129, 219);
            left: 200px;
            animation: t3 5s ease infinite;
         
        }

        @keyframes t1 {
            0% {
                transform: rotate(45deg) translateY(0px);
            }

            50% {
                transform: rotate(45deg) translateY(20px);
            }

            100% {
                transform: rotate(45deg) translateY(0px);
            }
        }

        @keyframes t2 {
            0% {
                transform: rotate(65deg) translateY(0px);
            }

            50% {
                transform: rotate(65deg) translateY(20px);
            }

            100% {
                transform: rotate(65deg) translateY(0px);
            }
        }

        @keyframes t3 {
            0% {
                transform: rotate(65deg) translateY(0px);
            }

            50% {
                transform: rotate(65deg) translateY(20px);
            }

            100% {
                transform: rotate(65deg) translateY(0px);
            }
        }

        .container_cards {
            width: 100%;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            position: absolute;
            /* top: 50%; */
            left: 50%;
            transform: translate(-50%, -50%);
            top: 60%;
        }

        .card {
            width: 350px;
            margin: 10px;
            padding: 10px;
            border-radius: 15px;
            border-left: -1pxsolid white;
            border-top: -1pxsolid white;
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            box-shadow: 20px 20px 50px rgba(0, 0, 200, 1.5);
            background-color: rgba(255, 255, 255, 0.1);
            transition: all 300ms;
            top: 100px;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card:hover .cover__card img {
            transform: scale(1.1);
        }

        .cover__card {
            width: 100%;
            height: 180px;
            border-radius: 14px;
            overflow: hidden;
        }

        .cover__card img {
            width: 110%;
            transition: all 300ms;

        }


        .card h2 {
            font-size: 20px;
            font-weight: 400;
            margin-top: 20px;
            color: white;
        }

        .card h3 {
            font-size: 20px;
            font-weight: 400;
            margin-top: 20px;
            color: white;
        }

        .card p {
            margin-top: 20px;
            font-size: 14px;
            font-weight: 300;
            color: white;
            letter-spacing: 0.5px;
        }

        .card hr {
            margin-top: 30px;
            border: none;
            height: 0.1;
            background-color: aqua;
        }

        .footer__card {
            margin-top: 10px;
            display: flex;
            color: black;
            justify-content: space-between;
        }

        .footer__card h3 {
            font-size: 15px;
            font-weight: 500;
        }

        @media screen and (max-width:1200px) {
            .container_cards {
                position: relative;
                top: 0;
                left: 0;
                transform: none;
                margin-top: 100px;
                padding-bottom: 100px;
            }
        }
    </style>


    <?php
    include '../resources/templates/footer.html';
    include '../resources/templates/scripts.html';
    include '../resources/templates/fin.html';

} else {
    header("Location:login_error.php");
    exit();
}