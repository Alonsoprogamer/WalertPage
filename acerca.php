<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de - Walert</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Protest+Strike&family=Poppins:wght@400;600;700&display=swap');

        :root {
            --color-primary: #1D3557;
            --color-secondary: #457B9D;
            --color-accent: #A8DADC;
            --color-background: #E0FBFC;
            --color-text: #333333;
            --color-text-light: #F1FAEE;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Protest Strike', Arial, sans-serif;
            background: linear-gradient(135deg, var(--color-accent), var(--color-background));
            color: var(--color-text);
            line-height: 1.6;
            padding-top: 80px;
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        #sticky-header {
            font-size: 20px;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: var(--color-primary);
            padding: 15px 20px;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .logo img {
            height: 50px;
            transition: transform 0.3s ease;
        }

        .logo img:hover {
            transform: scale(1.05);
        }

        .menu ul {
            list-style: none;
            display: flex;
        }

        .menu ul li {
            margin-left: 20px;
        }

        .menu ul li a {
            color: var(--color-text-light);
            text-decoration: none;
            padding: 10px;
            transition: background-color 0.3s ease;
        }

        .menu ul li a:hover {
            background-color: var(--color-secondary);
            border-radius: 5px;
        }

        .menu-toggle {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }

        .menu-toggle span {
            height: 3px;
            width: 25px;
            background-color: var(--color-text-light);
            margin-bottom: 4px;
            border-radius: 2px;
            transition: all 0.3s ease;
        }

        h1 {
            font-family: 'Protest Strike', cursive;
            font-size: 2.5em;
            color: var(--color-primary);
            text-align: center;
            margin: 20px 0;
        }

        .profiles {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .profile {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .profile:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .profile img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .profile-content {
            padding: 20px;
        }

        .profile h3 {
            color: var(--color-primary);
            margin-bottom: 10px;
        }

        .profile p {
            font-size: 14px;
            color: var(--color-text);
            margin-bottom: 5px;
        }

        .social {
            margin-top: 15px;
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .social a {
            color: var(--color-secondary);
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .social a:hover {
            color: var(--color-primary);
        }

        @media (max-width: 768px) {
            #sticky-header {
                flex-wrap: wrap;
            }

            .menu-toggle {
                display: flex;
            }

            .menu {
                flex-basis: 100%;
                display: none;
                overflow: hidden;
                transition: max-height 0.5s ease-out, opacity 0.5s ease-out;
                max-height: 0;
                opacity: 0;
            }

            .menu.active {
                display: block;
                max-height: 300px;
                opacity: 1;
            }

            .menu ul {
                flex-direction: column;
                align-items: center;
            }

            .menu ul li {
                margin: 10px 0;
                opacity: 0;
                transform: translateY(-20px);
                transition: opacity 0.3s ease, transform 0.3s ease;
            }

            .menu.active ul li {
                opacity: 1;
                transform: translateY(0);
            }

            .profiles {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            }
        }
    </style>
</head>

<body>
    <header id="sticky-header">
        <div class="logo">
        <img src="fotos/logo.jpg" alt="Logo Walert">
        </div>
        <div class="menu-toggle" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <nav class="menu">
        <ul>
                <li><a href="walert.php">Home</a></li>
                <li><a href="quiz.php">Quiz</a></li>
                <li><a href="acerca.php">Acerca de</a></li>
                <li><a href="quejas.php">Quejas y Comentarios</a></li>
            </ul>
        </nav>
    </header>

    <main class="container">
        <h1>Nuestro Equipo</h1>
        <div class="profiles">
            <div class="profile">
                <img src="https://i.pinimg.com/originals/6e/05/eb/6e05ebce0023f4814aac82c82af41056.jpg" alt="Daniel">
                <div class="profile-content">
                    <h3>Daniel</h3>
                    <p>Tecnologías: Canva</p>
                    <p>Habilidades: Diseño web</p>
                    <div class="social">
                        <a href="#" aria-label="LinkedIn de Daniel">LinkedIn</a>
                        <a href="#" aria-label="GitHub de Daniel">GitHub</a>
                    </div>
                </div>
            </div>
            <div class="profile">
                <img src="https://i.pinimg.com/736x/4b/15/46/4b1546bd9c90c4f5b62e9e987b4ce6a3.jpg" alt="Alonso">
                <div class="profile-content">
                    <h3>Alonso</h3>
                    <p>Tecnologías: HTML, CSS, JS, SQL, PHP</p>
                    <p>Habilidades: Frontend, Backend, APIs</p>
                    <div class="social">
                        <a href="#" aria-label="LinkedIn de Alonso">LinkedIn</a>
                        <a href="#" aria-label="GitHub de Alonso">GitHub</a>
                    </div>
                </div>
            </div>
            <div class="profile">
                <img src="https://media-qro1-1.cdn.whatsapp.net/v/t61.24694-24/458143906_1663075877824796_4011174092283736248_n.jpg?ccb=11-4&oh=01_Q5AaIEsF0ql6HVk5IH-VHZgGZppsBNavHdVn6MAoDP9mYL--&oe=6713E92B&_nc_sid=5e03e0&_nc_cat=105"
                    alt="Carlos">
                <div class="profile-content">
                    <h3>Carlos</h3>
                    <p>Tecnologías: JS</p>
                    <p>Habilidades: Investigación, Seguridad</p>
                    <div class="social">
                        <a href="#" aria-label="LinkedIn de Carlos">LinkedIn</a>
                        <a href="#" aria-label="GitHub de Carlos">GitHub</a>
                    </div>
                </div>
            </div>
            <div class="profile">
                <img src="https://media-qro1-1.cdn.whatsapp.net/v/t61.24694-24/444998629_8599453466745745_3850961265181394007_n.jpg?ccb=11-4&oh=01_Q5AaIKETpoealGw_-Ujpopiu2zdvM8l8em4QpYXCzfDkjd-w&oe=6713BB23&_nc_sid=5e03e0&_nc_cat=102"
                    alt="Yahir">
                <div class="profile-content">
                    <h3>Yahir</h3>
                    <p>Tecnologías: SQL</p>
                    <p>Habilidades: Bases de datos</p>
                    <div class="social">
                        <a href="#" aria-label="LinkedIn de Yahir">LinkedIn</a>
                        <a href="#" aria-label="GitHub de Yahir">GitHub</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        function toggleMenu() {
            const menu = document.querySelector('.menu');
            menu.classList.toggle('active');

            const menuItems = menu.querySelectorAll('li');
            menuItems.forEach((item, index) => {
                item.style.opacity = '0';
                item.style.transform = 'translateY(-20px)';

                setTimeout(() => {
                    if (menu.classList.contains('active')) {
                        item.style.opacity = '1';
                        item.style.transform = 'translateY(0)';
                    }
                }, index * 100);
            });
        }

        window.addEventListener('scroll', function () {
            const header = document.getElementById('sticky-header');
            if (window.pageYOffset > 0) {
                header.style.boxShadow = '0 2px 5px rgba(0,0,0,0.1)';
            } else {
                header.style.boxShadow = 'none';
            }
        });
    </script>
</body>

</html>