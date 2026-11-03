
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="AlertaCívica: plataforma ciudadana para reportar problemas en los espacios públicos.">
    <title>AlertaCívica | Tu ciudad, nuestra responsabilidad</title>

    <style>
        :root {
            --primary: #123B63;
            --primary-dark: #0b2946;
            --secondary: #16A6A0;
            --background: #F4F7FB;
            --text: #243447;
            --muted: #64748b;
            --white: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background: var(--background);
            color: var(--text);
            line-height: 1.6;
        }

        a {
            text-decoration: none;
        }

        .navbar {
            min-height: 76px;
            padding: 14px 7%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
            background: var(--white);
            box-shadow: 0 3px 18px rgba(18, 59, 99, .07);
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 11px;
            color: var(--primary);
            font-size: 23px;
            font-weight: 800;
        }

        .brand-icon {
            width: 43px;
            height: 43px;
            display: grid;
            place-items: center;
            color: white;
            background: var(--secondary);
            border-radius: 13px;
            font-size: 20px;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 26px;
        }

        .nav-links a {
            color: var(--text);
            font-weight: 600;
            font-size: 14px;
        }

        .nav-links a:hover {
            color: var(--secondary);
        }

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 21px;
            border-radius: 10px;
            font-weight: 700;
            transition: .2s ease;
        }

        .btn:hover {
            transform: translateY(-2px);
        }

        .btn-outline {
            border: 1px solid #d6e0eb;
            color: var(--primary);
        }

        .btn-primary {
            background: var(--secondary);
            color: white;
            box-shadow: 0 8px 20px rgba(22, 166, 160, .22);
        }

        .hero {
            padding: 85px 7%;
            color: white;
            background:
                radial-gradient(circle at 85% 20%, rgba(22,166,160,.30), transparent 28%),
                linear-gradient(120deg, var(--primary-dark), var(--primary));
        }

        .hero-content {
            max-width: 1180px;
            margin: auto;
            display: grid;
            grid-template-columns: 1.2fr .8fr;
            align-items: center;
            gap: 60px;
        }

        .eyebrow {
            display: inline-block;
            margin-bottom: 20px;
            padding: 7px 13px;
            border: 1px solid rgba(255,255,255,.25);
            border-radius: 30px;
            color: #aaf0e9;
            font-size: 13px;
            font-weight: 700;
        }

        .hero h1 {
            max-width: 700px;
            margin-bottom: 22px;
            font-size: clamp(38px, 5vw, 58px);
            line-height: 1.12;
        }

        .hero h1 span {
            color: #55ddd0;
        }

        .hero p {
            max-width: 590px;
            color: #d6e5f1;
            font-size: 17px;
            margin-bottom: 30px;
        }

        .hero .btn-outline {
            color: white;
            border-color: rgba(255,255,255,.4);
        }

        .hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 13px;
        }

        .visual-card {
            min-height: 340px;
            padding: 28px;
            border: 1px solid rgba(255,255,255,.18);
            border-radius: 24px;
            background: rgba(255,255,255,.10);
            box-shadow: 0 25px 60px rgba(0,0,0,.15);
            backdrop-filter: blur(12px);
        }

        .visual-map {
            min-height: 220px;
            display: grid;
            place-items: center;
            position: relative;
            overflow: hidden;
            border-radius: 17px;
            background-color: #e1f0ed;
            background-image:
                linear-gradient(35deg, transparent 46%, #bdd9d1 47%, #bdd9d1 50%, transparent 51%),
                linear-gradient(120deg, transparent 46%, #bdd9d1 47%, #bdd9d1 50%, transparent 51%);
            background-size: 75px 75px;
        }

        .map-pin {
            width: 62px;
            height: 62px;
            display: grid;
            place-items: center;
            border: 6px solid white;
            border-radius: 50% 50% 50% 5px;
            transform: rotate(-45deg);
            background: var(--secondary);
            box-shadow: 0 8px 24px rgba(0,0,0,.2);
        }

        .map-pin span {
            transform: rotate(45deg);
            font-size: 24px;
        }

        .visual-caption {
            margin-top: 17px;
            color: white;
            font-weight: 700;
        }

        .visual-caption small {
            display: block;
            color: #c5d8e8;
            font-weight: 400;
        }

        .section {
            max-width: 1180px;
            margin: auto;
            padding: 76px 25px;
        }

        .section-heading {
            max-width: 650px;
            margin: 0 auto 40px;
            text-align: center;
        }

        .section-heading span {
            color: var(--secondary);
            text-transform: uppercase;
            letter-spacing: 1.5px;
            font-size: 12px;
            font-weight: 800;
        }

        .section-heading h2 {
            margin: 8px 0 12px;
            color: var(--primary);
            font-size: 33px;
        }

        .section-heading p {
            color: var(--muted);
        }

        .features {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 23px;
        }

        .feature-card {
            padding: 28px;
            border: 1px solid #e7edf4;
            border-radius: 17px;
            background: white;
            box-shadow: 0 8px 26px rgba(18,59,99,.045);
        }

        .feature-icon {
            width: 52px;
            height: 52px;
            display: grid;
            place-items: center;
            margin-bottom: 18px;
            border-radius: 14px;
            background: #e5f7f5;
            font-size: 25px;
        }

        .feature-card h3 {
            margin-bottom: 9px;
            color: var(--primary);
        }

        .feature-card p {
            color: var(--muted);
            font-size: 14px;
        }

        .steps-section {
            background: white;
        }

        .steps {
            max-width: 1000px;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .step {
            text-align: center;
            padding: 15px;
        }

        .step-number {
            width: 48px;
            height: 48px;
            display: grid;
            place-items: center;
            margin: 0 auto 15px;
            border-radius: 50%;
            background: var(--primary);
            color: white;
            font-size: 19px;
            font-weight: 800;
        }

        .step h3 {
            color: var(--primary);
            margin-bottom: 8px;
        }

        .step p {
            color: var(--muted);
            font-size: 14px;
        }

        .cta {
            margin: 65px 7%;
            padding: 48px 25px;
            border-radius: 22px;
            text-align: center;
            color: white;
            background: linear-gradient(110deg, var(--primary), #176b83);
        }

        .cta h2 {
            font-size: 30px;
            margin-bottom: 12px;
        }

        .cta p {
            margin-bottom: 22px;
            color: #d9e9f1;
        }

        footer {
            padding: 27px 7%;
            text-align: center;
            color: #cbd8e5;
            background: var(--primary-dark);
            font-size: 13px;
        }

        @media (max-width: 850px) {
            .hero-content {
                grid-template-columns: 1fr;
                gap: 35px;
            }

            .visual-card {
                max-width: 520px;
            }

            .features {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 620px) {
            .navbar {
                padding: 14px 5%;
                flex-wrap: wrap;
            }

            .nav-links {
                order: 3;
                width: 100%;
                justify-content: center;
                gap: 18px;
            }

            .nav-actions .btn {
                padding: 9px 12px;
                font-size: 12px;
            }

            .hero {
                padding: 60px 6%;
            }

            .features,
            .steps {
                grid-template-columns: 1fr;
            }

            .section {
                padding: 58px 20px;
            }

            .cta {
                margin: 35px 5%;
            }
        }
    </style>
</head>

<body>

    <header class="navbar">
        <a href="{{ route('home') }}" class="brand">
            <span class="brand-icon">AC</span>
            <span>AlertaCívica</span>
        </a>

        <nav class="nav-links">
            <a href="#inicio">Inicio</a>
            <a href="#beneficios">Beneficios</a>
            <a href="#funcionamiento">Cómo funciona</a>
        </nav>

        <div class="nav-actions">
            @auth
                <a href="{{ route('dashboard') }}" class="btn btn-primary">
                    Mi panel
                </a>
            @else
                <a href="{{ route('login') }}" class="btn btn-outline">
                    Iniciar sesión
                </a>
                <a href="{{ route('register') }}" class="btn btn-primary">
                    Registrarse
                </a>
            @endauth
        </div>
    </header>

    <main>
        <section class="hero" id="inicio">
            <div class="hero-content">
                <div>
                    <span class="eyebrow">TECNOLOGÍA AL SERVICIO DE LA CIUDADANÍA</span>

                    <h1>
                        Tu ciudad merece estar
                        <span>mejor.</span>
                    </h1>

                    <p>
                        AlertaCívica conecta a los ciudadanos con la gestión
                        de los problemas de los espacios públicos. Reporta
                        situaciones, comparte evidencias y contribuye a
                        construir una mejor comunidad.
                    </p>

                    <div class="hero-actions">
                        @auth
                            <a href="{{ route('dashboard') }}" class="btn btn-primary">
                                Ir a mi panel
                            </a>
                        @else
                            <a href="{{ route('register') }}" class="btn btn-primary">
                                Comenzar ahora
                            </a>
                            <a href="#funcionamiento" class="btn btn-outline">
                                Conocer más
                            </a>
                        @endauth
                    </div>
                </div>

                <div class="visual-card">
                    <div class="visual-map">
                        <div class="map-pin"><span>!</span></div>
                    </div>

                    <div class="visual-caption">
                        Tu comunidad, más conectada.
                        <small>La participación ciudadana genera cambios.</small>
                    </div>
                </div>
            </div>
        </section>

        <section class="section" id="beneficios">
            <div class="section-heading">
                <span>ALERTACÍVICA</span>
                <h2>Una ciudad mejor comienza contigo</h2>
                <p>
                    Una plataforma para facilitar la comunicación ciudadana
                    sobre las condiciones de los espacios públicos.
                </p>
            </div>

            <div class="features">
                <article class="feature-card">
                    <div class="feature-icon">📢</div>
                    <h3>Reporta problemas</h3>
                    <p>
                        Registra situaciones como huecos, luminarias dañadas,
                        acumulación de residuos y problemas de infraestructura.
                    </p>
                </article>

                <article class="feature-card">
                    <div class="feature-icon">📍</div>
                    <h3>Identifica ubicaciones</h3>
                    <p>
                        Relaciona los reportes con el lugar donde ocurre
                        el problema para facilitar su identificación.
                    </p>
                </article>

                <article class="feature-card">
                    <div class="feature-icon">🔎</div>
                    <h3>Consulta el seguimiento</h3>
                    <p>
                        Conoce los avances de los reportes y sus cambios
                        de estado conforme sean gestionados.
                    </p>
                </article>
            </div>
        </section>

        <section class="steps-section" id="funcionamiento">
            <div class="section">
                <div class="section-heading">
                    <span>PARTICIPACIÓN CIUDADANA</span>
                    <h2>¿Cómo funciona?</h2>
                    <p>
                        El proceso está pensado para que reportar una
                        situación sea sencillo y comprensible.
                    </p>
                </div>

                <div class="steps">
                    <article class="step">
                        <div class="step-number">1</div>
                        <h3>Crea tu cuenta</h3>
                        <p>
                            Regístrate para acceder a las funciones
                            de participación ciudadana.
                        </p>
                    </article>

                    <article class="step">
                        <div class="step-number">2</div>
                        <h3>Registra una alerta</h3>
                        <p>
                            Describe el problema, selecciona su categoría
                            y proporciona su ubicación.
                        </p>
                    </article>

                    <article class="step">
                        <div class="step-number">3</div>
                        <h3>Consulta su estado</h3>
                        <p>
                            Revisa el avance de tu reporte y mantente
                            informado sobre su gestión.
                        </p>
                    </article>
                </div>
            </div>
        </section>

        <section class="cta">
            <h2>Tu participación hace la diferencia</h2>
            <p>
                Forma parte de una comunidad que se preocupa por sus
                espacios públicos.
            </p>

            @guest
                <a href="{{ route('register') }}" class="btn btn-primary">
                    Crear mi cuenta
                </a>
            @else
                <a href="{{ route('dashboard') }}" class="btn btn-primary">
                    Ir a mi panel
                </a>
            @endguest
        </section>
    </main>

    <footer>
        © {{ date('Y') }} AlertaCívica. Proyecto de participación ciudadana.
    </footer>

</body>
</html>
