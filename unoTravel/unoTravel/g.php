<?php


$html = "


	<img src='../kop tiket.png' width='1024' height='140'/>

	<table border='0'>

		<tr>
			<td width='25'></td>
			<td>Booking Code<br>Itinerary<br>Passenger Details</td>
			<td id='size50'><b>" . strtoupper($bookCode) . "</b></td>
			<td width='250'></td>
			<td><b><span id='size40'>" . strtoupper($maskapai) . "</span></b><br>" . strtoupper($destinasi) . "</td>
		</tr>
		<tr><td></td></tr>
	</table>
		<div style='width:1024px; -moz-border-radius: 20px 10px 20px 10px; -webkit-border-radius: 20px 10px 20px 10px; border-radius: 20px; border: 1px solid black; color: black; font-family: Arial; padding: 5px;'>

			&nbsp; &nbsp; &nbsp; 1. " . $dlastName[1] . " "  . $dfirstName[1]  . " / " . $dTitel[1] . "

		</div>
		&nbsp; &nbsp; Pemeriksaan Keamanan Bertujuan untuk Keselamatan dan Kelancaran penerbangan


	<div style='width:1024px; border: 1px solid black; color: black; font-family: Arial; padding: 5px;'>
		<table border='0' width='1024'>
			<tr>
				<td colspan='6' style='padding:10px 0px 0px 10px; border-bottom-style:solid; border-bottom-width:1px;'><font size='2'>FLIGHT DETAIL</font></td>
			</tr>
			<tr>
				<td style='padding:10px 0px 0px 20px;'><b><font size='2px'>No.</font></b></td>
				<td style='padding:10px 0px 0px 0px;'><b><font size='2px'>Flight Number</font></b></td>
				<td style='padding:10px 0px 0px 0px;'><b><font size='2px'>Departure</font></b></td>
				<td style='padding:10px 0px 0px 0px;'><b><font size='2px'>Arrival</font></b></td>
				<td style='padding:10px 0px 0px 0px;'><b><font size='2px'>Date</font></b></td>
				<td style='padding:10px 0px 0px 0px;'><b><font size='2px'>Class</font></b></td>
			</tr>
			<tr>
				<td valign='top' style='padding:0px 0px 0px 20px;'><b><font size='2px'>1</font></b></td>
				<td valign='top'><b><font size='2px'>" . $owfnumber . "</font></b></td>
				<td valign='top'><b><font size='2px'>" . $dariKota . "</font></b><br><font size='2px'>" . $owjamDeparture . "</font></td>
				<td valign='top'><b><font size='2px'>" . $keKota . "</font></b><br><font size='2px'>" . $owjamArrival . "</font></td>
				<td valign='top'><b><font size='2px'>" . $owtgl . "</font></b></td>
				<td valign='top'><b><font size='2px'>" . $kelas . "</font></b></td>
			</tr>
			<tr>
				<td colspan='6' style='padding:0px 0px 0px 20px; border-bottom-style:solid; border-bottom-width:1px;'></td>
			</tr>
			<tr>
				<td colspan='6' style='padding:10px 0px 0px 10px;'><font size='2px'>TRANSIT : " . $pergiTransit . " " . $pergiTime1  . " - " . $pergiTime2. "</font></td>		
			</tr>
			<tr>
				<td colspan='6' style='padding:0px 0px 0px 20px; border-bottom-style:solid; border-bottom-width:1px;'></td>
			</tr>

			<tr>
				<td colspan='6' style='padding:10px 0px 0px 10px; border-bottom-style:solid; border-bottom-width:1px;'><font size='2px'>RETURN</font></td>
			</tr>
			<tr>
				<td style='padding:10px 0px 0px 20px;'><b><font size='2px'>No.</font></b></td>
				<td style='padding:10px 0px 0px 0px;'><b><font size='2px'>Flight Number</font></b></td>
				<td style='padding:10px 0px 0px 0px;'><b><font size='2px'>Departure</font></b></td>
				<td style='padding:10px 0px 0px 0px;'><b><font size='2px'>Arrival</font></b></td>
				<td style='padding:10px 0px 0px 0px;'><b><font size='2px'>Date</font></b></td>
				<td style='padding:10px 0px 0px 0px;'><b><font size='2px'>Class</font></b></td>
			</tr>";
			if ($flight == "Return"){
			$html .="<tr>
					<td valign='top' style='padding:0px 0px 0px 20px;'><b><font size='2px'>1</font></b></td>
					<td valign='top'><b><font size='2px'>" . $rfnumber . "</font></b></td>
					<td valign='top'><b><font size='2px'>" . $keKota . "</font></b><br><font size='2px'>" . $rjamDeparture . "</font></td>
					<td valign='top'><b><font size='2px'>" . $dariKota . "</font></b><br><font size='2px'>" . $rjamArrival . "</font></td>
					<td valign='top'><b><font size='2px'>" . $rtgl . "</font></b></td>
					<td valign='top'><b><font size='2px'>" . $kelas . "</font></b></td>
				</tr>";
			}
			$html .="<tr>
				<td colspan='6' style='padding:0px 0px 0px 20px; border-bottom-style:solid; border-bottom-width:1px;'></td>
			</tr>
			<tr>
				<td colspan='6' style='padding:10px 0px 0px 10px;'><font size='2px'>TRANSIT : " . $pulangTransit . " " . $pulangTime1  . " - " . $pulangTime2. "</font></td>		
			</tr>


		</table>
	</div>
	<br>

	<div style='width:1024px; border: 1px solid black; color: black; font-family: Arial; padding: 5px;'>
		<table border='0' width='1024'>
			<tr>
				<td colspan='6' style='padding:10px 0px 0px 10px;'><font size='2'>Fare Calculation</font></td>
			</tr>
			<tr>
				<td style='width:120px; padding:10px 0px 0px 20px;'><font size='2px'>Fare Flight Detail</font></td>
				<td style='padding:10px 0px 0px 0px;'><font size='2px'>Flight Type</font></td>
				<td style='padding:10px 0px 0px 0px;'><font size='2px'>Price</font></td>
				<td style='padding:10px 0px 0px 0px;'><font size='2px'>Tax-lwjr-Fs</font></td>
				<td style='padding:10px 0px 0px 0px;'><font size='2px'>Other Charges</font></td>
				<td style='padding:10px 0px 0px 0px;'><font size='2px'>Total Fare</font></td>
			</tr>

			<tr>
				<td valign='top' style='padding:0px 0px 0px 20px;'><font size='2px'>1</font></td>
				<td valign='top'><font size='2px'>" . $flight . "</font></td>
				<td valign='top'><font size='2px'>" . number_format($harga)   . " IDR</font></td>
				<td valign='top'><font size='2px'>" . number_format($tax) . " IDR</font></td>
				<td valign='top'><font size='2px'>" . number_format($other) . " IDR</font></td>
				<td valign='top'><font size='2px'>" . number_format($ttl) . " IDR</font></td>
			</tr>
			<tr>
				<td colspan='6' style='padding:0px 0px 0px 20px; border-bottom-style:solid; border-bottom-width:1px;'></td>
			</tr>
			<tr>
				<td align='right' colspan='5'><b><font size='2px'>Grand Total :</font></b></td>
				<td><b><font size='2px'>" . number_format($ttl) . " IDR</font></b></td>
			</tr>
			</table>
	</div>
	<br>
	<div style='width:1024px; border: 1px solid black; color: black; font-family: Arial; padding: 5px;'>
		<table border='0' width='1024'>
			<tr>
				<td colspan='6' style='padding:10px 0px 0px 10px;'><font size='2'>Passenger(s)</font></td>
			</tr>
			<tr>
				<td style='width:60px; padding:10px 0px 0px 20px;'><font size='2px'>No</font></td>
				<td style='width:200px; padding:10px 0px 0px 0px;'><font size='2px'>Last Name</font></td>
				<td style='padding:10px 0px 0px 0px;'><font size='2px'>First Name</font></td>
				<td style='width:120px; padding:10px 0px 0px 0px;'><font size='2px'>E-Ticket</font></td>
				<td style='width:60px; padding:10px 0px 0px 0px;'><font size='2px'>Title</font></td>
				<td style='width:60px; padding:10px 0px 0px 0px;'><font size='2px'>Type</font></td>
				<td style='padding:10px 0px 0px 0px;'><font size='2px'>Special Request</font></td>

			</tr>";
			$x=0;
			for ($d=1;$d<=$dewasa;$d++){
				$x++;
			$html .="<tr>
				<td valign='top' style='padding:0px 0px 0px 20px;'><font size='2px'>$x</font></td>
				<td valign='top'><font size='2px'>" . $dlastName[$d] . "</font></td>
				<td valign='top'><font size='2px'>" . $dfirstName[$d]. "</font></td>
				<td valign='top'><font size='2px'>" . $deTicket[$d] . "</font></td>
				<td valign='top'><font size='2px'>" . $dTitel[$d] . "</font></td>
				<td valign='top'><font size='2px'>" . "ADULT" . "</font></td>
				<td valign='top'><font size='2px'>" . " " . "</font></td>
				</tr>";


			}

			for ($a=1;$a<=$anak;$a++){
				$x++;

			$html .="<tr>
				<td valign='top' style='padding:0px 0px 0px 20px;'><font size='2px'>$x</font></td>
				<td valign='top'><font size='2px'>" . $alastName[$a]. "</font></td>
				<td valign='top'><font size='2px'>" . $afirstName[$a] . "</font></td>
				<td valign='top'><font size='2px'>" . $aeTicket[$a] . "</font></td>
				<td valign='top'><font size='2px'>" . $aTitel[$a]. "</font></td>
				<td valign='top'><font size='2px'>" . "CHILD" . "</font></td>
				<td valign='top'><font size='2px'>" . " " . "</font></td>
				</tr>";


			}


			for ($b=1;$b<=$bayi;$b++){
				$x++;
			$html .="<tr>
				<td valign='top' style='padding:0px 0px 0px 20px;'><font size='2px'>$x</font></td>
				<td valign='top'><font size='2px'>" . $blastName[$b]. "</font></td>
				<td valign='top'><font size='2px'>" . $bfirstName[$b] . "</font></td>
				<td valign='top'><font size='2px'>" . $beTicket[$b] . "</font></td>
				<td valign='top'><font size='2px'>" . $bTitel[$b] . "</font></td>
				<td valign='top'><font size='2px'>" . "INFANT" . "</font></td>
				<td valign='top'><font size='2px'>" . " " . "</font></td>
				</tr>";


			}

