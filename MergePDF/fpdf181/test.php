<?php

require('fpdf.php');
 require('fpdi.php');

$files = ['Atul111resume.pdf', 'Atul319resume.pdf'];

$pdf = new FPDI();

// iterate over array of files and merge
foreach ($files as $file) {
    $pdf->setSourceFile($file);
    $tpl = $pdf->importPage(1, '/MediaBox');
    $pdf->addPage();
    $pdf->useTemplate($tpl);
}

// output the pdf as a file (http://www.fpdf.org/en/doc/output.htm)
$pdf->Output('F','merged.pdf');
echo "string";

?>