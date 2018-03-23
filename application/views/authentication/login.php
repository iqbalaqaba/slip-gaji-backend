<html>
  <head>
    <title>Login MultiLevel </title>
  </head>
  <body>
    <form method="post" action="<?php echo base_url('authentication/auth/login'); ?>" role="login">
      <?php
      //menampilkan error menggunakan alert javascript
        if(isset($error)){
        echo '<script>
        alert("'.$error.'");
        </script>';
        }
      ?>
      <center>
        <h1>Membuat Login MultiLevel Menggunakan Session Codeigniter</h1></br></br>
        <h3>SILAHKAN LOGIN</h3>
        <input type="text" name="username" placeholder="Masukan Username" size="30" required/></br></br>
        <input type="password" name="password" placeholder="Masukan Password" size="30" required/></br></br>
        <button type="submit" name="submit" value="login">Masuk</button>
      </center>
    </form>
  </body>
</html>