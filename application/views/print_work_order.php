<?php


class MYPDF extends TCPDF {
    //Page header
    public function Header() {
        // Logo
        $image_file = K_PATH_IMAGES.'logosanbe.jpg';
        $this->Image($image_file, 15, 10, 30, '', 'JPG', '', 'T', true, 500, '', false, false, 0, false, false, true);
        // Set font
        $this->SetFont('helvetica', 'B', 14);
        // MultiCell($w, $h, $txt, $border=0, $align='J', $fill=0, $ln=1, $x='', $y='', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0)
        $this->MultiCell(0, 15, 'Work Oder', 0, 'C', 0, 1, 10, '', true);
        $this->SetFont('helvetica', 'B', 9);
        $this->MultiCell(0, 15, 'No', 0, 'L', 0, 1, 150, 6, true);
        $this->MultiCell(0, 15, 'Revision', 0, 'L', 0, 1, 150, 9, true);
        $this->MultiCell(0, 15, 'Effective', 0, 'L', 0, 1, 150, 12, true);
        $this->MultiCell(0, 15, 'Page', 0, 'L', 0, 1, 150, 15, true);
        $this->MultiCell(0, 15, ':', 0, 'L', 0, 1, 165, 6, true);
        $this->MultiCell(0, 15, ':', 0, 'L', 0, 1, 165, 9, true);
        $this->MultiCell(0, 15, ':', 0, 'L', 0, 1, 165, 12, true);
        $this->MultiCell(0, 15, ': '.$this->getAliasNumPage().' of '.$this->getAliasNbPages(), 0, 'L', 0, 1, 165, 15, true);

        //add line
        $style3 = array('width' => 0.5, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0));
        $this->Line(15, 5, 195, 5, $style3); //kanan-kiri, atas bawah kiri, panjang garis, atas bawah kanan

        $style2 = array('width' => 0.5, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0));
        $this->Line(15, 20, 195, 20  , $style2); //kanan-kiri, atas bawah kiri, panjang garis, atas bawah kanan

        
        
    }
    // Page footer
    public function Footer() {
        // posisi 15 mm dari bawah
        $this->SetY(-40);
        // Set font
        $this->SetFont('helvetica', '', 9);
        $this->MultiCell(0, 0, 'Requestor', 0, 'L', 0, 1, '24', '', true);
        $this->MultiCell(0, 0, 'Warehouse Supervisor', 0, 'L', 0, 1, '58', '257', true);
        $this->MultiCell(0, 0, 'Technician / Engineer', 0, 'L', 0, 1, '108', '257', true);
        $this->MultiCell(0, 0, 'Technician / Engineer', 0, 'L', 0, 1, '158', '257', true);

         // posisi 15 mm dari bawah
        $this->SetY(-17);
        // Set font
        $this->SetFont('helvetica', '', 9);
        $this->MultiCell(0, 0, '(                            )', 0, 'L', 0, 1, '18', '', true);
        $this->MultiCell(0, 0, '(                                  )', 0, 'L', 0, 1, '58', '280', true);
        $this->MultiCell(0, 0, '(                                  )', 0, 'L', 0, 1, '108', '280', true);
        $this->MultiCell(0, 0, '(                                  )', 0, 'L', 0, 1, '158', '280', true);

        // posisi 15 mm dari bawah
        $this->SetY(-10);
        // Set font
        $this->SetFont('helvetica', '', 8);
        // footer
        $this->MultiCell(0, 0, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, 'L', 0, 1, '', '', true);
        $this->MultiCell(0, 0, 'Distribution :  1. White : Engineering      2. Red : Requestor ', 0, 'L', 0, 1, '35', '287', true);
        $tDate=date("j F Y");
        $this->MultiCell(0, 0, 'Printed On '.$tDate, 0, 'L', 0, 1, '158', '287', true);
        $style4 = array('width' => 0.2, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0));
        $this->Line(15, 286, 195, 286  , $style4); //kanan-kiri, atas bawah kiri, panjang garis, atas bawah kanan
        
    }
}

