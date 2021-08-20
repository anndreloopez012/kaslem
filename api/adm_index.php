<?php

//////////////////// HOME //////////////////////////////////////////

$arrHomePrint = array();
$var_consulta = "SELECT * FROM home WHERE tipo = 1";

//$var_resultado = $conexion->query($var_consulta);
$qTMP = mysqli_query($link, $var_consulta);
while ($rTMP = mysqli_fetch_assoc($qTMP)) {
    $arrHomePrint[$rTMP["id"]]["id"] = $rTMP["id"];
    $arrHomePrint[$rTMP["id"]]["slogan"] = $rTMP["slogan"];
    $arrHomePrint[$rTMP["id"]]["slogan2"] = $rTMP["slogan2"];
    $arrHomePrint[$rTMP["id"]]["fondo"] = $rTMP["fondo"];
}
mysqli_free_result($qTMP);

if (is_array($arrHomePrint) && (count($arrHomePrint) > 0)) {
    reset($arrHomePrint);
    foreach ($arrHomePrint as $rTMP['key'] => $rTMP['value']) {

        $slogan =  $rTMP["value"]['slogan'];
        $slogan2 =  $rTMP["value"]['slogan2'];
        $fondo =  $rTMP["value"]['fondo'];
    }
}


$arrHome = array();
$var_consulta = "SELECT * FROM home WHERE tipo = 2";

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


//////////////////// END HOME //////////////////////////////////////////
//////////////////// ABOUT //////////////////////////////////////////

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
    $arrAbout[$rTMP["id"]]["img_gen"] = $rTMP["img_gen"];
    $arrAbout[$rTMP["id"]]["ing_estado"] = $rTMP["ing_estado"];
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
        $img_gen = $rTMP["value"]['img_gen'];
        $ing_estado = $rTMP["value"]['ing_estado'];
    }
}



//////////////////// END ABOUT //////////////////////////////////////////
//////////////////// SERVICE //////////////////////////////////////////
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

//////////////////// END ABOUT //////////////////////////////////////////
//////////////////// HEADER INFO //////////////////////////////////////////
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
//////////////////// END HEADER INFO //////////////////////////////////////////
//////////////////// MENU PORFOLIO //////////////////////////////////////////
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

//////////////////// END MENU PORFOLIO //////////////////////////////////////////
////////////////////  PORFOLIO //////////////////////////////////////////
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

//////////////////// END PORFOLIO //////////////////////////////////////////
////////////////////  CLIENTS //////////////////////////////////////////
$arrClients = array();
$var_consulta = "SELECT * FROM clients ";

//$var_resultado = $conexion->query($var_consulta);
$qTMP = mysqli_query($link, $var_consulta);
while ($rTMP = mysqli_fetch_assoc($qTMP)) {
    $arrClients[$rTMP["id"]]["id"] = $rTMP["id"];
    $arrClients[$rTMP["id"]]["coment"] = $rTMP["coment"];
    $arrClients[$rTMP["id"]]["url"] = $rTMP["url"];
    $arrClients[$rTMP["id"]]["img"] = $rTMP["img"];
}
mysqli_free_result($qTMP);

//////////////////// END CLIENTS //////////////////////////////////////////
////////////////////  TEAM //////////////////////////////////////////
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

//////////////////// END TEAM //////////////////////////////////////////
////////////////////  CONTACT //////////////////////////////////////////
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

//////////////////// END CONTACT //////////////////////////////////////////
