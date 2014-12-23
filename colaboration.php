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
                    <h2>Colaboración</h2><br />
                        <p>
                            Conseguir el objetivo de cambiar la política de nuestro país requiere del
                            esfuerzo de todas y todos los ciudadanos de nuestro país. Para ello es 
                            necesaria tu participación. Puedes participar con tus conocimientos o con tu 
                            tiempo, sin embargo cualquier iniciativa requiere de un sustento económico.
                            En Podemos no nos financiamos con los bancos porque nuestra deuda ha de 
                            ser con la gente. Por eso necesitamos que colabores en la medida de tus 
                            posibilidades.
                        </p>
                        <p>
                            Si tienes dudas de donde irá a parar tu dinero, puedes verlo en la sección
                            <a class="noDeco" href="finances.php">Finanzas</a>, donde encontrarás toda la información económico-financiera.
                        </p>
                        <p>
                            Ponemos a tu disposición varias vías de colaboración:
                        </p>
                        <ul>
                            <p>
                                <strong>Domiciliación bancaria:</strong><br>
                                <ul>
                                    Te giramos un recibo por el importe que desees, a partir de 5 euros. Sólo tienes
                                    que descargar el <a class="noDeco" href="https://drive.google.com/file/d/0B_nxnk0dPGZWVUtvcGV1Yl9GVkU/view">Formulario</a>, rellenarlo
                                    y enviarlo por correo electrónico a <a class="noDeco" href="mailto:podemosrubi@gmail.com">podemosrubi@gmail.com</a> o dejarlo
                                    <span class="red">en un sobre cerrado</span> a la atención del tesorero, en nuestro local de la calle General Castaños, 24 de Rubí.
                                </ul>
                            </p>
                            <p>
                                <strong>Transferencia o Ingreso en cuenta.</strong><br>
                                <ul>
                                    Nuestra cuenta  es:
                                        <ul>
                                            C.C.C.:  1491  0001  22  2125815320
                                            <br>IBAN:   ES47  1491  0001  2221  2581  5320
                                        </ul>    
                                    <br>No olvides poner tu <span class="red">Nombre y Apellidos</span> en el concepto.
                                </ul>
                            </p>
                            <p>
                                <strong>Tarjeta de crédito.</strong><br>
                                <ul>
                                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                        <input type="hidden" name="cmd" value="_donations">
                                        <input type="hidden" name="business" value="podemosrubi@gmail.com">
                                        <input type="hidden" name="lc" value="US">
                                        <input type="hidden" name="item_name" value="Podemos Rubi">
                                        <input type="hidden" name="no_note" value="0">
                                        <input type="hidden" name="currency_code" value="EUR">
                                        <input type="hidden" name="bn" value="PP-DonationsBF:btn_donate_SM.gif:NonHostedGuest">
                                        Pincha aquí para acceder a la pasarela de pago segura de Paypal:
                                        <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                                        <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                                    </form>
                                    <br>Podemos Rubí no tendrá acceso a los datos de tu tarjeta.
                                </ul>
                            </p>
                        </ul>
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