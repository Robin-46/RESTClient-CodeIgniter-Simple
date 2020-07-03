<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<nav class="navbar navbar-dark bg-dark text-center"">
  <!-- Navbar content -->
  <h1 class="text-center" style="color: lightgrey;">KELOMPOK 6</h1>
  <h2 style="color: lightgrey;">Ikhsan, Robin, Bayu, Ade</h2>
</nav>



<font color="orange">
<?php echo $this->session->flashdata('hasil'); ?>
</font>

<div class="card ">
  <div class="card-body shadow p-3 mb-5 bg-white rounded">

<table class="table">
  <thead class="thead-dark">
    <tr>
    <th scope="col">NIK</th>
    <th scope="col">NAMA</th>
    <th scope="col">JK</th>
    <th scope="col">Tempat Lahir</th>
    <th scope="col">Tanggal Lahir</th>
    <th scope="col">Agama</th>
    <th scope="col">Kenegaraan</th>
    <th scope="col">Pekerjaan</th>
    <th scope="col">Pendidikan</th>
 
    </tr>
    <?php
    foreach ($dataktp as $ktp){
        echo "<tr>
              <td>$ktp->nik</td>
              <td>$ktp->nama</td>
              <td>$ktp->jk</td>
              <td>$ktp->tmp_lahir</td>
              <td>$ktp->tgl_lahir</td>
              <td>$ktp->agama</td>
              <td>$ktp->negara</td>
              <td>$ktp->pekerjaan</td>
              <td>$ktp->pendidikan</td>
            
              </tr>";
    }
    ?>
</table>

</div>
</div>
