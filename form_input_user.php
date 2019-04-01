<?php

session_start();

include('koneksi_db.php');

if($_SESSION['level'] == 'admin'){

  echo "<form action='admin.php?p=user/input_user' method='post' name='input_user'>";
  echo "<table>";
  echo "<tr>";
      echo "<th colspan='3'>";
  echo "<h1>FORM TAMBAH USER</h1></th>";
      echo "</tr>";

  echo "<tr>";
      echo "<td>ID USER</td>";
  echo "<td>:</td>";
      echo "<td>";
      echo "<input type='text' name='kd_user' />";
      echo "</td>";
  echo "</tr>";

  echo "<tr>";
      echo "<td>Username</td>";
  echo "<td>:</td>";
      echo "<td>";
      echo "<input type='text' name='nm_user' />";
      echo "</td>";
  echo "</tr>";

  echo "<tr>";
      echo "<td>Password</td>";
  echo "<td>:</td>";
      echo "<td>";
      echo "<input type='text' name='password' />";
      echo "</td>";
  echo "</tr>";

  echo "<tr>";
      echo "<td>Level</td>";
  echo "<td>:</td>";
      echo "<td>";
      echo "<input type='text' name='level' />";
      echo "</td>";
  echo "</tr>";

  echo "<tr>";
  echo "<th colspan='3'>";
  echo "<input type='submit' name='input_user' value='Simpan' />";
  echo "&nbsp; &nbsp; &nbsp; &nbsp;";
  echo "<input type='reset' name='batal' value='Batal' onclick='self.history.back()' />";
  echo "</th>";
  echo "</tr>";

  echo "</table>";
  echo "</form>";
}
else {
    echo "<h3>";
  echo "Anda tidak dapat mengakses halaman ini! <br></h3>";
    echo "<a href='index.php'>";
  echo "<h1>SILAHKAN LOGIN KEMBALI</h1></a>";
}
?>
