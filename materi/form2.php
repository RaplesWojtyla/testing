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
        <td>Nama</td><td>:</td><td><input type="text" name="nama"></td>
      </tr>
      <tr>
        <td>
          <br>
        </td>
      </tr>
      <tr>
        <td></td><td></td>
        <td><input type="submit" name="submit" value="Cek Nama"></td>
    </table>
  </form>

  <?php
  if (isset($_POST['submit']))
  {
    echo("<br><br>Halo $_POST[nama], apa kabar?");      
  }
  ?>
</body>
</html>