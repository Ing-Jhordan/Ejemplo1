<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora PHP</title>
    <style>
        body {
            background: linear-gradient(135deg, #74b9ff, #0984e3);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }
        .calculadora {
            background: #fff;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 300px;
        }
        h2 {
            color: #0984e3;
            margin-bottom: 20px;
        }
        input, select {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: 2px solid #0984e3;
            border-radius: 8px;
            font-size: 16px;
            outline: none;
        }
        select {
            width: 88%;
            cursor: pointer;
        }
        button {
            background: #0984e3;
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background: #74b9ff;
        }
        .resultado {
            margin-top: 20px;
            font-size: 20px;
            color: #2d3436;
        }
    </style>
</head>
<body>
    <div class="calculadora">
        <h2>Calculadora PHP</h2>
        <form method="post">
            <input type="number" name="num1" step="any" placeholder="Primer número" required><br>
            <select name="operacion">
                <option value="suma">➕ Suma</option>
                <option value="resta">➖ Resta</option>
                <option value="multiplicacion">✖️ Multiplicación</option>
                <option value="division">➗ División</option>
            </select><br>
            <input type="number" name="num2" step="any" placeholder="Segundo número" required><br>
            <button type="submit" name="calcular">Calcular</button>
        </form>

        <?php
        if (isset($_POST['calcular'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $op = $_POST['operacion'];
            $resultado = '';

            switch ($op) {
                case 'suma':
                    $resultado = $num1 + $num2;
                    break;
                case 'resta':
                    $resultado = $num1 - $num2;
                    break;
                case 'multiplicacion':
                    $resultado = $num1 * $num2;
                    break;
                case 'division':
                    $resultado = ($num2 != 0) ? $num1 / $num2 : 'Error: división por cero';
                    break;
            }

            echo "<div class='resultado'>Resultado: <strong>$resultado</strong></div>";
        }
        ?>
    </div>
</body>
</html>
