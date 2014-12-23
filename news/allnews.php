<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link href="../css/stylesNews.css" rel="stylesheet" type="text/css">
<div class="mainDiv">
    <?php
        $months = array(
            "Enero", "Febrero", "Marzo", "Abril",
            "Mayo", "Junio", "Julio", "Agosto",
            "Septiembre", "Octubre", "Noviembre", "Diciembre"
        );
        $startYear = 2014;
        $finalYear = date("Y");
        for ($i = $startYear; $i <= $finalYear; $i++) {
            echo "<h1>".$i."</h1>";
            for ($j = 0; $j < 12; $j++) {
                $showMonth = true;
                $dir = $i.DIRECTORY_SEPARATOR.$months[$j];
                $directories = opendir($dir);
                while ($file = readdir($directories)) {
                    if ($showMonth) {
                        echo "<h3>".$months[$j]."</h3>";
                        $showMonth = false;
                    }
                    if (!is_dir($file)) {
                        if ($file !== 'last.php' && $file !== 'allnews.php') {
                            echo '<a href="'.$file.'">'.$file.'</a><br />';
                        }
                    }
                }
            }
        }
    ?>
    <br><br><input type="button" value="Volver" onClick="window.location.href='../news.php'">
</div>