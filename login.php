<?php
    require_once("./includes/koneksi.php");

    if ($_SERVER["REQUEST_METHOD"] === "POST")
    {
        $userLogin = $_POST['username'];
        $passLogin = $_POST['password'];

        $sql = "SELECT * FROM akun WHERE username='$userLogin'";
        $query = mysqli_query($koneksi, $sql);
        $data = mysqli_fetch_assoc($query);

        if (!$query)
        {
            die("Query gagal." . mysqli_error($koneksi));
        }

        if (mysqli_num_rows($query) > 0)
        {
            $username = $data['username'];
            $password = $data['password'];
            $nama = $data['nama'];
            $email = $data['email'];

            if ($userLogin == $username and $passLogin == $password)
            {
                $_SESSION['username'] = $username;
                $_SESSION['nama'] = $nama;
                $_SESSION['email'] = $email;
                header("Location: ./admin/index.php");
            }
            else 
            {
                echo "
                    <script>
                        alert('Password Salah')
                        document.location.href = './login.html'
                    </script>
                ";
            }
        }
        else 
        {
            echo "
                    <script>
                        alert('Username tidak ditemukan')
                        document.location.href = './login.html'
                    </script>
                ";
        }
    }

?>