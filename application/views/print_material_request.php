<?php


class MYPDF extends TCPDF {

    // public $req_name;

    // public function __construct() {
    //   $req_name = $row->req_name;
    // }
    
    //Page header
    public function Header() {
        // Logo
        $image_file = K_PATH_IMAGES.'logosanbe.jpg';
        $this->Image($image_file, 15, 10, 30, '', 'JPG', '', 'T', true, 500, '', false, false, 0, false, false, true);
        // Set font
        $this->SetFont('helvetica', 'B', 14);
        // MultiCell($w, $h, $txt, $border=0, $align='J', $fill=0, $ln=1, $x='', $y='', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0)
        $this->MultiCell(0, 15, 'Material Request', 0, 'C', 0, 1, 0, '', true);
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
        $this->MultiCell(0, 0, 'Requestor', 0, 'L', 0, 1, '35', '', true);
        $this->MultiCell(0, 0, 'Warehouse Supervisor', 0, 'L', 0, 1, '85', '257', true);
        $this->MultiCell(0, 0, 'Warehouse Manager', 0, 'L', 0, 1, '148', '257', true);

         // posisi 15 mm dari bawah
        $this->SetY(-17);
        // Set font
        $this->SetFont('helvetica', '', 9);
        $this->MultiCell(0, 0, '(                            )', 0, 'L', 0, 1, '29', '', true);
        $this->MultiCell(0, 0, '(                                  )', 0, 'L', 0, 1, '85', '280', true);
        $this->MultiCell(0, 0, '(                                  )', 0, 'L', 0, 1, '148', '280', true);

        $this->SetY(-10);
        // Set font
        $this->SetFont('helvetica', '', 8);
        // footer
        $this->MultiCell(0, 0, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, 'L', 0, 1, '', '', true);
        $this->MultiCell(0, 0, 'Distribution :  1. White : Warehouse      2. Red : File ', 0, 'L', 0, 1, '35', '287', true);
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
$pdf->SetTitle('Material Request');
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
$html = '<table>
                                        <tr>
                                            <th width="150px">Bussines Unit</th>
                                            <th width="180px">: Sanbe Central Warehouse</th>
                                            <th width="70px"></th>
                                            <th>Departemen</th>
                                            <th>: '.$row->req_dept.'</th>
                                        </tr>
                                        <tr>
                                            <th>Material Request No</th>
                                            <th>: '.$row->no_mr.'</th>
                                            <th width="70px"></th>
                                            <th>Requestor Person</th>
                                            <th>: '.$row->req_name.'</th>
                                        </tr>
                                        <tr>
                                            <th>Material Request Date</th>
                                            <th>: '.$row->req_date.'</th>
                                            <th width="70px"></th>
                                            <th>Target Date</th>
                                            <th>: '.$row->req_date.'</th>
                                        </tr>
                                        <tr>
                                            <th>Material Request Status</th>
                                            <th>: '.$row->mr_status.'</th>
                                            <th width="70px"></th>
                                            <th>Order to</th>
                                            <th>: W38</th>
                                        </tr>
    </table><br><br><br>';

$html .= '<table border="1px">
    <tr>
                                        <th style="text-align: center;">No MR Detail</th>
                                            <th style="text-align: center;">Item Detail Code</th>
                                            <th style="text-align: center;">Item Detail Name</th>
                                            <th style="text-align: center;">Qty</th>
                                        </tr>';
                    foreach($result as $row){
                        $html .= '<tr>
                                            <td style="text-align: center;">'.$row->no_mr_detail.'</td>
                                            <td style="text-align: center;">'.$row->item_detail_code.'</td>
                                            <td style="text-align: center;">'.$row->item_detail_name.'</td>
                                            <td style="text-align: center;">'.$row->qty.'</td>
                                    </tr>';
                                }

        $html .= '</table>';

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