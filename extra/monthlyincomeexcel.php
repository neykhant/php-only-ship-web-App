<?php
    require_once "./excelreport/PHPExcel.php";
     $con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);
    
    $excelreport = PHPExcel_IOFactory::load("monthlyincome.xlsx");
        $excelreport->setActiveSheetIndex(0);
        
      
        $cellno = 6;
        $no = 1;
        $total = 0;
      
            $excelreport->getActiveSheet()->setCellValue("A" . $cellno, $CustomerID);
            $excelreport->getActiveSheet()->setCellValue("B" . $cellno, $CustomerName);
            $excelreport->getActiveSheet()->setCellValue("C" . $cellno, $Password);
            $excelreport->getActiveSheet()->setCellValue("D" . $cellno, $PhNo);
			 $excelreport->getActiveSheet()->setCellValue("D" . $cellno, $Email);
           
            $cellno++;
            $CustomerID++;
        
      
        
        $styleArray = array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_THIN
                ),
            ),
        );
        $excelreport->getActiveSheet()->getStyle("A6:D" . --$cellno)->applyFromArray($styleArray);
        
        $cellno++;
        $excelreport->getActiveSheet()->setCellValue("C" . $cellno, "Total Amount : ");
        $excelreport->getActiveSheet()->getStyle("C" . $cellno)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER)
                                                             ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
        $excelreport->getActiveSheet()->setCellValue("D" . $cellno, $total);
        
        $excelreport->getActiveSheet()->getStyle("C" . $cellno . ":D" . $cellno)->getFont()->setBold(true);
        $excelreport->getActiveSheet()->getStyle("C" . $cellno . ":D" . $cellno)->applyFromArray($styleArray);
        
        $excelreport->getActiveSheet()->setTitle('Monthly_Income_Report');

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        $fname = "Monthly_Income_Report_" . $textmonth . "_" . $year . ".xlsx";
        header("Content-Disposition: attachment;filename=$fname");
        header('Cache-Control: max-age=0');

        $reportwrite = PHPExcel_IOFactory::createWriter($excelreport, 'Excel2007');
        $reportwrite->save('php://output');
        exit();