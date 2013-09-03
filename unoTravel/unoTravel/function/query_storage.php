<?php
	function getUser($dbTrx,$username,$pass=null,$key=null)
	{	return "SELECT akses from uno_user WHERE user='$username' AND password=AES_ENCRYPT('$pass','$key');";	
	}
	
	function getMaskapai($dbTrx)
	{	return "SELECT nama from uno_maskapai;";	
	}
	
	function getKelas($dbTrx)
	{	return "SELECT kelas from uno_kelas;";	
	}
?>