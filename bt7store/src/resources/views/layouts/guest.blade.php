<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Butterfly Triunfs 7 Unipessoal </title>
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="images/logo2.png" alt="logo">
                </span>


                <div class="text header-text">
                    <span class="name">Butterfly Triumphs 7</span>
                    <span class="projeto">PAP</span>
                
                </div>
            </div>

            <i class='bx bx-expand-horizontal toggle'></i> 
        </header>

        <div class="menu-bar">
            <div class="menu">
                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                        <input type="search" placeholder="Procurar...">
                </li>
                <ul class="menu-links">
                    <li class="nav-link">
                    <a href="{{ route('site.home') }}">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Pagina Principal</span>
                        </a>
                    </li>
                    <li class="nav-link">
                    <a href="{{ route('site.catalogo') }}">
                            <i class='bx bx-category icon'></i>
                            <span class="text nav-text">Catalogo</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="{{ route('site.encomendar') }}">
                            <i class='bx bxs-package icon'></i>
                            <span class="text nav-text">Encomendar</span>
                        </a>
                    </li>
                    
                    <li class="nav-link">
                    <a href="{{ route('site.contactos') }}">
                            <i class='bx bxs-contact icon'></i>
                            <span class="text nav-text">Contactos</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bottom">
                 @auth
                    <ul>
                        <li class="nav-link">
                        <a href="{{ route('logout') }}">
                                <i class='bx bx-log-out icon'></i>
                                <span class="text nav-text">Logout</span>
                            </a>
                        </li>
                    </ul>
                @else
                <ul>
                    <li>
                    <a href="{{ route('login') }}">
                        <i class='bx bx-log-in icon'></i>
                        <span class="text nav-text">Log in</span>
                        </a>
                        </li>
                        <li>
                        <a href="{{ route('register') }}">
                        <i class='bx bx-edit icon'></i>
                        <span class="text nav-text">Register</span>
                        </a>
                        </li>
                    </ul>                       
                            

                        
                @endauth
            </div>
        </div>
    </nav>
    <div class="container">
        {{ $slot }}
    </div>
    <script src="js/script.js"></script>
</body>
</html>
