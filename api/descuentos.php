
<?php
$resultado = NULL;
$parametros = NULL;
if ($_SERVER['REQUEST_METHOD'] == "GET")
{
    $parametros = $_GET;
    $mysqli = new mysqli("localhost", "root", "", "moon");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    if (isset($parametros['id']))
    {
        $query = "SELECT *
        FROM libro
        ORDER BY precio ASC
        LIMIT 3";
        $resultado = $mysqli->query($query);
    } else {
        $query = "SELECT *
        FROM libro
        ORDER BY precio ASC
        LIMIT 3";
        $resultado = $mysqli->query($query);
    }
    $data = [];
    if ($resultado->num_rows > 0)
    {
        while ($fila = $resultado->fetch_assoc())
        {
            $data[] = $fila;
        }
        $respuesta = [
            "status"=> 200,
            "response" => $data
        ];
        echo json_encode($respuesta);
    } else {
        $respuesta = [
            "status"=> 200,
            "response" => null
        ];
        sleep(5);
        echo json_encode($respuesta);
    }
    
}
if ($_SERVER['REQUEST_METHOD'] == "POST")
{
    if (isset($_SERVER['CONTENT_TYPE']) && $_SERVER['CONTENT_TYPE'] == 'application/json')
    {
        $requestDataJSON = file_get_contents('php://input');
        $parametros = json_decode($requestDataJSON, TRUE);
    } else {
        $parametros = $_POST;
    }
    $mysqli = new mysqli("localhost", "root", "", "moon");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    if (isset($parametros['nombre']) && isset($parametros['cantidad']) && isset($parametros['precio']) && isset($parametros['tipo']))
    {
        if($mysqli->query($insertQuery) === TRUE)
        {
            $respuesta = [
                "status"=>200,
                "response" => 'ok'
            ];
            echo json_encode($respuesta);
        }else {
            $respuesta = [
                "status"=>200,
                "response" => 'nok'
            ];
            echo json_encode($respuesta);
        }
    } else {
        $respuesta = [
            "status"=>200,
            "response" => 'nok, verificar formulario'
        ];
        echo json_encode($respuesta);
    }
    
}