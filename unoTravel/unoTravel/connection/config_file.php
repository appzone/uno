<?php
	function GetConfig($conf)
	{
		$TrmConf=strtoupper(trim($conf));
		
		if(strcmp($TrmConf,"DBSERVER")==0)
			return "localhost";
		else if(strcmp($TrmConf,"USERDB")==0)
			return "root";
		else if(strcmp($TrmConf,"PASSDB")==0)
			return "";
		else if(strcmp($TrmConf,"DBUNO")==0)
			return "unotravel";
		else if(strcmp($TrmConf,"AESKEY")==0)
			return "uno_travel";
		else
			throw new Exception("Config is not found");
	}
?>
