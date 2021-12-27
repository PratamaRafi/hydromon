<?php
  require("connection.php"); // memanggil file koneksi.php untuk koneksi ke database
$conn = new mysqli('localhost', 'id15860656_dbhydromon', 'R@silwa150800');  
mysqli_select_db($conn, 'id15860656_hydromon');  
// $sql = "SELECT `userid`,`first_name`,`last_name` FROM `employee`";  
$sql = "SELECT `id`,`debit`,`waktu` FROM `ESP01`";
$setRec = mysqli_query($conn, $sql);  
$columnHeader = '';  
$columnHeader = "Id" . "\t" . "Debit(ml/s)" . "\t" . "Waktu" . "\t";  
$setData = '';  
  while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=Data_Hidrogen.xlsx");  
header("Pragma: no-cache");  
header("Expires: 0");  

  echo ucwords($columnHeader) . "\n" . $setData . "\n";  
 ?> 