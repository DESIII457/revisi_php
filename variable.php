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
            <nav class="nav main-nav flex-column flex-md-row justify-content-center">
                <a class="nav-link active"   href="new.php">Home</a>
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
<div>
    <div >
        <div >
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h6 class="card-title mb-1">Variable 01</h6>
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
                                            $txt = "Naoya Zenin from Jujutsu Kaisen";
                                            echo "I love $txt!";
                                        ?>
                                    </a>
                                </div>
                                <div aria-labelledby="headingOne2" class="collapse show"
                                    data-bs-parent="#accordion2" id="collapseOne2" role="tabpanel">
                                    <div class="card-body">
                                        Aturan untuk variabel PHP:

                                        Variabel dimulai dengan tanda, diikuti dengan nama variabel$
                                        Nama variabel harus dimulai dengan huruf atau karakter garis bawah
                                        Nama variabel tidak dapat dimulai dengan angka
                                        Nama variabel hanya dapat berisi karakter alfanumerik dan garis bawah (A-z, 0-9, dan _ )
                                        Nama variabel peka huruf besar/kecil (dan merupakan dua variabel yang berbeda)$age$AGE
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
            <div >
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <h6 class="card-title mb-1">Variable 02</h6>
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
                                                $x = 5;
                                                $y = 4;
                                                echo $x + $y;
                                            ?>
                                        </a>
                                    </div>
                                    <div aria-labelledby="headingOne2" class="collapse show"
                                        data-bs-parent="#accordion2" id="collapseOne2" role="tabpanel">
                                        <div class="card-body">
                                            Aturan untuk variabel PHP:

                                            Variabel dimulai dengan tanda, diikuti dengan nama variabel$
                                            Nama variabel harus dimulai dengan huruf atau karakter garis bawah
                                            Nama variabel tidak dapat dimulai dengan angka
                                            Nama variabel hanya dapat berisi karakter alfanumerik dan garis bawah (A-z, 0-9, dan _ )
                                            Nama variabel peka huruf besar/kecil (dan merupakan dua variabel yang berbeda)$age$AGE
                                        </div>
                                    </div>
                                </div>
                            </div><!-- accordion -->
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    </div>
</body>
</html>