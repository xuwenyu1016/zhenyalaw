<?php

namespace framework\ext;
require_once dirname(dirname(__FILE__)) . '/ext/PHPExcel/PHPExcel.php';
require_once dirname(dirname(__FILE__)) . '/ext/PHPExcel/PHPExcel/IOFactory.php';

/**
 * Excel控制器
 * @package framework\ext
 */
class Excel
{
    /**
     * 导出Excel
     * @param string $expTitle 文件名称
     * @param array $expCellName 表头
     * @param array $expTableData 数据
     * @param array $mergeCells 合并单元格
     * @author 徐健 <908634674@qq.com>
     */
    public function export($expTitle = '', $expCellName = array(), $expTableData = array(), $mergeCells = array())
    {
        if($expTitle == ''){
            return false;
        }
        if(empty($expCellName)){
            echo 1;
            return false;
        }

        $file_type = 'xls';
        if (strpos($expTitle, '.')) {
            $file_name = explode('.', $expTitle);
            if (strtolower(end($file_name)) != 'xls' && strtolower(end($file_name)) != 'xlsx') {
                $file_name = $expTitle.'.xls';
            } else {
                $file_type = end($file_name);
                $file_name = $expTitle;
            }
        } else {
            $file_name = $expTitle.'.xls';
        }

        $file_type = strtolower($file_type) == 'xls' ? 'Excel5' : 'Excel2007';

        if (ob_get_length()) ob_end_clean();

        $fileName = $file_name; //or $xlsTitle 文件名称可根据自己情况设定
        $cellNum  = count($expCellName);
        $dataNum  = count($expTableData);

        $objPHPExcel = new \PHPExcel();
        $cellName = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','AA','AB','AC','AD','AE','AF','AG','AH','AI','AJ','AK','AL','AM','AN','AO','AP','AQ','AR','AS','AT','AU','AV','AW','AX','AY','AZ','BA','BB','BC','BD','BE','BF','BG','BH','BI','BJ','BK','BL','BM','BN','BO','BP','BQ','BR','BS','BT','BU','BV','BW','BX','BY','BZ','CA','CB','CC','CD','CE','CF','CG','CH','CI','CJ','CK','CL','CM','CN','CO','CP','CQ','CR','CS','CT','CU','CV','CW','CX','CY','CZ','DA','DB','DC','DD','DE','DF','DG','DH','DI','DJ','DK','DL','DM','DN','DO','DP','DQ','DR','DS','DT','DU','DV','DW','DX','DY','DZ','EA','EB','EC','ED','EE','EF','EG','EH','EI','EJ','EK','EL','EM','EN','EO','EP','EQ','ER','ES','ET','EU','EV','EW','EX','EY','EZ','FA','FB','FC','FD','FE','FF','FG','FH','FI','FJ','FK','FL','FM','FN','FO','FP','FQ','FR','FS','FT','FU','FV','FW','FX','FY','FZ','GA','GB','GC','GD','GE','GF','GG','GH','GI','GJ','GK','GL','GM','GN','GO','GP','GQ','GR','GS','GT','GU','GV','GW','GX','GY','GZ','HA','HB','HC','HD','HE','HF','HG','HH','HI','HJ','HK','HL','HM','HN','HO','HP','HQ','HR','HS','HT','HU','HV','HW','HX','HY','HZ'];
        //合并单元格
        if (!empty($mergeCells)) {
            foreach ($mergeCells as $mergeCell) {
                $objPHPExcel->getActiveSheet()->mergeCells($mergeCell);
            }
        }

        $objSheet = $objPHPExcel->getActiveSheet();

        for($i=0;$i<$cellNum;$i++){
            $objSheet->setCellValue($cellName[$i].'1', $expCellName[$i][2]);
            //根据内容设置单元格宽度
            $cellWidth = $expCellName[$i][1] == 'auto' ? strlen($expCellName[$i][2]) : $expCellName[$i][1];
            $objSheet->getColumnDimension($cellName[$i])->setWidth($cellWidth);
            // $objPHPExcel->getActiveSheet(0)->getColumnDimension($cellName[$i])->setWidth($expCellName[$i][1]);
            $objSheet->getStyle($cellName[$i])->getNumberFormat()->setFormatCode(\PHPExcel_Style_NumberFormat::FORMAT_TEXT);
//            if(isset($expCellName[$i][3])) {
//                switch ($expCellName[$i][3]) {
//                    case 'FORMAT_NUMBER':
//                        $objSheet->getStyle($cellName[$i])->getNumberFormat()->setFormatCode(\PHPExcel_Style_NumberFormat::FORMAT_NUMBER);
//                        break;
//                    case 'FORMAT_TEXT':
//                        $objSheet->getStyle($cellName[$i])->getNumberFormat()->setFormatCode(\PHPExcel_Style_NumberFormat::FORMAT_TEXT);
//                        break;
//                }
//            }
        }

        // Miscellaneous glyphs, UTF-8
        for($i=0;$i<$dataNum;$i++){
            for($j=0;$j<$cellNum;$j++){
                if (isset($expTableData[$i][$expCellName[$j][0]])) {
                    $objSheet->setCellValueExplicit($cellName[$j].($i+2), $expTableData[$i][$expCellName[$j][0]], \PHPExcel_Cell_DataType::TYPE_STRING);
                }
//                if (isset($expCellName[$i][3]) && $expCellName[$i][3] == 'FORMAT_TEXT') {
//
//                } else {
//                    $objSheet->setCellValue($cellName[$j].($i+2), $expTableData[$i][$expCellName[$j][0]]);
//                }
            }
        }

        //下载
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control:must-revalidate, post-check=0, pre-check=0");
        header("Content-Type:application/force-download");
        header("Content-Type:application/vnd.ms-execl");
        header("Content-Type:application/octet-stream");
        header("Content-Type:application/download");;
        header('Content-Disposition:attachment;filename='.$fileName);
        header("Content-Transfer-Encoding:binary");
        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, $file_type);
        $objWriter->save('php://output');
        exit();
    }

}