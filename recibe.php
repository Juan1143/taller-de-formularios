<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            padding-top: 50px;
        }

        .card-resultado {
            background-color: #0d4c5c; /* Azul oscuro de la foto */
            color: white;
            padding: 30px;
            border-radius: 20px;
            width: 350px;
            text-align: center;
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
            border: 1px solid #083a46;
        }

        h2 { margin-top: 0; font-size: 1.4rem; border-bottom: 1px solid rgba(255,255,255,0.2); padding-bottom: 10px; }

        .btn-volver {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #333;
            background: linear-gradient(to bottom, #ffffff 0%, #e1e1e1 100%);
            padding: 8px 20px;
            border-radius: 5px;
            font-weight: bold;
            font-size: 0.9rem;
            border: 1px solid #999;
        }
    </style>
</head>
<body>
    <div class="card-resultado">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $p1 = $_POST['p1'];
        $p2 = $_POST['p2'];
        $p3 = $_POST['p3'];
        $examen_final = $_POST['final'];
        $trabajo_final = $_POST['trabajo'];
    
        //Promedio de parciales
        $promedio_parciales = ($p1 + $p2 + $p3) / 3;
    
        // (35% parciales) + (35% examen) + (30% trabajo)
        $nota_final = ($promedio_parciales * 0.35) + ($examen_final * 0.35) + ($trabajo_final * 0.30);
    
    
        $nota_formateada = number_format($nota_final, 2); // number_format reducir los decimales
    
        echo "<h2>Resultado</h2>";
        echo "Su nota final es: <strong>$nota_formateada</strong><br>";
    
        if ($nota_final >= 3.0) {
            echo "<h3 style='color: green;'>Estado: Aprobó</h3>";
        } else {
            echo "<h3 style='color: red;'>Estado: No aprobó</h3>";
        }
    
        echo "<br><a href='formulario.php' class='btn-volver'>Volver a calcular</a>";
    }
    ?>
    </div>
</body>
</html>