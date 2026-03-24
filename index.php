<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Web - Jhon Smith Fernandez</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-align: center;
            margin-top: 50px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            min-height: 100vh;
        }
        .container {
            background: rgba(255,255,255,0.95);
            color: #333;
            max-width: 800px;
            margin: 50px auto;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }
        h1 {
            color: #667eea;
            margin-bottom: 10px;
        }
        h2 {
            color: #764ba2;
            font-size: 1.2em;
            margin-bottom: 30px;
        }
        .menu {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        .boton {
            display: inline-block;
            padding: 15px 30px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .boton:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        .footer {
            margin-top: 40px;
            font-size: 0.9em;
            color: #999;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📱 Bienvenido a Mi Web</h1>
        <h2>👨‍💻 Jhon Smith Fernandez</h2>
        
        <div class="menu">
            <a href="suma.php" class="boton">➕ Suma de 2 números</a>
            <a href="factorial.php" class="boton">🔢 Factorial</a>
            <a href="mostrar_nombre.php" class="boton">👤 Mi nombre</a>
        </div>
        
        <div class="footer">
            <p>Proyecto de Ingeniería Web - XAMPP</p>
        </div>
    </div>
</body>
</html>