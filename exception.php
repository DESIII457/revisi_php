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
<div class="p-3 bg-dark mb-3">
  <nav class="nav main-nav flex-column flex-md-row justify-content-center">
      <a class="nav-link active"   href="new.php">Home</a>
      <a class="nav-link"   href="operator2.php">Operator</a>
      <a class="nav-link"   href="variable.php">Variabel</a>
      <a class="nav-link"   href="form.php">Form</a>
      <a class="nav-link"   href="session.php">Session</a>
      <a class="nav-link"   href="direktori.php">Direktori</a>
      <a class="nav-link"   href="perulangan.php">Perulangan</a>
      <a class="nav-link"   href="exception.php">Exception</a>
      <a class="nav-link"   href="string.php">String</a>
      <a class="nav-link"   href="function.php">Function</a>
      <a class="nav-link"   href="index.php">Upload</a>
  </nav>
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
                        <h5>INFORMATION</h5>
                        <div class="main-profile-bio">
                            Exceptions atau pengecualian adalah objek yang menjelaskan kesalahan atau perilaku tak terduga dari skrip PHP. 
                            Exceptions diberikan oleh banyak fungsi dan kelas PHP. Fungsi dan kelas yang ditentukan pengguna juga dapat menampilkan exceptions.
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
                                    <span>Github</span> <a href="https://github.com/DESIII457">github</a>
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
                            <h6 class="card-title mb-1">EXCEPTION</h6>
                            <p class="text-muted card-sub-title">Ketika eksepsi dilemparkan, kode berikut tidak akan dieksekusi, dan 
                                        PHP akan mencoba untuk menemukan pencocokan "catch" blok.
                                        Jika eksepsi tidak tertangkap, kesalahan fatal akan diterbitkan dengan "Uncaught Exception" pesan.</p>
                        </div>
                        <div aria-multiselectable="true" class="accordion accordion-dark" id="accordion2"
                            role="tablist">
                            <div class="card">
                                <div class="card-header" id="headingOne2" role="tab">
                                    <a aria-controls="collapseOne2" aria-expanded="false"
                                        data-bs-toggle="collapse" href="#collapseOne2">
                                        <?php
  
                                          //create function with an exception
                                          // function checkNum($number) {
                                          //     if($number>1) {
                                          //       throw new Exception("Value must be 1 or below");
                                          //     }
                                          //     return true;
                                          //   }
                                            
                                          //   //trigger exception
                                          //   checkNum(2);

                                          // kode di atas akan mendapatkan error

                                          //create function with an exception
                                          // function checkNum($number) {
                                          //   if($number>1) {
                                          //     throw new Exception("Value must be 1 or below");
                                          //   }
                                          //   return true;
                                          // }

                                          // //trigger exception in a "try" block
                                          // try {
                                          //   checkNum(2);
                                          //   //If the exception is thrown, this text will not be shown
                                          //   echo 'If you see this, the number is 1 or below';
                                          // }

                                          // //catch exception
                                          // catch(Exception $e) {
                                          //   echo 'Message: ' .$e->getMessage();
                                          // }

                                          // Coba, melempar dan menangkap

                                          // kode pengecualian yang tepat harus mencakup:

                                          // Cobalah - Sebuah fungsi menggunakan pengecualian harus berada dalam "try" blok. Jika pengecualian tidak memicu, kode akan berlanjut seperti biasa. Namun jika pengecualian memicu, eksepsi "thrown"
                                          // Membuang - Ini adalah bagaimana Anda memicu pengecualian. Setiap "throw" harus memiliki setidaknya satu "catch"
                                          // Menangkap - Sebuah "catch" blok mengambil pengecualian dan menciptakan sebuah objek yang berisi informasi pengecualian

                                          //create function with an exception
                                          // function checkNum($number) {
                                          //     if($number>1) {
                                          //       throw new Exception("Value must be 1 or below");
                                          //     }
                                          //     return true;
                                          //   }
                                          
                                          //   //trigger exception in a "try" block
                                          //   try {
                                          //     checkNum(2);
                                          //     //If the exception is thrown, this text will not be shown
                                          //     echo 'If you see this, the number is 1 or below';
                                          //   }
                                            
                                          //   //catch exception
                                          //   catch(Exception $e) {
                                          //     echo 'Message: ' .$e->getMessage();
                                          //   }

                                          // Membuat Kelas Exception Kustom

                                          // Untuk membuat pengecualian kustom handler Anda harus membuat kelas khusus dengan fungsi yang dapat dipanggil ketika pengecualian terjadi di PHP. kelas harus menjadi perpanjangan dari kelas pengecualian.
                                          // Kelas pengecualian kustom mewarisi sifat dari kelas pengecualian PHP dan Anda dapat menambahkan fungsi kustom untuk itu.

                                          // class customException extends Exception {
                                          //     public function errorMessage() {
                                          //       //error message
                                          //       $errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile()
                                          //       .': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
                                          //       return $errorMsg;
                                          //     }
                                          //   }
                                          
                                          //   $email = "2223593.desi@smkn-2sbg.sch.id ";
                                            
                                          //   try {
                                          //     //check if
                                          //     if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
                                          //       //throw exception if email is not valid
                                          //       throw new customException($email);
                                          //     }
                                          //   }
                                            
                                          //   catch (customException $e) {
                                          //     //display custom message
                                          //     echo $e->errorMessage();
                                          //   }

                                          // Set Top Level Exception Handler

                                          function myException($exception) {
                                              echo "<b>Exception:</b> " . $exception->getMessage();
                                            }
                                            
                                            set_exception_handler('myException');
                                            
                                          throw new Exception('Uncaught Exception occurred');
                                        ?>
                                        <!-- Ketika eksepsi dilemparkan, kode berikut tidak akan dieksekusi, dan 
                                        PHP akan mencoba untuk menemukan pencocokan "catch" blok.
                                        Jika eksepsi tidak tertangkap, kesalahan fatal akan diterbitkan dengan "Uncaught Exception" pesan. -->
                                    </a>
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