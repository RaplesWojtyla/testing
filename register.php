<?php
	require_once('./includes/koneksi.php');

	if ($_SERVER["REQUEST_METHOD"] === "POST")
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$name = $_POST['name'];
		$email = $_POST['email'];

		$sql = "INSERT INTO akun(username, password, nama, email) VALUES ('$username', '$password', '$name', '$email')";
		$cekUsername = mysqli_query($koneksi, "SELECT * FROM akun WHERE username='$username'");
		$cekEmail = mysqli_query($koneksi, "SELECT * FROM akun WHERE email='$email'");
		
		if (mysqli_num_rows($cekUsername) > 0)
		{
			echo"
                <script>
                    alert('Username anda telah terdaftar!')
					document.location.href = './register.html'
					</script>
			";
		}
		else if (mysqli_num_rows($cekEmail) > 0)
		{
			echo"
				<script>
				alert('Email anda telah terdaftar!');
				document.location.href = './register.html'
                </script>
            ";
		}
		else  
		{
			mysqli_query($koneksi, $sql);
			echo"
				<script>
				alert('Pendaftaran akun berhasil!');
				document.location.href = './login.html'
                </script>
            ";
		}
	}

?>