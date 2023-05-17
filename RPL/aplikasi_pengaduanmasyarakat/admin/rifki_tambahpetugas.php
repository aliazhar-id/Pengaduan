<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Halaman Admin</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

<div class="card-body">
  <div class="card_header">
    <h3>Tambah Petugas</h3>
  </div>
  <div class="card-body">
    <form action="rifki_simpanpetugas.php" name="form_tambahpetugas" method="post" class="form-horizontal" onsubmit="return validateForm()">
      <div class="form-group cols-sm-6">
        <label>Nama Petugas</label><br>
        <input type="text" name="rifki_nama_petugas" value="" class="form-control">
      </div>

      <div class="form-group cols-sm-6">
        <label>Username</label><br>
        <input type="text" name="rifki_username" value="" class="form-control">
      </div>

      <div class="form-group cols-sm-6">
        <label>Password</label><br>
        <input type="text" name="rifki_password" value="" class="form-control">
      </div>

      <div class="form-group cols-sm-6">
        <label>Telp</label><br>
        <input type="text" name="rifki_telp" value="" class="form-control" placeholder="Masukkan No Telp (Minimal 13 Angka)" onkeypress="return event.charCode >= 48 && event.charCode <=57" minlength="13" maxlength="13" required/>
      </div>

      <div class="form-group cols-sm-6">
        <label>Level</label><br>
        <select class="form-control" name="rifki_level">
          <option>===Pilih===</option>
          <option value="admin" name="admin">Admin</option>
          <option value="petugas" name="petugas">Petugas</option>
        </select>
      </div>
      
      <div class="form-group cols-sm-6">
        <input type="submit" value="simpan" name="rifki_simpan" class="btn btn-primary">
        <input type="reset" value="kosongkan" class="btn btn-warning">
      </div>
    </form>


     <script>
        function validateForm() {
            if (document.forms["form_tambahpetugas"]["rifki_nama_petugas"].value == "") {
                alert("Nama Petugas Tidak Boleh Kosong");
                document.forms["form_tambahpetugas"]["rifki_nama_petugas"].focus();
                return false;
            }   

            if (document.forms["form_tambahpetugas"]["rifki_username"].value == "") {
                alert("Username Tidak Boleh Kosong");
                document.forms["form_tambahpetugas"]["rifki_username"].focus();
                return false;
            } 

            if (document.forms["form_tambahpetugas"]["rifki_password"].value == "") {
                alert("Password Tidak Boleh Kosong");
                document.forms["form_tambahpetugas"]["rifki_password"].focus();
                return false;
            }

            if (document.forms["form_tambahpetugas"]["rifki_telp"].value == "") {
                alert("No Telepon Tidak Boleh Kosong");
                document.forms["form_tambahpetugas"]["rifki_telp"].focus();
                return false;
            }

            if (document.forms["form_tambahpetugas"]["rifki_level"].value == "") {
                alert("Level Petugas Tidak Boleh Kosong");
                document.forms["form_tambahpetugas"]["rifki_level"].focus();
                return false;
            }
           
        }
    </script>



<!-- Bootstrap core JavaScript-->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../js/sb-admin-2.min.js"></script>

</body>

</html>

