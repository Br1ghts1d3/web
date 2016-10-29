<?php
require_once('fpdf.php');

class  CreatePDF extends FPDF {

    /******************** Begin Header Layout RyS ********************/

    function headerRyS($cabecera, $folio){
        //echo $cabecera[0] . ' ' .$cabecera[1] . ' ' .$cabecera[2] . ' ' . $cabecera[3] . ' ' .$cabecera[4] . ' ' .$cabecera[5] . ' ' .$cabecera[6];
        $datosCabecera = $cabecera;
        $fecha = explode("/", $cabecera[2]);

        $this->Cell(190, 250, "",1,0);

        $nombre_empresa = "Refacciones y Servicios de Latinoamérica S.A. de C.V.";
        $this->SetFont('Arial','B',10);
        $this->SetXY(45,15);
        $this->Cell(120,10,utf8_decode($nombre_empresa),0,0,'C');

        $this->Image('../../img/logo.jpg' , 11 ,11, 45, 31,'JPG');

        $this->SetFont('Arial','B',9);
        $this->SetXY(154.9,23);
        $this->Cell(45,10,'Folio: ' . $folio,1,1,'L');

        $direccion1 = "Calle UC1 No.69n Int.14 Col. Villa de los Angeles ";
        $this->SetFont('Arial','',8);
        $this->SetXY(67,20);
        $this->Cell(120,10,utf8_decode($direccion1),0,0,'L');

        $direccion2 = "72810 San Andrés, Cholula Puebla ";
        $this->SetFont('Arial','',8);
        $this->SetXY(84.8,25);
        $this->Cell(120,10,utf8_decode($direccion2),0,0,'L');

        $this->SetFont('Arial','B',10);
        $this->SetXY(94,28);
        $this->Cell(277,15,utf8_decode('RFC: RSL140325KH0'),0,0,'L');

        $this->SetFont('Arial','B',10);
        $this->SetXY(10,45);
        $this->Cell(55,8, 'Fecha: ' . $fecha[1] . '-' . $this->getMonth(intval($fecha[0])) . '-' . $fecha[2] ,1,0,'C');

        $this->SetFont('Arial','B',10);
        $this->SetXY(65.1,45);
        $this->Cell(80,8,utf8_decode( $datosCabecera[4] . '/' . $datosCabecera[6] . '/' . $datosCabecera[5] ),1,0,'C');

        $this->SetFont('Arial','B',10);
        $this->SetXY(145,45);
        $this->Cell(54.9,8,'KM: ' . $datosCabecera[3] ,1,0,'C');

        $this->SetFont('Arial','B',10);
        $this->SetXY(10,53);
        $this->Cell(55,8,'Responsable ',1,0,'C');

        $this->SetFont('Arial','B',10);
        $this->SetXY(65.1,53);
        $this->Cell(134.8,8,utf8_decode($datosCabecera[1]),1,0,'C');

        $this->SetFont('Arial','B',10);
        $this->SetXY(10,61.1);
        $this->Cell(55,8,utf8_decode('Contacto:'),1,0,'C');

        $this->SetFont('Arial','B',10);
        $this->SetXY(65.1,61.1);
        $this->Cell(134.8,8,utf8_decode('servicio@refaservla.com.mx'),1,0,'C');

    }

    /******************** End Header Layout RyS ********************/


    /******************** Begin Simple Header Layout RyS ********************/

    function simpleHeader(){

        $this->SetFont('Arial','B',10);
        $this->SetXY(10,69.1);
        $this->SetFillColor(130,133,137);
        $this->Cell(20,8,utf8_decode('Cantidad'),1,1,'C',true);

        $this->SetFont('Arial','B',10);
        $this->SetXY(18,79);
        $this->SetFillColor(130,133,137);
        $this->Cell(20,8,'1',0,0,'C');

        $this->SetXY(10,77.2);
        $this->Cell(20,182.9,"",1,1,'C');

        $this->SetFont('Arial','B',10);
        $this->SetXY(30,69.1);
        $this->SetFillColor(130,133,137);
        $this->Cell(35,8,utf8_decode('Unidad'),1,1,'C',true);

        $this->SetFont('Arial','B',10);
        $this->SetXY(38,79);
        $this->SetFillColor(130,133,137);
        $this->Cell(20,8,'Servicio',0,0,'C');

        $this->SetXY(30,77.2);
        $this->Cell(35,182.9,"",1,1,'C');

        $this->SetFont('Arial','B',10);
        $this->SetXY(65.1,69.1);
        $this->SetFillColor(130,133,137);
        $this->Cell(95,8,utf8_decode('Descripción'),1,1,'C',true);

        $this->SetXY(65.1,77.2);
        $this->Cell(94.8,182.9,"",1,1,'C');

        $this->SetFont('Arial','B',10);
        $this->SetXY(159.9,69.1);
        $this->SetFillColor(130,133,137);
        $this->Cell(40,8,utf8_decode('Cantidad'),1,1,'C',true);
    }

