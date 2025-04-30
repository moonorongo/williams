#!/usr/bin/python
import socket
import RPi.GPIO as GPIO
import time


# Server
HOST = '0.0.0.0'  
PORT = 5000       
BUFFER_SIZE = 1024

# GPIO pins
GPIO.setmode(GPIO.BCM)
GPIO.setwarnings(False)

# PWM: 12, 13, 18
gpio_pins = [ 12, 13, 16, 17, 18, 22, 23, 24, 25, 26, 27 ]

# set pins as output
for val in gpio_pins:
    GPIO.setup(val,GPIO.OUT)

server_socket = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
server_socket.bind((HOST, PORT))
server_socket.listen(1)

print(f"Servidor iniciado en {HOST}:{PORT}")
print("Esperando conexiones...")

while True:
    client_socket, client_address = server_socket.accept()
    print(f"Cliente conectado desde: {client_address}")

    try:
        # bucle recepcion de datos
        while True:
            data = client_socket.recv(BUFFER_SIZE).decode('utf-8')
            if not data:
                # Aqui checkear: si no hay GPIO encendido
                # entonces se podria poner algun atract mode
                break  # Si no hay más datos, salir del bucle

            # print(f"Acción recibida: {data}")

            splitted_data = data.strip().split(':')
            action = splitted_data[0].strip()
            param = int(splitted_data[1].strip())

            # Procesar la acción
            if action == "turn_on":
                #respuesta = "Encendiendo dispositivo..."
                if param < len(gpio_pins):
                    GPIO.output(gpio_pins[param],GPIO.HIGH)
                
            elif action == "reset":
                #respuesta = "Apagando dispositivo..."
                for val in gpio_pins:
                    GPIO.output(val,GPIO.LOW)

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
# server_socket.close()