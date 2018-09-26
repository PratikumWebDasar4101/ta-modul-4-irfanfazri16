<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
         


	<form action="data.php" method="post" enctype="multipart/form-data">
		<TABLE>

  Data diri:<br>
  <tr><td>nama<td>:<td><input type="text" name="data diri[]" >
  <tr><td>alamat<td>:<td><input type="text" name="data diri[]" >
  <tr><td>tgl_lahir<td>:<td><input type="date" name="data diri[]" >
  </tr>
  	









    <tr><td> Hobi<td>:
          <td><input type="checkbox" name="hobi[]" value="nonton">nonton<br>
           <td><input type="checkbox" name="hobi[]" value="futsal">futsal<br></td></td></tr>


    <tr><td>Genre film yang disukai<td>:
          <td><input type="checkbox" name="film[]" value="animasi">animasi
          <td><input type="checkbox" name="film[]" value="horror">horror
          <td><input type="checkbox" name="film[]" value="thrille">thrille
          <td><input type="checkbox" name="film[]" value="anime">anime</td></td></tr>
          

    <tr><td>Tempat wisata tarvelling<td>:
         <td><input type="checkbox" name="wisata[]" value="bali">bali
         <td><input type="checkbox" name="wisata[]" value="raja ampat">raja ampat
         <td><input type="checkbox" name="wisata[]" value="pulau derawan">pulau derawan
         <td><input type="checkbox" name="wisata[]" value="bangka belitung">bangka belitung
         <td><input type="checkbox" name="wisata[]" value="labuan bajo">labuan bajo
         </td></td></td></td></td></tr>



		<tr><td><input type="file" name="dokumen" id="dokumen"/>
		<tr><td><input type="submit" name="upload" id="upload" value="upload">

		</table>
	</form>

</body>
</html>