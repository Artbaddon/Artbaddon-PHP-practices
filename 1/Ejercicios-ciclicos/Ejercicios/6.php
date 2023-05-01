<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles-ciclicos.css">
</head>

<body>
    <div class="ejercicios">
        <?php

        include 'funciones.php';

        escribirT("solucion");

        do{
            $p++;
        
        
            if ($edad>0 and $edad<=12){
            
                $acomulador=$acomulador+$peso;
            
            }else if ($edad>=13 and $edad<=29){
            
                $acomulador=$acomulador+$peso;
        
            }else if ($edad>=30 and $edad<=59){
            
                $acomulador=$acomulador+$peso;
            
            }else {
            
                $acomulador=$acomulador+$peso;
                
            }
            
                $promedio=$acomulador/$p;
            
            
        }while ($p<4);
        texto("El promedio general es de: $promedio");
        ?>

    </div>
</body>

</html>