$html .= "<tr>
				<td colspan='7' style='padding:0px 0px 0px 20px; border-bottom-style:solid; border-bottom-width:1px;'></td>
			</tr>";
$html .= "<tr>
				<td colspan='7' style='padding:0px 0px 0px 20px; border-bottom-style:solid; border-bottom-width:1px;'></td>
			</tr>";


$html .="</table>
	</div>
";

$html .= "<div id='small' style='width:1024px; border: 1px solid black; color: black; font-family: Arial; padding: 5px;'>


	<pre>SYARAT-SYARAT DAN KETENTUAN UMUM
1. Perjanjian pengakuan ini tunduk kepada ketentuan-ketentuan ordonasi pengangkutan udara Indonesia (stbl. 1939/100) Undang Undang Republik Indonesia No. 1 Tahun 2009 tentang penerbangan,juncto
   Peraturan Pemerintah Republik Indonesia No. 40 Tahun 1995 serta kepada syarat-syarat dan ketentuan umum pengangkut.
2. Pengangkut adalah penerbangan tanpa menggunakan ticket. Yang diperlukan adalah print out Pengangkut E-ticket & Itinerary dimana terdapat kodebooking serta nama anda di dalamnya. Anda diharuskan
   menunjukkan kartu identitas atau pasport pada waktu melapor di bandara ( pada saat check-in dan memasuki ruang tunggu di bandara ).
