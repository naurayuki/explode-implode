<?php 
	//implode 1
	$tgl = array("Hari"=>"Jumat",
				"Tanggal"=>"22",
				"Bulan"=>"Maret",
				"Tahun"=>"2019");
	print_r($tgl);
	$data_tgl = implode(" ", $tgl);
	echo '<pre>';
	print_r($data_tgl);
	echo'</pre>';
	echo "<br>"."<br>";

	//implode 2
	$jam = array("Jam"=>"08",
				 "Menit"=>"35",
				 "Detik"=>"40");
	print_r($jam);
	$data_jam = implode(":", $jam);
	echo '<pre>';
	print_r($data_jam);
	echo'</pre>';
	
	echo "<br>"."<br>";

	//mplode 2
	$alamat = array("Toko"=>"CV Newton Edukasi",
					"Daerah"=>"Jl.Bakung",
					"Kecamatan"=>"Bangunharjo",
					"Kelurahan"=>"Sewon",
					"Kota"=>"Bantul");
	print_r($alamat);
	$data_alamat = implode(", ", $alamat);
	echo'<pre>';
	print_r($data_alamat);
	echo'</pre>';
	echo "<br>"."<br>";

	// implode 3
	$produk = array("produk 1"=>"Buku,",
					"produk 2"=>"Jasa training,",
					"produk 3"=>"Cetak buku");
	print_r($produk);
	$data_produk = implode(" -> ", $produk);
	echo '<pre>';
	print_r($produk);
	echo'</pre>';
	echo "<br>"."<br>";
	
	//implode 3
	$buku = array("Buku ke-1"=>"Novel",
				"Buku ke-2"=>"Komik",
				"Buku ke-3"=>"Pendidikan");
	print_r($buku);
	$data_buku = implode(" , ", $buku);
	echo '<pre>';
	print_r($data_buku);
	echo'</pre>';
	echo "<br>"."<br>";
	
	?>