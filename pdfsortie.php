<?php

$nom = $_POST['h_nom'];
$prenom = $_POST['h_prenom'];
$date_sortie = $_POST["h_date_sortie"];
$matricule = $_POST['h_matricule'];
$badge = $_POST['h_badge'];
$contrat = $_POST['h_contrat'];
$service = $_POST['h_service'];
$section_analytique = $_POST['h_section_analytique'];
$superieur = $_POST['h_superieur'];
$recup_pc = $_POST['h_recup_pc'];
$qui_reutil_pc = $_POST['h_qui_reutil_pc'];
$save_doc = $_POST['h_save_doc'];
$quel_doc = $_POST['h_quel_doc'];
$suppr_compte = $_POST['h_suppr_compte'];
$conserv_email = $_POST['h_conserv_email'];
$date_conserv_email = $_POST['h_date_conserv_email'];
$redirect_email = $_POST['h_redirect_email'];
$qui_redirect_email = $_POST['h_qui_redirect_email'];

require('fpdf.php'); 

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','BI',10);
$pdf->Cell(0,0,'FORMULAIRE DE SORTIE',0,1,'C');
$pdf->Cell(1,5,'',0,1);
$pdf->SetFont('Arial','U',10);
$pdf->Cell(2,5,'INFOS SUR LA PERSONNE',0,1);
$pdf->Cell(3,5,'',0,1);
$pdf->SetFont('Arial','',10);
$pdf->Cell(4,5,utf8_decode('Nom : '.$nom),0,1);
$pdf->Cell(5,5,utf8_decode('Prénom : '.$prenom),0,1);
$pdf->Cell(6,5,'Date de sortie : '.$date_sortie,0,1);
$pdf->Cell(7,5,'Matricule : '.$matricule,0,1);
$pdf->Cell(8,5,'Num Badge : '.$badge,0,1);
$pdf->Cell(9,5,utf8_decode('Type de contrat : '.$contrat),0,1);
$pdf->Cell(10,5,utf8_decode('Service : '.$service),0,1);
$pdf->Cell(11,5,utf8_decode('Section analytique : '.$section_analytique),0,1);
$pdf->Cell(12,5,utf8_decode('Supérieur hiérarchique : '.$superieur),0,1);
$pdf->Cell(13,5,'',0,1);
$pdf->SetFont('Arial','U',10);
$pdf->Cell(14,5,'INFORMATIQUE',0,1);
$pdf->Cell(15,5,'',0,1);
$pdf->SetFont('Arial','',10);
$pdf->Cell(16,5,utf8_decode('Ordinateur récupérable par le SI : '.$recup_pc.', repris par '.$qui_reutil_pc),0,1);
$pdf->Cell(17,5,utf8_decode('Documents à sauvegarder : '.$save_doc.', '.$quel_doc),0,1);
$pdf->Cell(18,5,utf8_decode('Suppression du compte : '.$suppr_compte),0,1);
$pdf->Cell(19,5,utf8_decode('Conservation boite Email : '.$conserv_email.', jusque '.$date_conserv_email),0,1);
$pdf->Cell(20,5,utf8_decode('Redirection Email : '.$redirect_email.', vers '.$qui_redirect_email),0,1);
$pdf->Output("D", "formulaire_".$nom."_".$prenom."_sortie.pdf");
?>