3. Pengangkut berhak menolak penumpang untuk check-in dan membatalkan pembukuannya apabila Kartu Identitas atau Passport tidak sesuai dengan nama penumpang di pembukuan kami.
4. Check-in counter Pengangkut dibuka 2 jam dan ditutup 45 menit sebelum jadwal keberangkatan. Penumpang diminta untuk melapor di check-in counter sekurang-kurangnya 2(dua) jam sebelum jadwal
   keberangkatan dan berada diruang tunggu keberangkatan 30 (tiga puluh ) menit sebelum jadwal keberangkatan atau kami akan meninggalkan anda untuk menghindari kemungkinan penundaan keberangkatan.
5. Penumpang yang telah check-in dan tertinggal pesawat karena tidak berada diruang tunggu pada saat boarding, maka ticket dianggap hangus sehingga tidak dapat dipergunakan serta tidak dapat 
   diuangkan kembali.
6. Pengangkut tidak bertanggung jawab atas kerugian apapun juga yang ditimbulkan oleh pembatalan dan/atau kelambatan pengangkutan ini, termasuk segala kelambatan penyerahan bagasi.
7. Pengangkut tidak bertanggung jawab apabila terjadi ketidaksesuaian pada penerbangan lanjutan apabila menggunakan perusahaan penerbangan lain.
8. Untuk kenyamanan dan keselamatan penerbangan, diperbolehkan membawa 1(satu) bagasi kabin dengan ukuran yang bisa ditaruh di bawah tempat duduk atau dibagasi kabin
   (Ukuran P 56cm x L 23cm x T 36cm) dengan berat maksimum 7 kilogram dan menjadi tanggung jawab penumpang yang bersangkutan.
