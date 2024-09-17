<?php
   // header('Content-Type: text/html; charset=ISO-8859-1');


if (!empty($_POST['submit'])) {
	//
	$txt_nomb=$_POST['txt_nomb'];
	$txt_ape_pat=$_POST['txt_ape_pat'];
	$txt_ape_mat=$_POST['txt_ape_mat'];
	$txt_DNI=$_POST['txt_DNI'];
	$txt_ofic=$_POST['cmb_ofic'];
	$txt_jefe=$_POST['txt_jefe'];
	$cmb_ofic=$_POST['cmb_ofic'];
	$arrayCHK=$_POST['checkboxes'];
	$cmb_carg=$_POST['cmb_carg'];
	$cmb_unid=$_POST['cmb_unid'];
	$cmb_area=$_POST['cmb_area'];
	$txt_IP=$_POST['txt_IP'];
	$txt_sust=$_POST['txt_sust'];
	// $txt_mail=$_POST['txt_mail'];
	// $txt_mail_personal=$_POST['txt_mail_personal'];
	$num=count($arrayCHK);
	

//require 'D:\Proyectos\FSAv2\FPDF\fpdf.php';
require('C:\xampp\htdocs\FSAv3\tfpdf\tfpdf.php');

$pdf=new tFPDF();
//$pdf->SetFont("Arial","B","12");
$pdf->AddPage();
$width=210; // Width of Current Page
$height=297; // Height of Current Page
$edge=10; // Gap between line and border , change this value
$fecha=date('d/m/y');
$hora=date('h:i:s');
// Add a Unicode font (uses UTF-8) and styles
//$pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
$pdf->AddFont('DejaVu','','Helvetica-Font/Helvetica.ttf',true);//
//$pdf->AddFont('DejaVu', 'B', 'DejaVuSans-Bold.ttf', true);
$pdf->AddFont('DejaVu', 'B', 'Helvetica-Font/Helvetica-Bold.ttf', true);
$pdf->SetFont('DejaVu','',12);

//-------------PRIMER CUADRO--------------
//----------------------------------------
$pdf->Line(10, 33,$width-$edge,33); // Horizontal line at top
$pdf->Line(10, 105+($num*6),$width-$edge,105+($num*6)); // Horizontal line at bottom
$pdf->Line(10, 33,10,105+($num*6)); // Vetical line at left
$pdf->Line($width-$edge, 33,$width-$edge,105+($num*6)); // Vertical line at Right


//--------------SEGUNDO CUADRO--------------
//------------------------------------------
$pdf->Line($edge, 110+($num*6),$width-$edge,110+($num*6)); // Horizontal line at top
$pdf->Line($edge, 160+($num*6),$width-$edge,160+($num*6)); // Horizontal line at bottom
$pdf->Line($edge, 110+($num*6),$edge,160+($num*6)); // Vetical line at left 
$pdf->Line($width-$edge,110+($num*6),$width-$edge,160+($num*6)); // Vetical line at right
/**
//--------------TERCER CUADRO--------------
//------------------------------------------
$pdf->Line($edge, 167,$width-$edge,167); // Horizontal line at top
$pdf->Line($edge, 220,$width-$edge,220); // Horizontal line at bottom
$pdf->Line($edge, 167,$edge,220); // Vetical line at left
$pdf->Line($width-$edge, 167,$width-$edge,220); // Vetical line at right
$pdf->Line(105, 167,105,220); // Middle line at left

//--------------CUARTO CUADRO--------------
//------------------------------------------
$pdf->Line($edge, 225,$width-$edge,225); // Horizontal line at top
$pdf->Line($edge, 280,$width-$edge,280); // Horizontal line at bottom
$pdf->Line($edge, 225,$edge,280); // Vetical line at left
$pdf->Line($width-$edge, 225,$width-$edge,280); // Vetical line at right
$pdf->Line(105, 225,105,280); // Middle line at left
**/
$pdf->SetFont('DejaVu','',10);
$pdf->Cell(55,20,$pdf->Image('C:\xampp\htdocs\FSAv3\IMG\logo.png',16,8,35),0,0,'C');
//$pdf->Ln(15);
//$pdf->Cell(0,10,"UNIDAD DE TECNOLOGIAS DE LA INFORMACION",0,0,'C');
//$pdf->Ln(7);
$pdf->SetFont('DejaVu','B','10');
$pdf->Cell(80,6,"ZONA REGISTRAL N° X - SEDE CUSCO",0,1,"C");
$pdf->Cell(140,8,"UNIDAD DE TECNOLOGIAS DE LA INFORMACIÓN",0,0,"R");
$pdf->SetFont("DejaVu","B","16");
$pdf->Cell(40,10,"N° ____",0,1,"R");
$pdf->SetFont("DejaVu","BU",13);
$pdf->Cell(155,4,"FORMATO DE SOLICITUD DE ALTA DE ACCESOS",0,0,"R");
$pdf->Ln(8);
$pdf->GetX();
$pdf->SetFont("DejaVu",'BU',11);
//$pdf->SetXY(20,35);
$pdf->Cell(140,6,"1. DE LA SOLICITUD",0);
$pdf->SetFont("DejaVu","B","11"); //fuente para fecha
$pdf->Cell(15,6,"Fecha:",0,0,'L');
$pdf->SetFont("DejaVu","","11");
$pdf->Cell(25,6,"{$fecha} ",0,1,'L');

$pdf->SetFont("DejaVu","B","11");
$pdf->Cell(20,6,"Nombre : ",0,0,'L');
$pdf->SetFont('DejaVu','','11');
$pdf->Cell(46,6,"{$txt_nomb}",0,0,'L');

$pdf->SetFont("DejaVu","B","11");
$pdf->Cell(21,6,"Apellidos: ",0,0,'L');
$pdf->SetFont("DejaVu","","11");
$pdf->Cell(53,6,"{$txt_ape_pat} {$txt_ape_mat}",0,0,'L');

$pdf->SetFont("DejaVu","B","11");
$pdf->Cell(15,6,"DNI    :",0,0,'L');
$pdf->SetFont("DejaVu","","11");
$pdf->Cell(25,6,"{$txt_DNI}",0,1,'L');

$pdf->SetFont("DejaVu","B","11");
$pdf->Cell(20,6,"Oficina  : ",0,0);
$pdf->SetFont("DejaVu","","11");
$pdf->Cell(46,6,"{$cmb_ofic}",0,0,'L');

$pdf->SetFont("DejaVu","B","11");
$pdf->Cell(21,6,"Unidad    : ",0,0);
$pdf->SetFont("DejaVu","","11");
$pdf->Cell(53,6,"{$cmb_unid}",0,0,'L');

$pdf->SetFont("DejaVu","B","11");
$pdf->Cell(15,6,"Area  :",0,0);
$pdf->SetFont("DejaVu","","11");
$pdf->Cell(25,6,"{$cmb_area}",0,1,'L');

$pdf->SetFont("DejaVu","B","11");
$pdf->Cell(20,6,"Cargo    : ",0,0);
$pdf->SetFont("DejaVu","","11");
$pdf->Cell(46,6,"{$cmb_carg}",0,1,'L');

$pdf->SetFont("DejaVu","B","11");
$pdf->Cell(21,6,"IP             : ",0,0);
$pdf->SetFont("DejaVu","","11");
$pdf->Cell(56,6,"{$txt_IP}",0,1,'L');

// $pdf->SetFont("DejaVu","B","11");
// $pdf->Cell(21,6,"Correo Personal : ",0,0);
// $pdf->SetFont("DejaVu","","11");
// $pdf->Cell(70,6,"{$txt_mail_personal}",0,1,'L');

$pdf->Ln(1);
$pdf->SetFont("DejaVu","","10");
$pdf->MultiCell(170,6,utf8_decode(" - Mediante el presente, solicito los accesos a los siguientes sistemas para realizar mis labores:"),0,"J");

$pdf->Ln(5);
$pdf->SetFont("DejaVu","","11"); //fuente para tabla



$pdf->Cell(18,6,"",0,0);
$pdf->SetFont("DejaVu","B","11");
$pdf->Cell(7,6,"N",1,0,"C");
$pdf->Cell(45,6,"SISTEMA",1,0,"C");
for($n=0;$n<$num;$n++){
	$temp=("$arrayCHK[$n]");
	if("{$temp}" == "SGD(MESA DE PARTES)" || "{$temp}" == "SPRN(MESA DE PARTES)"){
		$pdf->Cell(45,6,"PERFIL",1,0,"C");
	}	
	// if("{$temp}" == "SPRN(MESA DE PARTES)"){
	// 	$pdf->Cell(45,6,"PERFIL",1,0,"C");
	// }	
}
$pdf->Cell(45,6,"",0,1,"C");
// if("{$temp}" == "SGD(MESA DE PARTES)"){
// 	$pdf->Ln(-6);
// 	$pdf->Cell(70,6,"",0,0);
// 	$pdf->SetFont("DejaVu","B","11");
// 	$pdf->Cell(45,6,"PERFIL",1,1,"C");
// 	$pdf->SetFont("DejaVu","","10");
// 	$pdf->Cell(70,6,"",0,0);
// 	$pdf->Cell(45,6,"MESA DE PARTES",1,1,'C');	
// }

$pdf->SetFont("DejaVu","","10");


for($n=0;$n<$num;$n++)
	{
		
			$ntemp=$n+1;
			$temp=("$arrayCHK[$n]");
			$pdf->Cell(18,6,"",0,0);
			$pdf->Cell(7,6,"{$ntemp}",1,0,'C');
			if("{$temp}" == "SGD(MESA DE PARTES)" || "{$temp}" == "SPRN(MESA DE PARTES)"){
				$pdf->Cell(45,6,"{$temp} ",1,0,'L');
				$pdf->Cell(45,6,"MESA DE PARTES",1,1,"C");
			}
			// if("{$temp}" == "SPRN(MESA DE PARTES)"){
			// 	$pdf->Cell(45,6,"SGD",1,0,'C');
			// 	$pdf->Cell(45,6,"MESA DE PARTES",1,1,"C");
			// }
			else{
				$pdf->Cell(45,6,"{$temp} ",1,1,'L');
			}

	}



$pdf->Ln(10);
$pdf->SetFont("DejaVu","B","11");
$pdf->Cell(25,6," SUSTENTO:",0,0);
$pdf->SetFont("DejaVu","U","10");
$pdf->MultiCell(163,4,"{$txt_sust}",0);
$pdf->Ln(20);
$pdf->Cell(100,6,"",0,0);



//$pdf->Ln(10);
$pdf->SetXY(10, 111+($num*6));
$pdf->SetFont("DejaVu","BU","11");
$pdf->Cell(140,6,"2. DE LA AUTORIZACIÓN",0,0,'L');
$pdf->SetFont("DejaVu","","11");

$pdf->SetFont("DejaVu","B","11"); //fuente para fecha
$pdf->Cell(15,6,"Fecha:",0,0,'L');
$pdf->SetFont("DejaVu","","11");
$pdf->Cell(25,6,"{$fecha} ",0,1,'L');

$pdf->SetFont("DejaVu","B","11"); 
$pdf->Cell(78,6,"Jefe de la Unidad/Inmediato que autoriza: ",0,0,'L');
$pdf->SetFont("DejaVu","","11");
$pdf->Cell(40,6,"{$txt_jefe}",0,1,'L');

$pdf->Ln(25);
$pdf->Cell(100,6,"",0,0);
$pdf->Cell(50,3,"_______________________",0,1,"C");
$pdf->Cell(100,6,"",0,0);
$pdf->SetFont("DejaVu","","10");
$pdf->Cell(45,5,"Firma",0,1,"C");

for($n=0;$n<$num;$n++)
	{
			$ntemp=$n+1;
			$temp=("$arrayCHK[$n]");
			if($temp==='PSI')
			{	
				$widthColu=45;
				$pdf->AddPage();

				$pdf->SetFont("DejaVu","","10");
				$pdf->Cell(55,20,$pdf->Image('C:\xampp\htdocs\FSAv3\IMG\logo.png',16,8,35),0,0,'C');

				$pdf->Ln(10);
								//$pdf->Ln(15);
				//$pdf->Cell(0,10,"UNIDAD DE TECNOLOGIAS DE LA INFORMACION",0,0,'C');
				//$pdf->Ln(7);
				$pdf->SetFont("DejaVu","B",13);
				$pdf->Cell(0,6,"FORMATO DE SOLICITUD DE ACCESO A LA",0,1,"C");
				$pdf->Cell(0,8,"PLATAFORMA DE SERVICIOS INSTITUCIONALES (PSI)",0,0,"C");
				$pdf->SetFont("DejaVu","BU",13);
				$pdf->Ln(20);
				$pdf->GetX();
				$pdf->SetFont("DejaVu",'BU',14);
				//$pdf->SetXY(20,35);
				$pdf->Cell(190,6,"DATOS DEL USUARIO",1,1);
	

				$pdf->SetFont("DejaVu","B","11");
				$pdf->Cell($widthColu,6,"Apellido Paterno ",1,0,'L');
				$pdf->SetFont("DejaVu","","11");
				$pdf->Cell(190-$widthColu,6,"{$txt_ape_pat}",1,1,'L');

				$pdf->SetFont("DejaVu","B","11");
				$pdf->Cell($widthColu,6,"Apellido Materno ",1,0,'L');
				$pdf->SetFont("DejaVu","","11");
				$pdf->Cell(190-$widthColu,6,"{$txt_ape_mat}",1,1,'L');

				$pdf->SetFont("DejaVu","B","11");
				$pdf->Cell($widthColu,6,"Nombre",1,0,'L');
				$pdf->SetFont("DejaVu","","11");
				$pdf->Cell(190-$widthColu,6,"{$txt_nomb}",1,1,'L');

				$pdf->SetFont("DejaVu","B","11");
				$pdf->Cell($widthColu,6,"DNI",1,0,'L');
				$pdf->SetFont("DejaVu","","11");
				$pdf->Cell(190-$widthColu,6,"{$txt_DNI}",1,1,'L');

				$pdf->SetFont("DejaVu","B","11");
				$pdf->Cell($widthColu,6,"Correo Electronico",1,0,'L');
				$pdf->SetFont("DejaVu","","11");
				//$pdf->Cell(190-$widthColu,6,"{$txt_mail}",1,1,'L');

				$pdf->SetFont("DejaVu","B","11");
				$pdf->Cell($widthColu,6,"Cargo",1,0,'L');
				$pdf->SetFont("DejaVu","","11");
				$pdf->Cell(190-$widthColu,6,"{$cmb_carg}",1,1,'L');

				$pdf->Ln(5);
				//========================================================
				$pdf->SetFont("DejaVu",'BU',14);
				//$pdf->SetXY(20,35);
				$pdf->Cell(190,6,"DATOS DE LA UNIDAD ORGANIZACIONAL",1,1);
	

				$pdf->SetFont("DejaVu","B","11");
				$pdf->Cell($widthColu,6,"Unidad Organizacional ",1,0,'L');
				$pdf->SetFont("DejaVu","","11");
				$pdf->Cell(190-$widthColu,6,"{$txt_ape_pat}",1,1,'L');

				$pdf->SetFont("DejaVu","B","11");
				$pdf->Cell($widthColu,6,"Zona Registral",1,0,'L');
				$pdf->SetFont("DejaVu","","11");
				$pdf->Cell(190-$widthColu,6,"{$txt_ape_mat}",1,1,'L');

				$pdf->SetFont("DejaVu","B","11");
				$pdf->Cell($widthColu,6,"Oficina Registral",1,0,'L');
				$pdf->SetFont("DejaVu","","11");
				$pdf->Cell(190-$widthColu,6,"{$txt_nomb}",1,1,'L');

				$pdf->SetFont("DejaVu","B","11");
				$pdf->Cell($widthColu,6,"Zonal / Receptora",1,0,'L');
				$pdf->SetFont("DejaVu","","11");
				$pdf->Cell(190-$widthColu,6,"{$txt_DNI}",1,1,'L');

				$pdf->SetFont("DejaVu","B","11");
				$pdf->Cell($widthColu,6,"Anexo",1,0,'L');
				$pdf->SetFont("DejaVu","","11");
				//$pdf->Cell(190-$widthColu,6,"{$txt_mail}",1,1,'L');

				$pdf->Ln(5);
				//========================================================

				$pdf->SetFont("DejaVu",'BU',14);
				//$pdf->SetXY(20,35);
				$pdf->Cell(190,6,"DATOS DE LA UNIDAD ORGANIZACIONAL",1,1);
	

				$pdf->SetFont("DejaVu","B","11");
				$pdf->Cell($widthColu,6,"Unidad Organizacional ",1,0,'L');
				$pdf->SetFont("DejaVu","","11");
				$pdf->Cell(190-$widthColu,6,"{$txt_ape_pat}",1,1,'L');

				$pdf->SetFont("DejaVu","B","11");
				$pdf->Cell($widthColu,6,"Zona Registral",1,0,'L');
				$pdf->SetFont("DejaVu","","11");
				$pdf->Cell(190-$widthColu,6,"{$txt_ape_mat}",1,1,'L');

				$pdf->SetFont("DejaVu","B","11");
				$pdf->Cell($widthColu,6,"Oficina Registral",1,0,'L');
				$pdf->SetFont("DejaVu","","11");
				$pdf->Cell(190-$widthColu,6,"{$txt_nomb}",1,1,'L');

				$pdf->SetFont("DejaVu","B","11");
				$pdf->Cell($widthColu,6,"Zonal / Receptora",1,0,'L');
				$pdf->SetFont("DejaVu","","11");
				$pdf->Cell(190-$widthColu,6,"{$txt_DNI}",1,1,'L');

				$pdf->SetFont("DejaVu","B","11");
				$pdf->Cell($widthColu,6,"Anexo",1,0,'L');
				$pdf->SetFont("DejaVu","","11");
				//$pdf->Cell(190-$widthColu,6,"{$txt_mail}",1,1,'L');


				$pdf->SetFont("DejaVu","B","11");
				$pdf->Cell(18,6,"Oficina   :",0,0);
				$pdf->SetFont("DejaVu","","11");
				$pdf->Cell(47,6,"{$cmb_ofic}",0,0,'L');

				$pdf->SetFont("DejaVu","B","11");
				$pdf->Cell(19,6,"Unidad    :",0,0);
				$pdf->SetFont("DejaVu","","11");
				$pdf->Cell(56,6,"{$cmb_unid}",0,0,'L');

				$pdf->SetFont("DejaVu","B","11");
				$pdf->Cell(15,6,"Area  :",0,0);
				$pdf->SetFont("DejaVu","","11");
				$pdf->Cell(25,6,"{$cmb_area}",0,1,'L');

				$pdf->SetFont("DejaVu","B","11");
				$pdf->Cell(18,6,"Cargo     :",0,0);
				$pdf->SetFont("DejaVu","","11");
				$pdf->Cell(47,6,"{$cmb_carg}",0,0,'L');

				$pdf->SetFont("DejaVu","B","11");
				$pdf->Cell(19,6,"IP             :",0,0);
				$pdf->SetFont("DejaVu","","11");
				$pdf->Cell(56,6,"{$txt_IP}",0,1,'L');
			}
	}
$pdf->Output();
}
?>