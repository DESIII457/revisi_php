<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style2.css">
	<link rel="stylesheet" href="icons.css">
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
</div>
<div class="row row-sm">
    <div class="col-lg-4">
        <div class="card mg-b-20">
            <div class="card-body">
                <div class="ps-0">
                    <div class="main-profile-overview">
                        <div class="d-flex justify-content-between mg-b-20">
                            <div>
                                <h5 class="main-profile-name">Desi Lisnawati</h5>
                                <p class="main-profile-name-text">11 Rekayasa perangkat lunak</p>
                            </div>
                        </div>
                        <h6>Bio</h6>
                        <div class="main-profile-bio">
                        Operator adalah simbol-simbol yang digunakan untuk melakukan operasi terhadap suatu nilai dan variabel. 
                        Ada 6 Jenis operator dalam pemrograman PHP yang harus kita ketahui: Operator Aritmatika; Operator Penugasan atau 
                        Assignment; Operator Increment & Decrement; Operator Relasi atau pembanding; Operator Logika; Operator Bitwise;
                        </div><!-- main-profile-bio -->
                        <div class="main-profile-work-list">
                            
                        </div><!-- main-profile-work-list -->
                        <hr class="mg-y-30">
                        <label class="main-content-label tx-13 mg-b-20">Social</label>
                        <div class="main-profile-social-list">
                            <div class="media">
                                <div class="media-icon bg-primary-transparent text-primary">
                                    <img src="img\svg\instagram.png" alt="" >
                                </div>
                                <div class="media-body">
                                    <span>Github</span> <a href="">github.com/spruko</a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-icon bg-success-transparent text-success">
                                    <img src="img\svg\twitter.png" alt="" >
                                </div>
                                <div class="media-body">
                                    <span>Twitter</span> <a href="">twitter.com/spruko.me</a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-icon bg-info-transparent text-info">
                                    <img src="img\svg\tiktok.png" alt="" >
                                </div>
                                <div class="media-body">
                                    <span>Tiktok</span> <a href="">linkedin.com/in/spruko</a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-icon bg-danger-transparent text-danger">
                                    <img src="img\svg\youtube.png" alt="" >
                                </div>
                                <div class="media-body">
                                    <span>My Portfolio</span> <a href="">spruko.com/</a>
                                </div>
                            </div>
                        </div><!-- main-profile-social-list -->
                    </div><!-- main-profile-overview -->
                </div>
            </div>
        </div>
    </div>
