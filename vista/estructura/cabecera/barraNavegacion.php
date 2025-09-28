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
        <a class="navbar-brand fw-bold" href="/PWD/vista/home/home.php">Formularios</a>
        
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
                        <li><a class="dropdown-item" href="/PWD/vista/1/formulario1.php">Ejercicio 1</a></li>
                        <li><a class="dropdown-item" href="/PWD/vista/1/formulario2.php">Ejercicio 2</a></li>
                        <li><a class="dropdown-item" href="/PWD/vista/1/formulario3Get.php">Ejercicio 3 Get</a></li>
                        <li><a class="dropdown-item" href="/PWD/vista/1/formulario3Post.php">Ejercicio 3 Post</a></li>
                        <li><a class="dropdown-item" href="/PWD/vista/1/formulario4.php">Ejercicio 4</a></li>
                        <li><a class="dropdown-item" href="/PWD/vista/1/formulario5.php">Ejercicio 5</a></li>
                        <li><a class="dropdown-item" href="/PWD/vista/1/formulario6.php">Ejercicio 6</a></li>
                        <li><a class="dropdown-item" href="/PWD/vista/1/formulario7.php">Ejercicio 7</a></li>
                        <li><a class="dropdown-item" href="/PWD/vista/1/formulario8.php">Ejercicio 8</a></li>
                    </ul>
                </li>

                <!-- TP2 -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        TP2
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/PWD/vista/2/formulario1.php">Ejercicio 1</a></li>
                        <li><a class="dropdown-item" href="/PWD/vista/2/formulario3.php">Ejercicio 3</a></li>
                        <li><a class="dropdown-item" href="/PWD/vista/2/formulario4.php">Ejercicio 4</a></li>
                    </ul>
                </li>

                <!-- TP3 -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        TP3
                    </a>
                    <ul class="dropdown-menu tp3-menu">
                        <li><a class="dropdown-item" href="/PWD/vista/3/formulario1.php">Ejercicio 1</a></li>
                        <li><a class="dropdown-item" href="/PWD/vista/3/formulario2.php">Ejercicio 2</a></li>
                        <li><a class="dropdown-item" href="/PWD/vista/3/formulario3.php">Ejercicio 3</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        TP4
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/PHPMYSQL/vista/4/verAuto.php">Ejercicio 1</a></li>
                        <li><a class="dropdown-item" href="/PHPMYSQL/vista/4/buscarAuto.php">Ejercicio 2</a></li>
                        <li><a class="dropdown-item" href="/PHPMYSQL/vista/4/listarPersonas.php">Ejercicio 3</a></li>
                        <li><a class="dropdown-item" href="/PHPMYSQL/vista/4/nuevaPersona.php">Ejercicio 4</a></li>
                        <li><a class="dropdown-item" href="/PHPMYSQL/vista/4/NuevoAuto.php">Ejercicio 5</a></li>
                        <li><a class="dropdown-item" href="/PHPMYSQL/vista/4/CambioDuenio.php">Ejercicio 6</a></li>
                        <li><a class="dropdown-item" href="/PHPMYSQL/vista/4/BuscarPersona.html">Ejercicio 7</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
