<br>
<p>


</p>
<table border="1" align="center" >
	<tr border="0">
		<td colspan="7">
			<a href="tambah.php">Tambah</a> | <a href="index.php">Home</a> | <a href="lab.php">Lab</a> | 
		</td>
	</tr>
</table>

	  
<?php			  
$tanggal = '2005-09-01 09:02:23';
$tanggal = new DateTime($tanggal); 

$sekarang = new DateTime();

$perbedaan = $tanggal->diff($sekarang);

//gabungkan
echo $perbedaan->y.' selisih tahun.';
echo "<br>";
echo $perbedaan->m.' selisih bulan.';
echo "<br>";
echo $perbedaan->d.' selisih hari.';
echo "<br>";
echo $perbedaan->h.' selisih jam.';
echo "<br>";
echo $perbedaan->i.' selisih menit.';
echo "<br>";
echo "<br>";
echo "<br>";

?>

<?php

$awal  = date_create('1983-05-27');
$akhir = date_create(); // waktu sekarang
$diff  = date_diff( $awal, $akhir );

echo 'Selisih waktu: ';
echo $diff->y . ' tahun, ';
echo "<br>";
echo $diff->m . ' bulan, ';
echo "<br>";
echo $diff->d . ' hari, ';
echo "<br>";
echo $diff->h . ' jam, ';
echo "<br>";
echo $diff->i . ' menit, ';
echo "<br>";
echo $diff->s . ' detik, ';
// Output: Selisih waktu: 28 tahun, 5 bulan, 9 hari, 13 jam, 7 menit, 7 detik

echo 'Total selisih hari : ' . $diff->days;
// Output: Total selisih hari: 10398
?>

<br>
<br>
<?php
$diff  = date_diff( date_create('2018-01-01'), date_create() );
$selisih_hari = $diff->format('%m'); // Usia anda adalah 29 tahun 9 hari.
echo $selisih_hari ;
?>
<br>
<br>
<br>
<br>

<?php
// duedate.php
$tglbayar = strtotime("4/25/2015"); // 25 April 2015
$tglsekarang = strtotime("6/26/2015"); // 26 Juni 2015
$jatuhtempo = strtotime("7/1/2015"); // 1 Juli 2015
 
// hitung perbedaan  jatuh tempo dengan sekarang 
$beda = $jatuhtempo - $tglsekarang; // unix time
// konversi $beda kedalam hari
$bedahari = ($beda/24/60/60);
 
// pastikan nilainya positif, kalo negatif berarti sudah lewat.
if ($beda > 0 )
{
	if ($bedahari < 10 )
	{
		echo "Waktunya ditagih!!!. Jatuh tempo dalam $bedahari hari.";
	}
	else 
	{
		echo "Masih lama. Nagihnya $bedahari hari lagi.";
	}
}
else
{
	echo "hasilnya kok minus?";
}
 
?>


<br>
<br>
<br>
<br>
<?php
$tgl_beli_tiket = mktime(0, 0, 0, 12, 12-90, 2014);
 
//menampilkan tgl_beli_tiket dengan format namahari, tanggal-bulan-tahun
 
echo date("l, d-M-Y", $tgl_beli_tiket);
?>

<br>
<br>
<br>

<?php
$time_sekarang = time();
echo $time_sekarang;
echo"<br>";
echo date("d F Y", strtotime("+5 days", $time_sekarang));
?>
<br>
<br>
<br>

<?php
//Menambah tanggal
$date1 = "2016-09-09";
$date = new DateTime($date1);
$date_plus = $date->modify("+35 month");
echo $date1;
echo"<br>";
echo $date_plus->format("Y-m-d");
 //Membandingkan
$date1 = new DateTime("2017-08-04");
$date2 = new DateTime("2017-08-06");
if ($date2 > $date1) {
    echo "ok";
}
?>