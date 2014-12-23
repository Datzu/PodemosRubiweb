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
                    <div id="formDivBackground">
                        <h2>¡Inscríbete!</h2><br />
                        <center>
                            <div id="formDiv">
                                <?php
                                if (!isset($_POST['email'])) {
                                ?>
                                <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                                    <label>
                                        Nombre:
                                        <input name="name" type="text" />
                                    </label>
                                    <br />
                                    <label>
                                        Apellidos:
                                        <input name="surname1" type="text" />
                                        <input name="surname2" type="text" />
                                    </label>
                                    <br />
                                    <label>
                                        DNI:
                                        <input name="dni" type="text" />
                                    </label>
                                    <br />
                                    <label>
                                        Teléfono:
                                        <input name="phone" type="text" />
                                    </label>
                                    <br />
                                    <label>
                                        Email:
                                        <input name="email" type="text" />
                                    </label>
                                    <br />
                                    <label>
                                        Dirección:
                                        <input name="dir" type="text" />
                                    </label>
                                    <br />
                                    <label>
                                        Código postal:
                                        <input name="postalCode" type="text" />
                                    </label>
                                    <br />
                                    <label>
                                        Población:
                                        <input name="city" type="text" />
                                    </label>
                                    <br />
                                    <label>
                                        Facebook:
                                        <input name="checks[]" type="checkbox" value="Si tiene Facebook" />
                                    </label>
                                    <label>
                                        Twitter:
                                        <input name="twitter" type="text" value="@" />
                                    </label>
                                    <br />
                                    <label>
                                        ¿Quieres colaborar en alguna de nuestras comisiones?:
                                        <br />
                                        <input name="checks[]" value="Organización" type="checkbox">Organización
                                        <input name="checks[]" value="Comunicación" type="checkbox">Comunicación
                                        <input name="checks[]" value="Contenidos" type="checkbox">Contenidos
                                        <input name="checks[]" value="Social" type="checkbox">Social
                                        <input name="checks[]" value="Finanzas" type="checkbox">Finanzas
                                    </label>
                                    <br />
                                    <label>
                                        Comentarios:
                                    <br />
                                    <textarea name="comments" rows="10" cols="50" ></textarea>
                                    </label>
                                    <br />
                                    <input type="reset" value="Borrar" />
                                    <input type="submit" value="Enviar" onClick="procesa(formulario)" />
                                </form>
                                <?php
                                }else{
                                $menssage.= "\nNombre: ". $_POST['name'];
                                $menssage.= "\nApellido1: ".$_POST['surname1'];
                                $menssage.= "\nApellido2: ".$_POST['surname2'];
                                $menssage.= "\nDni: ".$_POST['dni'];
                                $menssage.= "\nTelefono: ". $_POST['phone'];
                                $menssage.= "\nEmail: ".$_POST['email'];
                                $menssage.= "\nDirección: ".$_POST['dir'];
                                $menssage.= "\nCódigo postal: ".$_POST['postalCode'];
                                $menssage.= "\nPoblación: ".$_POST['city'];
                                $menssage.= "\nTwitter: ".$_POST['twitter'];
                                $checks = $_POST['checks'];
                                $length = count($checks);
                                foreach($checks as $value) {
                                        $menssage.= "\n".$value;
                                }
                                $menssage.= "\nComentarios: \n".$_POST['comments'];
                                $destine= "podemosrubi@gmail.com";
                                $remitent = $_POST['email'];
                                $subject = "Mensaje enviado por: ".$_POST['name'];
                                mail($destine,$subject,$menssage,"FROM: $remitent");
                                ?>
                                    <p><strong>Mensaje enviado.</strong></p>
                                <?php
                                }
                                ?>
                            </div>
                            <div id="lopd">
                                <br><br>
                                LOPD<br>
                                Ley Orgánica de Protección de Datos<br>
                                De acuerdo con las disposiciones de la Ley 15/1999, de 13 de Diciembre, de Protección de Datos de Carácter Personal,
                                (en adelante, LOPD),PODEM-PODEMOS Rubí con nif: G66339987 y código postal 08191, le informa que los datos recogidos 
                                en este sitio web serán incorporados a un fichero automatizado inscrito ante la Agencia de Protección de Datos y 
                                pertenecen a PODEMOS, teniendo como finalidad la de atender las peticiones que usted demande. En virtud del artículo 5 
                                de la citada ley, usted será debidamente informado con todo detalle en nuestros formularios de la finalidad y uso de los
                                datos que proporcione. Información: Alta de Datos - Los datos facilitados por Usted en los documentos del sitio web, serán 
                                objeto de tratamiento automatizado y pasarán a formar parte del fichero propiedad de PODEMOS inscrito en la Agencia de 
                                Protección de Datos. Estos datos podrán ser utilizados para la gestión interna de los contactos que solicitan información 
                                o con aquellos con los que se mantiene una relación comercial. Salvo en los campos que se indique lo contrario, las respuestas
                                a las preguntas sobre sus datos personales son voluntarias. El afectado se compromete a la veracidad de los datos que suministra.
                                De conformidad con el artículo 5 de la Ley 15/1999, de 13 de diciembre de Protección de Datos de Carácter Personal, Ud. tiene derecho a
                                acceder a esta información, a rectificarla si los datos son erróneos y darse de baja del fichero mediante una solicitud 
                                escrita a: <a href="mailto:podemosrubi@gmail.com">podemosrubi@gmail.com</a>, cumpliéndose así la notificación prevista en el artículo 5.4 de la misma.
                            </div>
                        </center>
                    </div>
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