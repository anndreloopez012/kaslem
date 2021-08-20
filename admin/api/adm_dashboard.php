<?php
if (isset($_GET["validaciones"]) && !empty($_GET["validaciones"])) {
    require_once 'api/globalFunctions.php';
    require_once 'data/conexion.php';

    //$id = $_SESSION['adm_usr_id'];
    $fechaIng = date("Y-m-d");
    $strTipoValidacion = isset($_REQUEST["validaciones"]) ? $_REQUEST["validaciones"] : '';

    if ($strTipoValidacion == "insert_home") {
        header('Content-Type: application/json');
        $title = isset($_POST["title"]) ? $_POST["title"]  : '';
        $content = isset($_POST["content"]) ? $_POST["content"]  : '';
        $coment = isset($_POST["coment"]) ? $_POST["coment"]  : '';
        $img = isset($_POST["img"]) ? $_POST["img"]  : ' ';

        $var_consulta = "INSERT INTO home (title, content, img, coment) VALUES ('$title', '$content', '$img', '$coment');";
        $val = 1;
        if (mysqli_query($link, $var_consulta)) {
            $arrInfo['status'] = $val;
        } else {
            $arrInfo['status'] = 0;
            $arrInfo['error'] = $var_consulta;
        }
        //print_r($var_consulta);

        print json_encode($arrInfo);
        die();
    } else if ($strTipoValidacion == "update_about") {
        header('Content-Type: application/json');

        $inf_general = isset($_POST["inf_general"]) ? $_POST["inf_general"]  : ' ';
        $img_mision = isset($_POST["img_mision"]) ? $_POST["img_mision"]  : ' ';
        $ico_mision = isset($_POST["ico_mision"]) ? $_POST["ico_mision"]  : ' ';
        $title_mision = isset($_POST["title_mision"]) ? $_POST["title_mision"]  : ' ';
        $content_mision = isset($_POST["content_mision"]) ? $_POST["content_mision"]  : ' ';
        $img_plan = isset($_POST["img_plan"]) ? $_POST["img_plan"]  : ' ';
        $ico_plan = isset($_POST["ico_plan"]) ? $_POST["ico_plan"]  : ' ';
        $title_plan = isset($_POST["title_plan"]) ? $_POST["title_plan"]  : ' ';
        $content_plan = isset($_POST["content_plan"]) ? $_POST["content_plan"]  : ' ';
        $img_vision = isset($_POST["img_vision"]) ? $_POST["img_vision"]  : ' ';
        $ico_vision = isset($_POST["ico_vision"]) ? $_POST["ico_vision"]  : ' ';
        $title_vision = isset($_POST["title_vision"]) ? $_POST["title_vision"]  : ' ';
        $content_vision = isset($_POST["content_vision"]) ? $_POST["content_vision"]  : ' ';
        $img_gen = isset($_POST["img_gen"]) ? $_POST["img_gen"]  : ' ';

        $var_consulta = "UPDATE about SET inf_general = '$inf_general' ,img_mision = '$img_mision',ico_mision = '$ico_mision' ,title_mision = '$title_mision' ,content_mision = '$content_mision' ,img_plan = '$img_plan' ,ico_plan = '$ico_plan' ,title_plan = '$title_plan' ,content_plan = '$content_plan' ,img_vision = '$img_vision' ,ico_vision = '$ico_vision',title_vision = '$title_vision',content_vision = '$content_vision',img_gen = '$img_gen' WHERE id = 1";
        $val = 1;
        if (mysqli_query($link, $var_consulta)) {
            $arrInfo['status'] = $val;
        } else {
            $arrInfo['status'] = 0;
            $arrInfo['error'] = $var_consulta;
        }
        //print_r($var_consulta);

        print json_encode($arrInfo);
        die();
    } else if ($strTipoValidacion == "update_header") {
        header('Content-Type: application/json');

        $title = isset($_POST["title"]) ? $_POST["title"]  : ' ';
        $content = isset($_POST["content"]) ? $_POST["content"]  : ' ';
        $boton = isset($_POST["boton"]) ? $_POST["boton"]  : ' ';
        $url = isset($_POST["url"]) ? $_POST["url"]  : ' ';

        $var_consulta = "UPDATE header_info SET title = '$title' ,content = '$content',boton = '$boton' ,url = '$url' WHERE id = 1";
        $val = 1;
        if (mysqli_query($link, $var_consulta)) {
            $arrInfo['status'] = $val;
        } else {
            $arrInfo['status'] = 0;
            $arrInfo['error'] = $var_consulta;
        }
        //print_r($var_consulta);

        print json_encode($arrInfo);
        die();
    } else if ($strTipoValidacion == "update_service") {
        header('Content-Type: application/json');

        $content_gen = isset($_POST["content_gen"]) ? $_POST["content_gen"]  : ' ';
        $var_consulta = "UPDATE services SET content_gen = '$content_gen' WHERE status_text = 1";
        $val = 1;
        if (mysqli_query($link, $var_consulta)) {
            $arrInfo['status'] = $val;
        } else {
            $arrInfo['status'] = 0;
            $arrInfo['error'] = $var_consulta;
        }
        //print_r($var_consulta);

        print json_encode($arrInfo);
        die();
    } else if ($strTipoValidacion == "insert_service") {
        header('Content-Type: application/json');

        $titulo = isset($_POST["titulo"]) ? $_POST["titulo"]  : ' ';
        $ico = isset($_POST["ico"]) ? $_POST["ico"]  : ' ';
        $content = isset($_POST["content"]) ? $_POST["content"]  : ' ';
        $var_consulta = "INSERT INTO services (status_text, titulo, ico, content,content_gen) VALUES (2, '$titulo', '$ico', '$content',' ');";
        $val = 1;
        if (mysqli_query($link, $var_consulta)) {
            $arrInfo['status'] = $val;
        } else {
            $arrInfo['status'] = 0;
            $arrInfo['error'] = $var_consulta;
        }
        //print_r($var_consulta);

        print json_encode($arrInfo);
        die();
    } else if ($strTipoValidacion == "insert_btn_porfolio") {
        header('Content-Type: application/json');
        $title = isset($_POST["title"]) ? $_POST["title"]  : ' ';
        $clase = isset($_POST["clase"]) ? $_POST["clase"]  : ' ';
        $abreviatura = isset($_POST["abreviatura"]) ? $_POST["abreviatura"]  : ' ';

        $var_consulta = "INSERT INTO nav_porfolio_class (title, clase, abreviatura) VALUES ('$title', '$clase', '$abreviatura');";
        $val = 1;
        if (mysqli_query($link, $var_consulta)) {
            $arrInfo['status'] = $val;
        } else {
            $arrInfo['status'] = 0;
            $arrInfo['error'] = $var_consulta;
        }
        //print_r($var_consulta);

        print json_encode($arrInfo);
        die();
    } else if ($strTipoValidacion == "insert_porfolio") {
        header('Content-Type: application/json');
        $tittle = isset($_POST["tittle"]) ? $_POST["tittle"]  : ' ';
        $content = isset($_POST["content"]) ? $_POST["content"]  : ' ';
        $url = isset($_POST["url"]) ? $_POST["url"]  : ' ';
        $img = isset($_POST["img"]) ? $_POST["img"]  : ' ';
        $coment = isset($_POST["coment"]) ? $_POST["coment"]  : ' ';
        $abreviatura = isset($_POST["abreviatura"]) ? $_POST["abreviatura"]  : ' ';

        $var_consulta = "INSERT INTO porfolio (tittle, content, img ,url, coment, abreviatura) VALUES ('$tittle', '$content', '$img', '$url', '$coment', '$abreviatura');";
        $val = 1;
        if (mysqli_query($link, $var_consulta)) {
            $arrInfo['status'] = $val;
        } else {
            $arrInfo['status'] = 0;
            $arrInfo['error'] = $var_consulta;
        }
        //print_r($var_consulta);

        print json_encode($arrInfo);
        die();
    } else if ($strTipoValidacion == "insert_work") {
        header('Content-Type: application/json');
        $parametro = isset($_POST["parametro"]) ? $_POST["parametro"]  : ' ';

        $var_consulta = "INSERT INTO info_work (parametro) VALUES ('$parametro');";
        $val = 1;
        if (mysqli_query($link, $var_consulta)) {
            $arrInfo['status'] = $val;
        } else {
            $arrInfo['status'] = 0;
            $arrInfo['error'] = $var_consulta;
        }
        //print_r($var_consulta);

        print json_encode($arrInfo);
        die();
    } else if ($strTipoValidacion == "insert_work_cv") {
        header('Content-Type: application/json');
        $parametro = isset($_POST["parametro"]) ? $_POST["parametro"]  : ' ';

        $var_consulta = "INSERT INTO info_cv (parametro) VALUES ('$parametro');";
        $val = 1;
        if (mysqli_query($link, $var_consulta)) {
            $arrInfo['status'] = $val;
        } else {
            $arrInfo['status'] = 0;
            $arrInfo['error'] = $var_consulta;
        }
        //print_r($var_consulta);

        print json_encode($arrInfo);
        die();
    } else if ($strTipoValidacion == "insert_question") {
        header('Content-Type: application/json');
        $question = isset($_POST["question"]) ? $_POST["question"]  : ' ';
        $answer = isset($_POST["answer"]) ? $_POST["answer"]  : ' ';

        $var_consulta = "INSERT INTO question (question,answer) VALUES ('$question','$answer');";
        $val = 1;
        if (mysqli_query($link, $var_consulta)) {
            $arrInfo['status'] = $val;
        } else {
            $arrInfo['status'] = 0;
            $arrInfo['error'] = $var_consulta;
        }
        //print_r($var_consulta);

        print json_encode($arrInfo);
        die();
    } else if ($strTipoValidacion == "insert_team") {
        header('Content-Type: application/json');

        $title = isset($_POST["title"]) ? $_POST["title"]  : ' ';
        $twitter = isset($_POST["twitter"]) ? $_POST["twitter"]  : ' ';
        $facebook = isset($_POST["facebook"]) ? $_POST["facebook"]  : ' ';
        $google = isset($_POST["google"]) ? $_POST["google"]  : ' ';
        $link = isset($_POST["link"]) ? $_POST["link"]  : ' ';
        $descrip = isset($_POST["descrip"]) ? $_POST["descrip"]  : ' ';
        $img = isset($_POST["img"]) ? $_POST["img"]  : ' ';

        $var_consulta = "INSERT INTO team(title,twitter,facebook,google,link,descrip,img) VALUES ('$title','$twitter','$facebook','$google','$link','$descrip','$img')";

        $val = 1;
        if (mysqli_query($link, $var_consulta)) {
            $arrInfo['status'] = $val;
        } else {
            $arrInfo['status'] = 0;
            $arrInfo['error'] = $var_consulta;
        }
        //print_r($var_consulta);

        print json_encode($arrInfo);
        die();
    } else if ($strTipoValidacion == "update_contact") {
        header('Content-Type: application/json');

        $descrip = isset($_POST["descrip"]) ? $_POST["descrip"]  : ' ';
        $dress = isset($_POST["dress"]) ? $_POST["dress"]  : ' ';
        $ubi = isset($_POST["ubi"]) ? $_POST["ubi"]  : ' ';
        $telefono = isset($_POST["telefono"]) ? $_POST["telefono"]  : ' ';
        $mail = isset($_POST["mail"]) ? $_POST["mail"]  : ' ';

        $var_consulta = "UPDATE contact SET descrip = '$descrip' ,dress = '$dress',ubi = '$ubi' ,telefono = '$telefono',mail = '$mail' WHERE id = 1";
        $val = 1;
        if (mysqli_query($link, $var_consulta)) {
            $arrInfo['status'] = $val;
        } else {
            $arrInfo['status'] = 0;
            $arrInfo['error'] = $var_consulta;
        }
        //print_r($var_consulta);

        print json_encode($arrInfo);
        die();
    } else if ($strTipoValidacion == "proces_img") {

        if (isset($_POST["getPrecargarArchivos"])) {
            header('Content-Type: application/json');

            set_time_limit(1200);
            ini_set('memory_limit', '-1');
            header("Content-Type: text/html; charset=utf-8");

            $strExtension = isset($_POST["extension"]) ? $_POST["extension"] : "";
            $nombre = isset($_POST["nombre_archivo"]) ? $_POST["nombre_archivo"] : "";
            $idWeb = $_SESSION['adm_usr_code'];

            $rs = mysqli_query($link, "SELECT ctg_med_cli_pict FROM ctg_medicos WHERE ctg_med_code = '$idWeb'");
            if ($row = pg_fetch_array($rs)) {
                $idRowS0 = trim($row[0]);
            }
            $url_img = isset($idRowS0) ? $idRowS0  : '';

            if ($url_img) {
                if (file_exists($url_img)) {
                    @chmod($url_img, 0777);
                    unlink($url_img);
                }
            }

            @chmod("../../asset/img/doctor/perfil/", 0777);
            $strRespuesta = save_file_image("archivo", "doctor/perfil/", "", 0, true, true, false);

            if (!empty($strRespuesta)) {
                $var_consulta = "UPDATE ctg_medicos SET ctg_med_cli_pict = '$strRespuesta' WHERE ctg_med_code = '$idWeb';";
                if (mysqli_query($link, $var_consulta)) {
                    print json_encode(array("respuesta" => $strRespuesta));
                } else {
                    $arrInfo['status'] = 0;
                    $arrInfo['error'] = $var_consulta;
                }
            }

            die();
        }
    } else if ($strTipoValidacion == "delete_home") {
        header('Content-Type: application/json');
        $idHome = isset($_POST["idHome"]) ? $_POST["idHome"]  : ' ';
        $val = 1;
        $var_consulta = "DELETE FROM home WHERE id = $idHome;";
        if (mysqli_query($link, $var_consulta)) {
            $arrInfo['status'] = $val;
        } else {
            $arrInfo['status'] = 0;
            $arrInfo['error'] = $var_consulta;
        }
        print json_encode($arrInfo);
        die();
    } else if ($strTipoValidacion == "delete_servi") {
        header('Content-Type: application/json');
        $idService = isset($_POST["idService"]) ? $_POST["idService"]  : ' ';
        $val = 1;
        $var_consulta = "DELETE FROM services WHERE id = $idService;";
        if (mysqli_query($link, $var_consulta)) {
            $arrInfo['status'] = $val;
        } else {
            $arrInfo['status'] = 0;
            $arrInfo['error'] = $var_consulta;
        }
        print json_encode($arrInfo);
        die();
    } else if ($strTipoValidacion == "delete_btn_porfolio") {
        header('Content-Type: application/json');
        $idMenuPorfolio = isset($_POST["idMenuPorfolio"]) ? $_POST["idMenuPorfolio"]  : ' ';
        $val = 1;
        $var_consulta = "DELETE FROM nav_porfolio_class WHERE id = $idMenuPorfolio;";
        if (mysqli_query($link, $var_consulta)) {
            $arrInfo['status'] = $val;
        } else {
            $arrInfo['status'] = 0;
            $arrInfo['error'] = $var_consulta;
        }
        print json_encode($arrInfo);
        die();
    } else if ($strTipoValidacion == "delete_porfolio") {
        header('Content-Type: application/json');
        $idPorfolio = isset($_POST["idPorfolio"]) ? $_POST["idPorfolio"]  : ' ';
        $val = 1;
        $var_consulta = "DELETE FROM porfolio WHERE id = $idPorfolio;";
        if (mysqli_query($link, $var_consulta)) {
            $arrInfo['status'] = $val;
        } else {
            $arrInfo['status'] = 0;
            $arrInfo['error'] = $var_consulta;
        }
        print json_encode($arrInfo);
        die();
    } else if ($strTipoValidacion == "delete_trabajo") {
        header('Content-Type: application/json');
        $idMenuWork = isset($_POST["idMenuWork"]) ? $_POST["idMenuWork"]  : ' ';
        $val = 1;
        $var_consulta = "DELETE FROM info_work WHERE id = $idMenuWork;";
        if (mysqli_query($link, $var_consulta)) {
            $arrInfo['status'] = $val;
        } else {
            $arrInfo['status'] = 0;
            $arrInfo['error'] = $var_consulta;
        }
        print json_encode($arrInfo);
        die();
    } else if ($strTipoValidacion == "delete_trabajo_cv") {
        header('Content-Type: application/json');
        $idMenuCv = isset($_POST["idMenuCv"]) ? $_POST["idMenuCv"]  : ' ';
        $val = 1;
        $var_consulta = "DELETE FROM info_cv WHERE id = $idMenuCv;";
        if (mysqli_query($link, $var_consulta)) {
            $arrInfo['status'] = $val;
        } else {
            $arrInfo['status'] = 0;
            $arrInfo['error'] = $var_consulta;
        }
        print json_encode($arrInfo);
        die();
    } else if ($strTipoValidacion == "delete_preguntas") {
        header('Content-Type: application/json');
        $idQuest = isset($_POST["idQuest"]) ? $_POST["idQuest"]  : ' ';
        $val = 1;
        $var_consulta = "DELETE FROM question WHERE id = $idQuest;";
        if (mysqli_query($link, $var_consulta)) {
            $arrInfo['status'] = $val;
        } else {
            $arrInfo['status'] = 0;
            $arrInfo['error'] = $var_consulta;
        }
        print json_encode($arrInfo);
        die();
    } else if ($strTipoValidacion == "delete_equipo") {
        header('Content-Type: application/json');
        $idTeam = isset($_POST["idTeam"]) ? $_POST["idTeam"]  : ' ';
        $val = 1;
        $var_consulta = "DELETE FROM team WHERE id = $idTeam;";
        if (mysqli_query($link, $var_consulta)) {
            $arrInfo['status'] = $val;
        } else {
            $arrInfo['status'] = 0;
            $arrInfo['error'] = $var_consulta;
        }
        print json_encode($arrInfo);
        die();
    } else if ($strTipoValidacion == "dibujo_tabla_home") {

        $arrHome = array();
        $var_consulta = "SELECT * FROM home";

        //$var_resultado = $conexion->query($var_consulta);
        $qTMP = mysqli_query($link, $var_consulta);
        while ($rTMP = mysqli_fetch_assoc($qTMP)) {
            $arrHome[$rTMP["id"]]["id"] = $rTMP["id"];
            $arrHome[$rTMP["id"]]["title"] = $rTMP["title"];
            $arrHome[$rTMP["id"]]["content"] = $rTMP["content"];
            $arrHome[$rTMP["id"]]["img"] = $rTMP["img"];
            $arrHome[$rTMP["id"]]["coment"] = $rTMP["coment"];
        }
        mysqli_free_result($qTMP);
?>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Titulo</th>
                    <th scope="col">Activo</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?PHP
                if (is_array($arrHome) && (count($arrHome) > 0)) {
                    reset($arrHome);
                    $intContador = 1;
                    foreach ($arrHome as $rTMP['key'] => $rTMP['value']) { ?>
                        <tr>
                            <th><?php echo  $rTMP["value"]['title']; ?></th>
                            <th><?php echo  $rTMP["value"]['coment']; ?></th>
                            <th class="table-info" style="width:5%">
                                <i class="fad fa-user-minus " style="cursor:pointer;" id="delete" onclick="fntSelectDeleteHome('<?php print $intContador; ?>'); "></i>
                            </th>
                        </tr>

                        <input type="hidden" name="hidId_<?php print $intContador; ?>" id="hidId_<?php print $intContador; ?>" value="<?php echo  $rTMP["value"]['id']; ?>">

                <?PHP
                        $intContador++;
                    }
                }
                ?>
            </tbody>
        </table>
    <?php
        die();
    } else if ($strTipoValidacion == "dibujo_tabla_servi") {

        $arrService = array();
        $var_consulta = "SELECT * FROM services WHERE status_text = 2";

        //$var_resultado = $conexion->query($var_consulta);
        $qTMP = mysqli_query($link, $var_consulta);
        while ($rTMP = mysqli_fetch_assoc($qTMP)) {
            $arrService[$rTMP["id"]]["id"] = $rTMP["id"];
            $arrService[$rTMP["id"]]["titulo"] = $rTMP["titulo"];
            $arrService[$rTMP["id"]]["ico"] = $rTMP["ico"];
            $arrService[$rTMP["id"]]["content"] = $rTMP["content"];
        }
        mysqli_free_result($qTMP);
    ?>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Icono</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Contenido</th>
                </tr>
            </thead>
            <tbody>

                <?php
                if (is_array($arrService) && (count($arrService) > 0)) {
                    reset($arrService);
                    $intContador = 1;
                    foreach ($arrService as $rTMP['key'] => $rTMP['value']) {
                ?>
                        <tr>
                            <th><?php echo  $rTMP["value"]['ico']; ?></th>
                            <th><?php echo  $rTMP["value"]['titulo']; ?></th>
                            <th><?php echo  $rTMP["value"]['content']; ?></th>
                            <th class="table-info" style="width:5%">
                                <i class="fad fa-user-minus " style="cursor:pointer;" id="delete" onclick="fntSelectDeleteService('<?php print $intContador; ?>'); "></i>
                            </th>
                        </tr>

                        <input type="hidden" name="hidId_<?php print $intContador; ?>" id="hidId_<?php print $intContador; ?>" value="<?php echo  $rTMP["value"]['id']; ?>">

                <?php
                        $intContador++;
                    }
                }
                ?>
            </tbody>
        </table>
    <?php
        die();
    } else if ($strTipoValidacion == "dibujo_tabla_btn_porfolio") {

        $arrMenuPorfolio = array();
        $var_consulta = "SELECT * FROM nav_porfolio_class";

        //$var_resultado = $conexion->query($var_consulta);
        $qTMP = mysqli_query($link, $var_consulta);
        while ($rTMP = mysqli_fetch_assoc($qTMP)) {
            $arrMenuPorfolio[$rTMP["id"]]["id"] = $rTMP["id"];
            $arrMenuPorfolio[$rTMP["id"]]["title"] = $rTMP["title"];
            $arrMenuPorfolio[$rTMP["id"]]["clase"] = $rTMP["clase"];
            $arrMenuPorfolio[$rTMP["id"]]["abreviatura"] = $rTMP["abreviatura"];
        }
        mysqli_free_result($qTMP);
    ?>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Grupo</th>
                    <th scope="col">Abreviatura</th>
                    <th scope="col">Activo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (is_array($arrMenuPorfolio) && (count($arrMenuPorfolio) > 0)) {
                    reset($arrMenuPorfolio);
                    $intContador = 1;
                    foreach ($arrMenuPorfolio as $rTMP['key'] => $rTMP['value']) {
                ?>
                        <tr>
                            <th><?php echo  $rTMP["value"]['title']; ?></th>
                            <th><?php echo  $rTMP["value"]['abreviatura']; ?></th>
                            <th><?php echo  $rTMP["value"]['clase']; ?></th>
                            <th class="table-info" style="width:5%">
                                <i class="fad fa-user-minus " style="cursor:pointer;" id="delete" onclick="fntSelectDeleteMenuPorfolio('<?php print $intContador; ?>'); "></i>
                            </th>
                        </tr>

                        <input type="hidden" name="hidId_<?php print $intContador; ?>" id="hidId_<?php print $intContador; ?>" value="<?php echo  $rTMP["value"]['id']; ?>">

                <?php
                        $intContador++;
                    }
                }
                ?>
            </tbody>
        </table>
    <?php
        die();
    } else if ($strTipoValidacion == "dibujo_tabla_porfolio") {

        $arrPorfolio = array();
        $var_consulta = "SELECT * FROM porfolio";

        //$var_resultado = $conexion->query($var_consulta);
        $qTMP = mysqli_query($link, $var_consulta);
        while ($rTMP = mysqli_fetch_assoc($qTMP)) {
            $arrPorfolio[$rTMP["id"]]["id"] = $rTMP["id"];
            $arrPorfolio[$rTMP["id"]]["tittle"] = $rTMP["tittle"];
            $arrPorfolio[$rTMP["id"]]["content"] = $rTMP["content"];
            $arrPorfolio[$rTMP["id"]]["img"] = $rTMP["img"];
            $arrPorfolio[$rTMP["id"]]["url"] = $rTMP["url"];
            $arrPorfolio[$rTMP["id"]]["coment"] = $rTMP["coment"];
            $arrPorfolio[$rTMP["id"]]["abreviatura"] = $rTMP["abreviatura"];
        }
        mysqli_free_result($qTMP);
    ?>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Titulo</th>
                    <th scope="col">Contenido</th>
                    <th scope="col">Url</th>
                    <th scope="col">Abreviatura</th>
                    <th scope="col">Imagen</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (is_array($arrPorfolio) && (count($arrPorfolio) > 0)) {
                    reset($arrPorfolio);
                    $intContador = 1;
                    foreach ($arrPorfolio as $rTMP['key'] => $rTMP['value']) {
                ?>
                        <tr>
                            <th><?php echo  $rTMP["value"]['tittle']; ?></th>
                            <th><?php echo  $rTMP["value"]['content']; ?></th>
                            <th><?php echo  $rTMP["value"]['url']; ?></th>
                            <th><?php echo  $rTMP["value"]['abreviatura']; ?></th>
                            <th class="table-info" style="width:5%">
                                <i class="fad fa-user-minus " style="cursor:pointer;" id="delete" onclick="fntSelectDeletePorfolio('<?php print $intContador; ?>'); "></i>
                            </th>
                        </tr>

                        <input type="hidden" name="hidId_<?php print $intContador; ?>" id="hidId_<?php print $intContador; ?>" value="<?php echo  $rTMP["value"]['id']; ?>">

                <?php
                        $intContador++;
                    }
                }
                ?>
            </tbody>
        </table>
    <?php
        die();
    } else if ($strTipoValidacion == "dibujo_tabla_trabajo") {

        $arrMenuWork = array();
        $var_consulta = "SELECT * FROM info_work";

        //$var_resultado = $conexion->query($var_consulta);
        $qTMP = mysqli_query($link, $var_consulta);
        while ($rTMP = mysqli_fetch_assoc($qTMP)) {
            $arrMenuWork[$rTMP["id"]]["id"] = $rTMP["id"];
            $arrMenuWork[$rTMP["id"]]["parametro"] = $rTMP["parametro"];
        }
        mysqli_free_result($qTMP);
    ?>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Parametro</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (is_array($arrMenuWork) && (count($arrMenuWork) > 0)) {
                    reset($arrMenuWork);
                    $intContador = 1;
                    foreach ($arrMenuWork as $rTMP['key'] => $rTMP['value']) {
                ?>
                        <tr>
                            <th><?php echo  $rTMP["value"]['parametro']; ?></th>
                            <th class="table-info" style="width:5%">
                                <i class="fad fa-user-minus " style="cursor:pointer;" id="delete" onclick="fntSelectDeleteMenuWork('<?php print $intContador; ?>'); "></i>
                            </th>
                        </tr>

                        <input type="hidden" name="hidId_<?php print $intContador; ?>" id="hidId_<?php print $intContador; ?>" value="<?php echo  $rTMP["value"]['id']; ?>">

                <?php
                        $intContador++;
                    }
                }
                ?>
            </tbody>
        </table>
    <?php
        die();
    } else if ($strTipoValidacion == "dibujo_tabla_trabajo_cv") {

        $arrMenuCv = array();
        $var_consulta = "SELECT * FROM info_cv";

        //$var_resultado = $conexion->query($var_consulta);
        $qTMP = mysqli_query($link, $var_consulta);
        while ($rTMP = mysqli_fetch_assoc($qTMP)) {
            $arrMenuCv[$rTMP["id"]]["id"] = $rTMP["id"];
            $arrMenuCv[$rTMP["id"]]["parametro"] = $rTMP["parametro"];
        }
        mysqli_free_result($qTMP);
    ?>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Parametro</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (is_array($arrMenuCv) && (count($arrMenuCv) > 0)) {
                    reset($arrMenuCv);
                    $intContador = 1;
                    foreach ($arrMenuCv as $rTMP['key'] => $rTMP['value']) {
                ?>
                        <tr>
                            <th><?php echo  $rTMP["value"]['parametro']; ?></th>
                            <th class="table-info" style="width:5%">
                                <i class="fad fa-user-minus " style="cursor:pointer;" id="delete" onclick="fntSelectDeleteMenuCv('<?php print $intContador; ?>'); "></i>
                            </th>
                        </tr>

                        <input type="hidden" name="hidId_<?php print $intContador; ?>" id="hidId_<?php print $intContador; ?>" value="<?php echo  $rTMP["value"]['id']; ?>">

                <?php
                        $intContador++;
                    }
                }
                ?>
            </tbody>
        </table>
    <?php
        die();
    } else if ($strTipoValidacion == "dibujo_tabla_preguntas") {

        $arrQuest = array();
        $var_consulta = "SELECT * FROM question";

        //$var_resultado = $conexion->query($var_consulta);
        $qTMP = mysqli_query($link, $var_consulta);
        while ($rTMP = mysqli_fetch_assoc($qTMP)) {
            $arrQuest[$rTMP["id"]]["id"] = $rTMP["id"];
            $arrQuest[$rTMP["id"]]["question"] = $rTMP["question"];
            $arrQuest[$rTMP["id"]]["answer"] = $rTMP["answer"];
        }
        mysqli_free_result($qTMP);
    ?>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Pregunta</th>
                    <th scope="col">Respuesta</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (is_array($arrQuest) && (count($arrQuest) > 0)) {
                    reset($arrQuest);
                    $intContador = 1;
                    foreach ($arrQuest as $rTMP['key'] => $rTMP['value']) {
                ?>
                        <tr>
                            <th><?php echo  $rTMP["value"]['question']; ?></th>
                            <th><?php echo  $rTMP["value"]['answer']; ?></th>
                            <th class="table-info" style="width:5%">
                                <i class="fad fa-user-minus " style="cursor:pointer;" id="delete" onclick="fntSelectDeleteQuest('<?php print $intContador; ?>'); "></i>
                            </th>
                        </tr>

                        <input type="hidden" name="hidId_<?php print $intContador; ?>" id="hidId_<?php print $intContador; ?>" value="<?php echo  $rTMP["value"]['id']; ?>">

                <?php
                        $intContador++;
                    }
                }
                ?>
            </tbody>
        </table>
    <?php
        die();
    } else if ($strTipoValidacion == "dibujo_tabla_equipo") {

        $arrTeam = array();
        $var_consulta = "SELECT * FROM team ";

        //$var_resultado = $conexion->query($var_consulta);
        $qTMP = mysqli_query($link, $var_consulta);
        while ($rTMP = mysqli_fetch_assoc($qTMP)) {
            $arrTeam[$rTMP["id"]]["id"] = $rTMP["id"];
            $arrTeam[$rTMP["id"]]["title"] = $rTMP["title"];
            $arrTeam[$rTMP["id"]]["twitter"] = $rTMP["twitter"];
            $arrTeam[$rTMP["id"]]["facebook"] = $rTMP["facebook"];
            $arrTeam[$rTMP["id"]]["google"] = $rTMP["google"];
            $arrTeam[$rTMP["id"]]["link"] = $rTMP["link"];
            $arrTeam[$rTMP["id"]]["descrip"] = $rTMP["descrip"];
            $arrTeam[$rTMP["id"]]["img"] = $rTMP["img"];
        }
        mysqli_free_result($qTMP);
    ?>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Foto</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (is_array($arrTeam) && (count($arrTeam) > 0)) {
                    reset($arrTeam);
                    $intContador = 1;
                    foreach ($arrTeam as $rTMP['key'] => $rTMP['value']) {
                ?>
                        <tr>
                            <th><?php echo  $rTMP["value"]['title']; ?></th>
                            <th><?php echo  $rTMP["value"]['descrip']; ?></th>
                            <th class="table-info" style="width:5%">
                                <i class="fad fa-user-minus " style="cursor:pointer;" id="delete" onclick="fntSelectDeleteTeam('<?php print $intContador; ?>'); "></i>
                            </th>
                        </tr>

                        <input type="hidden" name="hidId_<?php print $intContador; ?>" id="hidId_<?php print $intContador; ?>" value="<?php echo  $rTMP["value"]['id']; ?>">

                <?php
                        $intContador++;
                    }
                }
                ?>
            </tbody>
        </table>
<?php
        die();
    }

    die();
}

