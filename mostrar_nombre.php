<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Nombre - Jhon Smith Fernandez</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            background: white;
            padding: 50px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            text-align: center;
            max-width: 600px;
            width: 90%;
        }
        h1 {
            color: #667eea;
            margin-bottom: 20px;
            font-size: 2em;
        }
        .nombre {
            font-size: 3em;
            font-weight: bold;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin: 30px 0;
            padding: 20px;
            border: 3px solid #667eea;
            border-radius: 15px;
            display: inline-block;
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        .info {
            margin-top: 20px;
            color: #666;
            font-size: 0.9em;
        }
        .volver {
            display: inline-block;
            margin-top: 30px;
            padding: 12px 30px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            transition: transform 0.3s;
        }
        .volver:hover {
            transform: translateY(-3px);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>👤 Mi nombre es:</h1>
        
        <div class="nombre">
            <?php
                $nombre = "Jhon Smith Fernandez";
                $carrera = "Ingeniería Web";
                echo $nombre;
            ?>
        </div>
        
        <div class="info">
            <p>📚 Estudiante de: <?php echo $carrera; ?></p>
            <p>📅 Proyecto desarrollado con PHP y XAMPP</p>
            <p>🎯 Fecha: <?php echo date("d/m/Y"); ?></p>
        </div>
        
        <a href="index.php" class="volver">⬅ Volver al inicio</a>
    </div>
</body>
</html>