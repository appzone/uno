<?php 
	require('security_check.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>UNO TRAVEL MANAGEMENT SITE</title>
	<script type="text/javascript">
		function ShowChangePassword()
		{
			if (window.showModalDialog) 
			{
				window.showModalDialog("change_password.php","ChangePassword","dialogWidth:350px;dialogHeight:170px");
			} 
			else 
			{
				window.open('change_password.php','ChangePassword',
				'height=170,width=350,toolbar=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no ,modal=yes');
			}
		} 

		var refreshId = setInterval(function()
		{
		     $('#informasi').fadeOut("slow").load('informasi.php').fadeIn("slow");
		}, 600000);


	</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection, tv" />
<link rel="stylesheet" href="css/style-print.css" type="text/css" media="print" />
</head>
<body>
<div id="wrapper">
  <div class="title">
    <div class="title-top">
      <div class="title-left">
        <div class="title-right">
          <div class="title-bottom">
            <div class="title-top-left">
              <div class="title-bottom-left">
                <div class="title-top-right">
                  <div class="title-bottom-right">
                    <h1><a href="index.html"><span>UNO TRAVEL</span></a></h1>
                    <p><span>Aplikasi manajemen UNO TRAVEL</span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr class="noscreen" />
  <div class="content">
    <div class="column-left">
      <h3><span>Selamat datang, <?php echo $_SESSION['username'];?></span></h3>
      <a href="#skip-menu" class="hidden">Skip menu</a>
      <ul class="menu">
		<?php
							if(!isset($_SESSION['akses']) || strlen($_SESSION['akses']) <= 0)
								header('location:index.php?error=Silahkan_login_terlebih_dahulu');
							echo '<li><a href="pdfmaker.php" target="iframe_body" class=" active">Pembelian</a></li>';
                            if(strcmp($_SESSION['akses'],'admin')==0 || strcmp($_SESSION['akses'],'petugas'==0 ))
								echo '<li><a href="pengaturan.php" target="iframe_body">Pengaturan</a></li>';
							if(strcmp($_SESSION['akses'],'admin')==0)
								echo '<li><a href="laporan.php" target="iframe_body">Laporan</a></li>';
		?>	         
      <li><a href="logout.php">Keluar</a></li>
	  </ul>
    </div>
    <div id="skip-menu"></div>
    <div class="column-right">      
        
          <iframe src="pdfmaker.php" name="iframe_body" width= "800" height = "600" frameborder="0"></iframe>
        
    </div>
    <div class="cleaner">&nbsp;</div>
  </div>
</div></body>
</html>