require_once 'api/globalFunctions.php';
require_once 'data/conexion.php';

$arrAbout = array();
$var_consulta = "SELECT * FROM about LIMIT 1";

//$var_resultado = $conexion->query($var_consulta);
$qTMP = mysqli_query($link, $var_consulta);
while ($rTMP = mysqli_fetch_assoc($qTMP)) {
    $arrAbout[$rTMP["id"]]["id"] = $rTMP["id"];
    $arrAbout[$rTMP["id"]]["inf_general"] = $rTMP["inf_general"];
    $arrAbout[$rTMP["id"]]["img_mision"] = $rTMP["img_mision"];
    $arrAbout[$rTMP["id"]]["ico_mision"] = $rTMP["ico_mision"];
    $arrAbout[$rTMP["id"]]["title_mision"] = $rTMP["title_mision"];
    $arrAbout[$rTMP["id"]]["content_mision"] = $rTMP["content_mision"];
    $arrAbout[$rTMP["id"]]["img_plan"] = $rTMP["img_plan"];
    $arrAbout[$rTMP["id"]]["ico_plan"] = $rTMP["ico_plan"];
    $arrAbout[$rTMP["id"]]["title_plan"] = $rTMP["title_plan"];
    $arrAbout[$rTMP["id"]]["content_plan"] = $rTMP["content_plan"];
    $arrAbout[$rTMP["id"]]["img_vision"] = $rTMP["img_vision"];
    $arrAbout[$rTMP["id"]]["ico_vision"] = $rTMP["ico_vision"];
    $arrAbout[$rTMP["id"]]["title_vision"] = $rTMP["title_vision"];
    $arrAbout[$rTMP["id"]]["content_vision"] = $rTMP["content_vision"];
}
mysqli_free_result($qTMP);

