<!-- <object data="news/last/CP.pdf" type="application/pdf" width="100%" height="900">

  <p>No se ha podido cargar el archivo de pdf debido a que tu navegador no tiene instalado el plugin de leer pdf's
  <a href="news/last/CP.pdf">haz click aquí para descargarlo.</a></p>

</object> -->

<?php

    $month = array(
        '1' => 'Enero',
        '2' => 'Febrero',
        '3' => 'Marzo',
        '4' => 'Abril',
        '5' => 'Mayo',
        '6' => 'Junio',
        '7' => 'Julio',
        '8' => 'Agosto',
        '9' => 'Septiembre',
        '10' => 'Octubre',
        '11' => 'Noviembre',
        '12' => 'Diciembre'
    );
    
    echo "<center>";
    $dir = opendir("./news/last");
    echo "<h1>- Noticias destacadas -</h1>";
    if (count($dir) > 1) {
        while ($file = readdir($dir)) {
            if (!is_dir($file) && substr($file,-4) == '.pdf') {
                echo '<object data="news/last/'.$file.'" type="application/pdf" width="100%" height="900">';
                echo "<p>No se ha podido cargar el archivo de pdf debido a que tu navegador no tiene instalado el plugin de leer pdf's";
                echo '<a href="news/last/'.$file.'">haz click aquí para descargarlo.</a></p></object>';
                echo $file . "<br />";
            }
        }
    } else {
        echo "Actualmente no hay ninguna noticia destacada.";
    }
    echo "<h1>- Todas las noticias -</h1>";
    $dirNews = opendir("./news/");
    while ($fileYear = readdir($dirNews)) {
        if (!is_dir($fileYear) && substr($fileYear,-4) !== '.php' && $fileYear !== 'last') {
            $subDirYear = opendir("./news/".$fileYear);
            while ($subFileYear = readdir($subDirYear)) {
                if (!is_dir($subFileYear)) {
                    echo "<h2>".$month[$subFileYear]."</h2>";
                    $subDirMonth = opendir("./news/".$fileYear."/".$subFileYear);
                    for ($i = 1; $i <= 31; $i++) {
                        if (hasSubFolders("./news/".$fileYear."/".$subFileYear."/".$i) > 2) {
                            echo "<h3>".$i."</h3>";
                            $subDirDay = opendir("./news/".$fileYear."/".$subFileYear."/".$i);
                            while ($subFileDay = readdir($subDirDay)) {
                                if (is_dir("./news/".$fileYear."/".$subFileYear."/".$i."/".$subFileDay)) {
                                    $dirToANewFiles = opendir("./news/".$fileYear."/".$subFileYear."/".$i."/".$subFileDay);
                                    while ($file = readdir($dirToANewFiles)) {
                                        if (substr($file,-4) == '.pdf') {
                                            echo '<a class="noDeco" href="'."./news/".$fileYear."/".$subFileYear."/".$i."/".$subFileDay."/".$file.'" target="_blank">'.substr($file, 0, strlen($file)-4).'</a><br>';
                                        }
                                    }
                                }
                            }
                        }
                    }
                    echo "<br>";
                }  
            }
        }
    }
    echo "</center>";
    
    function hasSubFolders($dir) {
        if (is_dir($dir)) {
            return count(scandir($dir));
        }
    }
    
?>