// buat pdf baru
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set informasi dokumen
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Sanbe Farma');
$pdf->SetTitle('Work Order');
$pdf->SetSubject('Cetak');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set header
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING, array(0,64,128));
$pdf->setFooterData(array(0,64,0), array(0,64,128));

// set header dan footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set bahasa
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set default font
$pdf->setFontSubsetting(true);

// Set font
$pdf->SetFont('dejavusans', '', 9, '', true);

// Add a page
$pdf->AddPage();

// Set some content to print
$html = '<table border="1px">
                                        <tr>
                                            <th>
                                                <table>
                                                    <tr>
                                                        <th width="150px"><br><br>Work Order No</th>
                                                        <th width="180px"><br><br>: '.$wo->no_wo.'</th>
                                                        <th width="50px"><br><br></th>
                                                        <th><br><br>Received by</th>
                                                        <th><br><br>: '.$wo->ack_name.'</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Work Order Priorty</th>
                                                        <th>: '.$wor->wor_priority.'</th>
                                                        <th width="50px"></th>
                                                        <th>Received Date</th>
                                                        <th>: </th>
                                                    </tr>
                                                    <tr>
                                                        <th>Work Order Trade</th>
                                                        <th>: '.$wor->wor_trade.'</th>
                                                        <th width="50px"></th>
                                                        <th>Requestor Name</th>
                                                        <th>: '.$wor->req_name.'</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Work Order Type</th>
                                                        <th>: </th>
                                                        <th width="50px"></th>
                                                        <th>Requestor Dept</th>
                                                        <th>: '.$wor->req_dept.'<br></th>
                                                    </tr>
                                                </table>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                <table>
                                                    <tr>
                                                        <th width="150px"><br><br>Assigned To</th>
                                                        <th width="180px"><br><br>: '.$wo->app_name.'</th>
                                                        <th width="50px"><br><br></th>
                                                        <th><br><br>Machine No</th>
                                                        <th><br><br>: </th>
                                                    </tr>
                                                    <tr>
                                                        <th>Required Date</th>
                                                        <th>: '.$wor->wor_date.'</th>
                                                        <th width="50px"></th>
                                                        <th>Machine Name</th>
                                                        <th>: </th>
                                                    </tr>
                                                    <tr>
                                                        <th>Target Start Date</th>
                                                        <th>: '.$wo->start_date.'</th>
                                                        <th width="50px"></th>
                                                        <th>Loc / Room No</th>
                                                        <th>: </th>
                                                    </tr>
                                                    <tr>
                                                        <th>Target End Date</th>
                                                        <th>: '.$wo->finish_date.'</th>
                                                        <th width="50px"></th>
                                                        <th>Loc / Room Name</th>
                                                        <th>: <br></th>
                                                    </tr>
                                                </table>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                <table>
                                                    <tr>
                                                        <th width="150px"><br><br>Problem Description</th>
                                                        <th width="180px"><br><br>: '.$wor->wor_desc.'<br></th>
                                                    </tr>
                                                </table>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                <table>
                                                    <tr>
                                                        <th width="150px"><br><br>Couse Description</th>
                                                        <th width="180px"><br><br>: '.$wor->couse_desc.'<br></th>
                                                    </tr>
                                                </table>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                <table>
                                                    <tr>
                                                        <th width="150px"><br><br>Action Taken</th>
                                                        <th width="180px"><br><br>: '.$wo->action.'<br></th>
                                                    </tr>
                                                </table>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                <table>
                                                    <tr>
                                                        <th width="150px"><br><br>Prevention Taken</th>
                                                        <th width="180px"><br><br>: '.$wo->prevention.'<br></th>
                                                    </tr>
                                                </table>
                                            </th>
                                        </tr>
    </table><br><br><br>';

//Print text using writeHTMLCell()
$pdf->writeHTML($html,true,0,true,0);

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
//ob_clean();
$pdf->Output('example_001.pdf', 'I');
//end_ob_clean();
//============================================================+
// END OF FILE
//============================================================+