if (is_array($arrAbout) && (count($arrAbout) > 0)) {
    reset($arrAbout);
    foreach ($arrAbout as $rTMP['key'] => $rTMP['value']) {

        $id = $rTMP["value"]['id'];
        $inf_general = $rTMP["value"]['inf_general'];
        $img_mision = $rTMP["value"]['img_mision'];
        $ico_mision = $rTMP["value"]['ico_mision'];
        $title_mision = $rTMP["value"]['title_mision'];
        $content_mision = $rTMP["value"]['content_mision'];
        $img_plan = $rTMP["value"]['img_plan'];
        $ico_plan = $rTMP["value"]['ico_plan'];
        $title_plan = $rTMP["value"]['title_plan'];
        $content_plan = $rTMP["value"]['content_plan'];
        $img_vision = $rTMP["value"]['img_vision'];
        $ico_vision = $rTMP["value"]['ico_vision'];
        $title_vision = $rTMP["value"]['title_vision'];
        $content_vision = $rTMP["value"]['content_vision'];
    }
}



$arrHeader = array();
$var_consulta = "SELECT * FROM header_info LIMIT 1";

//$var_resultado = $conexion->query($var_consulta);
$qTMP = mysqli_query($link, $var_consulta);
while ($rTMP = mysqli_fetch_assoc($qTMP)) {
    $arrHeader[$rTMP["id"]]["id"] = $rTMP["id"];
    $arrHeader[$rTMP["id"]]["title"] = $rTMP["title"];
    $arrHeader[$rTMP["id"]]["content"] = $rTMP["content"];
    $arrHeader[$rTMP["id"]]["boton"] = $rTMP["boton"];
    $arrHeader[$rTMP["id"]]["url"] = $rTMP["url"];
}
mysqli_free_result($qTMP);

