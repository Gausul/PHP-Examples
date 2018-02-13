# ReadExcelByPHP

[![Join the chat at https://gitter.im/ReadExcelByPHP/Lobby](https://badges.gitter.im/ReadExcelByPHP/Lobby.svg)](https://gitter.im/ReadExcelByPHP/Lobby?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

`Read Excel File PHP` 

`<?php`

`include 'excel_reader.php';  `

`// include the class`

`// creates an object instance of the class, and read the excel file data`

`$excel = new PhpExcelReader;`

`$excel->read('test.xls');`

`// Excel file data is stored in $sheets property, an Array of worksheets`

`/*`

`The data is stored in 'cells' and the meta-data is stored in an array called 'cellsInfo'`


`Example (firt_sheet - index 0, second_sheet - index 1, ...):`


`$sheets[0]  -->  'cells'  -->  row --> column --> Interpreted value`
       `  -->  'cellsInfo' --> row --> column --> 'type' (Can be 'date', 'number', or 'unknown')`
                                        `    --> 'raw' (The raw data that Excel stores for that data cell)`

`*/`

`// this function creates and returns a HTML table with excel rows and columns data`

`// Parameter - array with excel worksheet data`

`function sheetData($sheet) {`

 ` $re = '<table>';     // starts html table`


 ` $x = 1;`

 ` while($x <= $sheet['numRows']) {`

  `  echo "<pre>";`

   ` print_r($sheet);`

   ` $x++;`

  `}`

 ` return $re .'</table>';  `

 `// ends and returns the html table`

`}`

?>

`-------------------------------------------- any issue with this code-----------------please try this---------`


 ` include 'excel_reader.php';`

`// // include the class`

`// // creates an object instance of the class, and read the excel file data`

 `$excel = new PhpExcelReader;`

` $excel->read('test.xls');`


`$ksheet=$excel->sheets;`


`foreach ($ksheet as $sheet) {`
`echo "<pre>";`
 
`print_r($sheet['cells']);`

`}`
`return $re .'</table>';`


