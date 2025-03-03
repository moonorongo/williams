#!/usr/bin/python
import socket
import RPi.GPIO as GPIO

GPIO.setmode(GPIO.BCM)
GPIO.setwarnings(False)

GPIO.setup(3,GPIO.OUT)
GPIO.setup(4,GPIO.OUT)


# Configuración del servidor
HOST = '0.0.0.0'  # Escucha en todas las interfaces (IP de la Raspberry Pi)
PORT = 5000       # Puerto para la conexión
BUFFER_SIZE = 1024

# Crear el socket
server_socket = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
server_socket.bind((HOST, PORT))
server_socket.listen(1)  # Escucha hasta 1 conexión a la vez

print(f"Servidor iniciado en {HOST}:{PORT}")
print("Esperando conexiones...")

# Bucle principal para aceptar conexiones
while True:
    # Aceptar conexión del cliente
    client_socket, client_address = server_socket.accept()
    print(f"Cliente conectado desde: {client_address}")

    try:
        # Recibir datos del cliente
        while True:
            data = client_socket.recv(BUFFER_SIZE).decode('utf-8')
            if not data:
                break  # Si no hay más datos, salir del bucle

            print(f"Acción recibida: {data}")


            splitted_data = data.strip().split(':')
            action = splitted_data[0].strip()
            param = splitted_data[1].strip()

            # Procesar la acción
            if action == "turn_on":
                respuesta = "Encendiendo dispositivo..."
                GPIO.output(param,GPIO.HIGH)

            elif action == "reset":
                respuesta = "Apagando dispositivo..."
                GPIO.output(3,GPIO.LOW)
                GPIO.output(4,GPIO.LOW)

            else:
                respuesta = f"Acción desconocida: {action}"


            # Enviar respuesta al cliente
            client_socket.send(respuesta.encode('utf-8'))

    except Exception as e:
        print(f"Error: {e}")
    finally:
        # Cerrar la conexión con el cliente
        client_socket.close()
        print("Cliente desconectado")

# Cerrar el socket del servidor (esto no se ejecutará en este ejemplo por el bucle infinito)
server_socket.close()