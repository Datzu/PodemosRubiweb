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
                <?php
                    include 'listIcon.php';
                ?>
                <div id="centerCenter">
                    <h2>Parlamentarios</h2><br/>
                    <br><br>
                    <center>
                      	<center>
                                <h3>Pablo Iglesias Turrion</h3><a href="http://es.wikipedia.org/wiki/Pablo_Iglesias_Turri%C3%B3n" target="_blank">
                                <img src="../img/parlamentarians/Pablo Iglesias.jpg" width="20%" /></a>
                                <br>
                                <h3>Teresa Rodríguez-Rubio Vazquez</h3><a href="http://es.wikipedia.org/wiki/Teresa_Rodr%C3%ADguez" target="_blank">
   				<img src="../img/parlamentarians/Teresa Rodriguez.jpg" width="20%" /></a>
                                <br>
                                <h3>Lola Sanchez Caldentey</h3><a href="http://es.wikipedia.org/wiki/Lola_S%C3%A1nchez" target="_blank">
                                <img src="../img/parlamentarians/Lola Sanchez.jpg" width="20%" /></a>
                                <br>
                                <h3>Pablo Echenique Robba</h3><a href="http://es.wikipedia.org/wiki/Pablo_Echenique" target="_blank">
   				<img src="../img/parlamentarians/Pablo Echenique.jpg" width="20%" /></a>
                                <br>
                                <h3>Tania Gonzalez Peñas</h3><a href="http://es.wikipedia.org/wiki/Tania_Gonz%C3%A1lez_Pe%C3%B1as" target="_blank">
   				<img src="../img/parlamentarians/Tania Gonzalez.jpg" width="20%" /></a>
                                <br>
			</center>
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
    </body>
</html>
