<?php


        //ob_start();
        $bookCode = $_GET['bookCode'];
        
        $maskapai = $_GET['maskapai'];
        $destinasi = $_GET['destinasi'];

        $kelas=$_GET['kelas'];
        $dariKota=$_GET['dariKota'];
        $keKota=$_GET['keKota'];
        $transit=$_GET['transit'];
        $flight=$_GET['flight'];
        $owfnumber=$_GET['owfnumber'];

        $owtgl=$_GET['owtgl'];
        $owjamDeparture=$_GET['owjamDeparture'];
        $owjamArrival=$_GET['owjamArrival'];
        $rfnumber=$_GET['rfnumber'];

        $rtgl=$_GET['rtgl'];
        $rjamDeparture=$_GET['rjamDeparture'];
        $rjamArrival=$_GET['rjamArrival'];
        $pergiTransit=$_GET['pergiTransit'];

        $pergiTime1=$_GET['pergiTime1'];
        $pergiTime2=$_GET['pergiTime2'];
        $pulangTransit=$_GET['pulangTransit'];

        $pulangTime1=$_GET['pulangTime1'];
        $pulangTime2=$_GET['pulangTime2'];
        $harga=$_GET['harga'];
        $tax=$_GET['tax'];
        $other=$_GET['other'];
        $ttl=$_GET['ttl'];
        $dewasa=$_GET['dewasa'];
        $anak=$_GET['anak'];
        $bayi=$_GET['bayi'];

        for($dx=1;$dx<=$dewasa;$dx++){
	        $dTitel[$dx]=$_GET['dTitel' . $dx];
   	    	$deTicket[$dx] =$_GET['deTicket' . $dx];
   	    	$dfirstName[$dx]=$_GET['dfirstName' . $dx];
        	$dlastName[$dx]=$_GET['dlastName' . $dx];
        }
        
        for($ax=1;$ax<=$anak;$ax++){
	        $aTitel[$ax]=$_GET['aTitel' . $ax];
   	    	$aeTicket[$ax] =$_GET['aeTicket' . $ax];
   	    	$afirstName[$ax]=$_GET['afirstName' . $ax];
        	$alastName[$ax]=$_GET['alastName' . $ax];
        }

        for($bx=1;$bx<=$bayi;$bx++){
	     
	        $bTitel[$bx]=$_GET['bTitel' . $bx];
   	    	$beTicket[$bx] =$_GET['beTicket' . $bx];
   	    	$bfirstName[$bx]=$_GET['bfirstName' . $bx];
        	$blastName[$bx]=$_GET['blastName' . $bx];
        }

    include('g.php');

    $content = ob_get_clean();


include("MPDF57/mpdf.php");
$mpdf=new mPDF('c','A3',10,'times'); 
$mpdf->SetDisplayMode('fullpage');

$stylesheet = file_get_contents('css/stylePDF.css');
$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($content);
$mpdf->Output('coba.pdf','I');
exit;


?>