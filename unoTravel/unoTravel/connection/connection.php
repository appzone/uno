<?php
	class ConnectionClass
	{
		var $Connection;
		
		function __construct()
		{
			$this->Connection=null;
		}
		
		public function OpenConnection()
		{	
			try
			{
				require_once('config_file.php');
				if($this->Connection==null)
				{
					$this->Connection=mysql_connect(GetConfig("DBServer"), GetConfig("UserDB"), GetConfig("PassDB"));
					if(!$this->Connection)
					{
						$this->Connection=null;
						throw new Exception('Cannot connect to database. Error : ' . mysql_error());
					}
				}	
				else if(!mysql_ping($this->Connection))
					throw new Exception('Cannot reconnect to database. ERROR : ' . mysql_error());
					
				mysql_select_db(GetConfig("DBUNO"));
			}
			catch(Exception $e)
			{
				throw new Exception($e->getTraceAsString() . " => " . $e->getMessage());
			}
		}
		
		public function CloseConnection()
		{
			try
			{
				if($this->Connection!=null)
				{
					mysql_close($this->Connection); //or throw new Exception('Cannot close database connection. Error : ' . mysql_error());
					$this->Connection=null;
				}
			}
			catch(Exception $e)
			{
				throw new Exception($e->getTraceAsString() . " => " . $e->getMessage());
			}
		}
		
		public function ErrorMessage($message)
		{
			try
			{
				$this->CloseConnection();
				$this->Connection=null;
			}
			catch(Exception $e)
			{
				throw new Exception("$e->getTraceAsString() => $e->getMessage()\n");
			}
		}
		
		public function SelectSQL($query)
		{
			try
			{
				$this->OpenConnection();
				$result=mysql_query($query,$this->Connection);
				$Return=null;
				if(!$result)
					throw new Exception('Cannot execute query. ERROR : '. mysql_error());
				else
				{
					while($row=mysql_fetch_array($result,MYSQL_BOTH))
					{
						$Return[]=$row;
					}
					mysql_free_result($result);
					$this->CloseConnection();
					return $Return;
				}
			}
			catch(Exception $e)
			{
				$this->ErrorMessage($e->getTraceAsString() . " => " . $e->getMessage());
				try
				{
					$this->CloseConnection();
				}
				catch(Exception $e)
				{}
			}
		}
		
		public function InsertUpdateDeleteSQL($query)
		{
			try
			{
				$this->OpenConnection();
				$result=mysql_query($query,$this->Connection);
				if(!$result)
					throw new Exception('Cannot execute query. ERROR : '. mysql_error());
				
				$this->CloseConnection();
				
				return $result;
			}
			catch(Exception $e)
			{
				$this->ErrorMessage($e->getTraceAsString() . " => " . $e->getMessage());
				try
				{
					$this->CloseConnection();
				}
				catch(Exception $e)
				{}
			}
		}
	}
?>
