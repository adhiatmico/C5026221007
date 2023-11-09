<html>
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
function validateForm() {
 // let x = document.forms["myForm"]["fname"].value;
 var x =document.getElementById("fname");
 var nrp =document.getElementById("nrp");
 if (x.value == "") { // isian kosong, berarti text box tidak diisi/kosong
    alert("Nama harus diisi..");
    x.focus;
    return false;
  }
  if (nrp.value == "") { // isian kosong, berarti text box tidak diisi/kosong
    alert("NRP harus diisi..");
    nrp.focus;
    return false;
  }
  if (isNaN(nrp.value) == true ){
  alert("NRP harus angka..");
    nrp.focus;
    nrp.value = "" ;
    return false; }
   //boleh diberi boleh tidak

   if (nrp.value.length != 10 ){
  alert("Jumlah digit harus 10, Anda memasukkan " + nrp.value.length + "digit!");
    nrp.focus;
    nrp.value = "" ;
    return false; }

    if (nrp.value.substring(0,4) !=5026 ){
  alert("Harus mahasiswa SI");
    nrp.focus;
    nrp.value = "" ;
    return false; }

    if (nrp.value.substring(4,6) != 21 && nrp.value.substring(4,6) != 22 ){
  alert("Harus mahasiswa SI 21 atau 22");
    nrp.focus;
    nrp.value = "" ;
    return false; }
    else return true;




}











</script>
</head>
<body>
<h2>Pendaftaran Asisten Lab Sistem Informasi</h2>

<form name="myForm" action="https://www.google.com" onsubmit="return validateForm()" method="post">
  <label for="fname">Name:</label>
  <input type="text" class="form-control" name="fname" id="fname">
  <label for="nrp">NRP:</label>
  <input type="text" class="form-control" name="fname" id="nrp">
  <input type="submit" value="Submit" class="btn btn-primary">
  <input type="submit" value="Kosong!" class="btn btn-warning">
</form>

</body>
</html>
