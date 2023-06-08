<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #container {
            display: flex;
            flex-wrap: wrap;
        }
        .mes{
            padding: 20px;
        }
        .anio{
            padding: 20px;
        }
        #menu_ma{
            background-color: salmon;
            width: 250px;
        }
        #resultado{
            background-color: rgb(159, 240, 186);
            width: 820px;
        }
    </style>
</head>

<body>
    <div id="container">
        <div id="menu_ma">
            <div class="mes">
                <label for="">Mes</label>
                <select id="opmes" onchange="cargar()">
                    <option value="1">Enero</option>
                    <option value="2">Febrero</option>
                    <option value="3">Marzo</option>
                    <option value="4">Abril</option>
                    <option value="5">Mayo</option>
                    <option value="6">Junio</option>
                    <option value="7">Julio</option>
                    <option value="8">Agosto</option>
                    <option value="9">Septiembre</option>
                    <option value="10">Octubre</option>
                    <option value="11">Noviembre</option>
                    <option value="12">Diciembre</option>
                </select>
            </div>
            <div class="anio">
                <label for="">Año</label>
                <select id="opanio" onchange="cargar()">
                    <?php
                    // Obtener el año actual
                    $currentYear = date('Y');
                    
                    // Generar opciones desde 1975 hasta el año actual (2023)
                    for ($year = 1975; $year <= $currentYear; $year++) {
                      echo "<option value='$year'>$year</option>";
                    }
                    ?>
                  </select>                  
            </div>
        </div>
        <div id="resultado">
        
        </div>
    </div>
</body>

</html>