if (is_array($arrHeader) && (count($arrHeader) > 0)) {
    reset($arrHeader);
    foreach ($arrHeader as $rTMP['key'] => $rTMP['value']) {
        $title = $rTMP["value"]['title'];
        $content = $rTMP["value"]['content'];
        $boton = $rTMP["value"]['boton'];
        $url = $rTMP["value"]['url'];
    }
}

$arrContact = array();
$var_consulta = "SELECT * FROM contact ";

//$var_resultado = $conexion->query($var_consulta);
$qTMP = mysqli_query($link, $var_consulta);
while ($rTMP = mysqli_fetch_assoc($qTMP)) {
    $arrContact[$rTMP["id"]]["id"] = $rTMP["id"];
    $arrContact[$rTMP["id"]]["descrip"] = $rTMP["descrip"];
    $arrContact[$rTMP["id"]]["dress"] = $rTMP["dress"];
    $arrContact[$rTMP["id"]]["ubi"] = $rTMP["ubi"];
    $arrContact[$rTMP["id"]]["telefono"] = $rTMP["telefono"];
    $arrContact[$rTMP["id"]]["mail"] = $rTMP["mail"];
}
mysqli_free_result($qTMP);

if (is_array($arrContact) && (count($arrContact) > 0)) {
    reset($arrContact);
    foreach ($arrContact as $rTMP['key'] => $rTMP['value']) {
        $descrip = $rTMP["value"]['descrip'];
        $dress = $rTMP["value"]['dress'];
        $ubi = $rTMP["value"]['ubi'];
        $telefono = $rTMP["value"]['telefono'];
        $mail = $rTMP["value"]['mail'];
    }
}

