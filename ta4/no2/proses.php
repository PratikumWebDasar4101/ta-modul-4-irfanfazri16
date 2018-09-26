<?php
session_start();

$user=$_SESSION["user"];
$menu =$_POST["menu"];
$pengirim=$_POST["pengirim"];
$alamat=$_POST["alamat"];
$tgl_beli=$_POST["tanggal"];
$harga = 0;
$harga_pengirim=0;

for ($i=0; $i<count($menu) ; $i++) {
    if ($menu[$i]=="ciki") 
    	$harga +=5000;

    elseif ($menu[$i]=="wafer")
    	$harga +=15000;

    elseif ($menu[$i]=="coklat")
    	$harga +=2000;


     	# code.. 
	# code...
}

if($pengirim=="jne")
	$harga_pengirim=20000;
if($pengirim=="tiki")
	$harga_pengirim=19000;
if($pengirim=="j&t")
	$harga_pengirim=18000;

function total($a, $b){
	return $a + $b;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Market</title>
</head>
<body>
	<table>
	<tr><td>Tanggal submit<td>:<td><?php echo $tgl_beli; ?>
    <tr><td>nama<td>:<td><?php echo $user["nama"]; ?>
    <tr><td>Notelp<td>:<td><?php echo $user["notelp"]; ?>

    <tr><td>Barang yang dibeli<td>:<td>

        <?php
        foreach($menu as $menu_m){
        	echo $menu_m."<br>";
        }
        ?>

     <tr><td>Pengiriman<td>:<td>
     	<?php
             echo $pengirim." ".$harga_pengirim;
     	?>

    <tr><td>Total<td>:<td>
    	<?php
    	echo total($harga, $harga_pengirim); 
    	?>

</body>
</html>