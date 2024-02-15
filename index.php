<!DOCTYPE html>
<html>
<head>
    <title>Upload File</title> 
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style2.css">
	<link rel="stylesheet" href="icons.css">
</head>

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
                                <form action="upload.php" method="post" enctype="multipart/form-data">
                                    Pilih file: <input type="file" name="berkas" />
                                    <input type="submit" name="upload" value="upload" />
                                </form> 
                            </a>
                        </div>
                        <div aria-labelledby="headingOne2" class="collapse show"
                            data-bs-parent="#accordion2" id="collapseOne2" role="tabpanel">
                            <div class="card-body">
                                Beberapa aturan yang harus diikuti untuk formulir HTML di atas:

                                Pastikan formulir menggunakan method="post"
                                Formulir juga membutuhkan atribut berikut: enctype="multipart/form-data". Ini menentukan jenis konten mana yang akan digunakan saat mengirimkan formulir
                                Tanpa persyaratan di atas, unggahan file tidak akan berfungsi.

                                Hal lain yang perlu diperhatikan:

                                Atribut type="file" dari tag input menunjukkan bidang input sebagai kontrol pemilihan file, dengan tombol "Browse" di sebelah kontrol input
                                Formulir di atas mengirimkan data ke file bernama "upload.php", yang akan kita buat selanjutnya.
                            </div>
                        </div>
                    </div>
                </div><!-- accordion -->
            </div>
</body> 
</html>
<!-- Fokus pada elemen <form>. Perhatikan di sana ada beberapa hal yang harus dipahami:

atribut action="upload.php" artinya kita akan mengirim filenya ke upload.php;
atribut enctype atribut ini wajib disertakan untuk form upload;
atribut name akan menjadi nama indeks di dalam PHP. -->