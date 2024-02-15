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
    <div class="row">
        <form action="welcome_get.php" method="get">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="main-content-label mg-b-5">
                            Left Label Alignment
                        </div>
                        <p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
                        <div class="pd-30 pd-sm-40 bg-gray-100">
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-4">
                                    <label class="form-label mg-b-0" >Firstname</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    <input class="form-control" placeholder="Enter your firstname" type="text" name="name">
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-4">
                                    <label class="form-label mg-b-0" >Lastname</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    <input class="form-control" placeholder="Enter your lastname" type="text" name="lastname">
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-4">
                                    <label class="form-label mg-b-0">Email</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    <input class="form-control" placeholder="Enter your email" type="text" name="email">
                                </div>
                            </div>
                            <input type="submit" style="background-color: blue;
                                                        border: none;
                                                        border-radius: 10px;
                                                        width: 100px;
                                                        height: 30px;">
                        </div>
                    </div>
                </div>
            </div>
        </form>
        
    </div>
    <!-- /row -->
</body>
</html>