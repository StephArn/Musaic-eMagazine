<?php
//functie care exporta in excel continutul unui tabel din bd
require_once "vendor/autoload.php";
require_once "config.php";

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
 
$spreadsheet = new Spreadsheet();
$Excel_writer = new Xlsx($spreadsheet);
 
$spreadsheet->setActiveSheetIndex(0);
$activeSheet = $spreadsheet->getActiveSheet();
 
$activeSheet->setCellValue('A1', 'ID');
$activeSheet->setCellValue('B1', 'Username');
$activeSheet->setCellValue('C1', 'Password');
 
$query = $link->query("SELECT * FROM `user`");
 
if($query->num_rows > 0) {
    $i = 2;
    while($row = $query->fetch_assoc()) {
        $activeSheet->setCellValue('A'.$i , $row['user_id']);
        $activeSheet->setCellValue('B'.$i , $row['username']);
        $activeSheet->setCellValue('C'.$i , $row['password']);
        $i++;
    }
}
 
$filename = 'user.xlsx';
 
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename='. $filename);
header('Cache-Control: max-age=0');
$Excel_writer->save('php://output');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
</html>
