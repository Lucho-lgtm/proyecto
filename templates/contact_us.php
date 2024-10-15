<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctanos</title>
    <link rel="stylesheet" href="/pagina.valentina/css/estilos.css">
</head>
<body>
    <header>
        <div class="container-hero">
            <div class="container hero">
                <div class="customer-support">
                    <i class="fa-solid fa-headset"></i>
                    <div class="content-customer-support">
                        <span class="text">Atencion al cliente</span>
                        <span class="number">(+57)3043809326</span>
                    </div>
                </div>

                <div class="container-logo">
                    <i class="fa-solid fa-mug-hot"></i>
                    <h1 class="logo"><a href="/">KABA</a></h1>
                </div>

            </div>
        </div>

        <div class="container-navbar">
            <nav class="navbar container">
                <i class="fa-solid fa-bars"></i>
                <ul class="menu">
                    <li><a href="/templates/index.html">Inicio</a></li>
                    <li><a href="#container-options">Linea capilar</a></li>
                    <li><a href="#container_specials">Linea corporal</a></li>
                    <li><a href="#container_facial">Linea facial</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="/templates/contact_us.html">Contáctanos</a></li>
                </ul>

                <form class="search-form">
                    <input type="search" placeholder="Buscar..." />
                    <button class="btn-search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </nav>          
        </div>
    </header>
    <div class="separator"></div>
    <main class="titleBanner">
        <h2 class="title1">Contáctanos</h2>
        <p class="banner_contact">Estamos aquí para ayudarte. Completa el formulario y nos pondremos en contacto contigo.</p>
    </main>

    <section class="content">
        <div class="container">
            <h3 class="labelContact">Formulario de Contacto</h3>
            <form action="conexion.php" method="POST">         
                <label class="labelName" for="name">Nombre:</label>
                <input type="text" id="name" name="name" placeholder="Ingresa tu nombre" required>
                
                <label class="labelName" for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" placeholder="Ingresa tu correo electrónico" required>

                <label class="labelName" for="message">Mensaje:</label>
                <textarea id="areaText" name="message" rows="5" placeholder="Escribe tu mensaje aquí" required></textarea>

                <button class="btn_contact" type="submit" name="registro">Enviar</button>
            </form>
        </div>
    </section>
    <div class="separator"></div>
    <footer class="footer">
        <div class="container container-footer">
            <div class="menu-footer">
                <div class="contact-info">
                    <p class="title-footer">Información de Contacto</p>
                    <ul>
                        <li>
                            Dirección: Carrera 17 Barrio Centenario
                        </li>
                        <li>Teléfono: (+57) 3043809326</li>
                        <li>EmaiL: kabanaturals@gmail.com</li>
                    </ul>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/profile.php?id=61564221783717&mibextid=ZbWKwL"><i class="fa-brands fa-facebook"></i></a>
                                
                        <a href="https://www.instagram.com/kaba_montenegro?igsh=MXQ3NmZndm9hZ21yaQ=="><i class="fa-brands fa-instagram"></i></a>
                        
                        <a href="https://whatsapp.com/dl/"><i class="fa-brands fa-whatsapp"></i></a>

                        <a href="https://youtube.com/@valentinaandica-q1g?si=tM6izhh_IXvBu1MX"><i class="fa-brands fa-youtube"></i></a>
                                
                        <a href=" https://www.threads.net/@valentina__andica?invite=2"><i class="fa-brands fa-threads"></i></a>
                    
                        <a href="https://www.tiktok.com/@kabaoficial10?_t=8pdwXRdXePF&_r=1"><i class="fa-brands fa-tiktok"></i></a>
                        </div>
                </div>
                <div class="information">
                    <p class="title-footer">Información</p>
                    <ul>
                        <li><a href="#">Acerca de Nosotros</a></li>
                        <li><a href="#">Información de Envios</a></li>
                        <li><a href="#">Politicas de Privacidad</a></li>
                        <li><a href="#">Términos y condiciones</a></li>
                        <li><a href="#">Contactános</a></li>
                    </ul>
                </div>

                <div class="my-account">
                    <p class="title-footer">Sobre nosotros</p>

                    <ul>
                        <li><a href="#"> Quienes somos</a></li>
                        <li><a href="#">Nuestras tiendas</a></li>
                        <li><a href="#">Lista de deseos</a></li>
                        <li><a href="#">Reembolsos</a></li>
                    </ul>
                </div>

                <div class="newsletter">
                    <p class="title-footer">Suscribete</p>

                    <div class="content">
                        <p>
                            Suscríbete a nuestros boletines ahora y mantente al
                            día con nuevas colecciones y ofertas exclusivas.
                        </p>
                        <input type="email" placeholder="Ingresa el correo aquí...">
                        <button>Suscríbete</button>
                    </div>
                </div>
            </div>

            <div class="pagos">
    
                <img class="mediodepago" src="/images/mediosdepago.jpg" alt="">
            </div>
        </div>
    </footer>
    

    <script
			src="https://kit.fontawesome.com/81581fb069.js"
			crossorigin="anonymous"
		></script>

</body>
</html>
