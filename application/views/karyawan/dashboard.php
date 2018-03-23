<html>
  <head>
    <title>Login MultiLevel || KiosCoding.com</title>
  </head>
  <body>
      <center>
        <h1>Membuat Login MultiLevel Menggunakan Session Codeigniter || KiosCoding.com</h1><br />
        <h2>SELAMAT DATANG ANDA TELAH BERHASIL LOGIN SEBAGAI KARYAWAN</h2>
        <h3> Username Anda Adalah <?php echo $this->session->userdata('username'); ?></h3><br /><br />





        <table border="1" width="80%" align="center">
    <tr>
          <th> No </th>
      <th> ID User </th>
      <th> ID Gaji </th>
      <th> username </th>
      <th> password </th>
      <th> nama </th>
      <th> jabatan </th>
      <th> nik </th>
      <th> departemen </th>
      <th> level </th>
      <th> status </th>
      <th> Gaji Pokok </th>
      <th> Tunjangan Jabatan </th>
      <th> Tunjangan Pulsa </th>
      <th> BPJS Kesehatan </th>
      <th> BPJS Ketenagakerjaan</th>
      <th> Kelebihan telefon</th>
      <th> Prorata Pinjaman</th>
      <th> Pot Ganti Rugi </th>
      <th> Tunjangan yang diterima</th>
      <th> Potongan lain </th>
      <th> Potongan tetap</th>
      <th> Total Gaji</th>
      <th> Total Potongan</th>
      <th> Gaji diterima</th>
    </tr>
    <?php
      $no = 1;
      foreach($crud as $g){

          $tot_tunjangan = $g->tunj_jabatan + $g->tunj_pulsa + $g->bpjs_kes+$g->bpjs_kerja;
          $tot_potongan_tetap = $g->tunj_pulsa + $g->bpjs_kes+$g->bpjs_kerja;
      $tot_gaji = $tot_tunjangan + $g->gaji_pokok;
      $tot_diterima = $g->gaji_pokok+$g->tunj_jabatan-$g->pinjaman-$g->ganti_rugi;
      $tot_potongan_lain = $g->pinjaman + $g->ganti_rugi + $g->kelebihan_telf;
      $tot_potongan = $tot_tunjangan + $tot_potongan_lain;
    ?>
    <tr>
     <td><?php echo $no++ ?></td>
      <td> <?php echo $g->id_user?> </td>
     <td> <?php echo $g->id_gaji?> </td>
      <td> <?php echo $g->username?> </td>
      <td> <?php echo $g->password?> </td>
      <td> <?php echo $g->nama?> </td>
      <td> <?php echo $g->jabatan?> </td>
      <td> <?php echo $g->nik?> </td>
      <td> <?php echo $g->departemen?> </td>
      <td> <?php echo $g->level?> </td>
       <td>
        <?php if($g->active === '1'){
        echo 'Aktif';
      }else if($g->active === '0'){
        echo 'Nonaktif';
      }else{
        echo 'Error! gagal mengambil status akun';
      } ?>
      </td>
      <td> <?php echo $g->gaji_pokok?> </td>
      <td> <?php echo $g->tunj_jabatan?> </td>
      <td> <?php echo $g->tunj_pulsa?> </td>
      <td> <?php echo $g->bpjs_kes?> </td>
      <td> <?php echo $g->bpjs_kerja?> </td>
      <td> <?php echo $g->kelebihan_telf?> </td>
      <td> <?php echo $g->pinjaman?> </td>
      <td> <?php echo $g->ganti_rugi?> </td>
      <td> <?php echo $tot_tunjangan?> </td>
      <td> <?php echo $tot_potongan_lain?> </td>
      <td> <?php echo $tot_potongan_tetap?> </td>
      <td> <?php echo $tot_gaji?> </td>
      <td> <?php echo $tot_potongan?> </td>
      <td> <?php echo $tot_diterima?> </td>
    </tr>
    <?php } ?>
  </table>

  
        <a href="<?php echo site_url('authentication/auth/logout'); ?>">Keluar</a>
      </center>
    </form>
  </body>
</html>