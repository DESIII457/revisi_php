<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SESSION</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style2.css">
	<link rel="stylesheet" href="icons.css">
	<link rel="stylesheet" href="bootstrap-icons.css">
    <link rel="stylesheet" href="plugins.css">
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
    <div>
        <div>
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h6 class="card-title mb-1">Session 01</h6>
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
                                            // Start the session
                                            // Sesi adalah cara untuk menyimpan informasi (dalam variabel) untuk digunakan di beberapa halaman.
                                            session_start();
                                        ?>
                                            <!DOCTYPE html>
                                            <html>
                                            <body>

                                            <?php
                                                // Set session variables
                                                $_SESSION["favcolor"] = "green";
                                                $_SESSION["favanimal"] = "cat";
                                                echo "Session variables are set.";
                                            ?>

                                            </body>
                                            </html>
                                    </a>
                                </div>
                                <div aria-labelledby="headingOne2" class="collapse show"
                                    data-bs-parent="#accordion2" id="collapseOne2" role="tabpanel">
                                    <div class="card-body">
                                        Ketika Anda bekerja dengan aplikasi, Anda membukanya, melakukan beberapa perubahan, dan Kemudian Anda menutupnya. Ini seperti Sesi. Komputer tahu siapa Anda. 
                                        Ia tahu kapan Anda memulai aplikasi dan kapan Anda mengakhiri. 
                                        Tapi di internet ada satu masalah: server web tidak tahu siapa Anda atau apa yang Anda lakukan, karena alamat HTTP tidak mempertahankan status.
                                        Variabel sesi memecahkan masalah ini dengan menyimpan informasi pengguna untuk digunakan di beberapa halaman (misalnya nama pengguna, warna favorit, dll). 
                                        Oleh Default, variabel sesi berlangsung hingga pengguna menutup browser.
                                        Jadi; Variabel sesi menyimpan informasi tentang satu pengguna tunggal, dan tersedia untuk semua halaman dalam satu aplikasi.
                                    </div>
                                </div>
                            </div>
                        </div><!-- accordion -->
                        <div>
                            <h6 class="card-title mb-1">Session 02</h6>
                            <p class="text-muted card-sub-title">The default collapse behavior to create an
                                accordion.</p>
                        </div>
                        <div aria-multiselectable="true" class="accordion accordion-dark" id="accordion2"
                            role="tablist">
                            <div class="card">
                                <div class="card-header" id="headingOne2" role="tab">
                                    <a aria-controls="collapseOne2" aria-expanded="false"
                                        data-bs-toggle="collapse" href="#collapseOne2">
                                        <!DOCTYPE html>
                                        <html>
                                        <body>

                                        <?php
                                        // Echo session variables that were set on previous page
                                        echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
                                        echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
                                        ?>

                                        </body>
                                        </html>
                                    </a>
                                </div>
                            </div>
                        </div><!-- accordion -->
                        <div>
                            <h6 class="card-title mb-1">03 Change Variabel Session</h6>
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
                                            // to change a session variable, just overwrite it
                                            $_SESSION["favcolor"] = "yellow";
                                            print_r($_SESSION);
                                        ?>
                                    </a>
                                </div>
                                
                            </div>
                        </div><!-- accordion -->
                        <div>
                            <h6 class="card-title mb-1">04 Destroy Session</h6>
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
                                        // remove all session variables
                                        session_unset();

                                        // destroy the session
                                        session_destroy();
                                        ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>   
    </div>
</html>