<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tabla de Multiplicar</title>
    <style>
        
        th, td 
        {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Tabla de Multiplicar del número <?php echo $_GET['numero']; ?></h2>
    <table>
        <tr>
            <th>Número</th>
            <th>Resultado</th>
        </tr>
        <?php
            $numero = $_GET['numero'];
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "<tr>";
                echo "<td>$numero x $i</td>";
                echo "<td>$resultado</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