$arrMenuPorfolio = array();
$var_consulta = "SELECT * FROM nav_porfolio_class";

//$var_resultado = $conexion->query($var_consulta);
$qTMP = mysqli_query($link, $var_consulta);
while ($rTMP = mysqli_fetch_assoc($qTMP)) {
    $arrMenuPorfolio[$rTMP["id"]]["id"] = $rTMP["id"];
    $arrMenuPorfolio[$rTMP["id"]]["title"] = $rTMP["title"];
    $arrMenuPorfolio[$rTMP["id"]]["clase"] = $rTMP["clase"];
    $arrMenuPorfolio[$rTMP["id"]]["abreviatura"] = $rTMP["abreviatura"];
}
mysqli_free_result($qTMP);


$arrServiceCont = array();
$var_consulta = "SELECT * FROM services WHERE status_text = 1 LIMIT 1";

//$var_resultado = $conexion->query($var_consulta);
$qTMP = mysqli_query($link, $var_consulta);
while ($rTMP = mysqli_fetch_assoc($qTMP)) {
    $arrServiceCont[$rTMP["id"]]["id"] = $rTMP["id"];
    $arrServiceCont[$rTMP["id"]]["content_gen"] = $rTMP["content_gen"];
}
mysqli_free_result($qTMP);

if (is_array($arrServiceCont) && (count($arrServiceCont) > 0)) {
    reset($arrServiceCont);
    foreach ($arrServiceCont as $rTMP['key'] => $rTMP['value']) {
        $content_gen = $rTMP["value"]['content_gen'];
    }
}


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////


