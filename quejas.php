<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Walert - Quejas y Comentarios</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Protest+Strike&family=Poppins:wght@400;600;700&display=swap');

        :root {
            --primary-color: #000398;
            --secondary-color: #005c98;
            --accent-color: #505bda;
            --text-color: #f1f1f1;
            --background-color: #1a1a2e;
        }

        #feedbackType {
            background-color: #333444;
            /* Un gris claro */
        }

        html,
        body {
            margin: 0;
            padding: 0;
            min-width: 371px;
            min-height: 100vh;
            overflow-x: hidden;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', Arial, sans-serif;
            line-height: 1.6;
            background: var(--background-color);
            color: var(--text-color);
            padding-top: 80px;
        }

        #sticky-header {
            font-family: 'Protest Strike';
            font-size: 20px;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgba(26, 26, 46, 0.9);
            padding: 15px 20px;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .logo img {
            height: 50px;
        }

        .menu ul {
            list-style: none;
            display: flex;
        }

        .menu ul li {
            margin-left: 20px;
        }

        .menu ul li a {
            color: var(--text-color);
            text-decoration: none;
            padding: 10px;
            transition: background-color 0.3s ease;
        }

        .menu ul li a:hover {
            background-color: var(--primary-color);
            border-radius: 5px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            font-family: 'Protest Strike', Arial, sans-serif;
            text-align: center;
            margin-bottom: 40px;
            color: var(--text-color);
            font-size: 50px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .feedback-section {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 20px;
            padding: 30px;
            margin-top: 40px;
            margin-bottom: 40px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .feedback-form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            margin-bottom: 5px;
            font-weight: 600;
        }

        .feedback-form input,
        .feedback-form textarea,
        .feedback-form select {
            width: 100%;
            padding: 12px;
            border: 1px solid rgba(176, 100, 100, 0.1);
            border-radius: 5px;
            background: rgba(255, 255, 255, 0.05);
            color: var(--text-color);
            font-family: 'Poppins', Arial, sans-serif;
            transition: all 0.3s ease;
        }

        .feedback-form input:focus,
        .feedback-form textarea:focus,
        .feedback-form select:focus {
            outline: none;
            border-color: var(--accent-color);
            box-shadow: 0 0 0 2px rgba(80, 91, 218, 0.2);
        }

        .feedback-form textarea {
            min-height: 150px;
            resize: vertical;
        }

        .feedback-form button {
            padding: 12px 20px;
            background-color: var(--primary-color);
            color: var(--text-color);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-family: 'Poppins', Arial, sans-serif;
            font-weight: 600;
            align-self: flex-start;
        }

        .feedback-form button:hover {
            background-color: var(--accent-color);
        }

        .feedback-message {
            margin-top: 20px;
            padding: 15px;
            border-radius: 5px;
            text-align: center;
            font-family: 'Poppins', Arial, sans-serif;
            font-weight: 600;
        }

        .feedback-message.success {
            background-color: rgba(0, 255, 0, 0.1);
            color: #4caf50;
        }

        .feedback-message.error {
            background-color: rgba(255, 0, 0, 0.1);
            color: #f44336;
        }

        footer {
            font-family: 'Protest Strike';
            text-align: center;
            padding: 20px;
            background-color: rgba(26, 26, 46, 0.9);
            color: var(--text-color);
            margin-top: 40px;
        }

        footer a {
            color: var(--accent-color);
            text-decoration: none;
            margin: 0 10px;
            transition: color 0.3s ease;
        }

        footer a:hover {
            color: var(--secondary-color);
        }

        .menu-toggle {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }

        .menu-toggle span {
            height: 3px;
            width: 25px;
            background-color: var(--text-color);
            margin-bottom: 4px;
            border-radius: 2px;
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
                transition: max-height 0.5s ease-out;
                max-height: 0;
            }

            .menu.active {
                display: block;
                max-height: 300px;
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

            .feedback-section {
                padding: 20px;
            }

            .feedback-form button {
                width: 100%;
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

    <div class="container">
        <h1>Quejas y Comentarios</h1>

        <div class="feedback-section">
            <form id="feedbackForm" class="feedback-form">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="surname">Apellido</label>
                    <input type="text" id="surname" name="surname" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo electrónico</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="feedbackType">Tipo de feedback</label>
                    <select id="feedbackType" name="feedbackType" required>
                        <option value="">Seleccione una opción</option>
                        <option value="queja">Queja</option>
                        <option value="comentario">Comentario</option>
                        <option value="sugerencia">Sugerencia</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="descripcion">Mensaje</label>
                    <textarea id="descripcion" name="descripcion" required></textarea>
                </div>
                <button type="submit">Enviar</button>
            </form>
            <div id="feedbackMessage" class="feedback-message"></div>
        </div>
    </div>

    <footer>
        © 2024 Walert. Todos los derechos reservados.
        <br />
        <a href="#">Facebook</a> | <a href="#">Twitter</a> | <a href="#">Instagram</a>
        <br />
        <a href="legal/tyc.php">Términos y condiciones</a> | <a href="legal/priv.php">Política de privacidad</a>
    </footer>

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

        window.onscroll = function () {
            var header = document.getElementById("sticky-header");
            if (window.pageYOffset > 0) {
                header.style.boxShadow = "0 2px 5px rgba(0,0,0,0.1)";
            } else {
                header.style.boxShadow = "none";
            }
        };

        const badWords = ['puto', 'putos', 'puta', 'putas', 'hijos de puto', 'hijos de puta','pendejo', 'pendejos', 'pendeja','pendejos',
            'mamavergas', 'mamaverga', 'mama vergas','mama verga', 'verga', 'pene','concha', 'vagina', 'mamada','estupido', 'estupidos', 
            'estupida','estupidas', 'mierda', 'mierdas', 'cagada','cagadas', 'cagon', 'cagones','cagona', 'cagonas', 'hdtpm','hsdtpm', 
            'ratas', 'rata','basura', 'basuras', 'basuron', 'basurones', 'polla', 'pollas','marica', 'maricas', 'maricon','maricones', 
            'sopla', 'chupa','chupame', 'negro', 'nigga','negros', 'negra', 'negras', 'chingada', 'chingadera', 'de mierda','culo', 'jalar', 
            'jalarme','culos','culonas', 'culones','tetas', 'teta', 'tetazas','tetarracas', 'nacos', 'naco','nacas', 'naca', 'bolas','bola', 
            'ramero', 'ramera','rameros','rameras', 'mamá','madre', 'penetrar', 'violar','matar', 'morir', 'matare','perra','perrisima'

        ]; 

        function containsBadWords(text) {
            return badWords.some(word => text.toLowerCase().includes(word.toLowerCase()));
        }

        document.getElementById('feedbackForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const name = document.getElementById('name').value.trim();
    const surname = document.getElementById('surname').value.trim();
    const email = document.getElementById('email').value.trim();
    const feedbackType = document.getElementById('feedbackType').value;
    const descripcion = document.getElementById('descripcion').value.trim();

    const feedbackMessage = document.getElementById('feedbackMessage');

    if (!name || !surname || !email || !feedbackType || !descripcion) {
        feedbackMessage.textContent = 'Por favor, complete todos los campos.';
        feedbackMessage.className = 'feedback-message error';
        return;
    }

    if (containsBadWords(descripcion)) {
        feedbackMessage.textContent = 'Por favor, evite usar lenguaje inapropiado.';
        feedbackMessage.className = 'feedback-message error';
        return;
    }

    fetch('insertq.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: new URLSearchParams({
            name: name,
            surname: surname,
            email: email,
            feedbackType: feedbackType,
            descripcion: descripcion
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            feedbackMessage.textContent = `¡Gracias por su feedback! ${data.message}`;
            feedbackMessage.className = 'feedback-message success';
        } else {
            feedbackMessage.textContent = `Error: ${data.error}`;
            feedbackMessage.className = 'feedback-message error';
        }
    })
    .catch(error => {
        feedbackMessage.textContent = 'Error en la conexión: ' + error.message;
        feedbackMessage.className = 'feedback-message error';
    });

    document.getElementById('feedbackForm').reset();

    setTimeout(() => {
        feedbackMessage.textContent = '';
        feedbackMessage.className = 'feedback-message';
    }, 10000);
});
    </script>
</body>

</html>