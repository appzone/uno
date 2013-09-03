<?php 
	require_once('connection/config_file.php');
	require_once('connection/connection.php');
	if (!isset($_SESSION)) {
 	   session_start();
	}
	if(isset($_SESSION['username']))
		header('location:first_page.php');
	if(!isset($_SESSION['x']))
		$_SESSION['x']="";
 	
?>
<html>
	<head>
		<title>UNO TRAVEL</title>
		
	</head>
	<body>
	<br><br>
		<center><form id='login_form' method='POST' action='check_login.php'>
			<table align="center" >
				<tr>
					<td colspan="3">
						<img src='img/header.png'  width='750' height='175'/>
					</td>
				</tr>
				<tr>
				
					<td>Username</td>
					<td>:</td>
					<td><input type="text" name="username" autocomplete="off"/></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><input type="password" name="password" autocomplete="off"/></td>
				</tr>	
				
				<?php					
						if(strcmp($_SESSION['x'],"logoutsukses")==0)
						{	echo "<tr>";
							echo "<td colspan='3' style='color:green'>Anda berhasil keluar, silahkan login ulang untuk menggunakan kembali aplikasi UNO TRAVEL</td>";
							echo "</tr>";
						}
						else
						{	echo "<tr>";
							echo "<td colspan='3' style='color:red'>" . $_SESSION['x'] . "</td>";
							echo "</tr>";
						}

				?>
				<tr>
					<td colspan="3">
						<input type="submit" id="loginButton" value="Log-in"/>
					</td>
				</tr>
			</table>
		</form>
	</center></body>
</html>
