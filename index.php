<html>
    <body>
        <?php
            
            $vector_promedios = array(
                "Erik Vargas de la Torre" => array(70, 85, 93, 80, 76, 100),

                "Leticia Carrera Venegas" => array(90, 87, 100, 100, 99, 80),

                "Daniel España Gomez" => array(80, 53, 77, 23, 90, 95),

                "Alan Osvaldo Guzmán Caldera" => array(98, 84, 89, 100, 91, 95),

                "Perla Edelmira Reveles Herrera" => array(77, 90, 83, 76, 95, 99),

                "Cristofer Casas Murillo" => array(100, 95, 100, 100, 80, 93),

                "Adriana de Jesús Márquez Mendoza" => array(90, 89, 93, 99, 70, 91),

                "Abraham Ríos Rivera" => array(100, 78, 90, 89, 97, 92),

                "Guadalupe Vázquez de la Torre" => array(100, 100, 100, 100, 99, 100),

                "Ricardo Benjamin Viramontes Juárez" => array(45, 70, 69, 80, 87, 55),
            );

            function promedioGrupalGeneral($vectorDePromedios) {

                echo "<br><br> ------------------ Promedio general del grupo ------------------ <br>";

                $promedio = 0;
                
                foreach ($vectorDePromedios as $value) {
                    $promedio = $promedio + $value;
                }
                echo "<br>El promedio general del grupo es: ".$promedio/count($vectorDePromedios)."<br>";
                return $promedio/count($vectorDePromedios);
            }

            function promedioAlumno($vector_promedios) {
                $promedio = 0;
                $vectorPromedio = [];
                $indice = 0;
                $i = 1;
                echo "<br> ------------------ Promedio por Alumno ------------------ <br>";

                foreach ($vector_promedios as $nombre => $calif) {
                    echo "<br>".$nombre;
                    foreach ($calif as $c) {
                        echo "<br>Calificacion materia ".$i;
                        echo ": ".$c;
                        $promedio = $promedio + $c; 
                        $i += 1;
                    }
                    $i = 1;
                    echo "<br>Promedio: ";
                    echo $promedio/6;
                    echo "<br>";
                    $vectorPromedio[$indice+=1] = $promedio/6;
                    $promedio = 0;
                }
                return $vectorPromedio;
            }

            function promedioMateria($vector_promedios) {
                $promedio = 0;
                $indice = 0;
                echo "<br><br> ------------------ Promedio por Materia ------------------ <br>";

                for($i=1; $i<=6; $i++) {

                    foreach ($vector_promedios as $calificaciones) {
                        $promedio = $promedio + $calificaciones[$indice];
                    }

                    echo "<br>Promedio de Materia ".$i;
                    echo ": ".$promedio/10;
                    $promedio = 0;
                    $indice += 1;
                }

            }

            function mejorPromedioAlumno($vector) {
                $mejorPromedio = 0;
                echo "<br><br> ------------------ Mejor Promedio por Alumno ------------------ <br>";

                foreach ($vector as $nombre => $calif) {
                    echo "<br>".$nombre;
                    foreach ($calif as $c) {
                        if($c >= $mejorPromedio) {
                            $mejorPromedio = $c;
                        }
                    }
                    $i = 0;
                    echo "<br> Mejor Promedio: ";
                    echo $mejorPromedio;
                    echo "<br>";
                    $mejorPromedio = 0;
                }
            }

            function promedioSuperior($promedioGeneral, $vector) {
                $count = 0;
                $indice = 1;
                $promedio = 0;
                echo "<br><br> ------------------ Número de Alumnos con Promedio Superior al General ------------------ <br>";
                echo "<br>Promedio General: ".$promedioGeneral;

                foreach ($vector as $nombre => $calif) {
                    foreach ($calif as $c) {
                        $promedio = $promedio + $c;
                    }
                    echo "<br>Alumno ".$indice.": ".$promedio/6;

                    if($promedio/6 > $promedioGeneral) {
                        $count += 1;
                    }
                    $promedio = 0;
                    $indice += 1;
                }

                echo "<br><br> Número de alumnos con promedio superior: ".$count."<br>";

            }

            promedioSuperior(promedioGrupalGeneral(promedioAlumno($vector_promedios)), $vector_promedios);

            promedioMateria($vector_promedios);

            mejorPromedioAlumno($vector_promedios);

        ?>
    </body>

</html>