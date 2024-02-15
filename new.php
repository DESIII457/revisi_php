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
    <div class="row row-sm" >
        <div class="col-lg-4" >
            <div class="card mg-b-20" >
                <div class="card-body">
                    <div class="ps-0">
                        <div class="main-profile-overview">
                            <div class="main-img-user profile-user">
                                <img alt="" src="img\svg\1670222462757.jpg"><a  href="JavaScript:void(0);"></a>
                            </div>
                            <div class="d-flex justify-content-between mg-b-20">
                                <div>
                                    <h5 class="main-profile-name">Desi Lisnawati</h5>
                                    <p class="main-profile-name-text">11 Rekayasa perangkat lunak</p>
                                </div>
                            </div>
                            <h6>Bio</h6>
                            <div class="main-profile-bio">
                                Hallo ini tugas Php saya yang menggunakan template azira,<a href="">More</a>
                            </div><!-- main-profile-bio -->
                            <div class="main-profile-work-list">
                                <div class="media">
                                    <div class="media-logo bg-success-transparent text-success">
										<img src="img/svg/email.svg" alt="" >
                                    </div>
                                    <div class="media-body">
                                        <h6>Web Designer at <a href="">Desi</a></h6><span>2018 - present</span>
                                        <p>Past Work: Desi Lisnawati</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-logo bg-primary-transparent text-primary">
										<img src="img/svg/facebook.png" alt="" >
                                    </div>
                                    <div class="media-body">
                                        <h6>Studied at <a href="">Smkn 2 Subang</a></h6><span>2007</span>
                                        <p>Software Engginering</p>
                                    </div>
                                </div>
                            </div><!-- main-profile-work-list -->
                            <hr class="mg-y-30">
                            <label class="main-content-label tx-13 mg-b-20">Social</label>
                            <div class="main-profile-social-list">
                                <div class="media">
                                    <div class="media-icon bg-primary-transparent text-primary">
                                        <img src="img\svg\instagram.png" alt="" >
                                    </div>
                                    <div class="media-body">
                                        <span>Github</span> <a href="https://www.instagram.com/kasumi_miwaaa/">instagram.com/spruko</a>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-icon bg-success-transparent text-success">
										<img src="img\svg\twitter.png" alt="" >
                                    </div>
                                    <div class="media-body">
                                        <span>Twitter</span> <a href="">twitter.com</a>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-icon bg-info-transparent text-info">
										<img src="img\svg\tiktok.png" alt="" >
                                    </div>
                                    <div class="media-body">
                                        <span>Tiktok</span> <a href="">linkedin.com</a>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-icon bg-danger-transparent text-danger">
										<img src="img\svg\youtube.png" alt="" >
                                    </div>
                                    <div class="media-body">
                                        <span>My Portfolio</span> <a href="">desi</a>
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
				<div >
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Tipe Data Boolean</h6>
									<p class="text-muted card-sub-title">The default collapse behavior to create an
										accordion.</p>
								</div>
								<div aria-multiselectable="true" class="accordion accordion-dark" id="accordion2"
									role="tablist">
									<div class="card">
										<div class="card-header" id="headingOne2" role="tab">
											<a aria-controls="collapseOne2" aria-expanded="false"
												data-bs-toggle="collapse" href="#collapseOne2">
                                                <!-- Boolean mewakili dua kemungkinan keadaan: TRUE atau FALSE. -->
                                                <?php
                                                    $x = true;
                                                    var_dump($x);
                                                    // Boolean sering digunakan dalam pengujian kondisional.
                                                ?>
                                            </a>
										</div>
										<div aria-labelledby="headingOne2" class="collapse show"
											data-bs-parent="#accordion2" id="collapseOne2" role="tabpanel">
											<div class="card-body">
                                                Boolean mewakili dua kemungkinan keadaan: TRUE atau FALSE
                                                Boolean sering digunakan dalam pengujian kondisional.
											</div>
										</div>
									</div>
								</div><!-- accordion -->
							</div>
						</div>
					</div>
				</div>
                <div >
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Tipe Data Float</h6>
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
                                                    $x = 10.365;
                                                    var_dump($x);
                                                ?>   
                                            </a>
										</div>
										<div aria-labelledby="headingOne2" class="collapse show"
											data-bs-parent="#accordion2" id="collapseOne2" role="tabpanel">
											<div class="card-body">
                                                Float (angka floating point) adalah angka dengan koma desimal atau angka dalam bentuk eksponensial.
                                                Dalam contoh berikut adalah float. Fungsi PHP mengembalikan tipe dan nilai data:$xvar_dump()
											</div>
										</div>
									</div>
								</div><!-- accordion -->
							</div>
						</div>
					</div>
				</div>
                <div>
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Contoh Tipe Data Integer</h6>
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
                                                $x = 5985;
                                                var_dump($x);

                                                ?>
                                            </a>
										</div>
										<div aria-labelledby="headingOne2" class="collapse show"
											data-bs-parent="#accordion2" id="collapseOne2" role="tabpanel">
											<div class="card-body">
                                                PHP Integer
                                                Tipe data bilangan bulat adalah angka non-desimal antara -2.147.483.648 dan 2,147,483,647.

                                                Aturan untuk bilangan bulat:

                                                Bilangan bulat harus memiliki setidaknya satu digit
                                                Bilangan bulat tidak boleh memiliki koma desimal
                                                Bilangan bulat dapat berupa positif atau negatif
                                                Bilangan bulat dapat ditentukan dalam: desimal (basis 10), heksadesimal (basis 16), oktal (basis 8), atau notasi biner (basis 2)
											</div>
										</div>
									</div>
								</div><!-- accordion -->
							</div>
						</div>
					</div>
				</div>
                <div>
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Tipe Data Null</h6>
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
                                                $x = "Hello world!";
                                                $x = null;
                                                var_dump($x);
                                                ?>
                                            </a>
										</div>
										<div aria-labelledby="headingOne2" class="collapse show"
											data-bs-parent="#accordion2" id="collapseOne2" role="tabpanel">
											<div class="card-body">
                                                Null adalah tipe data khusus yang hanya dapat memiliki satu nilai: NULL.
                                                Variabel tipe data NULL adalah variabel yang tidak memiliki nilai yang ditetapkan untuknya.
                                                Ujung: Jika variabel dibuat tanpa nilai, itu adalah secara otomatis menetapkan nilai NULL.
                                                Variabel juga dapat dikosongkan dengan menetapkan nilai ke NULL:
											</div>
										</div>
									</div>
								</div><!-- accordion -->
							</div>
						</div>
					</div>
				</div>
                <div>
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Tipe Data Objek</h6>
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
												class Car {
												public $color;
												public $model;
												public function __construct($color, $model) {
													$this->color = $color;
													$this->model = $model;
												}
												public function message() {
													return "My car is a " . $this->color . " " . $this->model . "!";
												}
												}

												$myCar = new Car("red", "Volvo");
												var_dump($myCar);
												?>
											</a>
										</div>
										<div aria-labelledby="headingOne2" class="collapse show"
											data-bs-parent="#accordion2" id="collapseOne2" role="tabpanel">
											<div class="card-body">
												Kelas dan objek adalah dua aspek utama dari pemrograman berorientasi objek.
												Kelas adalah template untuk objek, dan objek adalah turunan dari kelas.
												Ketika objek individu dibuat, mereka mewarisi semua properti dan perilaku dari kelas, 
												tetapi setiap objek akan memiliki nilai yang berbeda untuk Properti.
												Mari kita asumsikan kita memiliki kelas bernama itu dapat memiliki properti seperti model, warna, dll. 
												Kita dapat mendefinisikan variabel seperti , , dan seterusnya, untuk menahan nilai properti ini.Car$model$color
												Ketika objek individu (Volvo, BMW, Toyota, dll.) dibuat, mereka mewarisi semua properti dan perilaku dari kelas, 
												tetapi setiap objek akan memiliki nilai yang berbeda untuk properti.
												Jika Anda membuat fungsi, PHP akan secara otomatis memanggil ini berfungsi saat Anda membuat objek dari kelas.__construct()
											</div>
										</div>
									</div>
								</div><!-- accordion -->
							</div>
						</div>
					</div>
				</div>
                <div >
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">String</h6>
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
												$x = "Hello world!";
												$y = 'Hello world!';

												var_dump($x);
												echo "<br>"; 


												var_dump($y);
												?> 
											</a>
										</div>
										<div aria-labelledby="headingOne2" class="collapse show"
											data-bs-parent="#accordion2" id="collapseOne2" role="tabpanel">
											<div class="card-body">
												String adalah urutan karakter, seperti "Halo dunia!".
												String dapat berupa teks apa pun di dalam tanda kutip. Anda dapat menggunakan tanda kutip tunggal atau ganda
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
    </div>              
</body>
</html>