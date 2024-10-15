<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Walert - Conciencia de las Fugas de Agua</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Protest+Strike&family=Poppins:wght@400;600;700&display=swap');

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
            font-family: 'Protest Strike', Arial, sans-serif;
            line-height: 1.6;
            background: linear-gradient(135deg, #000398, #005c98, #505bda);
            color: #f1f1f1;
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
            background-color: rgba(51, 51, 51, 0.9);
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
            color: white;
            text-decoration: none;
            padding: 10px;
            transition: background-color 0.3s ease;
        }

        .menu ul li a:hover {
            background-color: #444;
            border-radius: 5px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 40px;
            color: #f1f1f1;
            font-size: 50px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .icons-section {
            display: flex;
            width: 100%;
            justify-content: space-around;
            margin-top: 40px;
            flex-wrap: wrap;
            margin-bottom: 40px;
        }

        .icon {
            flex: 1;
            max-width: 300px;
            text-align: center;
            font-size: 80px;
            cursor: pointer;
            margin: 20px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 30px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .icon p {
            margin-top: 15px;
            font-size: 24px;
            word-wrap: break-word;
        }

        .icon:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .map-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-top: 40px;
            margin-bottom: 40px;
        }

        .map-container {
            flex: 1;
            min-width: 300px;
            height: 450px;
            margin-right: 20px;
            margin-bottom: 20px;
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .pet-container {
            flex: 1;
            min-width: 300px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .speech-bubble {
            text-align: justify;
            background-color: #ffffff;
            border-radius: 10px;
            padding: 15px;
            max-width: 200px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            font-family: 'Poppins', Arial, sans-serif;
            font-size: 14px;
            color: #333;
            margin-bottom: 20px;
            position: relative;
        }

        .speech-bubble::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            border-width: 10px 10px 0;
            border-style: solid;
            border-color: #ffffff transparent transparent transparent;
        }

        .pet {
            width: 100%;
            max-width: 300px;
            cursor: pointer;
        }

        .pet img {
            width: 100%;
            height: auto;
            object-fit: contain;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1001;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .modal-content {
            background-color: #f1f1f1;
            color: #333;
            padding: 20px;
            border-radius: 10px;
            width: 80%;
            max-width: 500px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: justify;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            overflow-y: auto;
            max-height: 90vh;
        }

        .modal-image {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 20px auto;
        }

        .modal-content h2 {
            text-align: center;
            font-size: 1.8em;
            margin-bottom: 20px;
            color: #000398;
        }

        .modal-content ul {
            padding-left: 20px;
        }

        .modal-content li {
            margin-bottom: 10px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .close:hover {
            color: #000;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: rgba(51, 51, 51, 0.9);
            color: white;
        }

        footer a {
            color: #A8DADC;
            text-decoration: none;
            margin: 0 10px;
            transition: color 0.3s ease;
        }

        footer a:hover {
            color: #F1FAEE;
        }

        .burbuja {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            position: absolute;
            bottom: -100px;
            animation: burbujas 5s linear infinite;
            z-index: -1;
        }

        @keyframes burbujas {
            0% {
                bottom: -100px;
                opacity: 0;
            }

            50% {
                opacity: 0.4;
            }

            100% {
                bottom: 100vh;
                opacity: 0;
            }
        }

        .burbuja:nth-child(1) {
            left: 5%;
            width: 50px;
            height: 50px;
            animation-delay: 1s;
        }

        .burbuja:nth-child(2) {
            left: 25%;
            width: 60px;
            height: 60px;
            animation-delay: 2s;
        }

        .burbuja:nth-child(3) {
            left: 45%;
            width: 70px;
            height: 70px;
            animation-delay: 3s;
        }

        .burbuja:nth-child(4) {
            left: 65%;
            width: 40px;
            height: 40px;
            animation-delay: 4s;
        }

        .burbuja:nth-child(5) {
            left: 85%;
            width: 80px;
            height: 80px;
            animation-delay: 5s;
        }

        .menu-toggle {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }

        .menu-toggle span {
            height: 3px;
            width: 25px;
            background-color: white;
            margin-bottom: 4px;
            border-radius: 2px;
        }

        .video-circles {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 20px;
            margin-top: 40px;
            margin-bottom: 40px;
        }

        .video-circle {
            flex: 1;
            min-width: 200px;
            max-width: 300px;
            aspect-ratio: 1 / 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            text-align: center;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 20px;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
        }

        .video-circle img {
            width: 100%;
            height: 60%;
            object-fit: cover;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .video-circle p {
            margin-top: 10px;
            font-size: 18px;
            line-height: 1.2;
            word-wrap: break-word;
            color: #ffffff;
            max-height: 3.6em;
            overflow: hidden;
            display: flex;
        }

        .video-circle:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .video-circle:hover img {
            transform: scale(1.1);
        }

        .video-circle::after {
            content: '▶';
            position: absolute;
            top: 38%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 24px;
            color: white;
            background-color: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 100%;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .video-circle:hover::after {
            opacity: 1;
        }

        .video-modal {
            display: none;
            position: fixed;
            z-index: 1001;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.8);
        }

        .video-modal-content {
            position: relative;
            background-color: #000000;
            margin: 10% auto;
            padding: 20px;
            border-radius: 5%;
            border: 1px solid #ff0000;
            width: 35%;
            max-width: 800px;
        }

        .video-container {
            position: relative;
            width: 100%;
            padding-bottom: 56.25%;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .video-controls {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: #ff0000;
        }

        .video-controls button {
            background: none;
            border: none;
            color: #ffffff;
            font-size: 16px;
            cursor: pointer;
            padding: 5px 10px;
        }

        .video-controls button:hover {
            background-color: #000000;
        }

        .video-progress {
            flex-grow: 1;
            height: 5px;
            background-color: #ddd;
            margin: 0 10px;
            position: relative;
            cursor: pointer;
        }

        .video-progress-bar {
            height: 100%;
            background-color: #000398;
            width: 0;
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

            .icon {
                max-width: 100%;
            }

            .map-section {
                flex-direction: column;
            }

            .map-container,
            .pet-container {
                width: 100%;
                margin-right: 0;
            }

            .pet-container {
                order: 2;
            }

            .speech-bubble {
                font-size: 12px;
                max-width: 150px;
            }

            .video-circle {
                min-width: 150px;
            }

            .video-circle p {
                font-size: 12px;
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
    <audio id="miCancion" src="mayonnaise on an escalator (full song).mp3"></audio>
    <button onclick="reproducirCancion()"></button>
        <div class="burbujas">
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
        </div>

        <h1>Walert: Conciencia de las Fugas de Agua</h1>

        <div class="icons-section">
            <div class="icon" id="icon1" onclick="openModal('modal1')">
                💧
                <p>Fugas de agua</p>
            </div>
            <div class="icon" id="icon2" onclick="openModal('modal2')">
                🌍
                <p>Impacto ambiental</p>
            </div>
            <div class="icon" id="icon3" onclick="openModal('modal3')">
                💡
                <p>Soluciones</p>
            </div>
        </div>

        <div class="map-section">
            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5293.599208443905!2d-99.1887983929633!3d19.530981742351834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f7fc29c23195%3A0xa2f064a1648e2824!2sHabit.la%20Comunidad%2C%20Tlalnepantla%2C%20M%C3%A9x.!5e0!3m2!1ses-419!2smx!4v1728180154105!5m2!1ses-419!2smx"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div class="pet-container">
                <div class="speech-bubble" id="bubble">
                    ¡Hola! Soy Fugi la mascota de Walert. ¡Haz click sobre mi para darte consejos!
                </div>
                <div class="pet" onclick="toggleSpeechBubble()">
                    <img src="https://media1.giphy.com/media/PUFcCNwsCjvMsNQZSW/200w.gif?cid=6c09b952kwq4ckzm8nxh275zitca2v4zoxt10i6k3ytigv21&ep=v1_gifs_search&rid=200w.gif&ct=g"
                        alt="Mascota Walert" id="mascota-img">
                </div>
            </div>
        </div>

        <div class="video-circles">
            <div class="video-circle" onclick="showVideo('r3cH7KYhgq8?si=IRmesoCivw7At8Wp')">
                <img src="https://i.ytimg.com/vi/r3cH7KYhgq8/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLDfUnb6_IU6OpDGciUlNohLXI4PDQ"
                    alt="Video 1">
                <p>El CUIDADO DEL AGUA, por qué es importante y consejos para ahorrar
                </p>

            </div>
            <div class="video-circle" onclick="showVideo('Wka0KQmCL3w?si=1iYSmZwUDa_3qkIn')">
                <img src="https://i.ytimg.com/vi/Wka0KQmCL3w/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLDR4WCriycu93p1f7BYGHxXzyYGLA"
                    alt="Video 2">
                <p>¿Cómo superar la Crisis Mundial del Agua? 💦
                </p>

            </div>
            <div class="video-circle" onclick="showVideo('C6WQ7uY5W7o?si=LPIUjdeAXTH-8LyW')">
                <img src="https://i.ytimg.com/vi/C6WQ7uY5W7o/hqdefault.jpg?sqp=-oaymwEcCOADEI4CSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCK7EMjf0a-z6Aewwexm_7mgH6XjQ"
                    alt="Video 3">
                <p>Videos "Cuidado del Agua" | UNESCO
                </p>

            </div>
            <div class="video-circle" onclick="showVideo('Zk2UFnBMnx8?si=6JLgxbS9BXs3k7_d')">
                <img src="https://i.ytimg.com/vi/Zk2UFnBMnx8/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLBQiBwwWF4hqO8MS_LZvzE_5zyPSg"
                    alt="Video 4">
                <p>¿Nos quedaremos algún día sin agua?
                </p>
            </div>
        </div>

        <div id="modal1" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal('modal1')">&times;</span>
                <h2>Fugas de agua</h2>
                <p>Las fugas de agua pueden causar pérdidas importantes de este recurso vital, afectando la
                    sostenibilidad y provocando aumentos innecesarios en los costos de servicios públicos.</p>
                <h3>Datos relevantes:</h3>
                <ul>
                    <li>Se estima que una fuga de agua puede desperdiciar entre 750 y 3,000 litros de agua por día.</li>
                    <li>Las fugas pequeñas, como las de un grifo que gotea, pueden desperdiciar más de 15 litros de agua
                        por día.</li>
                    <li>El desperdicio de agua genera mayores costos de energía.</li>
                </ul>
                <h3>Consejos:</h3>
                <ul>
                    <li>Revisa regularmente las tuberías y sistemas de agua.</li>
                    <li>Repara las fugas tan pronto como las identifiques.</li>
                </ul>
                <img class="modal-image"
                    src="https://plomerosdequeretaro.com/wp-content/uploads/2021/01/deteccion-de-fugas-de-agua-01-3.png">
            </div>
        </div>

        <div id="modal2" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal('modal2')">&times;</span>
                <h2>Impacto ambiental</h2>
                <p>El impacto ambiental del desperdicio de agua es significativo, contribuyendo a la escasez de agua, la
                    pérdida de biodiversidad y el aumento de la huella de carbono.</p>
                <h3>Datos importantes:</h3>
                <ul>
                    <li>El agua no utilizada adecuadamente puede afectar la disponibilidad de recursos para las
                        generaciones futuras.</li>
                    <li>La energía usada para tratar y bombear agua aumenta las emisiones de gases de efecto
                        invernadero.</li>
                    <li>El cambio climático puede empeorar la disponibilidad de agua dulce en muchas regiones.</li>
                </ul>
                <h3>Acciones recomendadas:</h3>
                <ul>
                    <li>Implementar tecnologías que optimicen el uso del agua en actividades diarias.</li>
                    <li>Fomentar la educación ambiental y la conciencia sobre la conservación del agua.</li>
                </ul>
                <img class="modal-image"
                    src="data:image/jpeg;base64,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">
            </div>
        </div>
    </div>

    <div id="modal3" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal3')">&times;</span>
            <h2>Soluciones</h2>
            <p>Existen diversas soluciones para reducir el desperdicio de agua y mejorar la eficiencia del uso de
                este recurso en el hogar y en la industria.</p>
            <h3>Soluciones prácticas:</h3>
            <ul>
                <li>Instalar dispositivos de bajo flujo en grifos y duchas para reducir el consumo de agua.</li>
                <li>Utilizar sistemas de riego eficientes, como riego por goteo, para minimizar el uso de agua en
                    jardines.</li>
                <li>Reparar cualquier fuga de agua tan pronto como sea detectada.</li>
            </ul>
            <h3>Beneficios:</h3>
            <ul>
                <li>Reducción de costos en el servicio de agua.</li>
                <li>Contribución a la sostenibilidad ambiental a largo plazo.</li>
            </ul>
            <img class="modal-image"
                src="https://img.freepik.com/vector-premium/idea-negocio-soluciones-creativas-intercambio-ideas-experiencia_1200-424.jpg">
        </div>
    </div>
    </div>

    <div id="videoModal" class="video-modal">
        <div class="video-modal-content">
            <span class="close" onclick="closeVideoModal()">&times;</span>
            <div class="video-container">
                <iframe id="youtubePlayer" width="560" height="315" src="" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="video-controls">
                <button id="playPauseBtn">Play</button>
                <div class="video-progress">
                    <div class="video-progress-bar"></div>
                </div>
                <button id="muteBtn">Mute</button>
                <button id="fullscreenBtn">Fullscreen</button>
            </div>
        </div>
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
        function reproducirCancion() {
            var audio = document.getElementById("miCancion");
            audio.play();
        }

        const phrases = [
            "Siempre es un buen momento para aprender sobre el cuidado e importancia del agua. ¡Ayúdame a cuidar el agua!",
            "¡El agua es vida, cuídala todos los días!",
            "¿Sabías que las fugas desperdician miles de litros de agua?",
            "¡Juntos podemos hacer una diferencia, revisa las fugas!",
            "Cada gota cuenta, ¡sé consciente del agua que usas!"
        ];

        const animaciones = [
            "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEik3hsqFYNfN9sHcXi887Uw-PV2-Nbp03rk88Nno3MFK4-e5D3N9lQE2k4_EJ67QjL00IL9j6Q10tFAS7Bb1toAsi8K2O4vVRmwkO8LZqu1p31rU-2o0iivlNCVl6U11dwhNysb-tAsgsib/s1600/e6b0c9f714d745ff23fcb6b344377110.gif",
            "https://ethic.es/wp-content/uploads/2021/06/suez.gif",
            "https://www.arquiled.com/wp-content/uploads/2022/09/ARQ-Vector-Artigo-Eficiencia_Hidrica-V03-Blogue_Cover-opti.gif",
            "https://media.giphy.com/media/lVB8T943vjkc2ndh7n/giphy.gif",
            "https://png.pngtree.com/png-clipart/20230924/original/pngtree-water-drop-with-red-heart-vector-illustration-liquid-sign-amour-vector-png-image_12754060.png"

        ]

        let currentPhraseIndex = 0;

        function toggleSpeechBubble() {
            const bubble = document.getElementById("bubble");
            const animacion = document.getElementById("mascota-img");
            bubble.textContent = phrases[currentPhraseIndex];
            animacion.src = animaciones[currentPhraseIndex];
            currentPhraseIndex = (currentPhraseIndex + 1) % phrases.length;
        }

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

        function openModal(modalId) {
            document.getElementById(modalId).style.display = "block";
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = "none";
        }

        function showVideo(videoId) {
            const modal = document.getElementById('videoModal');
            const player = document.getElementById('youtubePlayer');
            player.src = `https://www.youtube.com/embed/${videoId}?enablejsapi=1`;
            modal.style.display = 'block';
            initializeYouTubePlayer();
        }

        function closeVideoModal() {
            const modal = document.getElementById('videoModal');
            const player = document.getElementById('youtubePlayer');
            modal.style.display = 'none';
            player.src = '';
        }

        window.onclick = function (event) {
            if (event.target.className === 'modal' || event.target.className === 'video-modal') {
                event.target.style.display = "none";
                if (event.target.className === 'video-modal') {
                    const player = document.getElementById('youtubePlayer');
                    player.src = '';
                }
            }
        }

        window.onscroll = function () {
            var header = document.getElementById("sticky-header");
            if (window.pageYOffset > 0) {
                header.style.boxShadow = "0 2px 5px rgba(0,0,0,0.1)";
            } else {
                header.style.boxShadow = "none";
            }
        };

        let player;

        function onYouTubeIframeAPIReady() {
        }

        function initializeYouTubePlayer() {
            player = new YT.Player('youtubePlayer', {
                events: {
                    'onReady': onPlayerReady,
                    'onStateChange': onPlayerStateChange
                }
            });
        }

        function onPlayerReady(event) {
            const playPauseBtn = document.getElementById('playPauseBtn');
            const muteBtn = document.getElementById('muteBtn');
            const fullscreenBtn = document.getElementById('fullscreenBtn');
            const progressBar = document.querySelector('.video-progress-bar');

            playPauseBtn.addEventListener('click', function () {
                if (player.getPlayerState() == YT.PlayerState.PLAYING) {
                    player.pauseVideo();
                    playPauseBtn.textContent = 'Play';
                } else {
                    player.playVideo();
                    playPauseBtn.textContent = 'Pause';
                }
            });

            muteBtn.addEventListener('click', function () {
                if (player.isMuted()) {
                    player.unMute();
                    muteBtn.textContent = 'Mute';
                } else {
                    player.mute();
                    muteBtn.textContent = 'Unmute';
                }
            });

            fullscreenBtn.addEventListener('click', function () {
                const iframe = document.getElementById('youtubePlayer');
                if (iframe.requestFullscreen) {
                    iframe.requestFullscreen();
                } else if (iframe.mozRequestFullScreen) {
                    iframe.mozRequestFullScreen();
                } else if (iframe.webkitRequestFullscreen) {
                    iframe.webkitRequestFullscreen();
                } else if (iframe.msRequestFullscreen) {
                    iframe.msRequestFullscreen();
                }
            });

            setInterval(function () {
                if (player && player.getCurrentTime) {
                    const currentTime = player.getCurrentTime();
                    const duration = player.getDuration();
                    const progress = (currentTime / duration) * 100;
                    progressBar.style.width = progress + '%';
                }
            }, 1000);
        }

        function onPlayerStateChange(event) {
            const playPauseBtn = document.getElementById('playPauseBtn');
            if (event.data == YT.PlayerState.PLAYING) {
                playPauseBtn.textContent = 'Pause';
            } else {
                playPauseBtn.textContent = 'Play';
            }
        }

        var tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    </script>
</body>

</html>