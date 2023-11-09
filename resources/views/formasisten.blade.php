<!DOCTYPE html>
<html>

<head>
    <title>Bootstrap 4 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function validateForm() {
            let x = document.getElementById("fname");
            if (x.value == "") {//isian kosong, berarti text box tidak di isi
                alert("Name must be filled out");
                x.focus();
                return false;
            }

            let nrp = document.getElementById("nrp");
            if (nrp.value == "") {//isian kosong, berarti text box tidak di isi
                alert("NRP must be filled out");
                nrp.focus();
                return false;
            }

            if(isNaN(nrp.value) == true) {
              alert("NRP must be numbers");
              nrp.focus();
              nrp.value="";
              return false;
            }

            if(nrp.value.length != 10) {
              alert("NRP harus berisi 10 digit angka, anda memasukkan " + nrp.value.length + " digit angka!" );
              nrp.focus();
              return false;
            }

            if(nrp.value.substring(0,4) != 5026){
              alert("4 Digit pertama harus 5026, hanya untuk Mahasiswa Sistem Informasi");
              nrp.focus();
              return false;
            }

            if(nrp.value.substring(4,6) != 22 && nrp.value.substring(4,6) != 21){
              alert("Hanya untuk angkatan 2021 dan 2022!");
              nrp.focus();
              return false;
            }
            return true;//default function adalah true
        }
    </script>
</head>

<body>
    <h2>Pendaftaran Asisten Lab. Sistem Enterprise</h2>
    <form name="myForm" action="https://google.com" onsubmit="return validateForm()" method="post">
      <label for="fname"> Name</label>
      <input type="text" id="fname" name="fname" class="form-control">
      <label for="nrp">NRP</label>
      <input type = "text" id="nrp" name="nrp" class="form-control">
      <input type="submit" value="submit" class="btn btn-primary">
      <input type="reset" value="kosong" class="btn btn-warning">
    </form>
</body>
</html>
