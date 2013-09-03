<?php
	if (!isset($_SESSION)) {
 	   session_start();
	}
	require('connection/connection.php');
	require('connection/config_file.php');
	require('function/clear_sql_value.php');
	require('function/query_storage.php');
	
	if(!isset($_POST['username']) || !isset($_POST['password']))
		header('location:index.php');
	else
	{	try
		{
			$ClearHelper=new ClearSQLValue();
			$UserName=$ClearHelper->Clear($_POST['username']);
			$Pass=$ClearHelper->Clear($_POST['password']);
						
			
			$Conn=new ConnectionClass();
			$query=getUser(GetConfig('DBUNO'),$UserName,$Pass,GetConfig('AESKey'));
			
			$result=$Conn->SelectSQL($query);
			$LoginSuccess=false;
			
			if($result!=null)
			{
				$_SESSION['username']=trim($UserName);
				$_SESSION['akses']=trim($result[0]["akses"]);
				$_SESSION['x']="";					
				
				$LoginSuccess=true;
			}
			$Conn=null;
			
			
			if($LoginSuccess)
				header('location:first_page.php');
			else
			{
				session_destroy();
				session_start();
				$_SESSION['x'] = 'Login Gagal';
				header('location:index.php');
			}
		}
		catch(Exception $e)
		{
			echo $e->getMessage();
		}
		
	}
?>
