<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Serie Fibonacci - Jhon Smith Fernandez</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .container {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            text-align: center;
            max-width: 600px;
            width: 90%;
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
        input {
            width: 80%;
            padding: 12px;
            margin: 10px 0;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            text-align: center;
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
            margin: 10px 0;
            transition: transform 0.2s;
        }
        button:hover {
            transform: scale(1.05);
        }
        .resultado {
            margin-top: 20px;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 8px;
            text-align: left;
        }
        .serie {
            font-size: 18px;
            font-weight: bold;
            color: #667eea;
            word-wrap: break-word;
            line-height: 1.8;
        }
        .explicacion {
            font-size: 12px;
            color: #666;
            margin-top: 15px;
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
        .error {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🔢 Serie Fibonacci</h1>
        <h2>Jhon Smith Fernandez</h2>
        <p>La serie Fibonacci comienza con 0 y 1, y cada término siguiente es la suma de los dos anteriores.</p>
        
        <form method="POST">
            <input type="number" name="terminos" placeholder="Ingresa número de términos" min="1" max="50" required>
            <br>
            <button type="submit">Calcular Serie Fibonacci</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $n = $_POST['terminos'];
            
            // Validación
            if ($n < 1) {
                echo "<div class='resultado error'>";
                echo "❌ Por favor ingresa un número mayor o igual a 1";
                echo "</div>";
            } elseif ($n > 50) {
                echo "<div class='resultado error'>";
                echo "⚠️ El número máximo de términos es 50 para mejor visualización";
                echo "</div>";
            } else {
                // Calcular serie Fibonacci
                $fibonacci = [];
                $fibonacci[0] = 0;
                if ($n >= 2) {
                    $fibonacci[1] = 1;
                }
                
                for ($i = 2; $i < $n; $i++) {
                    $fibonacci[$i] = $fibonacci[$i-1] + $fibonacci[$i-2];
                }
                
                // Mostrar resultado
                echo "<div class='resultado'>";
                echo "<strong>📊 Serie Fibonacci con $n términos:</strong><br>";
                echo "<div class='serie'>";
                
                for ($i = 0; $i < $n; $i++) {
                    echo $fibonacci[$i];
                    if ($i < $n-1) {
                        echo " → ";
                    }
                }
                
                echo "</div>";
                
                // Mostrar información adicional
                echo "<div class='explicacion'>";
                echo "<strong>📐 Fórmula:</strong> F(0)=0, F(1)=1, F(n)=F(n-1)+F(n-2)<br>";
                echo "<strong>📈 Total de términos:</strong> $n<br>";
                echo "<strong>🔢 Último término:</strong> " . end($fibonacci);
                echo "</div>";
                
                echo "</div>";
            }
        }
        ?>
        
        <a href="index.php" class="volver">⬅ Volver al inicio</a>
    </div>
</body>
</html>