9. Setiap penumpang berhak mendapatkan bagasi Cuma-Cuma seberat maksimum 20 (dua puluh)kg untuk rute domestik maupun internasional. Setiap kelebihan bagasi dikenakan biaya sesuai dengan tarif bagasi
   lebih yang diberlakukan oleh Pengangkut.
10. Semua tuntutan ganti- kerugian harus dapat dibuktikan besarnya kerugian yang diderita.Tanggung jawab terbatas untuk kehilangan bagasi ditetapkan sejumlah ketentuan masing-masing airline.
11. Pengangkutan udara tidak bertanggung jawab terhadap kerusakan barang-barang pecah belah/cepat busuk dan binatang hidup jika diangkut sebagai bagasi.
12. Pengangkut udara tidak bertanggung jawab terhadap barang berharga seperti uang, perhiasan, barang elektronik, obat-obatan, dokumen serta surat berharga atau sejenisnya jika dimasukkan kedalam bagasi.
13. Pembukuan yang sudah pasti apabila dibatalkan atau dirubah akan dikenakan biaya sesuai ketentuan masing-masing airline.
14. Pembukuan yang tidak dibatalkan 1x24 jam (NoShow) akan dikenakan biaya pembatalan sesuai ketentuan masing-masing airline.
15. Tiket yang statusnya sudah cek-in tidak dapat dibatalkan atau diuangkan kembali.
16. Pengangkut berhak menolak permohonan refund apabila diajukan melebihi ketentuan atau kondisi tiket tidak dapat diuangkan kembali.
17. Pengangkut akan mengangkut penumpang dan bagasinya sesuai tanggal dan waktu penerbangan yang telah dipesan oleh penumpang tetapi tidak menjamin sepenuhnya. Pengangkut dapat melakukan perubahan
    tanpa pemberitahuan sebelumnya.

