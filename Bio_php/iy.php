<style>
    *{
    margin: 0;
    padding: 0;
    font-family: verdana;
}

.navigasi{
    background-color: #5D4D4A; 
    width: 100%;
    height: 70px;
    color: white;
    position: fixed;
}

.logo{
    float: left;
    padding-top: 20px;
    padding-bottom: 10px;
    padding-left: 30px;
}

.menu{
    margin-left: 800px;
    padding-top: 27px;
}
.menu ul li{
    list-style: none;
    display: inline-block;
    margin-right: 50px;
}

.menu ul li a{
    text-decoration: none;
    color: white;
}

.menu ul li a:hover{
    color: #9C847F;
    font-style: italic;
}

.banner{
    background-color: #9C847F;
    height: 650px;
    text-align: center;
    color: white;
    margin-bottom: 100px;
}

.banner img{
    border-radius: 500px;
    height: 250px;
    border: 6px solid light brown;
    margin-top: 100px;
}

.banner h1{
    margin-top: 10px;
    margin-bottom: 10px;
}

.banner button{
    margin-top: 60px;
    padding: 10px;
    border-radius: 100px;
    border: none;
}

.banner button:hover{
    background-color: #9C847F;
    border: 1px solid white;
}

h1 span:before{
    content: '';
    animation: gerak infinite 8s ease;
    transform: translateY(-50%);
    color: #5D4D4A;
    font-size: 50px;
}

@keyframes gerak{
    0%{
        content: 'Welcome to my biodata';
    }
    50%{
        content: 'My name is Mutya';
    }
    100%{
        content: 'Salam kenal';
    }
}

.riwayat{
    text-align: center;
    color: #5D4D4A;
    margin-top: 100px;
    align-content: center;
}

.box-kiri, .box-tengah, .box-kanan{
    width: 250px;
    height: 300px;
    background-color: #f0f0f0;
    padding: 30px 30px;
    margin: 55px 55px 20px 55px;
    border-radius: 10px;
    float: left;
}

.box-kiri, .box-tengah, .box-kanan li{
    text-align: left;
}

.box-kiri:hover, .box-tengah:hover, .box-kanan:hover{
    background-color: #5D4D4A;
    color: #f0f0f0;
}

.riwayat h3, p{
    margin-top: 20px;
    margin-bottom: 10px;
    padding-top: 0;
    padding-left: 20px;
    padding-right: 20px;
}

.skill{
    text-align: center;
    color: #5D4D4A;
    margin-top: 500px;
    margin-bottom: 200px;
    align-content: center;
    padding-bottom: 60px;
}

.skill img{
    padding-top: 150px;
    padding-left: 30px;
    padding-right: 30px;
    height: 100px;
}

.contact {
    text-align: center;
    color: #5D4D4A;
    margin-top: 200px;
    margin-bottom: 50px;
    align-content: center;
    padding-bottom: 100px;
}

.contact a {
    color: black;
    color: #5D4D4A;
    padding-top: 200px;
    line-height: 60px;
    width: 100px;
    height: 100px;

}

</style>

<!DOCTYPE html>
<html>
    <head>
        <title>My Portofolio</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>
    <body>
    
        <!-- navbar -->
        <!----navigasi---->
    <nav>
    <div class="navigasi">
        <div class="logo">
            <h2>Mtyanss</h2>
        </div>

        <div class="menu">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
    </nav>

    <!----banner---->
    <div id="home">
    <div class="banner">
        <img src="C:\xampp\htdocs\Bio_php\f.jpeg">
        <h1>Hallo! <span></span></h1>
        <p>Aku Mutya, seorang mahasiswa prodi Informatika di UPN "Veteran" Jawa Timur. Saat ini aku kuliah semester 4.</p>
        <p>thanks for reading, have a nice day :)</p>

        <a href="#read"><button>Read more</button></a>
    </div>
    </div>

    <!----- riwayat ---> 
    <div id="about">
    <div id="read">
    <div class="riwayat">
        <h1>About</h1>
        <div class="box-kiri">
            <img src="C:\xampp\htdocs\Bio_php\profil.png" alt="png">
            <p><h3>Profil</h3></p>
            <ul>
                <li>Nama : Mutya Anissa Maulinda</li>
                <li>TTL  : Ngawi, 12 Juni 2002</li>
<?php
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

    ?>

                <li>Alamat : Ds. Legundi, Kec. Karangjati, Kab. Ngawi</li>
            </ul>
        </div>
        <div class="box-tengah">
            <img src="C:\xampp\htdocs\Bio_php\unv.png" alt="png">
            <p><h3>Education</h3></p>
            <ul>
                <li>SDI Al-Amnaniyah 2 Bangon</li>
                <li>SMPN 1 Karangjati</li>
                <li>SMAN 1 Ngawi</li>
            </ul>
        </div>
            <div class="box-kanan">
                <img src="C:\xampp\htdocs\Bio_php\dance.png" alt="png">
                <p><h3>Hobby</h3></p>
            <ul>
                <li>Dancing</li>
                <li>Drawing</li>
                <li>Travelling</li>
            </ul>
            </div>
        </div>
    </div>
    </div>
    </div>

     <!----- skills ---> 
    <div id="skills">
     <div class="skill">
        <h1>Skills</h1>
        <img src="C:\xampp\htdocs\Bio_php\canva.png" alt="png">
        <img src="C:\xampp\htdocs\Bio_php\c++.png" alt="png">
        <img src="C:\xampp\htdocs\Bio_php\sql.png" alt="png">
        <img src="C:\xampp\htdocs\Bio_php\oracle.png" alt="png">
    </div>
</div>

    <!-- contact -->
    <div id="contact">
    <div class="contact">
        <h1>Contact</h1>
        <a href="https://instagram.com/mtyanss?igshid=MDM4ZDc5MmU="><i class="fa-brands fa-instagram"></i></a>
        <a href="https://twitter.com/mycxx21?t=3TPkDbtQngvRyaDWHRNewQ&s=09"><i class="fa-brands fa-twitter"></i></a>
        <a href="https://wa.me/6285783281134"><i class="fa-brands fa-whatsapp"></i></a>
        <a href="https://github.com/MutyaAnss"><i class="fa-brands fa-github"></i></a>
    </div>
</div>
    </body>
</html>