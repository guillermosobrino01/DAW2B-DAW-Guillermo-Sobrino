<?php
include 'db.php';

header("Content-Type: application/json");
/////////////////evitar problemas de CORS
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
$method = $_SERVER['REQUEST_METHOD'];
if($method == "OPTIONS") {
    die();
}
/////////////////////
$method = $_SERVER['REQUEST_METHOD'];
$input = json_decode(file_get_contents('php://input'), true);

switch ($method) {
    case 'GET':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $result = $conn->query("SELECT * FROM organizadores WHERE id=$id");
            $data = $result->fetch_assoc();
            echo json_encode($data);
        } else {
            $result = $conn->query("SELECT * FROM organizadores");
            $datos = [];
            while ($row = $result->fetch_assoc()) {
                $datos[] = $row;
            }
            echo json_encode($datos);
        }
        break;

     case 'POST':
        $nombre = $input['nombre'];
        $dni = $input['dni'];
        $contacto = $input['contacto'];
        $conn->query("INSERT INTO organizadores (nombre, dni, contacto) VALUES ('$nombre', '$dni', '$contacto')");
        echo json_encode(["mensaje" => "Organizador añadido"]);
        break;

    case 'PUT':
        $id = $_GET['id'];
        $dni = $input['dni'];
        $nombre = $input['nombre'];
        $contacto = $input['contacto'];
        $conn->query("UPDATE organizadores SET dni='$dni',
                     nombre='$nombre', contacto='$contacto' WHERE id=$id");
        echo json_encode(["mensaje" => "Organizador actualizado"]);
        break;

    case 'DELETE':
        $id = $_GET['id'];
        $conn->query("DELETE FROM eventos WHERE id=$id");
        echo json_encode(["mensaje" => "Evento borrado"]);
        break;

    default:
        echo json_encode(["mensaje" => "Metodo invalido"]);
        break;
}

$conn->close();
?>