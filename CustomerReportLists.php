<?php
    require("C:/xampp/htdocs/ChueChueNge/ExcelReport/PHPExcel.php");
	$con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);
 $excelreport = new PHPExcel();
 $excelreport = PHPExcel_IOFactory::load('C:/xampp/htdocs/ChueChueNge/Report/CustomerReportLists.xlsx');

 $query = "select * from Customer";
    $result = mysql_query($query,$con);
    $row= mysql_fetch_array($result);
     $excelreport = PHPExcel_IOFactory::load("CustomerReportLists.xlsx");
        $excelreport->setActiveSheetIndex(0);
        
      
      
        $cellno = 3;
        $no = 1;
		
            $excelreport->getActiveSheet()->setCellValue("A" . $cellno, $row1[CustomerID]);
			$excelreport->getActiveSheet()->setCellValue("A" . $cellno, $row1[CustomerName]);
			$excelreport->getActiveSheet()->setCellValue("A" . $cellno, $row1[Password]);
			$excelreport->getActiveSheet()->setCellValue("A" . $cellno, $row1[PhNo]);
			$excelreport->getActiveSheet()->setCellValue("A" . $cellno, $row1[Email]);
            
            $cellno++;
            $no++;
        
        
        $styleArray = array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_THIN
                ),
            ),
        );
        $excelreport->getActiveSheet()->getStyle("A3:E" . --$cellno)->applyFromArray($styleArray);
        
        $cellno++;
        
                
        $excelreport->getActiveSheet()->setTitle('CustomerReportLists');

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        $fname = "CustomerReportLists.xlsx";
        header("Content-Disposition: attachment;filename=$fname");
        header('Cache-Control: max-age=0');

        $reportwrite = PHPExcel_IOFactory::createWriter($excelreport, 'Excel2007');
        $reportwrite->save('php://output');
        exit();