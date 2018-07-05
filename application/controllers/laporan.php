<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    var $folder =   "laporan";
    var $tables =   "data_mahasiswa";
    var $title  =   "Laporan";
    
    function __construct() {
        parent::__construct();
    }
    
    
    function index()
    {
        $data['title']=  $this->title;
        $data['beasiswa']=  $this->mcrud->getAll('beasiswa');
		$this->template->load('index', $this->folder.'/view',$data);
    }
    public function export(){
        $jenisB= $this->input->post('jenis_beasiswa');
            if ($jenisB == 'PPA' || $jenisB == 'BBP-PPA') {
                if ($jenisB == 'PPA') {
                $kode = 1;
                $judul = 'Beasiswa PPA';
                $order=' ORDER BY mahasiswa_ipk DESC,mahasiswa_sks DESC,mahasiswa_n_prestasi DESC,mahasiswa_penghasilan ASC';
            }else if($jenisB == 'PPA'){
                $kode = 2;
                $judul = 'Beasiswa BBP-PPA';
                $order= ' ORDER BY mahasiswa_penghasilan ASC,mahasiswa_n_prestasi DESC,mahasiswa_ipk DESC,mahasiswa_sks DESC';
            }
            $q='SELECT * FROM `data_mahasiswa` WHERE `mahasiswa_beasiswa` = '.$kode;
            $q.=$order;
        }
        else{
             $q='SELECT * FROM `data_mahasiswa`';
        }
        
        $nilai=$this->mcrud->queryBiasa($q);

        $heading=array('NPM','KDPTI','JENIS_BEASISWA','COUNTER','NAMA_MHS','JK','KODE_PRODI','ID_JENJANG','SMT','IPK','KODE_PEKERJAAN','JML_TANGGUNGAN','PENGHASILAN','PRESTASI','MULAI_BULAN','SELESAI_BULAN','TAHUN','KETERANGAN','ALAMAT','TELEPON','TAHUN_MASUK','NO_REKENING_MAHASISWA','NAMA_BANK','STATUS');

        $this->load->library('Excel/PHPExcel');
    //Create a new Object
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->getActiveSheet()->setTitle('Mahasiswa '.$jenisB);
    //Loop Heading
        $rowNumberH = 2;
        $colH = 'A';
        foreach($heading as $h){
            $objPHPExcel->getActiveSheet()->setCellValue($colH.$rowNumberH,$h);
            $colH++;    
        }
    //Loop Result
        $totn=$nilai->num_rows();
        $maxrow=$totn+1;
        $nil=$nilai->result();
        $row = 3;
        $no = 1;
        foreach($nil as $n){
        //$numnil = (float) str_replace(',','.',$n->nilai);
$objPHPExcel->getActiveSheet()->setCellValue('A'.$row,$n->mahasiswa_npm);
$objPHPExcel->getActiveSheet()->setCellValueExplicit('B'.$row,$n->mahasiswa_kdpti,PHPExcel_Cell_DataType::TYPE_NUMERIC);
$objPHPExcel->getActiveSheet()->setCellValueExplicit('C'.$row,$n->mahasiswa_beasiswa,PHPExcel_Cell_DataType::TYPE_NUMERIC);
$objPHPExcel->getActiveSheet()->setCellValueExplicit('D'.$row,$no,PHPExcel_Cell_DataType::TYPE_NUMERIC);
$objPHPExcel->getActiveSheet()->setCellValue('E'.$row,$n->mahasiswa_nama);
$objPHPExcel->getActiveSheet()->setCellValueExplicit('F'.$row,$n->mahasiswa_jk,PHPExcel_Cell_DataType::TYPE_NUMERIC);
$objPHPExcel->getActiveSheet()->setCellValueExplicit('G'.$row,$n->mahasiswa_kode_prodi,PHPExcel_Cell_DataType::TYPE_NUMERIC);
$objPHPExcel->getActiveSheet()->setCellValueExplicit('H'.$row,$n->mahasiswa_jenjang,PHPExcel_Cell_DataType::TYPE_NUMERIC);
$objPHPExcel->getActiveSheet()->setCellValueExplicit('I'.$row,$n->mahasiswa_smt,PHPExcel_Cell_DataType::TYPE_NUMERIC);
$objPHPExcel->getActiveSheet()->getStyle('J'.$row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1);
$objPHPExcel->getActiveSheet()->setCellValueExplicit('J'.$row,$n->mahasiswa_ipk,PHPExcel_Cell_DataType::TYPE_NUMERIC);
$objPHPExcel->getActiveSheet()->setCellValueExplicit('K'.$row,$n->mahasiswa_pekerjaan,PHPExcel_Cell_DataType::TYPE_NUMERIC);
$objPHPExcel->getActiveSheet()->setCellValueExplicit('L'.$row,$n->mahasiswa_jml_tanggungan,PHPExcel_Cell_DataType::TYPE_NUMERIC);
$objPHPExcel->getActiveSheet()->setCellValueExplicit('M'.$row,$n->mahasiswa_penghasilan,PHPExcel_Cell_DataType::TYPE_NUMERIC);
$objPHPExcel->getActiveSheet()->setCellValue('N'.$row,$n->mahasiswa_prestasi);
$objPHPExcel->getActiveSheet()->setCellValue('O'.$row,$n->mahasiswa_mulai_bulan);
$objPHPExcel->getActiveSheet()->getStyle('O'.$row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_YYYYMMDDSLASH);
$objPHPExcel->getActiveSheet()->setCellValue('P'.$row,$n->mahasiswa_selesai_bulan);
$objPHPExcel->getActiveSheet()->getStyle('P'.$row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_YYYYMMDDSLASH);
$objPHPExcel->getActiveSheet()->setCellValueExplicit('Q'.$row,$n->mahasiswa_tahun,PHPExcel_Cell_DataType::TYPE_NUMERIC);
$objPHPExcel->getActiveSheet()->setCellValue('R'.$row,$n->mahasiswa_keterangan);
$objPHPExcel->getActiveSheet()->setCellValue('S'.$row,$n->mahasiswa_alamat);
$objPHPExcel->getActiveSheet()->setCellValueExplicit('T'.$row,$n->mahasiswa_telepon,PHPExcel_Cell_DataType::TYPE_NUMERIC);
$objPHPExcel->getActiveSheet()->setCellValueExplicit('U'.$row,$n->mahasiswa_tahun_masuk,PHPExcel_Cell_DataType::TYPE_NUMERIC);
$objPHPExcel->getActiveSheet()->setCellValue('V'.$row,$n->mahasiswa_no_rekening);
$objPHPExcel->getActiveSheet()->setCellValue('W'.$row,$n->mahasiswa_nama_bank);
$objPHPExcel->getActiveSheet()->setCellValueExplicit('X'.$row,$n->mahasiswa_status);
            $row++;
            $no++;
        }
    //Freeze pane
        $objPHPExcel->getActiveSheet()->freezePane('A2');
    //Cell Style
        /*$styleArray = array(
            'borders' => array(
                'top' => array(
                    'doublebottom' => array(
                        'style' => PHPExcel_Style_Border::BORDER_THIN
                        )
                    )
                )
            );
        $objPHPExcel->getActiveSheet()->getStyle('A2:F2')->applyFromArray($styleArray);*/
    //Save as an Excel BIFF (xls) file
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel5');

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename=""Nilai-'.date('Y-m-d H-i-s').'.xls"');
        header('Cache-Control: max-age=0');

        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        header("Cache-Control: no-store, no-cache, must-revalidate");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");

        $objWriter->save('php://output');
        exit();
    }    


}

?>