<div class="col-lg-8">
    <div class="main-content-body main-content-body-profile">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h6 class="card-title mb-1">Aritmatika</h6>
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

                                            $a = 5;
                                            $b = 2;
                                            // mula mula kita punya 2 variable, yaitu $a dan $b dengan nilai awal 5 dan 2
                                            // kemudian kita menggunakan operator aritmatika untuk melakukan
                                            // operasi terhadap dua nilai atau variable tersebut. lalu hasilnya disimpan ke variable $c

                                            // penjumlahan
                                            $c = $a + $b;
                                            echo "$a + $b = $c";
                                            echo "<hr>";

                                            // pengurangan
                                            $c = $a - $b;
                                            echo "$a - $b = $c";
                                            echo "<hr>";

                                            // perkalian
                                            $c = $a * $b;
                                            echo "$a * $b = $c";
                                            echo "<hr>";
                                            // perhatikan juga simbol simbol yang dipakai. pada matematika, perkalian biasanya
                                            // menggunakan simbol x. namun didalam pemrograman perkalian itu menggunakan simbol *.

                                            // pembagian
                                            $c = $a / $b;
                                            echo "$a / $b = $c";
                                            echo "<hr>";

                                            // sisa bagi
                                            $c = $a % $b;
                                            echo "$a % $b = $c";
                                            echo "<hr>";
                                            // lalu operator %(modulo), ini adalah operator untuk menghitung sisa bagi

                                            // pangkat
                                            $c = $a ** $b;
                                            echo "$a ** $b = $c";
                                            echo "<hr>";
                                        ?>
                                    </a>
                                </div>
                                <div aria-labelledby="headingOne2" class="collapse show"
                                    data-bs-parent="#accordion2" id="collapseOne2" role="tabpanel">
                                    <div class="card-body">
                                         mula mula kita punya 2 variable, yaitu $a dan $b dengan nilai awal 5 dan 2
                                         kemudian kita menggunakan operator aritmatika untuk melakukan
                                         operasi terhadap dua nilai atau variable tersebut. lalu hasilnya disimpan ke variable $c
                                    </div>
                                </div>
                            </div>
                        </div><!-- accordion -->
                    </div>
                </div>
            </div>
        </div>   
    </div>
    <div class="main-content-body main-content-body-profile">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h6 class="card-title mb-1">Bitwise</h6>
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
                                            // operator bitwise merupakan operator yang digunakan untuk operasi bit(biner)

                                            // operator ini terdiri dari:
                                            // AND                 &
                                            // OR                  |
                                            // XOR                 ^
                                            // NEGASI/KEBALIKAN    ~
                                            // LEFT SHIFT          <<
                                            // RIGHT SHIFT         >>

                                            $a = 60;
                                            $b = 13;
                                            // operator ini berlaku untuk tipe data int, long, short, char, dan byte.
                                            // operator ini akan menghitung dari bit ke bit.
                                            // misanya, kita punya variabel a = 60 dan b = 13.
                                            // bila dibuat ke dalam bentuk binner, akan menjadi seperti ini

                                            // a = 00111100
                                            // b = 00001101

                                            // bitwise AND 
                                            $c = $a & $b;
                                            echo "$a & $b = $c";
                                            echo "<br>";
                                            // a = 00111100
                                            // b = 00001101
                                            // a & b = 00001100

                                            // bitwise OR
                                            $c = $a | $b;
                                            echo "$a | $b = $c";
                                            echo "<br>";
                                            // a = 00111100
                                            // b = 00001101
                                            // a | b = 00111101

                                            // bitwise XOR
                                            $c = $a ^ $b;
                                            echo "$a ^ $b = $c";
                                            echo "<br>";
                                            // a = 00111100
                                            // b = 00001101
                                            // a ^ b = 00110001

                                            // shift left
                                            $c = $a << $b;
                                            echo "$a << $b = $c";
                                            echo "<br>";

                                            // shift right
                                            $c = $a >> $b;
                                            echo "$a >> $b = $c";
                                            echo "<br>";

                                            // konsepnya memang hampir sama dengan operator logika 
                                            // bedanya, bitwise digunakan untuk binner
                                        ?>
                                    </a>
                                </div>
                                <div aria-labelledby="headingOne2" class="collapse show"
                                    data-bs-parent="#accordion2" id="collapseOne2" role="tabpanel">
                                    <div class="card-body">
                                         konsepnya memang hampir sama dengan operator logika 
                                         bedanya, bitwise digunakan untuk binner
                                    </div>
                                </div>
                            </div>
                        </div><!-- accordion -->
                    </div>
                </div>
            </div>
        </div>   
    </div>
    <div class="main-content-body main-content-body-profile">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h6 class="card-title mb-1">Increment Dan Decrement</h6>
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
                                        // operator increment dan decrement merupakan operator yang digunakan
                                        // untu menambah +1 (tambah satu) dan mengurangi -1 (kurangi dengan statu)
                                        // operator increment menggunakan  simbol++, sedangkan decrement mnggunakan simbol --

                                        $score = 0;

                                        $score++;
                                        $score++;
                                        $score++;
                                        // nilai score akan menjadi 3 karena kta melakukan  increment sebanyak 3 kali

                                        echo $score;

                                        ?>
                                    </a>
                                </div>
                                <div aria-labelledby="headingOne2" class="collapse show"
                                    data-bs-parent="#accordion2" id="collapseOne2" role="tabpanel">
                                    <div class="card-body">
                                        operator increment dan decrement merupakan operator yang digunakan
                                        untuk menambah +1 (tambah satu) dan mengurangi -1 (kurangi dengan statu)
                                        operator increment menggunakan  simbol++, sedangkan decrement mnggunakan simbol --
                                    </div>
                                </div>
                            </div>
                        </div><!-- accordion -->
                    </div>
                </div>
            </div>
        </div>   
    </div>
    <div class="main-content-body main-content-body-profile">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h6 class="card-title mb-1">Logika</h6>
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
                                            // operator logika adalah operator untuk melakukan logika 
                                            // seperti and, or, dan not.

                                            $a = true;
                                            $b = false;

                                            //variabel $c akan bernilai false
                                            $c = $a && $b;
                                            printf("%b && %b = %b", $a,$b,$c);
                                            // fungsi printf akan selalu mengembalikan nilai 1 saat dieksekusi,
                                            // sedagkan echo() tidak mengembalikan apa apa dan fungsi printf hanya boleh diberikan satu parameter
                                            // saja, sedangkan echo boleh lebih dari satu
                                            echo "<hr>";

                                            // variabel $c akan bernilai true
                                            $c = $a || $b;
                                            printf("%b || %b = %b", $a,$b,$c);
                                            echo "<hr>";


                                            $c = !$a;
                                            printf("!%b = %b", $a,$c);
                                            echo "<hr>";

                                            // saya mengunakan fungsi printf() untuk mencetak memformat dan mencetak teks
                                            // namun akan tetap menampilkan 1 untuk true dan 0 untuk false
                                            // perhatikan hasil yang didapatkan ketika menggunakan operator && (AND), || (OR),
                                            // dan ! (NOT)

                                            // operator && akan menghasilkan true apabila nilai kiri dan kanan bernilai true.
                                            // sedangkan operator || akan menghasilkan false saat nilai kiri dan kanan bernilai false.
                                        ?>
                                    </a>
                                </div>
                                <div aria-labelledby="headingOne2" class="collapse show"
                                    data-bs-parent="#accordion2" id="collapseOne2" role="tabpanel">
                                    <div class="card-body">
                                        operator logika adalah operator untuk melakukan logika 
                                        seperti and, or, dan not.
                                    </div>
                                </div>
                            </div>
                        </div><!-- accordion -->
                    </div>
                </div>
            </div>
        </div>   
    </div>
    <div class="main-content-body main-content-body-profile">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h6 class="card-title mb-1">Relasi</h6>
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
                                            // operator relasi adalah operator untuk membandingkan dua buah nilai.
                                            // hasil operasi dari operator relasi akan  menghasilkan nilai dengan tipe data boolean,
                                            // true (benar) dan (false) salah.
                                            $a = 6;
                                            $b = 2;
                                            // menggunakan operator relasi lebih besar
                                            $c = $a > $b;
                                            echo "$a > $b: $c";
                                            echo "<hr>";
                                            // menggunakan operator relasi lebih kecil
                                            $c = $a < $b;
                                            echo "$a < $b: $c";
                                            echo "<hr>";
                                            // menggunakan operator relasi lebih sama dengan
                                            $c = $a == $b;
                                            echo "$a == $b: $c";
                                            echo "<hr>";
                                            // menggunakan operator relasi lebih tidak sama dengan
                                            $c = $a != $b;
                                            echo "$a != $b: $c";
                                            echo "<hr>";
                                            // menggunakan operator relasi lebih besar sama dengan
                                            $c = $a >= $b;
                                            echo "$a >= $b: $c";
                                            echo "<hr>";
                                            // menggunakan operator relasi lebih kecil sama dengan
                                            $c = $a <= $b;
                                            echo "$a <= $b: $c";
                                            echo "<hr>";
                                            // kita akan mendapatkan nilai 1untuk true, sedangkan false tidak ditampilkan atau 0
                                            // ini tidak salah, memang seperti itulah sifat dari fungsi echo di PHP.
                                            // nilai dengan tipe data boolean biasanya tidak untuk ditampilkan. biasanya digunakan
                                            // untuk pembuatan kondisi pada percabangan
                                        ?>
                                    </a>
                                </div>
                                <div aria-labelledby="headingOne2" class="collapse show"
                                    data-bs-parent="#accordion2" id="collapseOne2" role="tabpanel">
                                    <div class="card-body">
                                        operator relasi adalah operator untuk membandingkan dua buah nilai.
                                        hasil operasi dari operator relasi akan  menghasilkan nilai dengan tipe data boolean,
                                        true (benar) dan (false) salah.
                                    </div>
                                </div>
                            </div>
                        </div><!-- accordion -->
                    </div>
                </div>
            </div>
        </div>   
    </div>
    <div class="main-content-body main-content-body-profile">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h6 class="card-title mb-1">Ternary</h6>
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
                                            // operator ternary adalah operator untuk membuat suatu kondisi.
                                            // simbol yang digunakan adalah tanda tanya (?) dan titik 2 (:)
                                            $susah = true;

                                            // menggunakan operator ternary
                                            $jawab = $susah ? "iya": "tidak";

                                            // menampilkan jawaban
                                            echo $jawab;

                                            // bisa juga kalau nilai variable $susah nya diganti jadi false.
                                            // maka outputnya bakal berubah jada tidak
                                        ?>
                                    </a>
                                </div>
                                <div aria-labelledby="headingOne2" class="collapse show"
                                    data-bs-parent="#accordion2" id="collapseOne2" role="tabpanel">
                                    <div class="card-body">
                                        operator ternary adalah operator untuk membuat suatu kondisi.
                                        simbol yang digunakan adalah tanda tanya (?) dan titik 2 (:)
                                    </div>
                                </div>
                            </div>
                        </div><!-- accordion -->
                    </div>
                </div>
            </div>
        </div>   
    </div>
</body>
</html>