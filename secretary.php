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
                    <h2>Secretaria General</h2><br/>
                    <center>
                      	<center>
                            <h1 class="red">Mesa constituyente</h1>
                            <table id="eventsTable">
                                <tr id="staffImg">
                                    <td><img src="img/staff/Manel.jpg" /></td>
                                    <td><img src="img/staff/Dani.jpg" /></td>
                                    <td><img src="img/staff/Carmen.png" /></td>
                                </tr>
                                <tr>
                                    <td>Presidente</td>
                                    <td>Secretario</td>
                                    <td>Vocal</td>
                                </tr>
                                <tr>
                                    <td>Manel Fernández</td>
                                    <td>Daniel Montesinos</td>
                                    <td>Carmen Gracia</td>
                                </tr>
                                <tr>
                                    <td colspan="3">Para contactar con ellos, escribir un email a: <a href="mailto:mesaconstituyenterubi@gmail.com">mesaconstituyenterubi@gmail.com</a></td>
                                </tr>
                            </table>

                            <h1>Secretaria General</h1>
                            <h3>?</h3><a href="#" target="_blank">
                            <img src="img/general/query.png" width="20%" /></a>
                            <br>
                            <h1>Consejo Ciudadano</h1>
                            <table id="secretaryTable">
                                <tr>
                                    <td>?<br><a href="#" target="_blank"><img src="img/general/query.png" width="20%" /></a></td>
                                    <td>?<br><a href="#" target="_blank"><img src="img/general/query.png" width="20%" /></a></td>
                                    <td>?<br><a href="#" target="_blank"><img src="img/general/query.png" width="20%" /></a></td>
                                </tr>
                                <tr>
                                    <td>?<br><a href="#" target="_blank"><img src="img/general/query.png" width="20%" /></a></td>
                                    <td>?<br><a href="#" target="_blank"><img src="img/general/query.png" width="20%" /></a></td>
                                    <td>?<br><a href="#" target="_blank"><img src="img/general/query.png" width="20%" /></a></td>
                                </tr>
                                <tr>
                                    <td>?<br><a href="#" target="_blank"><img src="img/general/query.png" width="20%" /></a></td>
                                    <td>?<br><a href="#" target="_blank"><img src="img/general/query.png" width="20%" /></a></td>
                                    <td>?<br><a href="#" target="_blank"><img src="img/general/query.png" width="20%" /></a></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>?<br><a href="#" target="_blank"><img src="img/general/query.png" width="20%" /></a></td>
                                    <td></td>
                                </tr>
                            </table>
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
