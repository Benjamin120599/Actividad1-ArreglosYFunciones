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

                "Adriana de Jesús Márquez Mendoza" => array(90, 89, 93, 100, 70, 91),

                "Abraham Ríos Rivera" => array(100, 78, 90, 89, 97, 92),

                "Guadalupe Vázquez de la Torre" => array(100, 100, 100, 100, 99, 100),

                "Ricardo Benjamin Viramontes Juárez" => array(45, 70, 69, 100, 87, 55),
            );

            function promedioGrupalGeneral($vectorDePromedios) {

                echo "<br><br> ------------------ Promedio general del grupo ------------------ <br>";

                $promedio = 0;
                
                foreach ($vectorDePromedios as $value) {
                    $promedio = $promedio + $value;
                }
                echo "<br>El promedio general del grupo es: ".$promedio/count($vectorDePromedios);
            }

            function promedioAlumno($vector_promedios) {
                $promedio = 0;
                $vectorPromedio = [];
                $indice = 0;
                echo " ------------------ Promedio por Alumno ------------------ <br>";

                foreach ($vector_promedios as $nombre => $calif) {
                    echo "<br>".$nombre." -- Promedio: ";
                    foreach ($calif as $c) {
                        $promedio = $promedio + $c; 
                    }
                    echo $promedio/6;
                    $vectorPromedio[$indice+=1] = $promedio/6;
                    $promedio = 0;
                }
                return $vectorPromedio;
            }

            function promedioMateria($vector_promedios) {
                $promedio = 0;
                echo " ------------------ Promedio por Materia ------------------ <br>";

                $materia = 0;
                foreach ($vector_promedios as $nombre => $calif) {
                    echo "<br>Materia ".$materia.": ";
                    foreach ($calif as $c) {
                        $promedio = $promedio + $c; 
                    }
                    echo $promedio/6;
                    $promedio = 0;
                }
            }

            function mejorPromedioAlumno() {
                
            }

            function promedioSuperior() {
                
            }

            //promedioAlumno($vector_promedios);

            promedioGrupalGeneral(promedioAlumno($vector_promedios));


        ?>
    </body>

</html>