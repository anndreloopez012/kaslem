
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';

$val = 1;
$med_con_id_  = '117';
$nombreCmMedico  = 'Dr. Mario Casas';
$medicoDireccion  = '14 av a 13-81';
$medicoTelefono  = '22222222';
$nombreConsulta   = 'andre lopez';
$fechaDia   = '05-03-2021';

if ($val) {
    require_once "../api/globalFunctions.php";

    require_once "../data/conexion/tmfAdm.php";
    require_once "../data/conexion/tmlFar.php";
    require_once "../data/conexion/tmlMed.php";


    $medicosConsultasMed = "a2021_medicos_consultas";
    $medicosConsultasProductosMed = "a2021medconsultas_productos";

    $arrRecFar = array();
    $var_consulta = "SELECT med_cop_far_id 
					FROM a2021medconsultas_productos 
					WHERE med_cop_id = 117
                    GROUP BY med_cop_far_id ";
    $sql = pg_query($tmfMed, $var_consulta);
    $total = pg_num_rows($sql);
    //print_r( $var_consulta);

    while ($rTMP = pg_fetch_assoc($sql)) {

        $arrRecFar[$rTMP["med_cop_far_id"]]["med_cop_far_id"] = $rTMP["med_cop_far_id"];
    }
    pg_free_result($sql);
    $tablaMedic = '';
    $artico = '';
    $med_cop_pro_id = '';
    $idFar = '';
    if (is_array($arrRecFar) && (count($arrRecFar) > 0)) {
        reset($arrRecFar);
        foreach ($arrRecFar as $rTMP['key'] => $rTMP['value']) {
            $med_cop_far_id = $rTMP["value"]['med_cop_far_id'];
            echo $med_cop_far_id;
            echo '<br>';
            $rs = pg_query($tmfMed, "SELECT med_cop_pro_id,med_cop_far_id
									FROM $medicosConsultasProductosMed
									WHERE med_cop_id = 117
									AND med_cop_far_id =  '$med_cop_far_id'");
            $totalArticle = pg_num_rows($rs);

            if ($row2 = pg_fetch_array($rs)) {
                $idRowP = trim($row2[0]);
                $x = 1;
                while ($x <= $totalArticle) {
                    $tablaMedic .=
                        '<tr border="1" >
                    <td align="right" width="10%" bgcolor= "#3498db">Numero de Registro: </td>'
                        . '<td width="50%">' . $idRowP . '</td> </tr>'
                        . '<tr border="1" >'
                        . '<td>.</td></tr>';
                    echo '<br>';
                    echo $idRowP.'producto<br>';
                    echo $med_cop_far_id.'farmacia<br>';
                    $x++;
                }
            }

            $rs = pg_query($rmfAdm, "SELECT ctg_far_nomcom,ctg_far_suc,ctg_far_email
									FROM ctg_farmacias_sucursales
									WHERE ctg_far_code = '$med_cop_far_id'");
            if ($row = pg_fetch_array($rs)) {
                $idRowS0 = trim($row[0]);
                $idRowS1 = trim($row[1]);
                $idRowS2 = trim($row[2]);
            }
            $ctg_far_nomcom = isset($idRowS0) ? $idRowS0  : '';
            $ctg_far_suc = isset($idRowS1) ? $idRowS1  : '';
            $ctg_far_email = isset($idRowS2) ? $idRowS2  : '';

            $subject_ = 'ORDEN DE MEDICAMENTOS - ' . ' ' . $med_con_id_ . '---' . $med_cop_far_id;
            $address_  =  $ctg_far_email;
            $mailContent = '<br>VisualMed - ORDEN DE MEDICAMENTOS - ' . $ctg_far_nomcom . "-" . $ctg_far_suc . ' </br><br>
			<table class="default" width="100%">
	<tr border="1">
		<td align="center" bgcolor= "#0464fc">
			<img src="https://i.ibb.co/MZ35wKk/vmo-header2-1.png" alt="vmo-header2-1" border="0">
 		</td>
	</tr>
</table>
			<table class="default" width="100%">
			<tr border="1">
			<td align="center"><h3>Dr. ' . $nombreCmMedico . '</h3></td><br>
			</tr>
			<tr border="1">
			<td align="center"><b>' . $medicoDireccion . '</b></td><br>
			</tr>
			<tr border="1">
			<td align="center"><b>' . $medicoTelefono . '</b></td>
			</tr>
			</table><br><br>

			<b color="teal">Nombre del paciente:</b><a>' . $nombreConsulta . '</a><br>
			<b color="teal">Fecha de la consulta:</b><a>' . $fechaDia . '</a><br>

			<b color="teal">FICHA TECNICA DE MEDICAMENTOS</b><br>
			<table class="default" width="100%">'
                . $tablaMedic . '
			</table>

			<table class="default" width="100%">	
	<tr border="1">	
		<td align="center" bgcolor= "#0464fc">	
			<img src="https://i.ibb.co/ckwzNgQ/vmo-footer2-1.png" alt="vmo-footer2-1" border="0">
		</td>
	</tr>
</table>';
            echo $tablaMedic;
            echo '<br>';
            $tablaMedic = '';



            $mail = new PHPMailer(true);

            try {
                $mail->SMTPDebug = 0;
                $mail->isSMTP();
                $mail->Host       = 'mail.privateemail.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'dor.contacto@visualmed.online';
                $mail->Password   = 'D0r.C0ntact02020';
                $mail->SMTPSecure = 'TLS';
                $mail->Port       =  587;

                $mail->setFrom('dor.contacto@visualmed.online', 'VisualMed');
                $subject  = $subject_;
                $address  = $address_;
                $mail->addAddress($address, $subject);
                $mail->addAddress('andrelopez012@gmail.com', 'andre');
   
                $mail->isHTML(true);
                $mail->Subject = $subject;
                $mail->Body    = $mailContent;
                $mail->CharSet = 'UTF-8';

                $mail->send();
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
    }
}
?>