<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="css/styles.css" rel="stylesheet" type="text/css">
        <link rel="icon" type="image/png" href="img/podemoscentral.jpg">
        <script type="text/javascript" src="js/mainScript.js"></script>
        <title>Podemos Rubí</title>
    </head>
    <body onload="load()">
        <div id="container">
            <?php
                include 'nav.php';
            ?>
            <div id="mainContainer">
                <div>
                    <?php
                        include 'listIcon.php';
                    ?>
                    <div id="centerCenter">
                        <center>
                            <h1>Bienvenido a la web del Circulo Podemos Rubí</h1>
                            <img src="img/general/group.jpg" width="700px" />
 			    <img src="img/general/PostalNavidad.jpg" width="700px" />
 			    <img src="img/general/Recogidajuguetes.jpg" width="700px" />
                        </center>
                    </div>
                    <div id="centerRight">
                        <a class="twitter-timeline"  href="https://twitter.com/PodemosRubi" data-widget-id="513249816223043585">Tweets por @PodemosRubi</a>
                        <script>
                            !function(d,s,id){
                                var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
                                if(!d.getElementById(id)){
                                    js=d.createElement(s);
                                    js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
                                    fjs.parentNode.insertBefore(js,fjs);
                                }
                            }
                            (document,"script","twitter-wjs");
                        </script>
                    </div>
                    <?php
                        include 'listMenu.php';
                        include 'footer.php';
                    ?>
                </div>  
            </div>
        </div>
    </body>
</html>
