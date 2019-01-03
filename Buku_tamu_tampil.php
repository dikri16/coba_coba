<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<?php
 include_once "lib/inc.koneksi.php";
 include_once "lib/inc.librari.php";
?>
</head>
<body>


<div id="bg">
</div>
<div id="main">
<div id="header">
        <div style="height: 40px;">
    </div>

        <div id="logo">

    </div>
    <div id="buttons">
      <a href="index.html" class="but"  title="">Home</a>
      <a href="Kesenian_Bali.html" class="but" title="">Kesenian Bali </a>
      <a href="Pariwisata.html"  class="but" title="">Pariwisata</a>
      <a href="Buku_tamu.php" class="but" title="">Buku Tamu</a>
    </div>
</div>
                        <div id="content_top"></div>
                               <div id="content">
                        <div style=" height:2px"></div>

                        <div id="center">
                          <h2>
                              <center>

<table class="keliling" width="99%">
<tr>
<td height="22" colspan="2" align="center" bgcolor="#00CCFF" class="head">
<b>DAFTAR PENGIRIMAN BUKU TAMU </b></td>
</tr>
<tr>
<td width="20%" align="right"></td>
<td width="80%" align="right">&nbsp;</td>
</tr>                          
<?php
$sql_tamu ="SELECT * FROM buku_tamu ORDER BY id_btamu";
$qry_tamu =mysql_query($sql_tamu,$koneksi)
or die ("query menampilkan salah ".mysql_error());
while ($data= mysql_fetch_array($qry_tamu, $koneksi)){
?>
<tr align="left">
<td colspan="2" bgcolor="#00CCFF">
<b>pengirimman Tanggal
[ <?php echo tgl_eng_to_ind($data['tanggal']);?> ]
</b></td>
</tr>
<tr>
<td align="right" bgcolor="#00CCFF"><b>Nama : </b>
</td>
<td bgcolor="#E6F6FF"><?php echo "$data[Nama]";?>
</td>
</tr>
<tr>
<td align="right" bgcolor="#00CCFF"><b>Email : </b>
</td>
<td bgcolor="#E6F6FF"><?php  echo "$data[Email]";?>
</td>
</tr>
<tr>
<td align="right" valign="top" bgcolor="#00CCFF">
<b>Pesan : </b></td>
<td valign="top" bgcolor="#E6F6FF">
<?php echo "$data[komentar]";?>
</td>
</tr>
<?php } ?>
<tr bgcolor="#00CCFF">
<td></td>
<td align="right">&nbsp;</td>
</tr>
</body>
</html>