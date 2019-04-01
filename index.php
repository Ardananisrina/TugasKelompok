<?php


echo"<form action='cek_login.php' method='post'>";
    echo"<table>";
    echo"<tr>";
    echo"<th>";
echo"<h1>Login Administrasi</h1></th>";
echo"</tr>";

echo"<tr>";
    echo"<td>Username</td>";
echo"<td>:</td>";
    echo"<td><input type='text' name='nm_user' /></td>";
    echo"</tr>";

echo"<tr>";
echo"<td>Password</td>";
echo"<td>:</td>";
echo"<td>";
echo"<input type='password' name='password' /></td>";
echo"</tr>";

echo"<tr>";
echo"<th colspan='3'>";
echo"<input type='submit' name='submit' value='LOGIN' />";
echo"</th>";
echo"</tr>";

echo"</table>";
echo"</form>";
echo"</div>";
?>
