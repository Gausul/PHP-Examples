# MergePDF
merge pdf by php fpdf library

`As expected it requires fpdf and fpdi both libraries:`

`FPDF: http://www.fpdf.org/en/download.php`
`FPDI: https://www.setasign.com/products/fpdi/downloads`

`//add both libraries`

`require('fpdf.php');`
`require('fpdi.php');`

`//add pdfs you wand marge`

`$files = ['doc1.pdf', 'doc2.pdf', 'doc3.pdf'];`

`$pdf = new FPDI();`

// iterate over array of files and merge
`foreach ($files as $file) {`
   ` $pdf->setSourceFile($file);`
   ` $tpl = $pdf->importPage(1, '/MediaBox');`
   ` $pdf->addPage();`
  `  $pdf->useTemplate($tpl);`
`}`

// output the pdf as a file
`$pdf->Output('F','merged.pdf');`
