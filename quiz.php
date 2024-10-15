<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz de Conciencia sobre el Agua - Walert</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Protest+Strike&display=swap');

        html,
        body {
            margin: 0;
            padding: 0;
            min-width: 371px;
            min-height: 100vh;
            overflow-x: hidden;
        }

        body {
            font-family: 'Protest Strike', 'Poppins', Arial, sans-serif;
            line-height: 1.6;
            color: #333333;
            background: linear-gradient(135deg, #A8DADC, #E0FBFC);
            padding-top: 80px;
        }

        * {

            margin: 0;
            padding: 0;
            box-sizing: border-box;
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
            background-color: #1D3557;
            padding: 15px 20px;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .logo img {
            height: 50px;
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
            color: white;
            text-decoration: none;
            padding: 10px;
            transition: background-color 0.3s ease;
        }

        .menu ul li a:hover {
            background-color: #457B9D;
            border-radius: 5px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        h1 {
            color: #1D3557;
            text-align: center;
            margin-bottom: 40px;
            font-size: 2.5em;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .seleccion {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin-top: 40px;
            margin-bottom: 40px;
        }

        .quiz-option {
            flex: 0 1 300px;
            text-align: center;
            font-size: 24px;
            cursor: pointer;
            padding: 30px;
            background-color: #F1FAEE;
            border: none;
            border-radius: 15px;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .quiz-option p {
            margin-bottom: 20px;
            font-weight: 600;
            color: #1D3557;
        }

        .quiz-option img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            margin-top: 15px;
            transition: transform 0.3s ease;
        }

        .quiz-option:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .quiz-option:hover img {
            transform: scale(1.1);
        }

        #userForm,
        #quiz,
        #results {
            background-color: #F1FAEE;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: 600;
            color: #1D3557;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 2px solid #A8DADC;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="email"]:focus {
            border-color: #457B9D;
            outline: none;
        }

        button {
            background-color: #457B9D;
            color: #F1FAEE;
            border: none;
            padding: 12px 25px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 18px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        button:hover {
            background-color: #1D3557;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .question {
            margin-bottom: 30px;
        }

        .question h2 {
            color: #1D3557;
            margin-bottom: 20px;
            font-size: 1.5em;
        }

        .options {
            list-style-type: none;
            padding: 0;
        }

        .options li {
            margin-bottom: 15px;
        }

        .options label {
            cursor: pointer;
            display: flex;
            align-items: center;
            padding: 10px;
            border: 2px solid #A8DADC;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .options label:hover {
            background-color: #A8DADC;
        }

        .options input[type="radio"] {
            margin-right: 15px;
        }

        #results {
            display: none;
            text-align: center;
        }

        #results h2 {
            color: #1D3557;
            margin-bottom: 20px;
            font-size: 2em;
        }

        #results p {
            font-size: 18px;
            margin-bottom: 20px;
            color: #457B9D;
        }

        .result-chart {
            width: 250px;
            height: 250px;
            margin: 0 auto 30px;
        }

        .chart-text {
            font-size: 28px;
            font-weight: bold;
            fill: #1D3557;
        }

        .menu-toggle {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }

        .menu-toggle span {
            height: 3px;
            width: 25px;
            background-color: #F1FAEE;
            margin-bottom: 4px;
            border-radius: 2px;
            transition: all 0.3s ease;
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

            .seleccion {
                flex-direction: column;
                align-items: center;
            }

            .quiz-option {
                margin-bottom: 20px;
                width: 100%;
            }

            h1 {
                font-size: 2em;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .container,
        .quiz-option,
        #userForm,
        #quiz,
        #results {
            animation: fadeIn 0.5s ease-out;
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
        <h1>Quiz de Conciencia sobre el Agua</h1>
        <div class="seleccion">
            <div class="quiz-option" id="quiz-ninos" onclick="selectQuiz('ninos')">
                <p>QUIZ NIÑOS</p>
                <img src="fotos/kid.png" alt="Imagen Quiz Niños" class="quiz-image">

            </div>
            <div class="quiz-option" id="quiz-adultos" onclick="selectQuiz('adultos')">
                <p>QUIZ ADULTOS</p>
                <img src="fotos/adult.png" alt="Imagen Quiz Adultos" class="quiz-image">
            </div>
        </div>
        <div id="userForm" style="display: none;">
            <label for="name">Nombre:</label>
            <input type="text" id="name" required>
            <label for="surname">Apellidos:</label>
            <input type="text" id="surname" required>
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" required>

            <button onclick="startQuiz()">Comenzar Quiz</button>
        </div>
        <div id="message-container" style="display: none;"></div>

        <div id="quiz" style="display: none;"></div>

        <div id="results"></div>
    </div>

    <script>

window.onscroll = function () {
    var header = document.getElementById("sticky-header");
    if (window.pageYOffset > 0) {
        header.style.boxShadow = "0 2px 5px rgba(0,0,0,0.1)";
    } else {
        header.style.boxShadow = "none";
    }
};

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

const preguntasAdultos = [
    {
        question: "¿Cuál es el porcentaje aproximado de agua dulce en la Tierra?",
        options: ["3%", "50%", "75%", "97%"],
        answer: 0
    },
    {
        question: "¿Cuántos litros de agua se desperdician por una fuga de goteo constante en un día?",
        options: ["1-5 litros", "10-20 litros", "50-100 litros", "200-300 litros"],
        answer: 2
    },
    {
        question: "¿Qué porcentaje del cuerpo humano es agua?",
        options: ["30-40%", "50-60%", "70-80%", "90-100%"],
        answer: 2
    },
    {
        question: "¿Cuál es el mayor consumidor de agua dulce a nivel mundial?",
        options: ["Industria", "Agricultura", "Uso doméstico", "Generación de energía"],
        answer: 1
    },
    {
        question: "¿Cuántos días puede sobrevivir una persona sin agua?",
        options: ["1-3 días", "5-7 días", "10-14 días", "20-30 días"],
        answer: 0
    },
    {
        question: "¿Qué porcentaje de la población mundial no tiene acceso a agua potable segura?",
        options: ["5%", "15%", "25%", "35%"],
        answer: 1
    },
    {
        question: "¿Cuál es el océano más grande del mundo?",
        options: ["Atlántico", "Índico", "Ártico", "Pacífico"],
        answer: 3
    },
    {
        question: "¿Cuántos litros de agua se necesitan para producir 1 kg de carne de res?",
        options: ["500 litros", "1,000 litros", "5,000 litros", "15,000 litros"],
        answer: 3
    },
    {
        question: "¿Qué porcentaje de agua se ahorra al cerrar el grifo mientras te cepillas los dientes?",
        options: ["10%", "25%", "50%", "75%"],
        answer: 2
    },
    {
        question: "¿Cuál es el río más largo del mundo?",
        options: ["Amazonas", "Nilo", "Yangtsé", "Misisipi"],
        answer: 1
    },
    {
        question: "¿Cuántos litros de agua se recomiendan beber diariamente para un adulto promedio?",
        options: ["1-2 litros", "2-3 litros", "4-5 litros", "6-7 litros"],
        answer: 1
    },
    {
        question: "¿Qué porcentaje de agua dulce está congelada en los polos y glaciares?",
        options: ["30%", "50%", "70%", "90%"],
        answer: 2
    },
    {
        question: "¿Cuál es el lago más profundo del mundo?",
        options: ["Lago Superior", "Lago Victoria", "Lago Baikal", "Lago Tanganica"],
        answer: 2
    },
    {
        question: "¿Cuántos litros de agua se necesitan para producir una taza de café?",
        options: ["50 litros", "100 litros", "140 litros", "200 litros"],
        answer: 2
    },
    {
        question: "¿Qué porcentaje de agua se pierde en las redes de distribución urbanas debido a fugas?",
        options: ["5-10%", "15-20%", "25-30%", "35-40%"],
        answer: 2
    },
    {
        question: "¿Cuál es el país con mayor escasez de agua en el mundo?",
        options: ["India", "Etiopía", "Yemen", "Jordania"],
        answer: 2
    },
    {
        question: "¿Cuántos litros de agua se ahorran al usar un inodoro de bajo consumo?",
        options: ["2-3 litros por descarga", "4-6 litros por descarga", "7-9 litros por descarga", "10-12 litros por descarga"],
        answer: 1
    },
    {
        question: "¿Qué porcentaje de la superficie terrestre está cubierta por agua?",
        options: ["50%", "60%", "70%", "80%"],
        answer: 2
    },
    {
        question: "¿Cuál es el método más común de purificación de agua en los países en desarrollo?",
        options: ["Hervir", "Filtración", "Cloración", "Luz ultravioleta"],
        answer: 0
    },
    {
        question: "¿Cuántos litros de agua se necesitan para producir un par de jeans?",
        options: ["500 litros", "1,000 litros", "5,000 litros", "10,000 litros"],
        answer: 3
    },
    {
        question: "¿Qué porcentaje de las enfermedades en los países en desarrollo está relacionado con el agua contaminada?",
        options: ["30%", "50%", "70%", "90%"],
        answer: 2
    },
    {
        question: "¿Cuál es el mar más salado del mundo?",
        options: ["Mar Muerto", "Mar Rojo", "Mar Mediterráneo", "Mar Caspio"],
        answer: 0
    },
    {
        question: "¿Cuántos litros de agua se ahorran al usar una lavadora de carga frontal en lugar de una de carga superior?",
        options: ["10-20 litros por lavado", "30-40 litros por lavado", "50-60 litros por lavado", "70-80 litros por lavado"],
        answer: 2
    },
    {
        question: "¿Qué porcentaje del agua del planeta es salada?",
        options: ["50%", "70%", "97%", "99%"],
        answer: 2
    },
    {
        question: "¿Cuál es el país con mayor consumo de agua per cápita?",
        options: ["Estados Unidos", "China", "India", "Rusia"],
        answer: 0
    },
    {
        question: "¿Cuántos litros de agua se necesitan para producir una hoja de papel A4?",
        options: ["1 litro", "5 litros", "10 litros", "20 litros"],
        answer: 2
    },
    {
        question: "¿Qué porcentaje de agua se ahorra al usar una regadera de bajo flujo?",
        options: ["10-20%", "30-40%", "50-60%", "70-80%"],
        answer: 2
    },
    {
        question: "¿Cuál es el acuífero más grande del mundo?",
        options: ["Acuífero Guaraní", "Acuífero de Ogallala", "Gran Cuenca Artesiana", "Acuífero de Nubia"],
        answer: 0
    },
    {
        question: "¿Cuántos litros de agua se necesitan para producir un huevo?",
        options: ["50 litros", "100 litros", "200 litros", "300 litros"],
        answer: 1
    },
    {
        question: "¿Qué porcentaje de agua dulce se encuentra en los ríos y lagos?",
        options: ["0.3%", "1%", "3%", "5%"],
        answer: 0
    },
    {
        question: "¿Cuál es el país con mayor cantidad de agua dulce renovable per cápita?",
        options: ["Brasil", "Canadá", "Rusia", "Islandia"],
        answer: 3
    },
    {
        question: "¿Cuántos litros de agua se ahorran al usar un lavavajillas en lugar de lavar a mano?",
        options: ["5-10 litros", "20-30 litros", "40-50 litros", "60-70 litros"],
        answer: 2
    },
    {
        question: "¿Qué porcentaje de la población mundial vive en áreas con escasez de agua al menos un mes al año?",
        options: ["25%", "40%", "55%", "70%"],
        answer: 2
    },
    {
        question: "¿Cuál es el río más caudaloso del mundo?",
        options: ["Amazonas", "Nilo", "Congo", "Yangtsé"],
        answer: 0
    },
    {
        question: "¿Cuántos litros de agua se necesitan para producir una botella de plástico de 1 litro?",
        options: ["1 litro", "3 litros", "5 litros", "7 litros"],
        answer: 2
    },
    {
        question: "¿Qué porcentaje de agua se pierde por evaporación en la agricultura de riego?",
        options: ["10-20%", "30-40%", "50-60%", "70-80%"],
        answer: 1
    },
    {
        question: "¿Cuál es el país con mayor cantidad de agua embotellada consumida per cápita?",
        options: ["Estados Unidos", "Italia", "México", "Tailandia"],
        answer: 2
    },
    {
        question: "¿Cuántos litros de agua se necesitan para producir una camiseta de algodón?",
        options: ["500 litros", "1,000 litros", "2,000 litros", "2,700 litros"],
        answer: 3
    },
    {
        question: "¿Qué porcentaje de la población mundial depende del agua subterránea como fuente principal?",
        options: ["20%", "35%", "50%", "65%"],
        answer: 1
    },
    {
        question: "¿Cuál es el mar más pequeño del mundo?",
        options: ["Mar de Azov", "Mar de Mármara", "Mar Báltico", "Mar de Andamán"],
        answer: 0
    },
    {
        question: "¿Cuántos litros de agua se ahorran al reparar una fuga en un grifo que gotea?",
        options: ["5-10 litros al día", "20-30 litros al día", "40-50 litros al día", "60-70 litros al día"],
        answer: 1
    },
    {
        question: "¿Qué porcentaje del agua dulce disponible se utiliza para la producción de energía?",
        options: ["5%", "15%", "25%", "35%"],
        answer: 1
    },
    {
        question: "¿Cuál es el país con mayor cantidad de represas?",
        options: ["Estados Unidos", "China", "India", "Brasil"],
        answer: 1
    },
    {
        question: "¿Cuántos litros de agua se necesitan para producir un microchip?",
        options: ["10 litros", "50 litros", "100 litros", "32 litros"],
        answer: 3
    },
    {
        question: "¿Qué porcentaje de agua se ahorra al usar riego por goteo en lugar de riego por aspersión?",
        options: ["20-30%", "40-50%", "60-70%", "80-90%"],
        answer: 2
    },
    {
        question: "¿Cuál es el lago más grande de América del Sur?",
        options: ["Lago Titicaca", "Lago de Maracaibo", "Lago Poopó", "Lago Buenos Aires"],
        answer: 0
    },
    {
        question: "¿Cuántos litros de agua virtual se consumen en promedio por persona al día?",
        options: ["1,000 litros", "2,000 litros", "3,000 litros", "4,000 litros"],
        answer: 2
    },
    {
        question: "¿Qué porcentaje de las aguas residuales del mundo se liberan sin tratamiento?",
        options: ["40%", "60%", "80%", "95%"],
        answer: 2
    },
    {
        question: "¿Cuál es el país con mayor cantidad de agua desalinizada producida?",
        options: ["Arabia Saudita", "Estados Unidos", "Emiratos Árabes Unidos", "Israel"],
        answer: 0
    }
]; //Contiene 50 preguntas

const preguntasNinos = [
    {
        question: "¿Qué podemos hacer para ahorrar agua al lavarnos los dientes?",
        options: ["Dejar la llave abierta", "Cerrar la llave mientras nos cepillamos", "Usar más pasta de dientes", "Cepillarnos más rápido"],
        answer: 1
    },
    {
        question: "¿Qué sucede si dejamos una llave goteando en casa?",
        options: ["Se ahorra agua", "No pasa nada", "Se desperdicia agua", "El agua se limpia sola"],
        answer: 2
    },
    {
        question: "¿Cuál es una manera eficiente de regar las plantas sin desperdiciar agua?",
        options: ["Regarlas al mediodía", "Usar una manguera todo el día", "Usar agua de lluvia o regar por la mañana", "Regar con mucha agua de una vez"],
        answer: 2
    },
    {
        question: "¿Cómo podemos detectar una fuga de agua en casa?",
        options: ["Esperar a que salga mucha agua", "No hacer nada", "Revisar tuberías y ver si hay charcos", "Solo escuchar los grifos"],
        answer: 2
    },
    {
        question: "¿Qué debemos hacer si encontramos una fuga de agua en casa?",
        options: ["Ignorarla", "Llamar a un plomero", "Dejar que se arregle sola", "Usar más agua en otros lugares"],
        answer: 1
    },
    {
        question: "¿Cuál es una buena práctica al lavar el coche para cuidar el agua?",
        options: ["Usar una manguera sin parar", "Lavar el coche bajo la lluvia", "Usar una cubeta en lugar de la manguera", "Lavar el coche todos los días"],
        answer: 2
    },
    {
        question: "¿Por qué es importante cerrar bien los grifos después de usarlos?",
        options: ["Para que no se mojen", "Para evitar fugas y ahorrar agua", "Porque suenan feo", "Para que el agua salga más rápido después"],
        answer: 1
    },
    {
        question: "¿Qué podemos hacer con el agua que usamos para lavar frutas y verduras?",
        options: ["Tirarla", "Usarla para regar las plantas", "Dejarla en el fregadero", "Guardarla para otro día"],
        answer: 1
    },
    {
        question: "¿Qué podemos hacer para cuidar el agua en la ducha?",
        options: ["Ducharnos por mucho tiempo", "Cerrar el grifo mientras nos enjabonamos", "Dejar el agua correr todo el tiempo", "Usar mucha agua caliente"],
        answer: 1
    },
    {
        question: "¿Cuál es una manera de evitar que las fugas de agua empeoren?",
        options: ["Ignorarlas", "Reportarlas rápidamente", "Esperar a que sean más grandes", "Dejar el agua corriendo para que se limpie"],
        answer: 1
    },
    {
        question: "¿Cuándo es mejor regar las plantas para ahorrar agua?",
        options: ["Al mediodía", "Por la mañana o tarde", "Por la noche", "No importa la hora"],
        answer: 1
    },
    {
        question: "¿Qué sucede si dejamos una manguera abierta sin supervisión?",
        options: ["Se ahorra agua", "El agua se desperdicia", "Se limpia mejor", "Nada sucede"],
        answer: 1
    },
    {
        question: "¿Qué podemos usar en lugar de una manguera para lavar el auto y ahorrar agua?",
        options: ["Esponja y cubeta", "Manguera con mucha presión", "Manguera pequeña", "Agua embotellada"],
        answer: 0
    },
    {
        question: "¿Cuál es el porcentaje aproximado de agua dulce en la Tierra?",
        options: ["3%", "50%", "75%", "97%"],
        answer: 0
    },
    {
        question: "¿Qué aparato es útil para detectar fugas de agua que no podemos ver?",
        options: ["Termómetro", "Detector de fugas", "Barómetro", "Linterna"],
        answer: 1
    },
    {
        question: "¿Por qué es importante reportar fugas de agua en la calle?",
        options: ["No es importante", "Porque afecta el tráfico", "Para que no se desperdicie agua", "Porque es divertido"],
        answer: 2
    },
    {
        question: "¿Qué debemos hacer si vemos una llave de agua pública goteando?",
        options: ["Nada, es agua pública", "Reportarla para que se arregle", "Abrirla más", "Cerrar los ojos"],
        answer: 1
    },
    {
        question: "¿Cuánto agua se puede desperdiciar por una fuga pequeña durante un mes?",
        options: ["1 litro", "10 litros", "400 litros", "1,000 litros"],
        answer: 2
    },
    {
        question: "¿Qué acción ayuda a reducir el desperdicio de agua en el hogar?",
        options: ["Lavar los platos con el agua corriendo", "Reparar fugas de inmediato", "Dejar las fugas sin arreglar", "Usar más agua caliente"],
        answer: 1
    },
    {
        question: "¿Por qué es importante no tirar basura en ríos y lagos?",
        options: ["Porque el agua se ve sucia", "Para evitar la contaminación del agua", "Porque el agua es para los peces", "Porque se pierde la basura"],
        answer: 1
    },
    {
        question: "¿Cómo afecta una fuga de agua subterránea en la ciudad?",
        options: ["Crea charcos", "Desperdicia agua sin que nos demos cuenta", "No afecta nada", "Es buena para las plantas"],
        answer: 1
    },
    {
        question: "¿Qué debemos hacer si vemos una fuga de agua en la escuela?",
        options: ["Ignorarla", "Jugar con el agua", "Reportarla a un maestro", "Tirar más agua"],
        answer: 2
    },
    {
        question: "¿Qué es mejor para lavar platos a mano y ahorrar agua?",
        options: ["Dejar el agua corriendo", "Llenar el fregadero y lavar todo a la vez", "Usar más jabón", "Lavar los platos uno por uno"],
        answer: 1
    },
    {
        question: "¿Qué tipo de grifos ayudan a ahorrar agua?",
        options: ["Grifos que gotean", "Grifos con sensor", "Grifos antiguos", "Grifos que no cierran bien"],
        answer: 1
    },
    {
        question: "¿Qué sucede cuando los lagos y ríos tienen poca agua?",
        options: ["Nada, siguen igual", "Se secan y los animales pierden su hogar", "El agua se vuelve salada", "Los ríos se hacen más anchos"],
        answer: 1
    },
    {
        question: "¿Cuál es una fuente de agua renovable?",
        options: ["Agua embotellada", "Ríos y lluvias", "Grifos", "Aguas residuales"],
        answer: 1
    },
    {
        question: "¿Cómo podemos reducir el uso de agua al lavar ropa?",
        options: ["Lavar una prenda a la vez", "Lavar solo cuando hay una carga completa", "Lavar todos los días", "Usar más detergente"],
        answer: 1
    },
    {
        question: "¿Por qué es importante ahorrar agua aunque tengamos mucha?",
        options: ["Porque no es importante", "Para evitar escasez en el futuro", "Porque es divertido", "Para limpiar más"],
        answer: 1
    },
    {
        question: "¿Qué efecto puede tener una fuga en la factura del agua?",
        options: ["No tiene efecto", "Disminuye la factura", "Aumenta la factura", "Hace que el agua sea gratis"],
        answer: 2
    },
    {
        question: "¿Qué práctica ayuda a cuidar el agua al lavar frutas y verduras?",
        options: ["Lavarlas con la llave abierta", "Usar una cubeta o un recipiente", "No lavarlas", "Usar agua caliente"],
        answer: 1
    }
];

// Variables que servirán para mezclar el array de las preguntas, elegir 5 y mostrar de 1 en 1
let diezPreguntas = [];
let preguntaActual = 0;
let score = 0;
let preguntasnum = 5;
let quizType = '';

function selectQuiz(type) {
    quizType = type;
    document.querySelector('.seleccion').style.display = 'none';
    document.getElementById('userForm').style.display = 'block';
}

function mezclarArray(array) {
    for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
}

function esCorreoValido(correo) {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(correo);
}

function startQuiz() {
    const name = document.getElementById('name').value;
    const surname = document.getElementById('surname').value;
    const email = document.getElementById('email').value;

    if (!name || !email || !surname) {
        alert('Por favor, ingresa tu nombre, apellido y correo electrónico.');
        return;
    }

    if (!esCorreoValido(email)) {
        alert('Por favor, ingresa un correo electrónico válido.');
        return;
    }

    document.getElementById('userForm').style.display = 'none'; // Oculta el login
    document.getElementById('quiz').style.display = 'block'; // Muestra una pregunta con sus 4 respuestas

    let currentQuestions = [];
    if (quizType === 'ninos') {
        currentQuestions = preguntasNinos;
    } else {
        currentQuestions = preguntasAdultos;
    }

    mezclarArray(currentQuestions);
    diezPreguntas = currentQuestions.slice(0, preguntasnum);
    preguntaActual = 0;
    score = 0;

    cargarPregunta();
}

function cargarPregunta() {
    const questionData = diezPreguntas[preguntaActual];
    const quizContainer = document.getElementById('quiz');

    let optionsHtml = '';
    for (let i = 0; i < questionData.options.length; i++) {
        optionsHtml += `
            <li>
                <label>
                    <input type="radio" name="answer" value="${i}">
                    ${questionData.options[i]}
                </label>
            </li>`;
    }

    quizContainer.innerHTML = `
        <div class="question">
            <h2>Pregunta ${preguntaActual + 1} de ${preguntasnum}</h2>
            <p>${questionData.question}</p>
            <ul class="options">
                ${optionsHtml}
            </ul>
        </div>
        <button onclick="verificarPregunta()">Siguiente</button>`;
}

function verificarPregunta() {
    const selectedOption = document.querySelector('input[name="answer"]:checked');
    if (!selectedOption) {
        alert('Por favor, selecciona una respuesta.');
        return;
    }

    const answer = parseInt(selectedOption.value);
    if (answer === diezPreguntas[preguntaActual].answer) {
        score++;
    }

    preguntaActual++;
    if (preguntaActual < preguntasnum) {
        cargarPregunta();
    } else {
        mostrarResultados();
    }
}

function mostrarResultados() {
    const quizContainer = document.getElementById('quiz');
    const resultsContainer = document.getElementById('results');
    quizContainer.style.display = 'none';
    resultsContainer.style.display = 'block';


    const percentage = (score / preguntasnum) * 100;
    const circumference = 2 * Math.PI * 90; 
    const chartPercentage = (score / preguntasnum) * circumference;

    resultsContainer.innerHTML = `
    <h2>Resultados del Quiz</h2>
    <div class="result-chart">
        <svg width="200" height="200" viewBox="0 0 200 200">
            <circle cx="100" cy="100" r="90" fill="none" stroke="#e0e0e0" stroke-width="20"/>
            <circle cx="100" cy="100" r="90" fill="none" stroke="#3498db" stroke-width="20"
                    stroke-dasharray="${chartPercentage} ${circumference}"
                    transform="rotate(-90 100 100)"/>
            <text x="100" y="100" text-anchor="middle" dy="7" class="chart-text">${percentage}%</text>
        </svg>
    </div>
    <p>Has respondido correctamente ${score} de ${preguntasnum} preguntas.</p>
    <p>Tu puntuación es: ${percentage}%</p>
    <button onclick="location.reload()">Volver a intentar</button>
    `;


    const name = document.getElementById('name').value;
    const surname = document.getElementById('surname').value;
    const email = document.getElementById('email').value;
    alert('Enviando datos al servidor');

    fetch('insert.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: new URLSearchParams({
            name: name,
            surname: surname,
            email: email,
            score: score,
            quizType: quizType
        })
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert(`Datos enviados exitosamente: ${data.message}`);
            } else {
                alert(`Error: ${data.error}`);
            }
        })
        .catch(error => {
            alert('Error en la conexión: ' + error.message);
        });
}
    </script>
</body>

</html>