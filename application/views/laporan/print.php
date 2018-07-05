<?php
$base=base_url();

include $base."assets/php-excel/Excel.class.php";


$excel = new Excel();
#Send Header
$excel->setHeader('Rekap Data Mahasiswa PPA.xls');
$excel->BOF();

#header tabel
$excel->writeLabel(0, 0, "NPM");
$excel->writeLabel(0, 1, "KDPTI");
$excel->writeLabel(0, 2, "JENIS_BEASISWA");
$excel->writeLabel(0, 3, "COUNTER");
$excel->writeLabel(0, 4, "NAMA_MHS");
$excel->writeLabel(0, 5, "JK");

$i=1;
foreach ($hasil as $row) {
	$excel->writeLabel($i, 0, $row['mahasiswa_npm']);

$i++;
}


#isi data

/*while ( $data=mysqli_fetch_assoc($hasil)) {
	$excel->writeLabel($i, 0, $i);
	if ($data['nama_UKM']!=NULL){$nama=$data['nama_UKM'];}else $nama=$data['nama_admin'];
	$excel->writeLabel($i, 1, $nama);
	$excel->writeLabel($i, 2, $data['nama_Keg']);
	$excel->writeLabel($i, 3, date("d F Y H:i:s", strtotime($data['Mulai_Keg'])));
	$excel->writeLabel($i, 4, $data['Tempat_Keg']);
	$excel->writeLabel($i, 5, $data['status_pelaksanaan']);

	$i++;			
}*/
$excel->EOF();

exit();
?>
