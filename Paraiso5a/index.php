<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hotel Paraíso - Tu destino de lujo y confort.">
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    
        <!-- Encabezado y menú de navegación -->
        <header>
            <h1>Hotel Paraíso</h1>
            <nav>
                <ul>
                    <li><a href="#inicio">Bienvenidos</a></li>
                    <li><a href="#servicios">Servicios</a></li>
                    <li><a href="#precio">Precios</a></li>
                    <li><a href="./labcontactenos/index.php">contactenos</a></li>
                    <li><a href="./labempleado/index.php">empleado</a></li>
                    <li><a href="./labinventario/index.php">inventario</a></li>
                    <li><a href="./labreserva/index.php">reservaciones</a></li>
                </ul>
            </nav>
        </header>
        <header class="header">
        </header>

        <!-- Sección de Bienvenida -->
        <section id="inicio">
            <h2>Nuestra Empresa</h2>
            <p>
                En Hotel Paraíso nos dedicamos a brindar una experiencia inolvidable con nuestra experiencia y gastronomia. 
                <br> ¡Ven y conocenos una experiencia unica y divertidad con artistas locales y cantantes!
            </p>
        </section>

        <!-- Sección de Servicios -->
        <section id="servicios">
            <h2>Nuestros Servicios</h2> 
            <div class="matriz">
                    <div class="fila">
                        <div class="objeto-galeria"
                            <p><strong>Habitaciones de lujo con vistas panorámicas.</strong></p>
                            <img src="imagenes/habitaciones.jpg" class= "gallery-item" alt="300" width="300" height="200">
                            <p>Duerme con maravillosas vistas</p>
                        </div>
    
                        <div class="objeto-galeria">
                            <p><strong>Habitacion de VIP</strong></p>
                            <img src="imagenes/lujo.jpg" class="gallery-item" alt="300" width="300" height="200">
                            <p>Disfruta los placeres con esa Habitacion</p>
                        </div>  
    
                        <div class="objeto-galeria">        
                            <p><strong>Spa y gimnasio totalmente equipados.</strong></p>
                            <img src="imagenes/spa.jpg" class="gallery-item" alt="300" width="300" height="200"> 
                            <p>Desconectate un rato</p> 
                        </div>
                    </div>
                
                    <div class="fila">
                        <div class="objeto-galeria">
                            <p><strong>GYM</strong></p>
                            <img src="imagenes/Gym.jpg" class="gallery-item" alt="300" width="300" height="200">
                            <p>Activate</p>
                        </div>
    
                        <div class="objeto-galeria">        
                            <p><strong>Bartender</strong></p>
                            <img src="imagenes/bartender.jpg" class="gallery-item" alt="300" width="300" height="200"> 
                            <p>Pasala bien y disfruta del yazz</p> 
                        </div>    
                    </div> 
    
                    <div class="fila">
                        <div class="objeto-galeria"
                            <p><strong>Restaurante gourmet</strong></p>
                            <img src="imagenes/restaurante.jpg" class= "gallery-item" alt="300" width="300" height="200">
                            <p>Degusta sabores esquisitos</p>
                        </div>
    
                        <div class="objeto-galeria">
                            <p><strong>Parque acuatico</strong></p>
                            <img src="imagenes/parque.jpg" class="gallery-item" alt="300" width="300" height="200">
                            <p>Excelente para niños</p>
                        </div>  
    
                        <div class="objeto-galeria">        
                            <p><strong>Yoga.</strong></p>
                            <img src="imagenes/yoga.jpg" class="gallery-item" alt="300" width="300" height="200">  
                            <p>Relajate y da armonia a tu vida</p>
                        </div>    
                    </div> 
            </div>
        </section>

        <section id="precio">
            <body>
                <h2>Precios</h2>
            <table class="tabla-precios">
                <thead>
                    <tr>
                        <th>Tipo de Habitación</th>
                        <th>Número de Personas</th>
                        <th>Precio por Noche</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Habitación Individual</td>
                        <td>1</td>
                        <td>$100</td>
                    </tr>
                    <tr>
                        <td>Habitación Doble</td>
                        <td>2</td>
                        <td>$200</td>
                    </tr>
                    <tr>
                        <td>Habitación Familiar</td>
                        <td>4</td>
                        <td>$257</td>
                    </tr>
                    <tr>
                        <td>Suite</td>
                        <td>2</td>
                        <td>$327</td>
                    </tr>
                </tbody>
            </table>

        <!-- Sección de Contacto -->
        <section id="contacto">
            <h2>Contacto</h2>
            <p>¿Tienes alguna pregunta o deseas hacer una reserva? Contáctanos:</p>
            <p><strong>Correo:</strong> <a href="mailto:reservas@hotelparaiso.com">reservas@hotelparaiso.com</a></p>
            <p><strong>Teléfono:</strong> <a href="tel:+1234567890">123-456-7890</a></p>
            <p><strong>Dirección:</strong> Calle bulebar Wishithon, Ciudad Paraíso</p>
        </section>

        <!-- Pie de página -->
        <footer>
            <p>&copy; 2024 Hotel Paraíso. Todos los derechos reservados.</p>
            <p>
                Síguenos en nuestras redes sociales: 
                <a href="https://www.facebook.com" target="_blank">Facebook</a> | 
                <a href="https://www.instagram.com" target="_blank">Instagram</a> | 
                <a href="https://www.twitter.com" target="_blank">Twitter</a>
            </p>
        </footer>
        <script>
                    document.querySelectorAll('nav ul li a').forEach(link => {
                        link.addEventListener('click', function (e) {
                            e.preventDefault();
                            const targetId = this.getAttribute('href').substring(1);
                            if (targetId != "./labcontactenos/index.php")||(targetId != "./labempleado/index.php")||(targetId != "./labinventario/index.php")||(targetId != "./labreserva/index.php"){
                                const targetSection = document.getElementById(targetId);

                                window.scrollTo({
                                    top: targetSection.offsetTop - 60, // Compensa la altura del header fijo
                                    behavior: 'smooth'
                                    });
                            }
                            else
                            {
                                if (targetId != "contactenos")
                                {
                                    location.href ="./labcontactenos/index.php";
                                }
                                else if (targetId != "empleado") 
                                {
                                    location.href ="./labempleado/index.php";
                                }
                                else if (targetId != "inventario") 
                                {
                                    location.href ="./labinventario/index.php";
                                }
                                else if (targetId != "reserva") 
                                {
                                    location.href ="./labreserva/index.php";
                                }
                            
                            };

                        
                    });
                });
        </script>
    </body>
</html>