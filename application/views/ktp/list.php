<font color="orange">
<?php echo $this->session->flashdata('hasil'); ?>
</font>
<table border="1">
    <tr>
    <th>NIK</th>
    <th>NAMA</th>
    <th>JK</th>
    <th>Tempat Lahir</th>
    <th>Tanggal Lahir</th>
    <th>Agama</th>
    <th>Kenegaraan</th>
    <th>Pekerjaan</th>
    <th>Pendidikan</th>
 
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
