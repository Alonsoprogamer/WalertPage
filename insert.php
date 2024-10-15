<?php
header('Content-Type: application/json'); // Establece el tipo de contenido a JSON

// Conexión a la base de datos
$servername = "localhost";
$username = "root"; // Reemplaza con tu usuario
$password = ""; // Reemplaza con tu contraseña
$dbname = "Walert"; // Asegúrate de que el nombre de tu base de datos sea correcto

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    echo json_encode(['error' => "Conexión fallida: " . $conn->connect_error]);
    exit;
}

// Obtener los datos del formulario
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$score = $_POST['score'];
$quizTypes = $_POST['quizType'];

// Inicializar respuesta
$response = ['success' => false];

// Verificar si el usuario ya existe
$stmt = $conn->prepare("SELECT id_usuario FROM usuarios WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    // El usuario ya existe, obtener su ID
    $stmt->bind_result($id_usuario);
    $stmt->fetch();
    $response['success'] = true;
    $response['id_usuario'] = $id_usuario;
    $response['message'] = "Usuario existente encontrado. ID de usuario: $id_usuario.";

    // Guardar puntuación
    $stmt->close(); // Cerrar la sentencia anterior
    $stmt = $conn->prepare("INSERT INTO quiz (id_usuario, score, tipo) VALUES (?, ?, ?)");
    $stmt->bind_param("iis", $id_usuario, $score, $quizTypes);

    if ($stmt->execute()) {
        $response['message'] .= " Puntuación guardada exitosamente para el usuario ID: $id_usuario.";
    } else {
        $response['success'] = false;
        $response['message'] = "Error al guardar la puntuación: " . $stmt->error;
    }
} else {
    // El usuario no existe, insertarlo
    $stmt->close(); // Cerrar la sentencia anterior
    $stmt = $conn->prepare("INSERT INTO usuarios (name, surname, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $surname, $email);

    if ($stmt->execute()) {
        $id_usuario = $conn->insert_id; // Obtener el ID del usuario recién insertado
        $response['success'] = true;
        $response['id_usuario'] = $id_usuario;
        $response['message'] = "Nuevo usuario guardado exitosamente. ID de usuario: $id_usuario.";

        // Guardar puntuación
        $stmt->close(); // Cerrar la sentencia anterior
        $stmt = $conn->prepare("INSERT INTO quiz (id_usuario, score, tipo) VALUES (?, ?, ?)");
        $stmt->bind_param("iis", $id_usuario, $score, $quizTypes);

        if ($stmt->execute()) {
            $response['message'] .= " Puntuación guardada exitosamente para el usuario ID: $id_usuario.";
        } else {
            $response['success'] = false;
            $response['message'] = "Error al guardar la puntuación: " . $stmt->error;
        }
    } else {
        $response['message'] = "Error al guardar los datos del usuario: " . $stmt->error;
    }
}

// Cerrar las sentencias y la conexión
$stmt->close();
$conn->close();

// Devuelve la respuesta en formato JSON
echo json_encode($response);
exit;
?>
