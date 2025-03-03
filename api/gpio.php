<?php 
    $post_body = file_get_contents('php://input');
    $json_body = json_decode($post_body, true);
    
    $action = $json_body['action'];
    $param = $json_body['param'];

    $host = "192.168.0.102";
    $port = 5000;
    $timeout = 30;

    // Crear el socket
    $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
    
    if ($socket === false) {
        // echo "Error al crear socket: " . socket_strerror(socket_last_error()) . "\n";
    }

    // Conectar al servidor
    $result = socket_connect($socket, $host, $port);
    if ($result === false) {
        // echo "Error al conectar: " . socket_strerror(socket_last_error($socket)) . "\n";
        socket_close($socket);
    }

    // Enviar la acción
    // echo "Enviando: $accion\n";
    socket_write($socket, "$action:$param", strlen("$action:$param"));

    // Recibir respuesta del servidor
    // $respuesta = socket_read($socket, 1024);
    // echo "Respuesta del servidor: $respuesta\n";

    // Cerrar el socket
    socket_close($socket);

