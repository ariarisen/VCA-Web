<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
<!--escalado de visualizacion, el ancho de visuazlizacion = al dispositivo,  zoom inicial-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VCA Soluciones Eléctricas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="encabezado.css">
    <link rel="stylesheet" href="carrusel.css">
    <link rel="stylesheet" href="inicio/seccion-nosotros/secccion-nosotros.css">
    <link rel="stylesheet" href="inicio/seccion-servicios/seccion-servicios.css">
    <link rel="stylesheet" href="componentes/botones.css">
    <link rel="stylesheet" href="componentes/mapa.css">

</head>
<body>
    <!-- contenedor del encabezado -->
    <section class="seccion-encabezado-principal">
        <!-- Encabezado superior con información de contacto -->
        <section class="seccion-encabezado">
            <div class="encabezado-contenido">
                <div class="encabezado-contactos">
                    <ul>
                    <li><a href="https://wa.me/997154496" target="_blank"><i class="bi bi-whatsapp"></i>+51 997 154 496</a></li>
                    <li><a><i class="bi bi-envelope"></i>electrocastillo11@hotmail.com</a></li>
                    </ul>
                </div>
                <div class="encabezado-redes-sociales">
                    <a href="https://wa.me/997154496" target="_blank"><i class="bi bi-whatsapp" style="color: #25D366; font-size: 24px;"></i></a>
                    <a href="https://www.facebook.com/vcasolucioneselectricas/" target="_blank"><i class="bi bi-facebook" style="color: #1877F2; font-size: 24px;"></i></a>
                    <a href="#"><i class="bi bi-instagram" style="color: #E1306C; font-size: 24px;"></i></a>
                </div>
            </div>
        </section>

        <!-- Encabezado de navegación principal -->
        <header class="seccion-barra-navegacion">
            <div class="contenedor-seccion-barra-navegacion">
                <nav class="barra-navegacion">
                    <a href="index.php" class="logo-menu"> 
                        <img src="imagenes/logo.png">
                    </a>

                    <ul class="menu-navegacion">
                        <li class="enlace-menu actual">
                            <a href="index.php">Inicio</a>
                        </li>
                        <li class="enlace-menu">
                            <a href="nosotros.php">Nosotros</a>
                        </li>
                        <li class="enlace-menu">
                            <a href="servicios.php">Servicios</a>
                        </li>
                        <li class="enlace-menu">
                            <a href="contacto.php">Contacto</a>
                        </li>
                    </ul>

                    <div class="controlador-menu">
                        <button class="boton-menu">
                            <i class="bi bi-list icono-menu" style="font-size:200%;"></i>
                            <i class="bi bi-x-square-fill icono-cerrar" style="font-size:200%;"></i>
                        </button>
                    </div>
                </nav>
            </div>
        </header>
    </section>

    <section class="contenedor-carrusel">
        <div class="carrusel">
            <div class="diapositiva-carrusel"><img src="imagenes/inicio/carrusel1.png"></div>
            <div class="diapositiva-carrusel"><img src="imagenes/inicio/carrusel2.png"></div>
            <div class="diapositiva-carrusel"><img src="imagenes/inicio/carrusel3.png"></div>
        </div>
    </section>
    <?php include 'inicio/seccion-nosotros/seccion-nosotros.php'; ?>
    <?php include 'inicio/seccion-servicios/seccion-servicios.php'; ?>
    <?php include 'componentes/mapa.php'; ?>
    <?php include 'componentes/pie-pagina.php'; ?>

    <script>
        // Funcionalidad del menú móvil
        const botonMenu = document.querySelector('.boton-menu');
        const menu = document.querySelector('.menu-navegacion');
        const contenedorEncabezado = document.querySelector('.seccion-encabezado-principal');
        let ultimaPosicionEjeY = window.scrollY;

        // Alternar visibilidad del menú móvil y estado del botón
        botonMenu.addEventListener('click', () => {
            botonMenu.classList.toggle('cambiarBotonMenu'); // Alternar estado
            menu.classList.toggle('mostrarSubMenu'); // Alternar visibilidad
        });

        // Cerrar menú móvil al hacer clic en enlaces de navegación
        const enlacesNav = document.querySelectorAll('.enlace-menu a');
        enlacesNav.forEach(enlace => {
            enlace.addEventListener('click', () => {
                menu.classList.remove('cambiarBotonMenu'); // Ocultar menú
            });
        });

        // Manejar eventos de desplazamiento
    window.addEventListener('scroll', () => {
        //si el usuario a desplezado mas de 100px hacia abajo
        if (window.scrollY > 100) {
                contenedorEncabezado.classList.add('ocultarRedes'); // Agregar clase al desplazarse
        } else {
                contenedorEncabezado.classList.remove('ocultarRedes'); // Quitar clase
        }
            ultimaPosicionEjeY = window.scrollY; // Actualizar última posición
    });

//carrusel
    const carrusel = document.querySelector('.carrusel');
    let diapositivaActual = 0; // Diapositiva actual
  

    // Función para avanzar automáticamente
    function siguienteDiapositiva() {
        diapositivaActual = (diapositivaActual + 1) % 3; // diapositivaActual = al residuo de [(x+1)/3] | (2+1=3)/3 residuo=0;
        carrusel.style.transform = `translateX(-${diapositivaActual * 25}%)`; // Mover el carrusel  en -eje x
        //el carrusel ocupa el 400% de la pantalla, en cada 25% esta 1 imagen
    }
    // Avanzar automáticamente cada 1.7 segundos
    setInterval(siguienteDiapositiva, 1700);

    </script>
</body>
</html>
