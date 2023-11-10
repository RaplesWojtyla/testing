<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FORM PHP</title>
</head>
<body>
  <form method="POST">
    <table>
      <tr>
        <td>Nama</td><td>:</td><td><input type="text" name="nama" id="nama"></td>
        <td><input type="submit" name="submit" value="Cek Nama"></td>
      </tr>
    </table>
  </form>

  <?php
  
  $nama = strtolower($_POST['nama']);
  $titleNama = UCwords($nama);

  if (isset($_POST['submit']))
  {
    if ($nama == "")
    {
      echo("<br><span style='color: red'>Nama belum diisi.");      
    } 
    elseif ($nama == "budi")
    {
      echo("<br>Selamat $titleNama, kamu lulus ujian.");
    }
    else {
      echo("<br>$titleNama, kamu tidak lulus ujian.");
    }
  }
  
  ?>
</body>
</html>