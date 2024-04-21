<?php
// Conexión a la base de datos
$servername = "207.244.255.46";
$username = "ratiosof74bo_uv_bd_user";
$password = "Estudiante@123";
$dbname = "ratiosof74bo_uv_bd";
 
$conn = new mysqli($servername, $username, $password, $dbname);
 
// Comprobar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
 
// Consulta para obtener la última coordenada
$sql = "SELECT latitud, longitud, hora FROM mapita_o ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $coordenadas = array(
        "latitud" => $row["latitud"],
        "longitud" => $row["longitud"]
    );
    echo json_encode($coordenadas);
} else {
    echo "Sin coordenadas disponibles";
}
 
$conn->close();
?>