SYARAT-SYARAT PERJANJIAN PERATURAN DALAM NEGERI
1. Perjanjian pengangkutan ini tunduk kepada ketentuan-ketentuan ordonansi pengangkutan udara Indonesia(stbl. 1939/100) Undang Undang Republik Indonesia No.15 Tahun 1992 tentang penerbangan,
   juncto Peraturan Pemerintah Republik Indonesia No.40 Tahun 1995 serta kepada syarat-syarat pengangkutan, tarif, peraturan dinas, (kecuali waktu berangkat dan waktu tiba yang tersebut didalamnya)
   dan peraturan lain dari pengangkut, yang merupakan bagian yang tak dapat dipisahkan dari perjanjian ini dan yang dapat diperiksa dikantor pasasi pengangkut.
2. Tiket penumpang ini hanya dapat dipergunakan oleh orang yang namanya tertera diatasnya dan tidak dapat dipergunakan oleh orang lain. Penumpang menyetujui bahwa bila perlu pengangkut dapat
   memeriksa apakah tiket ini benar dipakai oleh orang yang berhak. jika tiket ini dipergunakan atau dicoba untuk dipergunakan oleh seseorang yang lain daripada yang namanya tersebut dalam tiket
   ini, maka pengangkut berhak untuk menolak pengangkutan orang lain, serta hak pengangkutan dengan tiket ini oleh yang berhak menjadi batal.
3. Hak untuk menyerahkan penyelenggaraan perjanjian pengangkutan ini kepada perusahaan pengangkutan yang lain, serta hak mengubah tempat-tempat perhentian yang telah disetujui, tetap berada dalam
   tangan pengangkut.
4. Pengangkut tidak bertanggung jawab atas kerugian apapun juga yang ditimbulkan oleh pembatalan dan/atau kelambatan pengangkutan ini, termasuk segala kelambatan penyerahan bagasi.
5. Bagasi tercatat yang diangkut berdasarkan perjanjian ini hanya akan diserahkan kepada penumpang jika carik bagasinya dikembalikan kepada pengangkut.
6. a. Penagangkut bertanggung jawab atas kerugian-kerugian yang timbul pada penumpang dan bagasi dengan mengingat pada syarat-syarat dan batas-batas yang ditentukan dalam Peraturan Pemerintah
      Republik Indonesia No.40 tahun 1995 dan syarat umum pengangkutan dari pengangkut.
   b. Bila penumpang pada saat penerimaan bagasi tidak mengajukan protes, maka dianggap bahwa bagasi itu telah diterima dalam keadaan lengkap dan baik.
   c. Semua tuntutan ganti- kerugian harus dapat dibuktikan besarnya kerugian yang diderita. Tanggung jawab terbatas untuk kehilangan bagasi ditetapkan per kilogram sesuai dengan kebijaksanaan
      pihak airline.
   d. Pengangkutan udara tidak bertanggung jawab terhadap kerusakan barang-barang pecah belah/cepat busuk dan binatang hidup jika diangkut sebagai bagasi.
   e. Pengangkut udara tidak bertanggung jawab terhadap barang berharga seperti uang, perhiasan, barang elektronik, obat-obatan, dokumen serta surat berharga atau sejenisnya jika dimasukkan kedalam bagasi.
7. Tidak seorangpun dari agen, pegawai atau wakil pengangkut berhak mengubah atau membatalkan syarat-syarat pengangkutan, tarif, peraturan dinas dan peraturan lain dari pengangkut yang berlaku baik
   sebagian maupun dalam keseluruhannya.
Penumpang yang namanya tercantum dalam tiket ini dipertanggung jawabkan pada PT. Ansuransi Kerugian Jasa Raharja berdasarkan Undang-undang No. 33/1964 Juncto peraturan-peraturan pelaksanaannya.
</pre>


</div>";




echo $html;



?>