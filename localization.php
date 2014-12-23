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
                    <h2>Contacta</h2><br />
                    
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
                    </center>

                    <br><br>
                    Email: <a href="mailto:podemosrubi@gmail.com">podemosrubi@gmail.com</a><br>
                    Localizaci&oacute;n: Rub&iacute;, Barcelona<br>
                    Calle: General Casta&ntilde;os, 24<br>
                    <br><br>
                    <center>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d747.1153011875613!2d2.0352352000000096!3d41.49427929999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4917a8e085efb%3A0x275e50059caa155e!2sCarrer+de+General+Casta%C3%B1os%2C+24%2C+08191+Rub%C3%AD%2C+Barcelona!5e0!3m2!1sen!2ses!4v1412162003511" width="600" height="450" frameborder="0" style="border:0"></iframe>
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