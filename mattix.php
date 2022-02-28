<?php
require __DIR__ . '/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;

$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
$spreadsheet = $reader->load("mattix.xlsx");
$worksheet = $spreadsheet->getSheet('0');
echo $worksheet->getCell('A1')->getValue();