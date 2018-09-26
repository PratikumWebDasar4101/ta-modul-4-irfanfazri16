<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title></title>
</head>
<body>
	<form action="proses.php" method="post">
		<table>
			<tr><td><h1>Minimarket</h1></td></tr>
		<tr><td>Barang<td>:
		
		<td><input type="checkbox" name="menu[]" value="ciki">ciki
		<input type="checkbox" name="menu[]" value="wafer">wafer
		<input type="checkbox" name="menu[]" value="coklat">coklat
</td>
</td>
</tr>

	<tr><td>pengiriman<td>:

		<td><input type="radio" name="pengirim" value="jne">JNE
		<input type="radio" name="pengirim" value="tiki">TIKI
		<input type="radio" name="pengirim" value="j&t">J&T
	</td>
</td>
</td>
</tr>



            <tr><td>alamat<td>:
              <td><input type="text" name="alamat">
</td>
</td>
</td>
</tr>
              <tr>
              <input type="hidden" name="tanggal" value="<?php echo date("Y/m/d"); ?>">
              <td><input type="submit" value="beli">

              </td>
          </tr>
      </table>
	</form>

</body>
</html>