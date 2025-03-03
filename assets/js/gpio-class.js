class GPIO  {
    static url = '/api/gpio.php'

    // apaga todos las luces
    static reset() {
        this.sendAction('reset', '0')
    }

    // enciende la luz correspondiente al GPIO pin 
    static turnOn(pin) {
        this.sendAction('turn_on', pin)
    }

    // envia la accion al servidor python para el control de las luces
    static sendAction(action, param) {
        const data = {
            action: action,
            param: param
        }

        const jsonData = JSON.stringify(data);

        const headers = new Headers();
        headers.append('Content-Type', 'application/json');
        
        try {
            fetch(this.url, {
                method: 'POST',
                headers: headers,
                body: jsonData 
            });
        } catch (error) {
            console.error(`Error al enviar ${action}: ${error}`);
        }
    }    
}