<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Walert - Juego de Reparación de Tuberías</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Protest+Strike&family=Poppins:wght@400;600;700&display=swap');

        :root {
            --primary-color: #000398;
            --secondary-color: #005c98;
            --accent-color: #505bda;
            --text-color: #f1f1f1;
            --background-color: #1a1a2e;
            --pipe-color: #808080;
        }

        html, body {
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
            margin-bottom: 20px;
            color: var(--text-color);
            font-size: 40px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        #game-container {
            position: relative;
            width: 100%;
            max-width: 600px;
            height: 400px;
            margin: 0 auto;
            background-color: #1a1a2e;
            border: 2px solid var(--accent-color);
            border-radius: 10px;
            overflow: hidden;
        }

        .pipe {
            position: absolute;
            background-color: var(--pipe-color);
            border-radius: 10px;
        }

        .pipe-horizontal {
            height: 20px;
        }

        .pipe-vertical {
            width: 20px;
        }

        .leak {
            position: absolute;
            width: 30px;
            height: 30px;
            background: rgba(0, 92, 152, 0.7);
            border-radius: 50%;
            cursor: pointer;
            animation: pulse 0.5s infinite alternate;
            z-index: 10;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            100% {
                transform: scale(1.2);
            }
        }

        #water-meter {
            width: 100%;
            height: 20px;
            background-color: #ddd;
            border-radius: 10px;
            margin-top: 20px;
            overflow: hidden;
        }

        #water-level {
            width: 100%;
            height: 100%;
            background-color: var(--secondary-color);
            transition: width 0.3s ease;
        }

        #score, #time {
            text-align: center;
            font-size: 24px;
            margin-top: 20px;
        }

        #message {
            text-align: center;
            font-size: 18px;
            margin-top: 20px;
            font-weight: bold;
            color: var(--accent-color);
        }

        footer {
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

        @media (max-width: 768px) {
            #game-container {
                height: 300px;
            }

            h1 {
                font-size: 30px;
            }
        }
    </style>
</head>

<body>
    <header id="sticky-header">
        <div class="logo">
            <img src="logo.jpg" alt="Logo Walert">
        </div>
        <nav class="menu">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="quiz.html">Quiz</a></li>
                <li><a href="acerca.html">Acerca de</a></li>
                <li><a href="feedback.html">Quejas y Comentarios</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <h1>Juego de Reparación de Tuberías</h1>
        <div id="game-container"></div>
        <div id="water-meter">
            <div id="water-level"></div>
        </div>
        <div id="score">Fugas reparadas: 0</div>
        <div id="time">Tiempo: 3:00</div>
        <div id="message"></div>
    </div>

    <footer>
        © 2024 Walert. Todos los derechos reservados.
        <br />
        <a href="#">Facebook</a> | <a href="#">Twitter</a> | <a href="#">Instagram</a>
        <br />
        <a href="#">Términos y condiciones</a> | <a href="#">Política de privacidad</a>
    </footer>

    <script>
        const gameContainer = document.getElementById('game-container');
        const waterLevel = document.getElementById('water-level');
        const scoreElement = document.getElementById('score');
        const timeElement = document.getElementById('time');
        const messageElement = document.getElementById('message');

        let score = 0;
        let waterPercentage = 100;
        let leaks = [];
        let gameInterval;
        let timeLeft = 180; // 3 minutes in seconds

        function createPipes() {
            const pipes = [
                { class: 'pipe-horizontal', style: 'width: 100%; top: 50px;' },
                { class: 'pipe-horizontal', style: 'width: 100%; bottom: 50px;' },
                { class: 'pipe-vertical', style: 'height: calc(100% - 100px); left: 50px; top: 50px;' },
                { class: 'pipe-vertical', style: 'height: calc(100% - 100px); right: 50px; top: 50px;' }
            ];

            pipes.forEach(pipe => {
                const pipeElement = document.createElement('div');
                pipeElement.className = `pipe ${pipe.class}`;
                pipeElement.style = pipe.style;
                gameContainer.appendChild(pipeElement);
            });
        }

        function createLeak() {
            const leak = document.createElement('div');
            leak.classList.add('leak');
            const isHorizontal = Math.random() < 0.5;
            if (isHorizontal) {
                leak.style.top = Math.random() < 0.5 ? '35px' : 'calc(100% - 65px)';
                leak.style.left = `${Math.random() * (gameContainer.clientWidth - 30)}px`;
            } else {
                leak.style.left = Math.random() < 0.5 ? '35px' : 'calc(100% - 65px)';
                leak.style.top = `${Math.random() * (gameContainer.clientHeight - 30)}px`;
            }
            leak.addEventListener('click', () => fixLeak(leak));
            gameContainer.appendChild(leak);
            leaks.push(leak);
        }

        function fixLeak(leak) {
            gameContainer.removeChild(leak);
            leaks = leaks.filter(l => l !== leak);
            score++;
            updateScore();
        }

        function updateWaterMeter() {
            waterPercentage -= 0.5 * leaks.length;
            waterPercentage = Math.max(0, waterPercentage);
            waterLevel.style.width = `${waterPercentage}%`;
        }

        function updateScore() {
            scoreElement.textContent = `Fugas reparadas: ${score}`;
        }

        function updateTime() {
            timeLeft--;
            const minutes = Math.floor(timeLeft / 60);
            const seconds = timeLeft % 60;
            timeElement.textContent = `Tiempo: ${minutes}:${seconds.toString().padStart(2, '0')}`;

            if (timeLeft <= 0) {
                endGame();
            }
        }

        function endGame() {
            clearInterval(gameInterval);
            if (waterPercentage > 50) {
                messageElement.textContent = '¡Felicidades! Has logrado mantener el nivel de agua por encima del 50%.';
            } else {
                messageElement.textContent = 'Oh no, se ha desperdiciado demasiada agua. ¡Inténtalo de nuevo!';
            }
        }

        function startGame() {
            createPipes();
            gameInterval = setInterval(() => {
                if (Math.random() < 0.3) {
                    createLeak();
                }
                updateWaterMeter();
                updateTime();
            }, 1000);
        }

        startGame();

        // Responsive design
        window.addEventListener('resize', () => {
            leaks.forEach(leak => {
                const rect = leak.getBoundingClientRect();
                if (rect.left < 0 || rect.right > gameContainer.clientWidth || rect.top < 0 || rect.bottom > gameContainer.clientHeight) {
                    gameContainer.removeChild(leak);
                    leaks = leaks.filter(l => l !== leak);
                }
            });
        });
    </script>
</body>

</html>