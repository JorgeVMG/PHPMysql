<style>
    .navbar-custom {
        background-color: #f8f9fa; /* gris muy claro */
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .navbar .dropdown-menu {
        left: 0 !important; /* alinear dropdown a la izquierda */
    }



    .navbar .nav-link:focus,
    .navbar .nav-link:active {
        box-shadow: none; /* quitar borde azul */
    }

    .navbar .dropdown-item:hover {
        background-color: #d1d8e0; /* hover suave */
    }
</style>
<nav class="navbar navbar-expand-lg navbar-custom mb-4">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand fw-bold" href="?page=home">Formularios</a>
        
        <!-- Botón toggle para móvil -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menú -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Items izquierda: TP1, TP2, TP3 -->
            <ul class="navbar-nav me-auto">
                <!-- TP1 -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        TP1
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?page=TP1Ej1">Ejercicio 1</a></li>
                        <li><a class="dropdown-item" href="?page=TP1Ej2">Ejercicio 2</a></li>
                        <li><a class="dropdown-item" href="?page=TP1Ej3get">Ejercicio 3 Get</a></li>
                        <li><a class="dropdown-item" href="?page=TP1Ej3post">Ejercicio 3 Post</a></li>
                        <li><a class="dropdown-item" href="?page=TP1Ej4">Ejercicio 4</a></li>
                        <li><a class="dropdown-item" href="?page=TP1Ej5">Ejercicio 5</a></li>
                        <li><a class="dropdown-item" href="?page=TP1Ej6">Ejercicio 6</a></li>
                        <li><a class="dropdown-item" href="?page=TP1Ej7">Ejercicio 7</a></li>
                        <li><a class="dropdown-item" href="?page=TP1Ej8">Ejercicio 8</a></li>
                    </ul>
                </li>

                <!-- TP2 -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        TP2
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?page=TP2Ej1">Ejercicio 1</a></li>
                        <li><a class="dropdown-item" href="?page=TP2Ej3">Ejercicio 3</a></li>
                        <li><a class="dropdown-item" href="?page=TP2Ej4">Ejercicio 4</a></li>
                    </ul>
                </li>

                <!-- TP3 -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        TP3
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?page=TP3Ej1">Ejercicio 1</a></li>
                        <li><a class="dropdown-item" href="?page=TP3Ej2">Ejercicio 2</a></li>
                        <li><a class="dropdown-item" href="?page=TP3Ej3">Ejercicio 3</a></li>
                    </ul>
                </li>

                <!-- TP4 -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        TP4
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?page=TP4Ej1">Ejercicio 1</a></li>
                        <li><a class="dropdown-item" href="?page=TP4Ej2">Ejercicio 2</a></li>
                        <li><a class="dropdown-item" href="?page=TP4Ej3">Ejercicio 3</a></li>
                        <li><a class="dropdown-item" href="?page=TP4Ej4">Ejercicio 4</a></li>
                        <li><a class="dropdown-item" href="?page=TP4Ej5">Ejercicio 5</a></li>
                        <li><a class="dropdown-item" href="?page=TP4Ej6">Ejercicio 6</a></li>
                        <li><a class="dropdown-item" href="?page=TP4Ej7">Ejercicio 7</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
