<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
</head>
<body>

    <?php
        $idEstudiante=array();
        srand(time());
        for ($x=0;$x<10;$x++) {
            array_push($idEstudiante,rand(0,100));
        }

        $estudiantes=array("Melissa","Dubier","Arley","Mateo","Miguel","Pablo","Laura","Diego","Mariana","Samuel");

        $notas=array();
            srand(time());
            for ($x=0;$x<30;$x++) {
                array_push($notas,rand(0,50)/10);
            }

            $def1=($notas[0]+$notas[1]+$notas[2])/3;
            if($def1<3){
                $estado="Reprobo";
            }
            else{
                $estado="Aprobo";
            }

            $def2=($notas[3]+$notas[4]+$notas[5])/3;
            if($def2<3){
                $estado2="Reprobo";
            }
            else{
                $estado2="Aprobo";
            }

            $def3=($notas[6]+$notas[7]+$notas[8])/3;
            if($def3<3){
                $estado3="Reprobo";
            }
            else{
                $estado3="Aprobo";
            }

            $def4=($notas[9]+$notas[10]+$notas[11])/3;
            if($def4<3){
                $estado4="Reprobo";
            }
            else{
                $estado4="Aprobo";
            }

            $def5=($notas[12]+$notas[13]+$notas[14])/3;
            if($def5<3){
                $estado5="Reprobo";
            }
            else{
                $estado5="Aprobo";
            }

            $def6=($notas[15]+$notas[16]+$notas[17])/3;
            if($def6<3){
                $estado6="Reprobo";
            }
            else{
                $estado6="Aprobo";
            }

            $def7=($notas[18]+$notas[19]+$notas[20])/3;
            if($def7<3){
                $estado7="Reprobo";
            }
            else{
                $estado7="Aprobo";
            }

            $def8=($notas[21]+$notas[22]+$notas[23])/3;
            if($def8<3){
                $estado8="Reprobo";
            }
            else{
                $estado8="Aprobo";
            }

            $def9=($notas[24]+$notas[25]+$notas[26])/3;
            if($def9<3){
                $estado9="Reprobo";
            }
            else{
                $estado9="Aprobo";
            }

            $def10=($notas[27]+$notas[28]+$notas[29])/3;
            if($def10<3){
                $estado10="Reprobo";
            }
            else{
                $estado10="Aprobo";
            }

    ?>

    <table border="2">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Nota uno</th>
            <th>Nota dos</th>
            <th>Nota tres</th>
            <th>Definitiva</th>
            <th>Estado</th>
        </tr>

        <tr>
        <td><?php echo $idEstudiante[0] ?></td>
        <td><?php echo $estudiantes[0] ?></td>
        <td><?php echo $notas[0] ?></td>
        <td><?php echo $notas[1] ?></td>
        <td><?php echo $notas[2] ?></td>
        <td><?php echo number_format($def1,1) ?></td>
        <td><?php echo $estado ?></td>
        </tr>

        <tr>
        <td><?php echo $idEstudiante[1] ?></td>
        <td><?php echo $estudiantes[1] ?></td>
        <td><?php echo $notas[3] ?></td>
        <td><?php echo $notas[4] ?></td>
        <td><?php echo $notas[5] ?></td>
        <td><?php echo number_format($def2,1) ?></td>
        <td><?php echo $estado2 ?></td>
        </tr>

        <tr>
        <td><?php echo $idEstudiante[2] ?></td>
        <td><?php echo $estudiantes[2] ?></td>
        <td><?php echo $notas[6] ?></td>
        <td><?php echo $notas[7] ?></td>
        <td><?php echo $notas[8] ?></td>
        <td><?php echo number_format($def3,1) ?></td>
        <td><?php echo $estado3 ?></td>
        </tr>

        <tr>
        <td><?php echo $idEstudiante[3] ?></td>
        <td><?php echo $estudiantes[3] ?></td>
        <td><?php echo $notas[9] ?></td>
        <td><?php echo $notas[10] ?></td>
        <td><?php echo $notas[11] ?></td>
        <td><?php echo number_format($def4,1) ?></td>
        <td><?php echo $estado4 ?></td>
        </tr>

        <tr>
        <td><?php echo $idEstudiante[4] ?></td>
        <td><?php echo $estudiantes[4] ?></td>
        <td><?php echo $notas[12] ?></td>
        <td><?php echo $notas[13] ?></td>
        <td><?php echo $notas[14] ?></td>
        <td><?php echo number_format($def5,1) ?></td>
        <td><?php echo $estado5 ?></td>
        </tr>

        <tr>
        <td><?php echo $idEstudiante[5] ?></td>
        <td><?php echo $estudiantes[5] ?></td>
        <td><?php echo $notas[15] ?></td>
        <td><?php echo $notas[16] ?></td>
        <td><?php echo $notas[17] ?></td>
        <td><?php echo number_format($def6,1) ?></td>
        <td><?php echo $estado6 ?></td>
        </tr>

        <tr>
        <td><?php echo $idEstudiante[6] ?></td>
        <td><?php echo $estudiantes[6] ?></td>
        <td><?php echo $notas[18] ?></td>
        <td><?php echo $notas[19] ?></td>
        <td><?php echo $notas[20] ?></td>
        <td><?php echo number_format($def7,1) ?></td>
        <td><?php echo $estado7 ?></td>
        </tr>

        <tr>
        <td><?php echo $idEstudiante[7] ?></td>
        <td><?php echo $estudiantes[7] ?></td>
        <td><?php echo $notas[21] ?></td>
        <td><?php echo $notas[22] ?></td>
        <td><?php echo $notas[23] ?></td>
        <td><?php echo number_format($def8,1) ?></td>
        <td><?php echo $estado8 ?></td>
        </tr>

        <tr>
        <td><?php echo $idEstudiante[8] ?></td>
        <td><?php echo $estudiantes[8] ?></td>
        <td><?php echo $notas[24] ?></td>
        <td><?php echo $notas[25] ?></td>
        <td><?php echo $notas[26] ?></td>
        <td><?php echo number_format($def9,1) ?></td>
        <td><?php echo $estado9 ?></td>
        </tr>

        <tr>
        <td><?php echo $idEstudiante[9] ?></td>
        <td><?php echo $estudiantes[9] ?></td>
        <td><?php echo $notas[27] ?></td>
        <td><?php echo $notas[28] ?></td>
        <td><?php echo $notas[29] ?></td>
        <td><?php echo number_format($def10,1) ?></td>
        <td><?php echo $estado10 ?></td>
        </tr>
    </table>
    <br>
    <br>

    <?php
        $proGrup=($def1+$def2+$def3+$def4+$def5+$def6+$def7+$def8+$def9+$def10)/10;
        echo "El promedio de las notas del grupo es de: " .number_format($proGrup,2);
        echo "<br>La nota mas alta es: " .max($notas);
        echo "<br>La nota mas baja es: " .min($notas);
    ?>
    
</body>
</html>