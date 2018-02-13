<?php
include 'excel_reader.php';     // include the class

// creates an object instance of the class, and read the excel file data
$excel = new PhpExcelReader;
$excel->read('test.xls');

// Excel file data is stored in $sheets property, an Array of worksheets
/*
The data is stored in 'cells' and the meta-data is stored in an array called 'cellsInfo'

Example (firt_sheet - index 0, second_sheet - index 1, ...):

$sheets[0]  -->  'cells'  -->  row --> column --> Interpreted value
         -->  'cellsInfo' --> row --> column --> 'type' (Can be 'date', 'number', or 'unknown')
                                            --> 'raw' (The raw data that Excel stores for that data cell)
*/

// this function creates and returns a HTML table with excel rows and columns data
// Parameter - array with excel worksheet data
function sheetData($sheet) {
  $re = '<table>';     // starts html table

  $x = 1;
  while($x <= $sheet['numRows']) {
    echo "<pre>";
    print_r($sheet);
    // $re .= "<tr>\n";
    // $y = 1;
    // while($y <= $sheet['numCols']) {
    //   $cell = isset($sheet['cells'][$x][$y]) ? $sheet['cells'][$x][$y] : '';
    //   $re .= " <td>$cell</td>\n";  
    //   $y++;
    // }  
    // $re .= "</tr>\n";
    $x++;
  }

  return $re .'</table>';     // ends and returns the html table
}


?>