function save_file_image($strInputFileName, $strExtraPath = "", $strAntelacionArchivo = "asset/img/", $intImagenId = 0, $boolDeletePreviousFile = true, $boolAjax = false, $boolNombreOriginal = false)
{
    $strFileName = isset($_FILES[$strInputFileName]['name']) ? $_FILES[$strInputFileName]['name'] : "";

    if ($boolAjax)
        $strFileName = procesImput($strFileName, true);

    $strFileName = rem_special_caract(str_replace(" ", "_", $strFileName));
    $intImagenId = ($intImagenId == 0 || strlen($intImagenId) == 0) ? uniqid() : $intImagenId;

    $strAntelacionArchivo = empty($strAntelacionArchivo) ? "" : rem_special_caract($strAntelacionArchivo);

    $strPath = "asset/img/";

    if (!empty($strExtraPath)) {
        if (substr($strExtraPath, -1, 1) != "/") {
            $strExtraPath = $strExtraPath . "/";
        }
    }

    $strPath = $strPath . $strExtraPath;
    $strPathAndFile = "";
    if (!file_exists($strPath)) {
        mkdir($strPath, 0777, true);
    }

    if (file_exists($strPath)) {

        if (isset($_FILES[$strInputFileName]['name']) && $_FILES[$strInputFileName]['error'] == UPLOAD_ERR_OK) {

            $strExtension = pathinfo(strtolower($strFileName), PATHINFO_EXTENSION);

            //drawDebug($strExtension, "strExtension");

            if ($boolNombreOriginal) {
                $strPathInfoFileName = $strPath . rem_special_caract(str_replace(" ", "_", pathinfo($strFileName, PATHINFO_FILENAME)));
                $strPathAndFile .= empty($strAntelacionArchivo) ? "" : $strAntelacionArchivo . "_";
                $strPathAndFile .= $strPathInfoFileName . "_" . $intImagenId . "." . $strExtension;
            } else {
                $strPathAndFile = $strPath . $strAntelacionArchivo . "_" . $intImagenId . "." . $strExtension;
            }

            if (!file_exists($strPathAndFile)) {
                @chmod("asset/img/", 0777);
                move_uploaded_file($_FILES[$strInputFileName]["tmp_name"], $strPathAndFile);
                @chmod($strPathAndFile, 0777);
            }
        }
    }

    return $strPathAndFile;
}

function procesImput($strInput, $boolUTF8Decode = false)
{
    if ($boolUTF8Decode && mb_detect_encoding($strInput) == "UTF-8") {
        $strInput = utf8_decode($strInput);
    }
    return $strInput;
}
?>