    /******************** End Simple Header Layout RyS ********************/

    /******************** Begin Simple Header Layout RyS ********************/

    function headerDetail(){

        $this->SetFont('Arial','B',10);
        $this->SetXY(10,69.1);
        $this->SetFillColor(130,133,137);
        $this->Cell(20,8,utf8_decode('Cantidad'),1,1,'C',true);

        $this->SetXY(10,77.2);
        $this->Cell(20,182.9,"",1,1,'C');

        $this->SetFont('Arial','B',10);
        $this->SetXY(30,69.1);
        $this->SetFillColor(130,133,137);
        $this->Cell(35,8,utf8_decode('Unidad'),1,1,'C',true);

        $this->SetXY(30,77.2);
        $this->Cell(35,182.9,"",1,1,'C');

        $this->SetFont('Arial','B',10);
        $this->SetXY(65.1,69.1);
        $this->SetFillColor(130,133,137);
        $this->Cell(75,8,utf8_decode('Descripción'),1,1,'C',true);

        $this->SetXY(65.1,77.2);
        $this->Cell(75,182.9,"",1,1,'C');

        $this->SetFont('Arial','B',10);
        $this->SetXY(140.1,69.1);
        $this->SetFillColor(130,133,137);
        $this->Cell(29,8,utf8_decode('P. Unitario'),1,1,'C',true);

        $this->SetXY(140.1,77.2);
        $this->Cell(29,182.9,"",1,1,'C');

        $this->SetFont('Arial','B',10);
        $this->SetXY(169.1,69.1);
        $this->SetFillColor(130,133,137);
        $this->Cell(30.8,8,utf8_decode('Total'),1,1,'C',true);


        $this->SetFont('Arial','B',10);
        $this->SetXY(10,252);
        $this->SetFillColor(130,133,137);
        $this->Cell(190,8,utf8_decode('Total: ') . "$ " . "3692.20",1,1,'R',true);
    }

    /******************** End Simple Header Layout RyS ********************/



    function getMonth($month){
        $mes = "";
        switch (intval($month)) {
            case 1:
                $mes = "Enero";
                break;
            case 2:
                $mes = "Febrero";
                break;
            case 3:
                $mes = "Marzo";
                break;
            case 4:
                $mes = "Abril";
                break;
            case 5:
                $mes = "Mayo";
                break;
            case 6:
                $mes = "Junio";
                break;
            case 7:
                $mes = "Julio";
                break;
            case 8:
                $mes = "Agosto";
                break;
            case 9:
                $mes = "Septiembre";
                break;
            case 10:
                $mes = "Octubre";
                break;
            case 11:
                $mes = "Noviembre";
                break;
            case 12:
                $mes = "Diciembre";
                break;
        }
        return $mes;
    }

    function addData($folio, $cabecera, $dataOrden, $type){

        $orden = explode(",", $dataOrden[1]);
        $this->headerRyS($cabecera, $folio);

        if(intval($type) == 1){
            $this->simpleHeader();
            $y = 80;
            for ($i = 0; $i < sizeof($orden); $i++){
                $this->SetFont('Arial','B',10);
                $this->SetXY((69 + $i),$y);
                $this->Cell(75,8,utf8_decode($orden[$i]),0,0,'L');
                $y+= 5.2;
            }

        }else
            if (intval($type) == 2){
                $this->headerDetail();
                $this->SetFont('Arial','B',10);
                $this->SetXY(50,120);
                $this->Cell(75,8,utf8_decode($orden[1]),0,0,'L');
            }
    }
}


