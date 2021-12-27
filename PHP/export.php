<?php
  require("connection.php"); // memanggil file koneksi.php untuk koneksi ke database
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../scss/main.css">

    <!-- Web icon -->
    <link rel="icon" href="../img/HB1.png">
    <title>Hyrdo-Mon</title>
  </head>
  <body>
    <?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Hidrogen.csv");
    ?>
      <!-- NAVBAR -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-light custom-nav fixed-top">
        <a class="navbar-brand" href="../index.php">
          <img src="../img/H1.png" alt="logo brand" style="height: 65px; width: 65px">
          <span>Hydro-Mon</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link" href="../index.php">Home</span></a>
            <a class="nav-link" href="#">Data</a>
            <a class="nav-link" href="#">Visualization</a>
          </div>
        </div>
      </nav>
      <!-- END NAVBAR -->
      <!-- Upper content -->
      <div class="container content">
          <div class="row upper-content">
              <div class="col-12">
                  <h2>Selamat Datang di Hydro-Mon..</h2>
                  <h3>Website monitoring pengukuran gas hidrogren secara real time.</h3>
              </div>
          </div>
      </div>
    
     
   
    
      <!-- End Upper Content -->

      <!-- Table Content -->
      <div class="container data-table table-wrapper-scroll-y my-custom-scrollbar">
        <table id="data" class="table table-striped table-bordered table-striped mb-0">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Debit(ml/min)</th>
                <th scope="col">Waktu</th>
              </tr>
            </thead>
            <?php
            $SQL = mysqli_query($connection, "SELECT * FROM  ESP01 ORDER BY id DESC");
           
            if(mysqli_num_rows($SQL) == 0){
              echo '<tr><td colspan="14">Data Tidak Ada.</td></tr>';
            }else {
              $no = 1;
              while($row = mysqli_fetch_assoc($SQL)){
                echo'
                <tbody>
              <tr>
                <th scope="row">'.$no.'</th>
                <td>'.$row['debit'].'</td>
                <td>'.$row['waktu'].'</td>
              </tr>
            </tbody>
                ';
                $no++;
              }
            }
            ?>
          </table>
      </div>
      <!-- End Table Content -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>