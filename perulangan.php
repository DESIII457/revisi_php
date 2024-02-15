<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style2.css">
	<link rel="stylesheet" href="icons.css">
	<link rel="stylesheet" href="bootstrap-icons.css">
</head>
<style>
	body {
		background-color: #adb5bd;
	}
</style>
<body>
    <div class="p-3 bg-dark mb-3" >
		<nav class="nav main-nav flex-column flex-md-row justify-content-center" >
			<a class="nav-link active"   href="new.php" >Home</a>
			<a class="nav-link"   href="operator2.php">Operator</a>
			<a class="nav-link"   href="variable.php">Variabel</a>
			<a class="nav-link"   href="form.php">Form</a>
			<a class="nav-link"   href="session.php">Session</a>
			<a class="nav-link"   href="direktori.php">Direktory</a>
            <a class="nav-link"   href="perulangan.php">Perulangan</a>
            <a class="nav-link"   href="exception.php">Exception</a>
            <a class="nav-link"   href="string.php">String</a>
            <a class="nav-link"   href="function.php">Function</a>
            <a class="nav-link"   href="index.php">Upload</a>
		</nav>
	</div>
    
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <div>
                    <h6 class="card-title mb-1">01.Perulangan Bersarang</h6>
                    <p class="text-muted card-sub-title">The default collapse behavior to create an
                        accordion.</p>
                </div>
                <div aria-multiselectable="true" class="accordion accordion-dark" id="accordion2"
                    role="tablist">
                    <div class="card">
                        <div class="card-header" id="headingOne2" role="tab">
                            <a aria-controls="collapseOne2" aria-expanded="false"
                                data-bs-toggle="collapse" href="#collapseOne2">
                                <?php 
                                    $i = 0;
                                    while($i < 10){
                                        for ($j = 0; $j < 10 ; $j++) { 
                                            echo "Ini perulangan ke ($i, $j)<br>";
                                            // fungsi echo adalah untuk menampilkan teks ke layar. fungsi ini dapat
                                            // digunakan dengan tanda kurung maupun tanda kurung
                                        }

                                        $i++;
                                    }

                                    // perulangan bersarang adalah istilah untuk menyebut perulangan dalam perulangan.
                                    // dalam bahsa inggris, perulangan bersarang disebut nested loop
                                ?>
                            </a>
                        </div>
                    </div>
                </div><!-- accordion -->
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <div>
                    <h6 class="card-title mb-1">02.do-while</h6>
                    <p class="text-muted card-sub-title">The default collapse behavior to create an
                        accordion.</p>
                </div>
                <div aria-multiselectable="true" class="accordion accordion-dark" id="accordion2"
                    role="tablist">
                    <div class="card">
                        <div class="card-header" id="headingOne2" role="tab">
                            <a aria-controls="collapseOne2" aria-expanded="false"
                                data-bs-toggle="collapse" href="#collapseOne2">
                                <?php
                                    // perulangan do/while sama seperti perulangan while. ia juga tergolong dalam oncounted loop.
                                    // perbedaan do/while dengan while terletak pada cara ia memulai perulangan.
                                    // perulangan do/while akan selalu melakukan pengulangann sebanyak 1 kali, kemudian melakukan
                                    // pengecekan kondisi. sedangkan perulangan while akan mengecek kondisi terlebih dahulu,
                                    // baru melakukan pengulangann.

                                    // berikut contoh nya

                                    $ulangi = 10;
                                    // ini variable nya

                                    do {
                                        echo "<p>Ini adalah perulangan desi yang lagi lagi ke isekai ke-$ulangi</p>";
                                        $ulangi--;
                                    } while ($ulangi > 0);

                                    ?>
                            </a>
                        </div>
                    </div>
                </div><!-- accordion -->
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <div>
                    <h6 class="card-title mb-1">03.FOR</h6>
                    <p class="text-muted card-sub-title">The default collapse behavior to create an
                        accordion.</p>
                </div>
                <div aria-multiselectable="true" class="accordion accordion-dark" id="accordion2"
                    role="tablist">
                    <div class="card">
                        <div class="card-header" id="headingOne2" role="tab">
                            <a aria-controls="collapseOne2" aria-expanded="false"
                                data-bs-toggle="collapse" href="#collapseOne2">
                                <?php

                                for ($i = 0; $i < 14; $i++){
                                    echo "<h2>Desi ada di Isekai ke-$i</h2>";
                                    // fungsi echo adalah untuk menampilkan teks ke layar. fungsi ini dapat
                                    // digunakan dengan tanda kurung maupun tanda kurung
                                }

                                // perulangan for adalah perulangan yang termasuk dalam counted
                                // loop, karena kita bisa menentukan jumlah perulangan nya. 

                                // variable $i dalam perulangan for befungsi sebagai counter yang menghitung
                                // berapa kali ia akan mengulang (misalnya kita nulis 10; $i++ itu akan jadi perulangan 
                                // yang terjadi sebanyak 10 kali) 

                                // hitungan akan dimulai dari nol karena kita memberika nilai $i = 0

                                // lalu perulangan akan di ulang selama nilai $i lebih kecill dari 10. Artinya, perulangan
                                // ini akan mengulang sebanya 10 kali. maksud dari $i++ adalah nilai $i akan ditambah 1 setiap kali
                                // melakukan perulangan
                                ?>
                            </a>
                        </div>
                        
                    </div>
                </div><!-- accordion -->
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <div>
                    <h6 class="card-title mb-1">04.foreach</h6>
                    <p class="text-muted card-sub-title">The default collapse behavior to create an
                        accordion.</p>
                </div>
                <div aria-multiselectable="true" class="accordion accordion-dark" id="accordion2"
                    role="tablist">
                    <div class="card">
                        <div class="card-header" id="headingOne2" role="tab">
                            <a aria-controls="collapseOne2" aria-expanded="false"
                                data-bs-toggle="collapse" href="#collapseOne2">
                                <?php

                                // perulangan foreavh sama seperti perulangan for. namun ia lebih khusus
                                // digunakan untuk mencetak array

                                $books = [
                                    "Panduan ke Isekai untuk pemula",
                                    "Desi Lisnawati kelas 11 rpl",
                                    "php dan mysqsl",
                                    "perulangan"
                                ];

                                echo "<h5>Judul Buku PHP:</h5>";
                                // fungsi echo adalah untuk menampilkan teks ke layar. fungsi ini dapat
                                // digunakan dengan tanda kurung
                                echo "<ul>";
                                foreach ($books as $buku) {
                                    echo "<li>$buku</li>";
                                }
                                echo "</ul>";

                                ?>
                            </a>
                        </div>
                    </div>
                </div><!-- accordion -->
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <div>
                    <h6 class="card-title mb-1">05.while</h6>
                    <p class="text-muted card-sub-title">The default collapse behavior to create an
                        accordion.</p>
                </div>
                <div aria-multiselectable="true" class="accordion accordion-dark" id="accordion2"
                    role="tablist">
                    <div class="card">
                        <div class="card-header" id="headingOne2" role="tab">
                            <a aria-controls="collapseOne2" aria-expanded="false"
                                data-bs-toggle="collapse" href="#collapseOne2">
                                <?php
                                    $ulangi = 0;

                                    while ($ulangi < 10){
                                            echo "<p>Ini adalah perulangan desi ke dunia anime ke-$ulangi</p>";
                                            $ulangi++;

                                    }

                                    echo "<p>Hasilnya sama kaya yang perulangan for</p>";

                                    // perulangan while adalah perulangan yang termasuk dalam uncounted loop. karena
                                    // biasanya digunakan untuk mengulang sesuatu yang belum jelas jumlah pengulangannya
                                    // namun, perulangan while juga bisa digunakan seperti perulangan for sebagai counted loop
                                    // (kalo nulis ($ulangi > 10) itu hasilnya bakal gaada yang tampil nya cuman echo yang paling
                                    // bawah)

                                    // hati hati jangan sampai lupa menambahkan increment, atau kode yang akan memengaruhi
                                    // perulangan. karena kalau tidak, pengulangan nya gak bakalan berenti dan bakal bikin laptop 
                                    // kita nge hang 
                                ?>
                            </a>
                        </div>
                    </div>
                </div><!-- accordion -->
            </div>
        </div>
    </div>
</body>
</html>