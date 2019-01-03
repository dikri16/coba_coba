<?php
if ($_POST['TbSimpan']) {
        $Txt_nama          = $_POST['Txt_nama'];
        $Txt_email = $_POST['Txt_email'];
        $Txt_komentar = $_POST['Txt_komentar'];

        if (trim($Txt_nama)=="") {
                $pesan[] = "Data nama Belum diisi";
        }
        if (trim($Txt_email)=="") {
                $pesan[] = "Data email kosong";
        }
        if (trim($Txt_komentar)=="") {
                $pesan[] = "Data komentar kosong";
        }

        if (! count($pesan)==0 ) {
                $nama     = $_POST['Txt_nama'];
                $email    = $_POST['Txt_email'];
                $komentar = $_POST['Txt_komentar'];

              

                echo "<b> Kesalahan Input : </b><br>";
                foreach ($pesan as $indeks=>$pesan_tampil) {
                        $urut_pesan++;
                        echo "<font color='#FF0000'>";
                        echo "$urut_pesan . $pesan_tampil <br>";
                        echo "</font>";
                }
            exit;
        }
        else {
                include_once "lib/inc.koneksi.php";


  $SQL = "Insert into buku_tamu (Nama,Email,komentar,tanggal) VALUES('$Txt_nama','$Txt_email','$Txt_komentar','".date('Y-m-d')."')";
		 
	

           mysql_query($SQL,$koneksi)or die ("Gagal query Simpan".mysql_error());
           //echo "Semua Benar,Proses Simpan Berhasil";
		   include "Buku_tamu_tampil.php";
           
           }
           }
           else {
                   
                   exit;
                   }
                   ?>