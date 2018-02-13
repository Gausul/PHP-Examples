<?php
// Include mpdf library
include("mpdf60/mpdf.php");
$mpdf = new mPDF(); 

$mpdf->SetDisplayMode('fullpage');
$mpdf->defaultfooterfontsize = 10;  // in pts
$mpdf->defaultfooterfontstyle = B;  // blank, B, I, or BI
$mpdf->defaultfooterline = 1;
$mpdf->defaultfootercolor = '#ff9918';
// footer text
$mpdf->SetFooter('Mohd Gausul Abdeen'.'| Page {PAGENO} of 7 | '.'Powered by test'); 
//test1.php html code file 
$html = file_get_contents('test1.php');
$mpdf->WriteHTML($html);
$content = $mpdf->Output('', 'S');

$file_name="report.pdf";

$content  =$mpdf->Output($file_name,'F');

print_r($file_name);

?>
