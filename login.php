<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rahayu Chandra Bethania School</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- Navbar start -->
    <nav class="navbar">
  <a href="index.php" class="navbar-logo">Rahayu Chandra Bethania School</a>
  
  <div class="navbar-nav">
    <a href="index.php">Home</a>

    <div class="dropdown">
      <a href="#">Profil</a>
      <div class="dropdown-content">
        <a href="visi-misi.php">Visi, Misi, dan Tujuan</a>
        <a href="sejarah.php">Sejarah Sekolah</a>
        <a href="struktur.php">Struktur Organisasi</a>
      </div>
    </div>

    <div class="dropdown">
      <a href="#">Kesiswaan</a>
      <div class="dropdown-content">
        <a href="pendaftaran.php">Pendaftaran Peserta Didik Baru</a>
        <a href="ekstrakurikuler.php">Ekstrakurikuler</a>
        <a href="pembayaran.php">Pembayaran Siswa</a>
      </div>
    </div>

    <div class="dropdown">
      <a href="#">Informasi</a>
      <div class="dropdown-content">
        <a href="kalender.php">Kalender Pendidikan</a>
        <a href="pengumuman.php">Pengumuman</a>
      </div>
    </div>

    <div class="dropdown">
      <a href="#">Galeri</a>
      <div class="dropdown-content">
        <a href="galeri-foto.php">Galeri Foto</a>
        <a href="galeri-video.php">Galeri Video</a>
      </div>
    </div>

    <a href="login.php">Login</a>
    <a href="signup.php">Sign Up</a>
  </div>

  <div class="navbar-ekstra">
    <!-- Tambahan kalau mau -->
  </div>
</nav>

<!-- Landing page start -->
<section class="landing" id="home">
      <main class="content">
            <?php
                if (isset($_GET["warning"]))
                {
                    if ($_GET["warning"]!="")
                    {
                        ?>
                            <h3>
                                <?php
                                    echo $_GET["warning"];
                                ?>
                            </h3>
                        <?php
                    }

                }
            ?>
            <h3>Please Enter Your Username and Password!</h3>
            <form method="POST" action="checklogin.php">
                <table>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button style="padding:5px">Login</button>
                        </td>
                    </tr>
                </table>
            </form>
      </main>
    </section>
    <h3>Haven't joined us yet?</h3>
    <a href="signup.php">Join here!</a>
       <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>
  </body>
</html>