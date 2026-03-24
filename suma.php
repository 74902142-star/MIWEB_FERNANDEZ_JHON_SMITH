<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Suma de 2 números - Jhon Smith Fernandez</title>
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
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            text-align: center;
            max-width: 500px;
            width: 90%;
        }
        h1 {
            color: #667eea;
            margin-bottom: 30px;
        }
        input {
            width: 90%;
            padding: 12px;
            margin: 10px 0;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s;
        }
        input:focus {
            outline: none;
            border-color: #667eea;
        }
        button {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
            transition: transform 0.2s;
        }
        button:hover {
            transform: scale(1.05);
        }
        .resultado {
            margin-top: 20px;
            padding: 15px;
            background: #f0f0f0;
            border-radius: 8px;
            font-size: 18px;
            font-weight: bold;
            color: #667eea;
        }
        .volver {
            display: inline-block;
            margin-top: 20px;
            color: #764ba2;
            text-decoration: none;
            font-weight: bold;
        }
        .volver:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>➕ Suma de 2 números</h1>
        
        <form method="POST">
            <input type="number" name="num1" placeholder="Número 1" required step="any">
            <input type="number" name="num2" placeholder="Número 2" required step="any">
            <button type="submit">Calcular Suma</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $suma = $num1 + $num2;
            
            echo "<div class='resultado'>";
            echo "📊 $num1 + $num2 = <span style='color:#764ba2; font-size:24px;'>$suma</span>";
            echo "</div>";
        }
        ?>
        
        <a href="index.php" class="volver">⬅ Volver al inicio</a>
    </div>
</body>
</html>