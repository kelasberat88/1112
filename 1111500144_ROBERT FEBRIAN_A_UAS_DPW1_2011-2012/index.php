<html>
<head>
<title>layout</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	background-color: #0066CC;
	background-image: url(images/226.jpg);
}
.style2 {color: #00FF66}
.style3 {color: #FF0000}
.style4 {
	color: #000000;
	font-size: 12px;
}
.style7 {
	font-size: 14px;
	color: #FF0000;
	font-weight: bold;
}
-->
</style></head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<embed hidden src="Teriyaki_boyz-tokyo_drift_(fast_and_furious).wav" autostart="true">


<div align="center">
  <!-- ImageReady Slices (layout.psd) -->
  <table id="Table_01" width="800" height="601" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="10">
        <img src="images/layout_01.gif" width="800" height="128" alt=""></td>
	  </tr>
    <tr>
      <td colspan="4">
        <img src="images/layout_02.gif" width="172" height="1" alt=""></td>
	    <td colspan="6" rowspan="2" background="images/layout_03.gif"><div align="right" class="style3">  <blink> WELCOME IN MY WEBSITE  </blink> </div></td>
	  </tr>
    <tr>
      <td rowspan="2">
        <img src="images/layout_04.gif" width="1" height="24" alt=""></td>
	    <td colspan="2">
		    <img src="images/layout_05.gif" width="170" height="23" alt=""></td>
	    <td>
		    <img src="images/layout_06.gif" width="1" height="23" alt=""></td>
	  </tr>
    <tr>
      <td>
        <img src="images/layout_07.gif" width="150" height="1" alt=""></td>
	    <td colspan="3" rowspan="2">
		    <a href="index.php?kirimhalaman=profile"><img src="images/layout_08.gif" alt="" width="155" height="44" border="0"></a></td>
	    <td colspan="2">
		    <img src="images/layout_09.gif" width="155" height="1" alt=""></td>
	    <td colspan="3">
		    <img src="images/layout_10.gif" width="339" height="1" alt=""></td>
	  </tr>
    <tr>
      <td colspan="2">
        <a href="index.php?kirimhalaman=homeeex"><img src="images/layout_11.gif" alt="" width="151" height="43" border="0"></a></td>
	    <td>
		    <a href="index.php?kirimhalaman=gallery"><img src="images/layout_12.gif" alt="" width="154" height="43" border="0"></a></td>
	    <td colspan="2">
		    <a href="index.php?kirimhalaman=bukutamuu"><img src="images/layout_13.gif" alt="" width="186" height="43" border="0"></a></td>
	    <td background="images/layout_14.gif">
		<?php
		$file="hit.txt";
		$fopen=fopen($file,"r+");
		$gets=fgets($fopen,255);
		fclose($fopen);
		
		$fopen=fopen($file,"w");
		$gets=$gets +1;
		$put=fputs($fopen,$gets);
		
		echo "<font size=2><b> Total Viewers = $gets </b></font>";
		fclose($fopen);
		?> </td>
	    <td>
		    <img src="images/layout_15.gif" width="1" height="43" alt=""></td>
    </tr>
    <tr>
      <td colspan="4" valign="top" background="images/layout_16.gif"><div align="center">
        <p><span class="style2">Today<br>
            <?php $tanggal = date ("l,d F Y"); echo $tanggal; ?>
            </span></p>
        <p><br>
          <a href="images/196818_20120630022113.JPG"><img src="images/1-22337_PCMO_160x600_backup.png" width="160" height="500" border="0"></a><br>
          </p>
        <p align="center"><strong>Recent Photo's </strong><br>
          <br>
            <a href="images/Untitleddd1.jpg"><img src="images/Untitleddd1.jpg" width="50" height="50" border="0"></a><a href="images/Untitled1.jpg"><img src="images/Untitled1.jpg" width="50" height="50" border="0"></a><a href="images/Untitled12.jpg"><img src="images/Untitled12.jpg" width="50" height="50" border="0"></a><br>
            <a href="images/Untitleed1.jpg"><img src="images/Untitleed1.jpg" width="50" height="50" border="0"></a><a href="images/1-22337_PCMO_160x600_backup.jpg"><img src="images/1-22337_PCMO_160x600_backup.jpg" width="50" height="50" border="0"></a><a href="images/Uuntitledh.jpg"><img src="images/Uuntitledh.jpg" width="50" height="50" border="0"></a><br>
            <br>
            <img src="images/forums_headerstyle.png" width="160" height="72"><br>
            <span class="style3">Sport Truck<em><strong> <a href="index.php?kirimhalaman=community">Community!!</a></strong></em> <br>
            <span class="style4"><br>
            <img src="images/rides_headerstyle.png" width="160" height="72"><br>
            <br>
            </span></span> <img src="images/1994-chevrolet-c1500-3.jpg" width="140" height="75"><br>
            <span class="style7"><a href="images/1994-chevrolet-c1500-1.jpg">1994 Chevrolet C1500</a></span> <br>
            <br>
            <img src="images/1982-chevrolet-c10-8.jpg" width="140" height="75"><br>
            <span class="style7"><a href="images/1982-chevrolet-c10-1.jpg">1982 Chevrolet C10</a></span><br>
            <br>
            <img src="images/1976-chevrolet-c10_pickup-1.jpg" width="140" height="75"><br>
            <span class="style7"><a href="images/1976-chevrolet-c10-pickup-la-beats-entertainment-product.jpg">1976 Chevrolet C10<br>
          PickUp</a> </span><br>
            <br>
            <br>
            <br>
        </p>
        </div></td>
	    <td height="369" colspan="6" valign="top" bgcolor="#000000"><div align="center">
		<?php
			$tampung = $_GET[kirimhalaman];
			if ($tampung=="")
				//jika tidak ada link yang di klik
				include("homeeex.php");
			elseif (file_exists("$tampung.php"))
				//jika file ada
				include("$tampung.php");
			elseif (!file_exists("$tampung.php"))
				//jika file tidak ada
				echo "Masih Dalam Tahap Pengembangan";
		?>
	  </div></td>
    </tr>
    <tr>
      <td colspan="9" background="images/layout_18.png"><div align="center"><marquee behavior="scroll" direction="left" scrolldelay="100" scrollamount="5"><blink>Copyright@2012_RobertFebrian_1111500144_A</blink></marquee></div></td>
	    <td rowspan="2">
		    <img src="images/layout_19.gif" width="1" height="35" alt=""></td>
	  </tr>
    <tr>
      <td colspan="9">
        <img src="images/layout_20.gif" width="799" height="1" alt=""></td>
	  </tr>
    <tr>
      <td>
        <img src="images/spacer.gif" width="1" height="1" alt=""></td>
	    <td>
		    <img src="images/spacer.gif" width="150" height="1" alt=""></td>
	    <td>
		    <img src="images/spacer.gif" width="20" height="1" alt=""></td>
	    <td>
		    <img src="images/spacer.gif" width="1" height="1" alt=""></td>
	    <td>
		    <img src="images/spacer.gif" width="134" height="1" alt=""></td>
	    <td>
		    <img src="images/spacer.gif" width="154" height="1" alt=""></td>
	    <td>
		    <img src="images/spacer.gif" width="1" height="1" alt=""></td>
	    <td>
		    <img src="images/spacer.gif" width="185" height="1" alt=""></td>
	    <td>
		    <img src="images/spacer.gif" width="153" height="1" alt=""></td>
	    <td>
		    <img src="images/spacer.gif" width="1" height="1" alt=""></td>
	  </tr>
  </table>
  <!-- End ImageReady Slices -->
</div>
</body>
</html>