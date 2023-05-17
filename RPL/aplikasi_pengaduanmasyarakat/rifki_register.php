<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pengaduan Masyarakat - register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="" background="img/bluee.jpg">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Registrasi Akun</h1><h2>Aplikasi Pengaduan Masyarakat</h2>
                  </div>
                  <form name="formregister" method="POST" action="rifki_simpanregister.php" class="user" onsubmit="return validateForm()">
                    <div class="form-group">
                      <input type="text" name="rifki_nik" class="form-control form-control-user" placeholder="Masukkan NIK (Minimal 16 Angka)" onkeypress="return event.charCode >= 48 && event.charCode <=57" minlength="16" maxlength="16" required/>
                    </div>
                    <div class="form-group">
                      <input type="text" name="rifki_nama" class="form-control form-control-user" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                    </div>
                     <div class="form-group">
                      <input type="text" name="rifki_username" class="form-control form-control-user" placeholder="Masukkan Username">
                    </div>
                     <div class="form-group">
                      <input type="password" name="rifki_password" class="form-control form-control-user" placeholder="Masukkan Password">
                    </div>
                     <div class="form-group">
                      <input type="text" name="rifki_telp" class="form-control form-control-user" placeholder="Masukkan No Telp (Minimal 13 Angka)" onkeypress="return event.charCode >= 48 && event.charCode <=57" minlength="13" maxlength="13" required/>
                    </div>
                    <input type="submit" name="rifki_submit" class="btn btn-primary btn-user btn-block" value="Daftar!">
                    <hr>
                    
                  </form>
                  <hr>
                  <div class="text-center">
                    Sudah Punya Akun?<br>
                    <a class="small" href="rifki_login.php">Login!</a>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
 <script>
        function validateForm() {
            var maxlength = 13;
            if (document.forms["formregister"]["rifki_nik"].value == "") {
                alert("NIK Minimal 13 Karater!");
                document.forms["formregister"]["rifki_nik"].focus();
                return false;
            }    

            if (document.forms["formregister"]["rifki_nama"].value == "") {
                alert("Nama Tidak Boleh Kosong");
                document.forms["formregister"]["rifki_nama"].focus();
                return false;
            }
            if (document.forms["formregister"]["rifki_username"].value == "") {
                alert("Username Tidak Boleh Kosong");
                document.forms["formregister"]["rifki_username"].focus();
                return false;
            }
            if (document.forms["formregister"]["rifki_password"].selectedIndex < 1) {
                alert("Password Tidak Boleh Kosong");
                document.forms["formregister"]["rifki_password"].focus();
                return false;
            }
            if (document.forms["formregister"]["rifki_telp"].selectedIndex < 1) {
                alert("Nomor Telepon Tidak Boleh Kosong");
                document.forms["formregister"]["rifki_telp"].focus();
                return false;
            }

        }
    </script>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
