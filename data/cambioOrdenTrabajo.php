<?php
try {
    require_once 'dbconfig.php';

    $prep = array();
    foreach ($_POST['ordenAlta'] as $k => $v) {
        $prep[$k] = $v;
        $k++;
    }
    
    $folio = $_POST['folio'];
   

    $query = "update ORDEN_TRABAJO set TRABAJO_REAL1 = '".$prep[1]."', TRABAJO_REAL2 = '".$prep[4]."', TRABAJO_REAL3 = '".$prep[7]."', 
    TRABAJO_REAL4 = '".$prep[10]."', TRABAJO_REAL5 = '".$prep[13]."', TRABAJO_REAL6 = '".$prep[16]."', TRABAJO_REAL7 = '".$prep[19]."', TRABAJO_REAL8 = '".$prep[22]."', TRABAJO_REAL9 = '".$prep[25]."', TRABAJO_REAL10 = '".$prep[28]."', MEC_ASIG1 = '".$prep[2]."', MEC_ASIG2 = '".$prep[5]."', MEC_ASIG3 = '".$prep[8]."', MEC_ASIG4 = '".$prep[11]."',   MEC_ASIG5 = '".$prep[14]."', MEC_ASIG6 = '".$prep[17]."', MEC_ASIG7 = '".$prep[20]."', MEC_ASIG8 = '".$prep[23]."', MEC_ASIG9 = '".$prep[26]."', MEC_ASIG10 = '".$prep[29]."', TRABAJO_HR1 = ".intval($prep[3]).", TRABAJO_HR2 = ".intval($prep[6]).", TRABAJO_HR3 = ".intval($prep[9]).", TRABAJO_HR4  = ".intval($prep[12]).", TRABAJO_HR5  = ".intval($prep[15]).", TRABAJO_HR6 = ".intval($prep[18]).", TRABAJO_HR7  = ".intval($prep[21]).", TRABAJO_HR8 = ".intval($prep[24]).", TRABAJO_HR9 = ".intval($prep[27])." , TRABAJO_HR10 = ".intval($prep[30]).", REF_REQ1 = '".$prep[31]."', REF_REQ2 = '".$prep[33]."', REF_REQ3 = '".$prep[35]."', REF_REQ4 = '".$prep[37]."', REF_REQ5 = '".$prep[39]."', REF_REQ6 = '".$prep[41]."', REF_REQ7  = '".$prep[43]."', REF_REQ8 = '".$prep[45]."', REF_REQ9 = '".$prep[47]."', REF_REQ10 = '".$prep[49]."', REF_PREC1 = ".floatval($prep[32]).", REF_PREC2 = ".floatval($prep[34]).", REF_PREC3 = ".floatval($prep[36]).", REF_PREC4 = ".floatval($prep[38]).", REF_PREC5 = ".floatval($prep[40]).", REF_PREC6 = ".floatval($prep[42]).", REF_PREC7 = ".floatval($prep[44]).", REF_PREC8 = ".floatval($prep[46]).", REF_PREC9 = ".floatval($prep[48]).", REF_PREC10 = ".floatval($prep[50]).", T_ENTREGA = ".intval($prep[51])." 
    where FOLIO_ING = '" . $folio . "'";

    $db_con->exec($query);
}
catch(PDOException $e){
    echo $e->getMessage();
}

header('Location: ../administrator.php');