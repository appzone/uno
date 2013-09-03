<?php 
	require('security_check.php');
	require('connection/connection.php');
	require('connection/config_file.php');
	require('function/clear_sql_value.php');
	require('function/query_storage.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>PDF MAKER</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection, tv" />
<link rel="stylesheet" href="css/style-print.css" type="text/css" media="print" />
<link type="text/css" href="css/jquery.ui.all.css" rel="stylesheet" />	
<link type="text/css" href="css/anytime.css" rel="stylesheet" />	
<link type="text/css" href="css/jquery-ui-1.8.18.custom.css" rel="stylesheet" />	
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/anytime.js"></script>
<script type="text/javascript" src="js/jqueryUI.js"></script>

<script>
$(function(){
	//$('#trPergiTransit').css('display','none');
	//$('#trPulangTransit').css('display','none');
	
	autoContent();

	var transit = "tidak";
	var flight ="oneway"; 
	$('input:radio[name=transit]').change(
    	function(){
    		transit = $('input:radio[name=transit]:checked').val();
			flight = $('input:radio[name=flight]:checked').val();
    		
	        if (transit == "ya"){
	    		if (flight == "Oneway"){
 		   			$('#trPergiTransit').css('display','table-row');
 		   			$('#trPulangTransit').css('display','none');
					$("#pulangTransit").val("");
					$("#pulangTime1").val("");
					$("#pulangTime2").val("");    

 		   		}
 		   		else if (flight == "return"){
 		   			$('#trPergiTransit').css('display','table-row');
 		   			$('#trPulangTransit').css('display','table-row');
 		   		}
    		}
	    	else if (transit == "tidak"){
 		   			$('#trPergiTransit').css('display','none');
 		   			$('#trPulangTransit').css('display','none');
					$("#pergiTransit").val("");
					$("#pergiTime1").val("");
					$("#pergiTime2").val("");     		   			
					$("#pulangTransit").val("");
					$("#pulangTime1").val("");
					$("#pulangTime2").val("");    
    		}
	    });
	$('input:radio[name=flight]').change(
    	function(){
    		flight = $('input:radio[name=flight]:checked').val();
    		transit = $('input:radio[name=transit]:checked').val();

	    	if (flight == "Oneway"){
	    		 $('#trReturn').css('display','none');
	    		 $("#rtgl").val("");
	    		 $("#rfnumber").val("");
	    		 $("#rjamDeparture").val("");
	    		 $("#rjamArrival").val("");

	    		if (transit == "ya"){
 		   			$('#trPergiTransit').css('display','table-row');
 		   			$('#trPulangTransit').css('display','none');
					$("#pulangTransit").val("");
					$("#pulangTime1").val("");
					$("#pulangTime2").val("");    
 		   		}
 		   		else if (transit == "tidak"){
 		   			$('#trPergiTransit').css('display','none');
 		   			$('#trPulangTransit').css('display','none');
					$("#pergiTransit").val("");
					$("#pergiTime1").val("");
					$("#pergiTime2").val("");     		   			
					$("#pulangTransit").val("");
					$("#pulangTime1").val("");
					$("#pulangTime2").val("");    

 		   		}
    		}
	    	else if (flight == "return"){
 		   		$('#trReturn').css('display','table-row');
				if (transit == "ya"){
 		   			$('#trPergiTransit').css('display','table-row');
					$('#trPulangTransit').css('display','table-row');
 		   		
 		   		}
 		   		else if (transit == "tidak"){
 		   			$('#trPergiTransit').css('display','none');
 		   			$('#trPulangTransit').css('display','none');
					$("#pergiTransit").val("");
					$("#pergiTime1").val("");
					$("#pergiTime2").val("");     		   			
					$("#pulangTransit").val("");
					$("#pulangTime1").val("");
					$("#pulangTime2").val("");    
 		   		}
    		}
	    });     

});

function sumTotal(){
	var hasil = ($("#harga").val()*1) + ($("#other").val()*1) + ($("#tax").val()*1);
	$("#ttl").val(hasil);
}

function validateNumber(evt) {
    var e = evt || window.event;
    var key = e.keyCode || e.which;

    if (!e.shiftKey && !e.altKey && !e.ctrlKey &&
    // numbers   
    key >= 48 && key <= 57 ||
    // Numeric keypad
    key >= 96 && key <= 105 ||
    // Backspace and Tab and Enter
    key == 8 || key == 9 || key == 13 ||
    // Home and End
    key == 35 || key == 36 ||
    // left and right arrows
    key == 37 || key == 39 ||
    // Del and Ins
    key == 46 || key == 45) {
        // input is VALID
    }
    else {
        // input is INVALID
        e.returnValue = false;
        if (e.preventDefault) e.preventDefault();
    }
}


function autoContent(){
	showDewasa();
	showAnak();
	showBayi();

	$("#deTicket1").val("1234567891234");
	$("#deTicket2").val("1234567891235");
	$("#aeTicket1").val("1234567891238");
	$("#beTicket1").val("1234567891237");

	$("#dfirstName1").val("MAJID");
	$("#dfirstName2").val("ZAINAL");
	$("#afirstName1").val("NURHAYATI");
	$("#bfirstName1").val("HERY");

	$("#dlastName1").val("MAJID");
	$("#dlastName2").val("MAHMUDI");
	$("#alastName1").val("NURHAYATI");
	$("#blastName1").val("KISWANTO");

	$("#dTitel1").val("MR");
	$("#dTitel2").val("MRS");
	$("#aTitel1").val("MISS");
	$("#bTitel1").val("MASTER");

}

function showDewasa(){

	var jlh = $("#dewasa").val();
	var i=0;
	if (jlh==0){
		var htmlOtomatis = "";	
	}
	else {
		var htmlOtomatis="<fieldset style='width:480px'><legend><b>Dewasa</b></legend><table border='0'>";
	}
	for(i=1;i<=jlh;i++){
		htmlOtomatis += "<tr><td>Titel</td><td>:</td><td><select name='dTitel" + i + "' id='dTitel" + i + "'>";
		htmlOtomatis += "<option value='MR'>MR</option>";
		htmlOtomatis += "<option value='MRS'>MRS</option>";
		htmlOtomatis += "</select></td>";
		htmlOtomatis += "<td>E-Ticket</td><td>:</td><td><input type='text' onkeydown='validateNumber(event);' name='deTicket" + i + "' id='deTicket" + i + "' /></td></tr>";
		htmlOtomatis += "<tr><td>First Name</td><td>:</td><td><input type='text' class='uppercase' name='dfirstName" + i + "' id='dfirstName" + i + "' /></td>";
		htmlOtomatis += "<td>Last Name</td><td>:</td><td><input type='text' class='uppercase' name='dlastName" + i + "' id='dlastName" + i + "' /></td></tr>";
		htmlOtomatis += "<tr height='10'><td><td></tr>";
	}
	htmlOtomatis += "</table></fieldset>";
	$("#isiDewasa").html(htmlOtomatis);

}

function showAnak(){

	var jlh = $("#anak").val();
	var i=0;
	if (jlh==0){
		var htmlOtomatis = "";	
	}
	else {
		var htmlOtomatis="<fieldset style='width:480px'><legend><b>Anak</b></legend><table border='0'>";
	}
	for(i=1;i<=jlh;i++){
		htmlOtomatis += "<tr><td>Titel</td><td>:</td><td><select name='aTitel" + i + "' id='aTitel" + i + "'>";
		htmlOtomatis += "<option value='MISS'>MISS</option>";
		htmlOtomatis += "<option value='MASTER'>MASTER</option>";
		htmlOtomatis += "</select></td>";
		htmlOtomatis += "<td>E-Ticket</td><td>:</td><td><input type='text' onkeydown='validateNumber(event);' name='aeTicket" + i + "' id='aeTicket" + i + "' /></td></tr>";
		htmlOtomatis += "<tr><td>First Name</td><td>:</td><td><input type='text' class='uppercase' name='afirstName" + i + "' id='afirstName" + i + "' /></td>";
		htmlOtomatis += "<td>Last Name</td><td>:</td><td><input type='text' class='uppercase' name='alastName" + i + "' id='alastName" + i + "' /></td></tr>";
		htmlOtomatis += "<tr height='10'><td><td></tr>";
	}
	htmlOtomatis += "</table></fieldset>";
	$("#isiAnak").html(htmlOtomatis);

}

function showBayi(){

	var jlh = $("#bayi").val();
	var i=0;
	if (jlh==0){
		var htmlOtomatis = "";	
	}
	else {
		var htmlOtomatis="<fieldset style='width:480px'><legend><b>Bayi</b></legend><table border='0'>";
	}
	for(i=1;i<=jlh;i++){
		htmlOtomatis += "<tr><td>Titel</td><td>:</td><td><select name='bTitel" + i + "' id='bTitel" + i + "'>";
		htmlOtomatis += "<option value='MISS'>MISS</option>";
		htmlOtomatis += "<option value='MASTER'>MASTER</option>";
		htmlOtomatis += "</select></td>";
		htmlOtomatis += "<td>E-Ticket</td><td>:</td><td><input type='text' onkeydown='validateNumber(event);' name='beTicket" + i + "' id='beTicket" + i + "' /></td></tr>";
		htmlOtomatis += "<tr><td>First Name</td><td>:</td><td><input type='text' class='uppercase' name='bfirstName" + i + "' id='bfirstName" + i + "' /></td>";
		htmlOtomatis += "<td>Last Name</td><td>:</td><td><input type='text' class='uppercase' name='blastName" + i + "' id='blastName" + i + "' /></td></tr>";
		htmlOtomatis += "<tr height='10'><td><td></tr>";
	}
	htmlOtomatis += "</table></fieldset>";
	$("#isiBayi").html(htmlOtomatis);

}



</script>

</head>
<body>
	<br><br>
		<center><form id='generate_form' method='GET' action='ty.php' target='_blank'>
			<table border='1'>
				<tr>
					<td>No Booking</td>
					<td>:</td>
					<td colspan='12'><input value="JA7WEH" type="text" class="uppercase" name="bookCode" autocomplete="off"/></td>
				</tr>
				<tr>
					<td>Maskapai</td>
					<td>:</td>
					<td colspan='12'><select id="maskapai" class="maskapai" name="maskapai">
						<option value=" ">--- PILIH MASKAPAI ---</option>
						<?php
							$Conn=new ConnectionClass();
							$query=getMaskapai(GetConfig("DBUNO"));
							$result=$Conn->SelectSQL($query);
							if(count($result)>0)
							{
								for($i=0;$i<count($result);$i++)
								{
									if ($result[$i]["nama"]=="Garuda"){
										printf("<option value='%s' selected='selected'>%s</option>", $result[$i]["nama"], $result[$i]["nama"]);
									}
									else {
										printf("<option value='%s'>%s</option>", $result[$i]["nama"], $result[$i]["nama"]);
									}
								}
							}
							$Conn=null;
						?>
					</select></td>
				</tr>
				<tr>
					<td>Kelas</td>
					<td>:</td>
					<td colspan='12'><select id="kelas" class="kelas" name="kelas">
						<option value=" ">--- PILIH KELAS ---</option>
						<?php
							$Conn=new ConnectionClass();
							$query=getKelas(GetConfig("DBUNO"));
							$result=$Conn->SelectSQL($query);
							if(count($result)>0)
							{
								for($i=0;$i<count($result);$i++)
								{
									if ($result[$i]['kelas'] == "ECONOMY"){
										printf("<option value='%s' selected='selected'>%s</option>", $result[$i]["kelas"], $result[$i]["kelas"]);
									}
									else {
										printf("<option value='%s'>%s</option>", $result[$i]["kelas"], $result[$i]["kelas"]);
									}
								}
							}
							$Conn=null;
						?>
					</select></td>
				</tr>
				<tr>
					<td>Jenis Destinasi</td>
					<td>:</td>
					<td colspan='12'><input type="radio" name="destinasi" value="domestic" checked="checked">Domestic<br>
						<input type="radio" name="destinasi" value="international">International</td>
				</tr>
				<tr>
					<td>Dari</td>
					<td>:</td>
					<td><input type="text" class="uppercase" name="dariKota" value="SURABAYA"/>
					<td>Ke</td>
					<td>:</td>
					<td colspan='12'><input type="text" class="uppercase" name="keKota" value="TIMIKA"/>
				</tr>



				<tr>
					<td>Transit</td>
					<td>:</td>
					<td colspan='12'><input type="radio" name="transit" value="ya" checked="checked">Ya<br>
						<input type="radio" name="transit" value="tidak" >Tidak</td>
				</tr>
				<tr>
					<td>Flight</td>
					<td>:</td>
					<td colspan='12'><input type="radio" name="flight" value="Oneway" >One Way<br>
						<input type="radio" name="flight" value="Return" checked="checked">Return</td>
				</tr>
				<tr id='trOneWay'>
					<td>Flight Number Pergi</td>
					<td>:</td>
					<td><input type='text' class='uppercase' name='owfnumber' id='owfnumber' value='GA653/GA349' size='15'/></td>
					
					<td>Tgl</td>
					<td>:</td>
					<td><input type='text' size='10' name='owtgl' id='owtgl' readonly='readonly' value='27-July-2013'/></td>
					<script>
					$("#owtgl").AnyTime_picker(
   						 { format: "%d-%M-%Y ", labelTitle: "Tanggal",
					      labelYear: "Tahun", labelMonth:"Bulan",labelDayOfMonth:"Tanggal" } );
					</script>

					
					<td>Jam Departure<td>
					<td>:</td>
					<td><input type='text' size='4' name='owjamDeparture' id='owjamDeparture' readonly='readonly' value='20:30' /></td>
					<script>
					$("#owjamDeparture").AnyTime_picker(
   						 { format: "%H:%i ", labelTitle: "Waktu",
					      labelHour: "Jam", labelMinute: "Menit" } );
					</script>

					<td>Jam Arrival</td>
					<td>:</td>
					<td><input type='text' size='4' name='owjamArrival' id='owjamArrival' readonly='readonly' value='06:30' /></td>
					<script>
					$("#owjamArrival").AnyTime_picker(
   						 { format: "%H:%i ", labelTitle: "Waktu",
					      labelHour: "Jam", labelMinute: "Menit" } );
					</script>

				</tr>
				

				<tr id='trReturn'>
					<td>Flight Number Return</td>
					<td>:</td>
					<td><input type='text' class='uppercase' name='rfnumber' id='rfnumber' value='GA348/GA652' size='15'/></td>
					
					<td>Tgl</td>
					<td>:</td>
					<td><input type='text' size='10' name='rtgl' id='rtgl' readonly='readonly' value='29-July-2013'/></td>
					<script>
					$("#rtgl").AnyTime_picker(
   						 { format: "%d-%M-%Y ", labelTitle: "Tanggal",
					      labelYear: "Tahun", labelMonth:"Bulan",labelDayOfMonth:"Tanggal" } );
					</script>

					
					<td>Jam Departure<td>
					<td>:</td>
					<td><input type='text' size='4' name='rjamDeparture' id='rjamDeparture' readonly='readonly' value='11:20' /></td>
					<script>
					$("#rjamDeparture").AnyTime_picker(
   						 { format: "%H:%i ", labelTitle: "Waktu",
					      labelHour: "Jam", labelMinute: "Menit" } );
					</script>

					<td>Jam Arrival</td>
					<td>:</td>
					<td><input type='text' size='4' name='rjamArrival' id='rjamArrival' readonly='readonly' value='19:25' /></td>
					<script>
					$("#rjamArrival").AnyTime_picker(
   						 { format: "%H:%i ", labelTitle: "Waktu",
					      labelHour: "Jam", labelMinute: "Menit" } );
					</script>

				</tr>

				<tr id='trPergiTransit'>
					<td>Pergi Transit via</td>
					<td>:</td>
					<td><input type='text' class='uppercase' value='DENPASAR' name='pergiTransit' id='pergiTransit'/></td>
					<td><input type="text" size="4" name="pergiTime1" id="pergiTime1" readonly="readonly" value="22:30"/></td>
					<td>s/d</td>
					<script>
					$("#pergiTime1").AnyTime_picker(
   						 { format: "%H:%i ", labelTitle: "Waktu",
					      labelHour: "Jam", labelMinute: "Menit" } );
					</script>
					<td colspan='12'><input type="text" size="4" name="pergiTime2" id="pergiTime2" readonly="readonly" value="23:30"/></td>
					<script>
					$("#pergiTime2").AnyTime_picker(
   						 { format: "%H:%i ", labelTitle: "Waktu",
					      labelHour: "Jam", labelMinute: "Menit" } );

					</script>
				</tr>

				<tr id='trPulangTransit'>
					<td>Pulang Transit via</td>
					<td>:</td>
					<td><input type='text' class='uppercase' value='DENPASAR' name='pulangTransit' id='pulangTransit'/></td>
					<td><input type="text" size="4" name="pulangTime1" id="pulangTime1" readonly="readonly" value="13:15"/></td>
					<td>s/d</td>
					<script>
					$("#pulangTime1").AnyTime_picker(
   						 { format: "%H:%i ", labelTitle: "Waktu",
					      labelHour: "Jam", labelMinute: "Menit" } );
					</script>
					<td colspan='12'><input type="text" size="4" name="pulangTime2" id="pulangTime2" readonly="readonly" value="15:00"/></td>
					<script>
					$("#pulangTime2").AnyTime_picker(
   						 { format: "%H:%i ", labelTitle: "Waktu",
					      labelHour: "Jam", labelMinute: "Menit" } );

					</script>

				</tr>
				<tr>
					<td>Harga</td>
					<td>:</td>
					<td><input type="text" value="3200000" name="harga" id="harga" autocomplete="off" size="10"  maxlength="10" onkeydown="validateNumber(event);" onblur="sumTotal();"/></td>
					<td>Tax</td>
					<td>:</td>
					<td><input type="text" value="340000" name="tax" id="tax" autocomplete="off" size="10"  maxlength="10" onkeydown="validateNumber(event);" /></td>
					<td>Other</td>
					<td>:</td>
					<td colspan='2'><input type="text" value="0" name="other" id="other" autocomplete="off" size="10"  maxlength="10" onkeydown="validateNumber(event);" /></td>
					<td>TOTAL</td>
					<td>:</td>
					<td>
						<input type="text" value="3540000" name="ttl" id="ttl" autocomplete="off" size="10"  maxlength="10" readonly="readonly"/>
					</td>
				</tr>
				<tr>
					<td>Jumlah Penumpang</td>
					<td>:</td>
					<td colspan='10'>
						<input type="text" value="2" name="dewasa" id="dewasa" autocomplete="off" size="2"  maxlength="2" onkeydown="validateNumber(event);" onblur="showDewasa();"/>Dewasa 
						<input type="text" value="1" name="anak" id="anak" autocomplete="off" size="1" maxlength="2" onkeydown="validateNumber(event);" onblur="showAnak();"/>Anak 
						<input type="text" value="1" name="bayi" id="bayi" autocomplete="off" size="1" maxlength="2" onkeydown="validateNumber(event);" onblur="showBayi();"/>Bayi</td>
				</tr>
				
						
					
			</table>
			<div id='isiDewasa'></div>
			<div id='isiAnak'></div>
			<div id='isiBayi'></div>

			<input type="submit" id="generateButton" value="generate"/>

		</form>
	</center></body>
</html>
