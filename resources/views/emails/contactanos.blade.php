<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #444;
        }
        p {
            margin: 10px 0;
        }
        .footer {
            margin-top: 20px;
            font-size: 0.9em;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>¡Gracias por contactarnos!</h1>
        <p>Hola,</p>
        <p>Hemos recibido tu mensaje y nos pondremos en contacto contigo lo antes posible.</p>
        <h1>Nuevo mensaje de contacto</h1>
        <p><strong>Nombre:</strong> {{ $name }}</p>
        <p><strong>Email:</strong> {{ $email }}</p>
        <p><strong>Mensaje:</strong> {{ $user_message }}</p>
        <p>Gracias por confiar en nosotros.</p>
        <div class="footer">
            <p>Este es un mensaje generado automáticamente. Por favor, no respondas a este correo.</p>
        </div>
    </div>
</body>
</html>