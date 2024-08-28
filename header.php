<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <title>Prueba Técnica</title>
    <?php wp_head();?>
</head>
<body>
    

<nav class="navbar navbar-expand-lg bg-gradient" data-bs-theme="dark" style=" min-height: 60px;background: linear-gradient(90deg, #004376, #00A9E0)!important;">
    <img src="https://chocolates.com.co/wp-content/themes/nacional-de-chocolates/assets/images/Logo_CNCH.png" alt="">
    <div class="container d-flex flex-column">
        <div class="container-fluid d-flex align-items-center">
            <!-- Logotipo -->
           

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Trabaja con nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Grupo Nutresa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contáctanos</a>
                    </li>
                </ul>


                  <!--search  y iconos -->
                <form class="d-flex justify-content-center me-1">
                    <div class="input-group">
                        <input class="form-control rounded-start-pill bg-light"  type="search" placeholder="Search" aria-label="Search">
                        <!-- Botón con icono de lupa, que se verá como si estuviera dentro del campo -->
                        <button class="btn btn-primary rounded-end-pill " type="submit" style="background-color: #004376;">
                        <i class="bi bi-search"></i>
                        </button>
                     </div>
                </form>

                <i class="bi bi-facebook text-white fs-2 me-1" ></i>
                <i class="bi bi-linkedin text-white fs-2 me-1"></i>
                <img src="https://chocolates.com.co/wp-content/uploads/2023/08/Flag-Language.svg" alt="Ícono personalizado" width="32" height="32">
                <!--search  y iconos -->

              

            </div>
        </div>

        <div class="container mt-2">
            <ul class="navbar-nav me-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Nuestra Compañía</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Organización Consciente</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Marcas</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Internacional</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Negocios industriales</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Fomento Cacaotero</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sostenibilidad</a>
                </li>
            </ul>
        </div>
    </div>
</nav>



<!-- Navbar -->
<!--
    
    <nav class="navbar navbar-expand-lg bg-primary " data-bs-theme="dark" >
    
        <div class="container d-flex flex-column">

        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Trabaja con nosotros</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Grupo Nutresa</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Contáctanos</a>
            </li>
               
            </ul>
            
            <form class="d-flex">
                <input class="form-control me-sm-2" type="search" placeholder="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
            
            
            </div>
            
        </div>
        <div class="container">
        <ul class="navbar-nav me-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Nuestra Compañia</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="#">Organización Consciente

                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Marcas</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Internacional</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
                </li>
               
                <li class="nav-item">
                <a class="nav-link" href="#">Negocios industriales</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Fomento Cacatoero</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Sostenibilidad</a>
                </li>
               
            </ul>
        </div>  






        </div>
          
        
    </nav>
-->  



<!--/navbar-->