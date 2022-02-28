<?php
	require_once ("Classes/PHPExcel.php");
	$path = "mattix.xlsx";
	$reader = PHPExcel_IOFactory::createReaderForFile($path);
	$excel_obj = $excelReader->load($path);
	// $worksheet = $excel_obj->getActiveSheet();
	$worksheet = $excel_obj->getSheet('0');

	echo $worksheet->getCell('A1')->getValue();

	// require __DIR__ . '/vendor/autoload.php';
	// $reader = new \PhpSpreadsheet\src\PhpSpreadsheet\Reader\Xlsx();
	// $spreadsheet = $reader->load("mattix.xlsx");
	// $worksheet = $spreadsheet->getSheet('0');
	// echo $worksheet->getCell('A1')->getValue();
?>