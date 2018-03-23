<html>
  <head>
    <title>Login MultiLevel</title>
  </head>
  <body>
      <center>
        <h3> Username Anda Adalah <?php echo $this->session->userdata('username'); ?></h3><br /><br />
        <h3> ID Anda Adalah <?php echo $this->session->userdata('id_user'); ?></h3><br /><br />
        <h3> Level Adalah <?php echo $this->session->userdata('level'); ?></h3><br /><br />

        <?php 
        $id_user = $this->session->userdata('id_user');
        $level = $this->session->userdata('level');
        ?>

        <?php if ($level== 'manager'): ?>
        <a href="<?php echo base_url()?>dashboard/index/tambah"> Tambah data</a>
        <a href="<?php echo base_url()?>dashboard/index/list"> List data</a>
        <?php endif; ?>
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
       foreach($crud as $row){ 

         
          $tot_tunjangan = $row->tunj_jabatan + $row->tunj_pulsa + $row->bpjs_kes+$row->bpjs_kerja;
          $tot_potongan_tetap = $row->tunj_pulsa + $row->bpjs_kes+$row->bpjs_kerja;
          $tot_gaji = $tot_tunjangan + $row->gaji_pokok;
          $tot_diterima = $row->gaji_pokok+$row->tunj_jabatan-$row->pinjaman-$row->ganti_rugi;
          $tot_potongan_lain = $row->pinjaman + $row->ganti_rugi + $row->kelebihan_telf;
          $tot_potongan = $tot_tunjangan + $tot_potongan_lain;
          

    ?>
    <tr>
     <td><?php echo $no++ ?></td>
      <td> <?php echo $row->id_user?> </td>
      <td> <?php echo $row->id_gaji?> </td>
      <td> <?php echo $row->username?> </td>
      <td> <?php echo $row->password?> </td>
      <td> <?php echo $row->nama?> </td>
      <td> <?php echo $row->jabatan?> </td>
      <td> <?php echo $row->nik?> </td>
      <td> <?php echo $row->departemen?> </td>
      <td> <?php echo $row->level?> </td>
       <td>
        <?php if($row->active === '1'){
        echo 'Aktif';
      }else if($row->active === '0'){
        echo 'Nonaktif';
      }else{
        echo 'Error! gagal mengambil status akun';
      } ?>
      </td>
      <td> <?php echo $row->gaji_pokok?> </td>
      <td> <?php echo $row->tunj_jabatan?> </td>
      <td> <?php echo $row->tunj_pulsa?> </td>
      <td> <?php echo $row->bpjs_kes?> </td>
      <td> <?php echo $row->bpjs_kerja?> </td>
      <td> <?php echo $row->kelebihan_telf?> </td>
      <td> <?php echo $row->pinjaman?> </td>
      <td> <?php echo $row->ganti_rugi?> </td>
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