<?php
session_start();
if (!isset($_SESSION['valid'])) {
  header("Location:   login/");
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Website Tri Salendah</title>
  <link rel="stylesheet" href="styles/global.css" />
</head>

<body>
  <header>
    <div class="header container">
      <div>
        <h1>Tri Salendah</h1>
      </div>

      <nav>
        <ul class="ul-navbar">
          <li class="li-navbar">
            <a class="a-navbar" href="#">Home</a>
          </li>

          <li class="li-navbar">
            <a class="a-navbar" href="./About Us/">About</a>
          </li>

          <li class="li-navbar">
            <a class="a-navbar" href="./contact">Contact</a>
          </li>

          <li class="li-navbar">
            <a class="a-navbar" href="./logout/">logout</a>
          </li>

        </ul>
      </nav>

    </div>
  </header>

  <div class="container">
    <h2>Halo ini first time saya buat web</h2>

    <ul>
      <li><strong>Nim saya:</strong> 220211060029</li>
      <li><strong>Nama:</strong> Tri Gianto Salendah</li>
      <li>
        <strong>Hal yang ingin di buat:</strong> Memperbaiki Bagian contact &
        blog
      </li>
    </ul>
  </div>
</body>

</html>