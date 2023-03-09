<html>
    <head>
        <title>Biodataku</title>
</head>
<body>
    <h3><center>Biodata</center><h3>
    <?php 
        
        echo "Nama : Mutya Anissa Maulinda</br>"; 
        echo "TTL  : Ngawi, 12 Juni 2002</br>";

        //menghitung usia
        $tanggal_lahir = new DateTime("2002-06-12");
        $sekarang = new DateTime("today");
        if ($tanggal_lahir > $sekarang) { 
        $thn = "0";
        $bln = "0";
        $tgl = "0";
        }
        $thn = $sekarang->diff($tanggal_lahir)->y;
        $bln = $sekarang->diff($tanggal_lahir)->m;
        $tgl = $sekarang->diff($tanggal_lahir)->d;
        echo "Usia : $thn "; 
        echo "tahun $bln "; 
        echo "bulan $tgl "; 
        echo "hari</br>";

        echo "Alamat        : Ds. Legundi, Kec. Karangjati, Kab. Ngawi</br>";
        echo "Jenis kelamin : Perempuan</br>";
        echo "Agama         : Islam</br>";
        echo "Hobi          : Menari</br>";
        echo "Email         : mtyanss071@gmail.com</br>";
        echo "Jurusan       : Informatika</br>";
        echo "Fakultas      : Ilmu Komputer</br>";
        echo "Angkatan      : 2021</br>";
    ?>
</body>
</html>