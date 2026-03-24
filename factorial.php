<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Factorial - Jhon Smith Fernandez</title>
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
        .explicacion {
            font-size: 12px;
            color: #999;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🔢 Factorial de un número</h1>
        <p>El factorial de n (n!) es el producto de todos los números enteros positivos desde 1 hasta n</p>
        
        <form method="POST">
            <input type="number" name="numero" placeholder="Ingresa un número" min="0" required>
            <button type="submit">Calcular Factorial</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num = $_POST['numero'];
            
            // Función recursiva para calcular factorial
            function factorial($n) {
                if ($n <= 1) return 1;
                return $n * factorial($n - 1);
            }
            
            $resultado = factorial($num);
            
            echo "<div class='resultado'>";
            echo "📊 $num! = <span style='color:#764ba2; font-size:24px;'>$resultado</span>";
            echo "</div>";
            
            // Mostrar el proceso
            echo "<div class='explicacion'>";
            echo "Proceso: ";
            for ($i = 1; $i <= $num; $i++) {
                echo $i;
                if ($i < $num) echo " × ";
            }
            echo " = $resultado";
            echo "</div>";
        }
        ?>
        
        <a href="index.php" class="volver">⬅ Volver al inicio</a>
    </div>
</body>
</html>