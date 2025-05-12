<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legendary 91 Barbería | Medellín</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Oswald:wght@400;500;600&display=swap');
        
        :root {
            --primary: #1a1a1a;
            --secondary: #d4af37;
            --accent: #8b0000;
            --light: #f8f8f8;
            --dark: #333;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--light);
            color: var(--dark);
            line-height: 1.6;
        }

        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1599351431202-1e0f0137899a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            padding: 5rem 2rem;
            text-align: center;
            color: white;
            min-height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .hero h1 {
            font-family: 'Oswald', sans-serif;
            font-size: 3.5rem;
            margin-bottom: 1rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: var(--secondary);
        }

        .hero h2 {
            font-size: 1.8rem;
            margin-bottom: 2rem;
            opacity: 0.9;
            font-weight: 400;
        }

        .btn {
            display: inline-block;
            color: white;
            padding: 0.8rem 1.8rem;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            margin: 0.3rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-primary {
            background-color: var(--accent);
            box-shadow: 0 4px 15px rgba(139, 0, 0, 0.3);
        }

        .btn-primary:hover {
            background-color: #a30000;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(139, 0, 0, 0.4);
        }

        .btn-secondary {
            background-color: rgba(212, 175, 55, 0.8);
            color: var(--primary);
        }

        .btn-secondary:hover {
            background-color: rgba(212, 175, 55, 1);
            transform: translateY(-2px);
        }

        .services-section {
            padding: 4rem 2rem;
            text-align: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title {
            font-family: 'Oswald', sans-serif;
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 1rem;
            font-weight: 600;
            text-transform: uppercase;
            position: relative;
            display: inline-block;
        }

        .section-title:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--secondary);
        }

        .section-subtitle {
            color: #666;
            margin-bottom: 3rem;
            font-size: 1.1rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .service-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            padding: 2rem;
            transition: all 0.3s ease;
            border: 1px solid rgba(0,0,0,0.05);
            text-align: left;
            position: relative;
            overflow: hidden;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .service-card h3 {
            font-family: 'Oswald', sans-serif;
            font-size: 1.4rem;
            margin-bottom: 1rem;
            font-weight: 500;
            color: var(--primary);
            text-transform: uppercase;
        }

        .service-card .price {
            font-size: 1.5rem;
            color: var(--accent);
            font-weight: 600;
            margin: 1rem 0;
        }

        .service-card .duration {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 1rem;
            display: block;
        }

        .service-card .services-included {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 1.5rem;
        }

        .service-card .services-included strong {
            color: var(--dark);
        }

        .service-card .discount {
            position: absolute;
            top: 15px;
            right: -30px;
            background-color: var(--secondary);
            color: var(--primary);
            padding: 0.2rem 2rem;
            transform: rotate(45deg);
            font-size: 0.8rem;
            font-weight: 600;
            width: 120px;
            text-align: center;
        }

        .btn-service {
            background-color: var(--primary);
            color: white;
            font-size: 0.9rem;
            padding: 0.6rem 1.5rem;
            width: 100%;
            display: block;
            text-align: center;
        }

        .btn-service:hover {
            background-color: #333;
        }

        .about-section {
            background: linear-gradient(135deg, #f5f7fa, #e4e8f0);
            padding: 5rem 2rem;
            text-align: center;
        }

        .about-container {
            max-width: 1000px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .about-image {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .about-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        .about-content {
            text-align: left;
        }

        .about-content h2 {
            font-family: 'Oswald', sans-serif;
            font-size: 2rem;
            color: var(--primary);
            margin-bottom: 1.5rem;
            text-transform: uppercase;
        }

        .about-content p {
            font-size: 1rem;
            color: #666;
            margin-bottom: 1.5rem;
            line-height: 1.8;
        }

        .highlight {
            color: var(--accent);
            font-weight: 600;
        }

        .section-cta {
            text-align: center;
            padding: 4rem 2rem;
            background-color: var(--primary);
            color: white;
        }

        .section-cta h3 {
            font-family: 'Oswald', sans-serif;
            font-size: 2rem;
            margin-bottom: 1.5rem;
            text-transform: uppercase;
        }

        .section-cta p {
            max-width: 600px;
            margin: 0 auto 2rem auto;
            opacity: 0.9;
        }

        .nav-button {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: var(--secondary);
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            font-size: 1.5rem;
            text-decoration: none;
            box-shadow: 0 5px 20px rgba(212, 175, 55, 0.3);
            transition: all 0.3s ease;
            z-index: 100;
            opacity: 0;
            visibility: hidden;
        }

        .nav-button.visible {
            opacity: 1;
            visibility: visible;
        }

        .nav-button:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 25px rgba(212, 175, 55, 0.4);
        }

        @media (max-width: 768px) {
            .hero {
                padding: 3rem 1.5rem;
                min-height: 60vh;
            }
            
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero h2 {
                font-size: 1.4rem;
            }
            
            .about-container {
                grid-template-columns: 1fr;
            }
            
            .about-content {
                text-align: center;
            }
            
            .nav-button {
                width: 50px;
                height: 50px;
                font-size: 1.2rem;
                bottom: 20px;
                right: 20px;
            }
        }
    </style>
</head>
<body>
    <section class="hero">
        <div class="hero-content">
            <h1>Legendary 91 Barbería</h1>
            <h2>Experiencia profesional en Robledo, Medellín</h2>
            <div>
                <a href="#services" class="btn btn-primary">Nuestros Servicios</a>
                <a href="#contact" class="btn btn-secondary">Reserva Ahora</a>
            </div>
        </div>
    </section>

    <section id="services" class="services-section">
        <h2 class="section-title">Nuestros Servicios</h2>
        <p class="section-subtitle">Descubre nuestra variedad de tratamientos personalizados diseñados para satisfacer todas tus necesidades de estilo y cuidado</p>
        
        <div class="services-grid">
            <div class="service-card">
                <div class="discount">Ahorra 38%</div>
                <h3>VIP Premium 2</h3>
                <span class="duration">1 hora, 25 minutos • 4 servicios</span>
                <p class="services-included"><strong>Incluye:</strong> Corte Personalizado + Barba premium + Ritual facial + Cejas básicas</p>
                <span class="price">50.000 COP</span>
                <a href="#" class="btn btn-service">Añadir al carrito</a>
            </div>
            
            <div class="service-card">
                <h3>Estilo libre, realismo, definición</h3>
                <span class="duration">45 minutos</span>
                <span class="price">1 servicio</span>
                <a href="#" class="btn btn-service">Añadir al carrito</a>
            </div>
            
            <div class="service-card">
                <h3>Colorimetría</h3>
                <span class="duration">2 horas, 30 minutos</span>
                <span class="price">1 servicio</span>
                <a href="#" class="btn btn-service">Añadir al carrito</a>
            </div>
            
            <div class="service-card">
                <h3>Taper fade/covis/bajo</h3>
                <span class="duration">15 minutos</span>
                <p class="services-included"><strong>Incluye:</strong> Retoque de desvanecimiento cónico</p>
                <span class="price">15.000 COP</span>
                <a href="#" class="btn btn-service">Añadir al carrito</a>
            </div>
            
            <div class="service-card">
                <h3>Corte de pelo</h3>
                <span class="duration">30 minutos</span>
                <span class="price">20.000 COP</span>
                <a href="#" class="btn btn-service">Añadir al carrito</a>
            </div>
            
            <div class="service-card">
                <h3>Barber's Cut</h3>
                <span class="duration">10 minutos</span>
                <span class="price">15.000 COP</span>
                <a href="#" class="btn btn-service">Añadir al carrito</a>
            </div>
            
            <div class="service-card">
                <div class="discount">Ahorra 8%</div>
                <h3>VIP Vintage 1</h3>
                <span class="duration">35 minutos • 2 servicios</span>
                <p class="services-included"><strong>Incluye:</strong> Corte básico y cejas básicas</p>
                <span class="price">23.000 COP</span>
                <a href="#" class="btn btn-service">Añadir al carrito</a>
            </div>
            
            <div class="service-card">
                <div class="discount">Ahorra 25%</div>
                <h3>VIP Vintage 2</h3>
                <span class="duration">45 minutos • 3 servicios</span>
                <p class="services-included"><strong>Incluye:</strong> Corte de Cabello & Barba Básico & Cejas Básico</p>
                <span class="price">30.000 COP</span>
                <a href="#" class="btn btn-service">Añadir al carrito</a>
            </div>
        </div>
    </section>

    <section class="about-section">
        <div class="about-container">
            <div class="about-image">
                <img src="https://images.unsplash.com/photo-1585747860715-2ba37e788b70?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Legendary 91 Barbería">
            </div>
            <div class="about-content">
                <h2>Nuestra Barbería</h2>
                <p>En <span class="highlight">Legendary 91 Barbería</span> en Robledo, Medellín, ofrecemos un ambiente <span class="highlight">profesional y relajado</span>, brindando un servicio de barbería excepcional.</p>
                <p>Nuestra atmósfera acogedora te permite disfrutar de una experiencia cómoda mientras recibes atención experta. Ya sea que busques un corte de pelo moderno, un diseño clásico o un servicio de barbería completo, estamos aquí para ayudarte a lograr un look <span class="highlight">limpio y saludable</span>.</p>
                <p>Cada servicio está diseñado meticulosamente para satisfacer las necesidades individuales de nuestros clientes, garantizando resultados que superan las expectativas.</p>
            </div>
        </div>
    </section>

    <div id="contact" class="section-cta">
        <h3>¿Listo para tu próxima experiencia de barbería?</h3>
        <p>Reserva ahora y descubre por qué somos la elección preferida en Medellín</p>
        <a href="#" class="btn btn-primary">Reservar Cita</a>
    </div>

    <a href="#" class="nav-button">↑</a>

    <script>
        // Scroll suave para todos los enlaces
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Mostrar/ocultar botón de navegación
        window.addEventListener('scroll', () => {
            const navButton = document.querySelector('.nav-button');
            if (window.scrollY > 300) {
                navButton.classList.add('visible');
            } else {
                navButton.classList.remove('visible');
            }
        });
    </script>
</body>
</html>