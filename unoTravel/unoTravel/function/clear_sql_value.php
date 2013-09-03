<?php
	class ClearSQLValue
	{
		function Clear($value)
		{
			$value=trim($value);
			$value = stripslashes($value);
			$value = mysql_escape_string($value);
			return $value;
		}
	}
?>