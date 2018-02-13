#html to PDF

Convert php page to a PDF File

use MPDF 

#how to use 
1: Downloade zip file <br/>
2: unzip zip file in htdocs folder under xampp <br/>
3: run test.php file in browser <br/>
4: check code folder you get report.pdf <br/>




# test.php file 

// Include mpdf library

`include("mpdf60/mpdf.php");`

`$mpdf = new mPDF();`

`$mpdf->SetDisplayMode('fullpage');`

`$mpdf->defaultfooterfontsize = 10;  // in pts`

`$mpdf->defaultfooterfontstyle = B;  // blank, B, I, or BI`

`$mpdf->defaultfooterline = 1;`

`$mpdf->defaultfootercolor = '#ff9918';`

`// footer text`
`$mpdf->SetFooter('Mohd Gausul Abdeen'.'| Page {PAGENO} of 7 | '.'Powered by test'); `

`//test1.php html code file `
`$html = file_get_contents('test1.php');`

`$mpdf->WriteHTML($html);`

`$content = $mpdf->Output('', 'S');`

`$file_name="report.pdf";`

`$content  =$mpdf->Output($file_name,'F');`

`print_r($file_name);`
`


# html Code File:

<html>
<body>
<table style="width:100%">
  <tr>
    <td>Jill</td>
    <td>Smith</td>		
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>		
    <td>94</td>
  </tr>
  <tr>
    <td>John</td>
    <td>Doe</td>		
    <td>80</td>
  </tr>
</table>

</body>
</html>

